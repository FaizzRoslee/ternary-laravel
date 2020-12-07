<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Admin',
            'full_name' => 'Admin',
            'title' => 'Admin',
            'department' => 'Admin',
            'term' => 'Full Time',
            'email' => 'info@ternarysolution.com',
            'phone' => '0321646288',
            'doj' => '20200407',
            'password' => Hash::make('tssb12#$'),
        ]);

        DB::table('users')->insert([
            'name' => 'Muhammad Faiz',
            'full_name' => 'MUHAMMAD FAIZ BIN MOHAMED NAPI',
            'title' => 'Managing Director',
            'department' => 'Management',
            'term' => 'Full Time',
            'email' => 'info@ternarysolution.com',
            'phone' => '0162036465',
            'doj' => '20200407',
            'password' => Hash::make('tssb12#$'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mohd Nizar',
            'full_name' => 'MOHD NIZAR BIN MOHD NASSER',
            'title' => 'Director',
            'department' => 'Management',
            'term' => 'Full Time',
            'email' => 'info@ternarysolution.com',
            'phone' => '0178889843',
            'doj' => '20200407',
            'password' => Hash::make('tssb12#$'),
        ]);

        DB::table('users')->insert([
            'name' => 'Faizz Roslee',
            'full_name' => 'MUHAMMAD FAIZZ AMIN BIN ROSLEE',
            'title' => 'Technical Lead Manager',
            'department' => 'Technical',
            'term' => 'Full Time',
            'email' => 'info@ternarysolution.com',
            'phone' => '0129335477',
            'doj' => '20200407',
            'password' => Hash::make('tssb12#$'),
        ]);

        DB::table('users')->insert([
            'name' => 'Muhammad Naim',
            'full_name' => 'MUHAMMAD NAIM BIN MOHD NASSER',
            'title' => 'Administration Executive',
            'department' => 'Administration',
            'term' => 'Full Time',
            'email' => 'info@ternarysolution.com',
            'phone' => '0178889843',
            'doj' => '20200601',
            'password' => Hash::make('tssb12#$'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dato Nasser',
            'full_name' => 'DATO MOHD NASSER BIN MURAD',
            'title' => 'Director',
            'department' => 'Management',
            'term' => 'Full Time',
            'email' => 'info@ternarysolution.com',
            'phone' => '0178889843',
            'doj' => '20200407',
            'password' => Hash::make('tssb12#$'),
        ]);
    }
}
