<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SeasonsTableSeeder extends Seeder
{
    public function run(): void
    {
        $param = [
            'name' => '春',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('seasons')->insert($param);

        $param = [
            'name' => '夏',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('seasons')->insert($param);

        $param = [
            'name' => '秋',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('seasons')->insert($param);

        $param = [
            'name' => '冬',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('seasons')->insert($param);
    }
}
