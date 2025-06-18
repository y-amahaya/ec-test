<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        $param = [
            'name' => 'キウイ',
            'price' => 800,
            'image' => 'kiwi.jpg',
            'description' => 'キウイは甘みと酸味のバランスが特徴のフルーツです。ビタミンCなどの栄養も豊富なので、美肌効果や免疫力強化が期待できます。もぎたてフルーツのスムージーをお召し上がりください！',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ストロベリー',
            'price' => 1200,
            'image' => 'strawberry.jpg',
            'description' => '大人から子供まで大人気のストロベリー。当店では鮮度抜群の品揃えを心がけています。ビタミンCはもちろん食物繊維も豊富で、美肌効果や風邪予防にも期待できます。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'オレンジ',
            'price' => 850,
            'image' => 'orange.jpg',
            'description' => 'バランス抜群のネーブルオレンジを使用しています。爽やかな酸味と甘さで、ジュースやそのままでもおいしく召し上がれます。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'スイカ',
            'price' => 700,
            'image' => 'suika.jpg',
            'description' => '甘くてジューシーな果汁が魅力のスイカ。90％以上が水分なので、夏にぴったりな清涼フルーツです。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ピーチ',
            'price' => 1000,
            'image' => 'peach.jpg',
            'description' => '芳醇な香りととろけるような甘さが魅力のピーチ。夏にぴったりの贅沢な味わいです。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'シャインマスカット',
            'price' => 1400,
            'image' => 'shine_muscat.jpg',
            'description' => '爽やかな香りと上品な甘さが特徴のシャインマスカット。皮ごと食べられて種もなし！ギフトにもおすすめ。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'パイナップル',
            'price' => 800,
            'image' => 'pineapple.jpg',
            'description' => '甘酸っぱさとトロピカルな香りが魅力のパイナップル。消化酵素が豊富で、夏バテ予防にもおすすめ。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'ブドウ',
            'price' => 1100,
            'image' => 'grape.jpg',
            'description' => 'ジューシーで甘みたっぷりな旬のブドウ。リラックス効果があるポリフェノールも豊富に含まれています。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'バナナ',
            'price' => 600,
            'image' => 'banana.jpg',
            'description' => '栄養価が高く、腹持ちも良いバナナ。朝食やおやつにぴったりの定番フルーツ。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'メロン',
            'price' => 900,
            'image' => 'melon.jpg',
            'description' => '甘く芳醇な香りが特徴の高級メロン。特別な日にぴったりな贅沢フルーツです。',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($param);
    }
}
