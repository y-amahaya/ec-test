<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    // 商品一覧表示
    public function index()
    {
        $products = Product::with('seasons')->paginate(6);
        return view('products.index', compact('products'));
    }

    // 商品検索処理
    public function search(Request $request)
    {
        $query = Product::query();

        if ($request->filled('keyword')) {
            $query->where('name', 'like', '%' . $request->keyword . '%');
        }

        if ($request->filled('season')) {
            $query->whereHas('seasons', function ($q) use ($request) {
                $q->where('seasons.id', $request->season);
            });
        }

    // 並び替え対応
        if ($request->filled('sort')) {
            if ($request->sort === 'price_asc') {
                $query->orderBy('price', 'asc');
            } elseif ($request->sort === 'price_desc') {
                $query->orderBy('price', 'desc');
            }
        }

        $products = $query->with('seasons')->paginate(6)->appends($request->all());
        return view('products.index', compact('products'));
    }

    // 登録画面表示
    public function create()
    {
        $seasons = Season::all();
        return view('products.create', compact('seasons'));
    }

    // 登録処理
    public function store(StoreProductRequest $request)
    {
        $imagePath = $request->file('image')->store('products', 'public');

        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'image' => basename($imagePath),
            'description' => $request->description,
        ]);

        $product->seasons()->attach($request->seasons);

        return redirect()->route('products.index');
    }

    // 商品詳細（編集画面）
    public function show($id)
    {
        $product = Product::with('seasons')->findOrFail($id);
        $seasons = Season::all();
        return view('products.show', compact('product', 'seasons'));
    }

    // 商品更新
    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete('products/' . $product->image);
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = basename($imagePath);
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        $product->seasons()->sync($request->seasons);

        return redirect()->route('products.index');
    }

    // 削除
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Storage::disk('public')->delete('products/' . $product->image);
        $product->seasons()->detach();
        $product->delete();

        return redirect()->route('products.index');
    }
}