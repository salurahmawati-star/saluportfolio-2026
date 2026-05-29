# 🚀 Salu Portfolio

Website portfolio pribadi yang dibangun menggunakan Laravel, Filament v3, Livewire, dan MariaDB. Project ini digunakan untuk menampilkan profil, keterampilan, pengalaman pengembangan, serta portofolio project secara dinamis melalui dashboard admin.

## ✨ Fitur Utama

- Landing Page Modern dan Responsive
- Dynamic Profile Management
- Dynamic Skills Management
- Dynamic Project Portfolio
- Detail Project Page
- Contact Form
- Admin Dashboard dengan Filament v3
- Upload Foto Profil
- Upload Diagram / ERD Project
- Rich Text Editor untuk deskripsi project
- Role & Permission Management (Spatie Permission)
- Activity Log Monitoring

## 🛠️ Tech Stack

### Backend
- Laravel 12
- PHP 8.3
- Livewire 3
- Filament v3

### Database
- MariaDB

### Infrastructure
- Docker
- Docker Compose

### Package
- Spatie Laravel Permission
- Spatie Activity Log

## 📂 Struktur Fitur

### Profile Management
Mengelola data profil yang ditampilkan pada halaman utama:

- Nama
- Title
- Tagline
- Bio
- Mission
- Vision
- Foto Profil

### Skills Management
Mengelola daftar kemampuan dan keahlian yang ditampilkan pada section Skills:

- Nama Skill
- Deskripsi Skill
- Persentase Kemampuan

### Project Management
Mengelola project portfolio secara dinamis:

- Judul Project
- Deskripsi Singkat
- Analisis Masalah
- Solusi dan Perancangan
- Fitur Utama
- Hasil Implementasi
- Tech Stack
- Diagram / ERD

### Contact Message
Menyimpan pesan yang dikirim pengunjung melalui form kontak.

## 📸 Tampilan Website


### Home Section
Menampilkan:

- Nama
- Title
- Tagline
- Tombol Navigasi
- Call To Action

### About Section
Menampilkan:

- Foto Profil
- Bio
- Mission
- Vision

### Skills Section
Menampilkan:

- Daftar Keahlian
- Persentase Kemampuan
- Deskripsi Skill

### Portfolio Section
Menampilkan:

- Daftar Project
- Gambar Preview
- Detail Project

### Contact Section
Menampilkan:

- Form Pesan Pengunjung

## ⚙️ Instalasi

### Clone Repository

```bash
git clone https://github.com/salurahmawati-star
cd saluportfolio
```

### Jalankan Docker

```bash
dcu -d
```

### Install Dependency

```bash
composer install
```

### Copy Environment

```bash
cp .env.example .env
```

### Generate Application Key

```bash
dca key:generate
```

### Jalankan Migration

```bash
dca migrate
```

### Jalankan Seeder

```bash
dca db:seed
```

### Storage Link

```bash
dca storage:link
```

## 🔐 Login Admin

Akses:

```
/admin
```

Masukkan akun administrator yang tersedia pada database.

## 📊 Database

Database menggunakan MariaDB dengan beberapa tabel utama:

- users
- roles
- permissions
- profiles
- skills
- projects
- contact_messages
- activity_log

## 🎯 Tujuan Project

Project ini dibuat sebagai media pembelajaran dan portfolio untuk mengimplementasikan:

- Laravel Framework
- Filament Admin Panel
- Livewire
- CRUD Management
- Authentication & Authorization
- Database Design
- Docker Development Environment
- Clean Code Architecture

## 👩‍💻 Developer

**Salu Rahmawati**

Web Developer Student

Fokus pada pengembangan aplikasi web modern menggunakan Laravel, Livewire, Filament v3, Docker, dan MariaDB.

---

Made with ❤️ salu rahmawati