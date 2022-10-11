<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'first_name' => 'Shreejesh',
            'last_name' => 'Rupakhetee',
            'status' => true,
            'phone_number' => '76545268',
            'details' => Str::random(10),
        ]);
    }

    
}
