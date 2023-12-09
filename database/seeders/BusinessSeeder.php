<?php

namespace Database\Seeders;
use Illuminate\Support\facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business')->insert([
            'name'=>'banhang',
            'bank_information'=>'BIDV',
            'phone'=>'0962523612',
            'email'=>'loinguyen@gmail.com',
            'website'=>'loinguyen.vn',
            'fanpage'=>'hochi',
            'description'=>'okimain'
        ]);
        //
    }
}
