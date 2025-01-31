<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Community;

class CommunitySeeder extends Seeder
{
    /**
     * Jalankan seeder untuk mengisi tabel communities.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan beberapa data contoh ke dalam tabel communities
        Community::create([
            'name' => 'Elpun Gaming Community',
            'description' => 'Komunitas penggemar game yang berkumpul untuk bermain bersama.',
            'slug' => 'elpun-gaming-community',
        ]);

        Community::create([
            'name' => 'Elpun eSports',
            'description' => 'Komunitas pemain profesional yang berfokus pada kompetisi eSports.',
            'slug' => 'elpun-esports',
        ]);

        Community::create([
            'name' => 'Elpun Streamers',
            'description' => 'Komunitas bagi streamer yang berbagi konten game dan hiburan.',
            'slug' => 'elpun-streamers',
        ]);
    }
}
