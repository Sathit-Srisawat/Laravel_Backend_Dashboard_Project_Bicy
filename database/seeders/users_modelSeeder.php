<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class users_modelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_models')->insert([
            'firstname' =>'sathit',
            'lastname' =>'srisawat',
            'phonenumber' =>'0801455967',
            'idnumbercard' => '180xxxxxxx',
        ]);
    }
}
