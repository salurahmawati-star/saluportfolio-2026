<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::insert([

            [
                'key' => 'about_title',
                'value' => 'About Me',
            ],

            [
                'key' => 'skills_title',
                'value' => 'Skills & Expertise',
            ],

            [
                'key' => 'skills_subtitle',
                'value' => 'Combining technical excellence with creative vision',
            ],

            [
                'key' => 'portfolio_title',
                'value' => 'My Projects',
            ],

            [
                'key' => 'portfolio_subtitle',
                'value' => 'Kumpulan proyek terpilih yang dibangun dengan teknologi modern dan praktik pengembangan yang baik',
            ],

            [
                'key' => 'contact_title',
                'value' => "Let's Create Together",
            ],

            [
                'key' => 'contact_subtitle',
                'value' => "Ready to bring your ideas to life? Let's start a conversation",
            ],

        ]);
    }
}