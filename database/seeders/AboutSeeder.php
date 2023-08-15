<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'image' => 'image.jpg',
            'description' => 'lorem ipsum',
            'slogan1' => 'oke',
            'slogan2' => 'hebat',
            'slogan3' => 'dinamis',
            'slogan4' => 'siap',
        ]);
    }
}
