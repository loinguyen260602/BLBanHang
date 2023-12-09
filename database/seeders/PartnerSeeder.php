<?php

namespace Database\Seeders;
use Illuminate\Support\facades\DB;// thêm thư viện dùng db
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; // them thư viện
class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker =Faker::create();
        for($i=0;$i<100;$i++)
        DB::table('partner')->insert([
            'name'=>$faker->company,
            'phone'=>$faker->phoneNumber,
            'email'=>$faker->email,
            'website'=>$faker->domainName,
            'desctiption'=>$faker->realText(200)
        ]);
        //
    }
}
