<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Sistem Manajemen Tugas Mahasiswa',
            'short_description' => 'Aplikasi untuk mengatur tugas kuliah dan deadline.',
            'problem_analysis' => 'Mahasiswa sering lupa deadline tugas karena tidak ada sistem pengingat.',
            'solution' => 'Membuat sistem task management berbasis web.',
            'tech_stack' => 'Laravel, Filament, Livewire, MariaDB, Docker',
            'diagram' => null,
            'pdf_report' => null,
        ]);

        Project::create([
            'title' => 'Portfolio Website Dinamis',
            'short_description' => 'Website portofolio personal berbasis Laravel.',
            'problem_analysis' => 'Tidak semua developer punya portofolio profesional.',
            'solution' => 'Membangun portfolio dinamis dengan admin panel.',
            'tech_stack' => 'Laravel, Blade, Filament v3',
            'diagram' => null,
            'pdf_report' => null,
        ]);
    }
}