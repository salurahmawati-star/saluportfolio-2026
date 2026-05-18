<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'Salu',
            'title' => 'Web Developer Student',
            'bio' => 'Saya mahasiswa yang fokus pada pengembangan web menggunakan Laravel dan teknologi modern.',
            'mission' => 'Membangun aplikasi yang berguna dan scalable.',
            'vision' => 'Menjadi fullstack developer profesional.',
            'photo' => null,
        ]);
    }
}