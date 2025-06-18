@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">商品詳細</h2>

    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">商品名</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror"
                id="name" name="name"
                value="{{ old('name', $product->name) }}"
                placeholder="商品名を入力">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">値段</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror"
                id="price" name="price"
                value="{{ old('price', $product->price) }}"
                placeholder="値段を入力">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">商品画像</label><br>
            <img src="{{ asset('storage/products/' . $product->image) }}" alt="現在の画像" class="mb-2" width="200">
            <input type="file" class="form-control @error('image') is-invalid @enderror"
                id="image" name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">季節</label>
            <div class="form-check">
                @foreach($seasons as $season)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"
                            name="seasons[]"
                            value="{{ $season->id }}"
                            id="season_{{ $season->id }}"
                            {{ (is_array(old('seasons', $product->seasons->pluck('id')->toArray())) && in_array($season->id, old('seasons', $product->seasons->pluck('id')->toArray()))) ? 'checked' : '' }}>
                        <label class="form-check-label me-3" for="season_{{ $season->id }}">{{ $season->name }}</label>
                    </div>
                @endforeach
            </div>
            @error('seasons')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">商品説明</label>
            <textarea class="form-control @error('description') is-invalid @enderror"
                    id="description" name="description" rows="4"
                    placeholder="商品説明を入力">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-center gap-2">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">戻る</a>
            <button type="submit" class="btn btn-warning">更新を保存</button>
        </div>
    </form>
    <form method="POST" action="{{ route('products.destroy', $product->id) }}" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">削除</button>
    </form>
</div>
@endsection
