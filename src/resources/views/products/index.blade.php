@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">商品一覧</h2>
        <a href="{{ route('products.create') }}" class="btn btn-warning">＋商品を追加</a>
    </div>

    <div class="row">
        <!-- 検索フォーム -->
        <div class="col-md-3">
            <form method="GET" action="{{ route('products.search') }}" class="mb-3">
                <div class="mb-2">
                    <label class="form-label">商品名検索</label>
                    <input type="text" name="keyword" value="{{ request('keyword') }}" class="form-control" placeholder="商品名で検索">
                </div>
                <div class="mb-2">
                    <label class="form-label">季節で絞り込み</label>
                    <select name="season" class="form-select">
                        <option value="">すべて</option>
                        @foreach(App\Models\Season::all() as $season)
                            <option value="{{ $season->id }}" {{ request('season') == $season->id ? 'selected' : '' }}>{{ $season->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">並び替え</label>
                    <select name="sort" class="form-select">
                        <option value="">指定なし</option>
                        <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>価格が安い順</option>
                        <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>価格が高い順</option>
                    </select>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-warning">検索</button>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">リセット</a>
                </div>
            </form>
        </div>

        <!-- 商品カード表示 -->
        <div class="col-md-9">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @forelse ($products as $product)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('storage/products/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">\{{ number_format($product->price) }}</p>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-outline-primary">詳細</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>該当する商品が見つかりませんでした。</p>
                @endforelse
            </div>

            <!-- ページネーション -->
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links('pagination::default') }}
            </div>
        </div>
    </div>
</div>
@endsection
