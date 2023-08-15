<?php

namespace Database\Seeders;

use App\Models\Beranda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BerandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Beranda::create([
            'utama_img' => 'image.jpg',
            'desc_ttg' => 'lorem ipsum',
            'sert_logo' => 'logo.png',
            'sert_link' => 'link',
            'sert_desc' => 'loren ipsum',
            'awasi_logo' => 'siap.png',
        ]);
    }
}
