<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin AgenX',
            'email' => 'admin@agenx.com',
            'password' => bcrypt('password'),
            'role' => 'staff',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
