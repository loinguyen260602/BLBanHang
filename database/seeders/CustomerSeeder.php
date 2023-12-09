<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'fullname'=>'nguyensiloi',
            'sex'=>0,
            'DOB'=>'2002-08-23',
            'address'=>'hanoi',
            'phone'=>'09347823',
            'email'=>'loi@gmail.com',
            'description'=>'oki shop'
        ]);
        //
    }
}
