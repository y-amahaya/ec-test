@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">商品登録</h2>

    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">商品名</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="商品名を入力">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">値段</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" placeholder="値段を入力">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">商品画像</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">季節</label>
            <div class="form-check">
                @foreach($seasons as $season)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="seasons[]" value="{{ $season->id }}" id="season_{{ $season->id }}" {{ is_array(old('seasons')) && in_array($season->id, old('seasons')) ? 'checked' : '' }}>
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
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="商品の説明を入力">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('products.index') }}" class="btn btn-secondary">戻る</a>
            <button type="submit" class="btn btn-warning">登録</button>
        </div>
    </form>
</div>
@endsection
