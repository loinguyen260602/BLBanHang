<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Carbon\Carbon;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++)
        DB::table('order')->insert([
            'customer_id'=>1,
            'order_date'=>'2022-12-09',
            'delivered_time'=>Carbon::now(),
            'status'=>1,
            'description'=>'okiman'
        ]);
        //
    }
}
