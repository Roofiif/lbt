<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Admin Luar Biasa Teknologi',
            'email' => 'lbtluarbiasateknologi@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
