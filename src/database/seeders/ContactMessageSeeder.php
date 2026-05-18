<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactMessage;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        ContactMessage::create([
            'name' => 'Salu',
            'email' => 'salu@mail.com',
            'subject' => 'Hello',
            'message' => 'Ini test message',
        ]);
    }
}