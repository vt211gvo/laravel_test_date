<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>Str::random(10),
            'surname'=>Str::random(15),
            'date_of_birth'=>date('Y-m-d'),

            // id, name, surname, date_of_birth
        ]);
    }
}
