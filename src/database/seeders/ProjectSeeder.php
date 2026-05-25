<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Sistem Informasi Manajemen Produksi dan Progres Pengerjaan pada Bengkel Bubut Berbasis Web. ',
            'short_description' => 'Aplikasi berbasis web untuk mengelola order produksi, memantau progres pengerjaan secara real-time, serta menghasilkan laporan produksi secara otomatis pada bengkel bubut.',
            'problem_analysis' => 'Proses penerimaan order, pemantauan progres pengerjaan, dan pembuatan laporan produksi masih dilakukan secara manual. Hal ini menyebabkan risiko kesalahan pencatatan, keterlambatan informasi, kesulitan memantau status pekerjaan secara real-time, serta proses pelaporan yang kurang efisien. ',
            'solution' => 'Membangun sistem informasi berbasis web menggunakan Laravel, Filament v3, Livewire, Docker, dan MariaDB. Sistem menyediakan fitur manajemen order produksi, monitoring progres pengerjaan secara real-time, manajemen pengguna berbasis role, serta pembuatan laporan produksi otomatis untuk meningkatkan efisiensi dan akurasi pengelolaan data.',
            'tech_stack' => 'Laravel, Filament, Livewire, MariaDB, Docker',
            'diagram' => null,
            'pdf_report' => null,
            'features' => '• Manajemen Order Produksi
                            • Monitoring Progres Pengerjaan Real-Time
                            • Manajemen User dan Role (RBAC)
                            • Dashboard Monitoring Produksi
                            • Laporan dan Rekap Produksi Otomatis
                            • Manajemen Operator
                            • Tracking Status Order
                            • Sistem Autentikasi dan Otorisasi',
            'implementation_result' => 'Sistem mampu membantu digitalisasi proses produksi dengan menyediakan informasi progres pengerjaan secara real-time, meningkatkan akurasi pencatatan data, mempercepat pembuatan laporan produksi, serta mendukung pengambilan keputusan berdasarkan data yang lebih akurat. ',
        ]);
    }
}