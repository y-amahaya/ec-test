<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'price' => 'required|integer|between:1,10000',
            'description' => 'required|string|max:1000',
            'image' => 'required|image|mimes:png,jpeg',
            'seasons' => 'required|array',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => '商品名を入力してください',
            'price.required' => '値段を入力してください',
            'price.integer' => '数値で入力してください',
            'price.between' => '1〜10000円以内で入力してください',
            'description.required' => '商品説明を入力してください',
            'description.max' => '1000文字以内で入力してください',
            'image.required' => '商品画像を登録してください',
            'image.mimes' => '.png または .jpeg 形式でアップロードしてください',
            'seasons.required' => '季節を選択してください',
        ];
    }
}
