<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MenuModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => 'Merchant',
            'email' => 'merchant@example.com',
            'password' => Hash::make('123456789'),
            'role' => 'merchant'
        ]);
        DB::table('merchants')->insert([
            'nama_merchant' => 'Katering Barokah',
            'user_id' => 1,
            'alamat' => 'Pabuaran Subang',
            'kontak' => '+62 256-6589-6958',
            'deskripsi' => 'merchant paling enak'
        ]);
        DB::table('menus')->insert([
            'merchant_id' => 1,
            'nama' => 'Ayam Goreng',
            'deskripsi' => 'Ayam - Nasi',
            'harga' => 15000,
        ]);

        DB::table('menus')->insert([
            'merchant_id' => 1,
            'nama' => 'Ayam Nakar',
            'deskripsi' => 'Ayam - Nasi - Sambal',
            'harga' => 15000,
        ]);
        DB::table('menus')->insert([
            'merchant_id' => 1,
            'nama' => 'Ayam Nakar Plus',
            'deskripsi' => 'Ayam - Nasi - Sambal - Lalaban',
            'harga' => 15000,
        ]);
    }
}
