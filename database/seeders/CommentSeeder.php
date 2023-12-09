<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            'customer_id'=>1,
            'product_id'=>2,
            'rating'=>2,
            'comment'=>'hello',
            'commented_date'=>'2022-12-23'

        ]);
        //
    }
}
