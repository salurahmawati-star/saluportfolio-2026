<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'Salu Rahmawati',
            'title' => 'Web Developer Student',
            'bio' => 'Saya adalah mahasiswa yang memiliki minat besar di bidang pengembangan perangkat lunak, khususnya web development. Saya fokus mempelajari Laravel, Livewire, Filament v3, dan Docker untuk membangun aplikasi web modern yang cepat, terstruktur, dan mudah dikembangkan. Selain mengembangkan website portfolio, saya juga mengerjakan berbagai project pembelajaran seperti sistem manajemen tugas, dashboard admin, CRUD management, autentikasi pengguna, serta integrasi database menggunakan MariaDB. Saya selalu berusaha menerapkan clean code dan praktik pengembangan yang baik dalam setiap project yang saya kerjakan.',
            'mission' => 'Membangun aplikasi web yang modern, efisien, dan berkualitas dengan menerapkan teknologi terkini serta praktik pengembangan perangkat lunak yang baik untuk memberikan pengalaman terbaik bagi pengguna.',
            'vision' => 'Menjadi Full Stack Developer profesional yang mampu membangun solusi digital inovatif, scalable, dan bermanfaat bagi masyarakat dengan memanfaatkan teknologi web modern.',
            'photo' => null,
        ]);
    }
}