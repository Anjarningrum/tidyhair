<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::create([
            'admin_id' => '2',
            'judul' => 'Hair Style',
            'slug' => 'hair-style',
            'isi' => 'Hair Style Hair Style Hair Style Hair Style Hair Style Hair Style Hair Style Hair Style'
        ]);

        Artikel::create([
            'admin_id' => '2',
            'judul' => 'Hair Style 2',
            'slug' => 'hair-style-2',
            'isi' => 'Hair Style 2 Hair Style 2 Hair Style 2 Hair Style 2 Hair Style Hair Style Hair Style Hair Style'
        ]);

        Artikel::create([
            'admin_id' => '2',
            'judul' => 'Hair Style 3',
            'slug' => 'hair-style-3',
            'isi' => 'Hair Style 3 Hair Style Hair Style Hair Style Hair Style Hair Style Hair Style Hair Style'
        ]);
        Artikel::create([
            'admin_id' => '2',
            'judul' => 'Hair Style 4',
            'slug' => 'hair-style-4',
            'isi' => 'Hair Style 4 Hair Style Hair Style Hair Style Hair Style Hair Style Hair Style Hair Style'
        ]);
        Artikel::create([
            'admin_id' => '2',
            'judul' => 'Hair Style 5',
            'slug' => 'hair-style-5',
            'isi' => 'Hair Style 5 Hair Style Hair Style Hair Style Hair Style Hair Style Hair Style Hair Style'
        ]);
    }
}
