<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('roles')->insert([
            'name' => 'users',
            'description' => 'houseAssistant-role',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'homeOwner',
            'description' => 'homeOwner-role',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'admin-role',
            'created_at' => now(),
            'updated_at' => NOW()
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'roleId' => 2,
            'password' => Hash::make('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Saya Hope',
            'email' => 'sayaHope@gmail.com',
            'email_verified_at' => now(),
            'roleId' => 1,
            'password' => Hash::make('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Esther Gift',
            'email' => 'esther@gmail.com',
            'email_verified_at' => now(),
            'roleId' => 3,
            'password' => Hash::make('password')
        ]);
    }
}
