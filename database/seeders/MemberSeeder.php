<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('students')->insert([
            'name'=> Str::random(10),
            'email'=> Str::random(10).'@gmail.com',
            'phone'=> Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
