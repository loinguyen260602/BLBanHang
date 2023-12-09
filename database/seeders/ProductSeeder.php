<?php

namespace Database\Seeders;
use Illuminate\Support\facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name'=>'QuatB52',
            'category_id'=>1,
            'style_id'=>1,
            'size'=>'XL',
            'weight'=>2.4,
            'price'=>12.20,
            'old_price'=>14.21,
            'description'=>'hang tot',
            'viewed'=>2,
            'sold'=>4,
            'partner_id'=>1
        ]);
        //
    }
}
