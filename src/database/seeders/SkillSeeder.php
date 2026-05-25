<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::insert([
            [
                'title' => 'Laravel Development',
                'description' => 'Membangun aplikasi web modern menggunakan Laravel, Filament v3, Livewire, dan arsitektur backend yang terstruktur.',
                'percentage' => 95,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Backend & UI Integration',
                'description' => 'Mengembangkan dashboard admin, CRUD management, authentication, dan sistem berbasis database.',
                'percentage' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Application Development',
                'description' => 'Menjalankan project development menggunakan Docker agar environment lebih stabil dan konsisten.',
                'percentage' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Clean Code & Project Structure',
                'description' => 'Menyusun struktur project Laravel yang rapi, scalable, dan mudah dikembangkan.',
                'percentage' => 92,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}