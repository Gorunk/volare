<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('1234'),
        ])->assignRole('admin');
        DB::table('users')->insert([
            'name' => 'cliente',
            'email' => 'cliente@mail.com',
            'password' => Hash::make('1234'),
        ])->assignRole('user');
    }
}
