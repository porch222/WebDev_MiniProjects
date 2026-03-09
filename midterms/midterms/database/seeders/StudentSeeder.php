<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            'name' => 'Ung Porchhung',
            'email' => 'porch@gmail.com',
            'age' => 150,
        ]);
    }
}