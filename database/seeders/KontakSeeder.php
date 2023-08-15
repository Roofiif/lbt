<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kontak::create([
            'image' => 'image.jpg',
            'wa' => '092103192',
            'telephone' => '012830123',
            'alamat' => 'oke',
            'email_pt' => '@gamil',
            'email_rec' => '@rec',
            'linkedin' => 'edin',
            'maps_embed' => 'acni',
        ]);
    }
}
