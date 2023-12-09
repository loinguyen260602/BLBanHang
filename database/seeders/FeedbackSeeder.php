<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table('feedback')->insert([
            'fullname'=>'loi',
            'phone'=>'0965265406',
            'email'=>'loins@gmail.com',
            'title'=>'hang tot',
            'content'=>'hay chat luong',
            'status'=>1
        ]);
        //
    }
}
