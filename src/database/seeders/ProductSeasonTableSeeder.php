<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductSeasonTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // 商品ID 1: キウイ → 秋(3), 冬(4)
        $param = [
            'product_id' => 1,
            'season_id' => 3,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        $param = [
            'product_id' => 1,
            'season_id' => 4,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        // 商品ID 2: ストロベリー → 春(1)
        $param = [
            'product_id' => 2,
            'season_id' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        // 商品ID 3: オレンジ → 冬(4)
        $param = [
            'product_id' => 3,
            'season_id' => 4,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        // 商品ID 4: スイカ → 夏(2)
        $param = [
            'product_id' => 4,
            'season_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        // 商品ID 5: ピーチ → 夏(2)
        $param = [
            'product_id' => 5,
            'season_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        // 商品ID 6: シャインマスカット → 夏(2), 秋(3)
        $param = [
            'product_id' => 6,
            'season_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        $param = [
            'product_id' => 6,
            'season_id' => 3,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        // 商品ID 7: パイナップル → 春(1), 夏(2)
        $param = [
            'product_id' => 7,
            'season_id' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        $param = [
            'product_id' => 7,
            'season_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        // 商品ID 8: ブドウ → 夏(2), 秋(3)
        $param = [
            'product_id' => 8,
            'season_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        $param = [
            'product_id' => 8,
            'season_id' => 3,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        // 商品ID 9: バナナ → 夏(2)
        $param = [
            'product_id' => 9,
            'season_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        // 商品ID 10: メロン → 春(1), 夏(2)
        $param = [
            'product_id' => 10,
            'season_id' => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);

        $param = [
            'product_id' => 10,
            'season_id' => 2,
            'created_at' => $now,
            'updated_at' => $now,
        ];
        DB::table('product_season')->insert($param);
    }
}
