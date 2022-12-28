<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Ruan Cardozo",
	        "email" => "ruan.ananias@hotmail.com",
	        "password" => Hash::make("1234567"),
        ]);

        DB::table('addresses')->insert([
            "address" => "Ceara, 457"
        ]);
    }

}
