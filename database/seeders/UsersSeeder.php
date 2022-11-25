<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");

        DB::table("users")->insert([
            [
                "id"=> 1,
                "name" => "Root",
                "email" => "root@plataformasuporte.com",
                "password" => sha1("Pedroka0123"),
                "profile" => "ROOT",
                "created_at" => $now,
                "updated_at" => $now,
            ]
        ]);
    }
}
