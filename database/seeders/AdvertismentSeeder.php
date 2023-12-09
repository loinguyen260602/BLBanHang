<?php

namespace Database\Seeders;
use Illuminate\Support\facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class AdvertismentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisment')->insert([
            'content'=>'mua ban',
            'started_time'=>Carbon::now(),
            'end_time'=>Carbon::tomorrow(),
            'description'=>'oki'
        ]);
        //
    }
}
