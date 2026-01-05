<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hero Academy - Temukan Potensimu</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fallback for Tailwind if Vite not running (Development Mode Only - Remove in Prod) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            200: '#fecaca',
                            300: '#fca5a5',
                            400: '#f87171',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d',
                            950: '#450a0a',
                        }
                    },
                    borderRadius: {
                        'xl': '0.75rem',
                        '2xl': '1rem',
                    }
                }
            }
        }
    </script>
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* Custom Utilities */
        .bg-grid-pattern {
            background-image: radial-gradient(#e5e7eb 1px, transparent 1px);
            background-size: 24px 24px;
        }
    </style>
</head>

<body class="font-sans antialiased text-slate-600 bg-slate-50">

    <!-- Navbar -->
    <nav x-data="{ open: false }" class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <img src="{{ asset('logo-red.png') }}" alt="Hero Academy Logo" class="h-10 w-auto">
                    <span class="text-2xl font-bold text-slate-900 tracking-tight">Hero<span
                            class="text-primary-600">Academy</span></span>
                </div>

                <!-- Desktop Links -->
                <div class="hidden md:flex space-x-8">
                    <a href="#"
                        class="text-slate-600 hover:text-primary-600 hover:bg-red-50 px-3 py-2 rounded-md text-sm font-medium transition">Beranda</a>
                    <a href="#hero-ai"
                        class="text-slate-600 hover:text-primary-600 hover:bg-red-50 px-3 py-2 rounded-md text-sm font-medium transition">Hero
                        AI</a>
                    <a href="#kelas"
                        class="text-slate-600 hover:text-primary-600 hover:bg-red-50 px-3 py-2 rounded-md text-sm font-medium transition">Kelas</a>
                    <a href="#tryout"
                        class="text-slate-600 hover:text-primary-600 hover:bg-red-50 px-3 py-2 rounded-md text-sm font-medium transition">Try
                        Out</a>
                </div>

                <!-- Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/login"
                        class="text-primary-600 hover:text-primary-700 font-semibold text-sm px-4 py-2 border border-primary-600 rounded-xl hover:bg-primary-50 transition">Masuk</a>
                    <a href="/register"
                        class="bg-primary-600 hover:bg-primary-700 text-white font-semibold text-sm px-4 py-2 rounded-xl shadow-lg shadow-primary-600/20 transition transform hover:-translate-y-0.5">Daftar</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden">
                    <button @click="open = !open" type="button"
                        class="text-slate-500 hover:text-slate-700 focus:outline-none">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" class="md:hidden bg-white border-b border-slate-200">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-primary-600 hover:bg-primary-50">Beranda</a>
                <a href="#hero-ai"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-primary-600 hover:bg-primary-50">Hero
                    AI</a>
                <a href="#kelas"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-primary-600 hover:bg-primary-50">Kelas</a>
                <a href="#tryout"
                    class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-primary-600 hover:bg-primary-50">Try
                    Out</a>
            </div>
            <div class="pt-4 pb-4 border-t border-slate-200">
                <div class="flex flex-col space-y-2 px-4">
                    <a href="/login"
                        class="w-full text-center text-primary-600 font-semibold px-4 py-2 border border-primary-600 rounded-xl hover:bg-primary-50">Masuk</a>
                    <a href="/register"
                        class="w-full text-center bg-primary-600 text-white font-semibold px-4 py-2 rounded-xl hover:bg-primary-700">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden bg-white">
        <div class="absolute inset-0 bg-grid-pattern opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center max-w-3xl mx-auto">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-50 border border-red-100 text-primary-700 text-sm font-semibold mb-6 animate-fade-in-up">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                    </span>
                    Revolusi Pendidikan Indonesia
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight mb-6">
                    Temukan Potensimu Bersama
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-primary-800">Hero
                        Academy</span>
                </h1>
                <p class="text-xl text-slate-600 mb-10 leading-relaxed">
                    Platform pembelajaran berbasis AI yang membantu siswa mengenal potensi diri, minat, dan bakat untuk
                    masa depan yang lebih cerah.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                    <a href="#hero-ai"
                        class="w-full sm:w-auto px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white font-bold rounded-xl shadow-lg shadow-primary-600/30 transition transform hover:-translate-y-1 flex items-center justify-center gap-2">
                        Mulai Hero AI
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </a>
                    <a href="/register"
                        class="w-full sm:w-auto px-8 py-4 bg-white text-slate-700 font-bold border border-slate-200 rounded-xl hover:border-primary-200 hover:bg-slate-50 transition flex items-center justify-center gap-2">
                        Daftar Sekarang
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 border-t border-slate-100 pt-10">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-slate-900">10,000+</div>
                        <div class="text-sm text-slate-500 font-medium mt-1">Siswa Terdaftar</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-slate-900">4.9/5</div>
                        <div class="text-sm text-slate-500 font-medium mt-1">Rating Pengguna</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-slate-900">500+</div>
                        <div class="text-sm text-slate-500 font-medium mt-1">Materi & Soal</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-slate-900">24/7</div>
                        <div class="text-sm text-slate-500 font-medium mt-1">AI Assistant</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-slate-50" id="features">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Kenapa Memilih Hero Academy?</h2>
                <p class="text-lg text-slate-600 max-w-2xl mx-auto">Kami menggabungkan teknologi AI canggih dengan
                    kurikulum terstandarisasi untuk hasil maksimal.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:border-primary-200 transition duration-300 hover:shadow-md group">
                    <div
                        class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition duration-300">
                        <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">AI Based Learning</h3>
                    <p class="text-slate-600">Analisis kekuatan dan kelemahanmu secara real-time dengan bantuan
                        kecerdasan buatan.</p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:border-primary-200 transition duration-300 hover:shadow-md group">
                    <div
                        class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition duration-300">
                        <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Materi Komprehensif</h3>
                    <p class="text-slate-600">Akses ribuan video pembelajaran, rangkuman, dan latihan soal yang disusun
                        oleh ahli.</p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:border-primary-200 transition duration-300 hover:shadow-md group">
                    <div
                        class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-600 transition duration-300">
                        <svg class="w-7 h-7 text-primary-600 group-hover:text-white transition" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Hasil Terukur</h3>
                    <p class="text-slate-600">Laporan perkembangan detail untuk memantau progress belajar secara
                        berkala.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero AI Section -->
    <section class="py-24 bg-gradient-to-br from-primary-700 to-primary-900 relative overflow-hidden" id="hero-ai">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10">
            <div class="absolute -top-24 -left-24 w-96 h-96 rounded-full bg-white blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full bg-white blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Kenali Dirimu Lewat Hero AI</h2>
                <p class="text-primary-100 text-lg max-w-2xl mx-auto">Kami menggunakan metode asesmen psikologi modern
                    untuk memetakan profil belajar siswa.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div
                    class="bg-white/10 backdrop-blur-lg border border-white/20 p-8 rounded-2xl text-white hover:bg-white/20 transition duration-500">
                    <div class="text-4xl font-bold mb-4 opacity-80">01</div>
                    <h3 class="text-2xl font-bold mb-2">Analisis SWOT</h3>
                    <p class="text-primary-100 text-sm">Identifikasi Strengths, Weaknesses, Opportunities, dan Threats
                        dalam gaya belajarmu.</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-white/10 backdrop-blur-lg border border-white/20 p-8 rounded-2xl text-white hover:bg-white/20 transition duration-500 transform md:-translate-y-4">
                    <div class="text-4xl font-bold mb-4 opacity-80">02</div>
                    <h3 class="text-2xl font-bold mb-2">Gaya Belajar VAK</h3>
                    <p class="text-primary-100 text-sm">Apakah kamu tipe Visual, Auditory, atau Kinestetik? Temukan
                        metode tebaikmu.</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-white/10 backdrop-blur-lg border border-white/20 p-8 rounded-2xl text-white hover:bg-white/20 transition duration-500">
                    <div class="text-4xl font-bold mb-4 opacity-80">03</div>
                    <h3 class="text-2xl font-bold mb-2">Minat RIASEC</h3>
                    <p class="text-primary-100 text-sm">Penjurusan karir dan kuliah berdasarkan tipe kepribadian Holland
                        Code.</p>
                </div>
            </div>

            <div class="mt-16 text-center">
                <button
                    class="px-10 py-4 bg-white text-primary-700 font-bold rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition transform">
                    Coba Tes Sekarang (Gratis)
                </button>
            </div>
        </div>
    </section>

    <!-- Classes Section -->
    <section class="py-20 bg-white" id="kelas">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-2">Kelas Populer</h2>
                    <p class="text-slate-500">Materi yang paling banyak dipelajari minggu ini.</p>
                </div>
                <a href="#" class="text-primary-600 font-semibold hover:text-primary-700 hidden sm:block">Lihat Semua
                    →</a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Class Card 1 -->
                <div
                    class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-lg transition">
                    <div class="h-48 bg-slate-200 relative">
                        <!-- Placeholder Image -->
                        <div class="absolute inset-0 flex items-center justify-center text-slate-400">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span
                            class="absolute top-4 left-4 bg-primary-600 text-white text-xs font-bold px-3 py-1 rounded-full">Matematika</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Aljabar Linear & Matriks</h3>
                        <p class="text-sm text-slate-500 mb-4">Kelas 12 SMA • Kurikulum Merdeka</p>

                        <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg> 4.5 Jam</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg> 120 Siswa</span>
                        </div>

                        <div class="w-full bg-slate-100 rounded-full h-2 mb-2">
                            <div class="bg-primary-600 h-2 rounded-full" style="width: 75%"></div>
                        </div>
                        <div class="text-xs text-right text-primary-600 font-bold">75% Selesai (Dummy)</div>
                    </div>
                </div>

                <!-- Class Card 2 -->
                <div
                    class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-lg transition">
                    <div class="h-48 bg-slate-200 relative">
                        <!-- Placeholder Image -->
                        <div class="absolute inset-0 flex items-center justify-center text-slate-400">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <span
                            class="absolute top-4 left-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full">Fisika</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">Dinamika Newton</h3>
                        <p class="text-sm text-slate-500 mb-4">Kelas 11 SMA • Kurikulum Merdeka</p>

                        <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg> 3.2 Jam</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg> 89 Siswa</span>
                        </div>

                        <div class="w-full bg-slate-100 rounded-full h-2 mb-2">
                            <div class="bg-primary-600 h-2 rounded-full" style="width: 45%"></div>
                        </div>
                        <div class="text-xs text-right text-primary-600 font-bold">45% Selesai</div>
                    </div>
                </div>

                <!-- Class Card 3 -->
                <div
                    class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-lg transition">
                    <div class="h-48 bg-slate-200 relative">
                        <!-- Placeholder Image -->
                        <div class="absolute inset-0 flex items-center justify-center text-slate-400">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                            </svg>
                        </div>
                        <span
                            class="absolute top-4 left-4 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full">Bahasa
                            Inggris</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-slate-900 mb-2">TOEFL Preparation</h3>
                        <p class="text-sm text-slate-500 mb-4">Umum • Skill Development</p>

                        <div class="flex items-center justify-between text-sm text-slate-500 mb-4">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg> 8.0 Jam</span>
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg> 340 Siswa</span>
                        </div>

                        <div class="w-full bg-slate-100 rounded-full h-2 mb-2">
                            <div class="bg-primary-600 h-2 rounded-full" style="width: 10%"></div>
                        </div>
                        <div class="text-xs text-right text-primary-600 font-bold">10% Selesai</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 text-slate-400 py-12 border-t border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <svg class="h-8 w-8 text-primary-600" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg>
                        <span class="text-2xl font-bold text-white tracking-tight">Hero<span
                                class="text-primary-600">Academy</span></span>
                    </div>
                    <p class="text-slate-500 max-w-sm">Membangun generasi emas Indonesia melalui pendidikan berkualitas
                        yang dipersonalisasi dengan teknologi AI.</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Platform</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-primary-500 transition">Beranda</a></li>
                        <li><a href="#" class="hover:text-primary-500 transition">Hero AI</a></li>
                        <li><a href="#" class="hover:text-primary-500 transition">Kelas Online</a></li>
                        <li><a href="#" class="hover:text-primary-500 transition">Try Out UTBK</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Bantuan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-primary-500 transition">Pusat Bantuan</a></li>
                        <li><a href="#" class="hover:text-primary-500 transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="hover:text-primary-500 transition">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-primary-500 transition">Kontak Kami</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="border-t border-slate-900 pt-8 flex flex-col md:flex-row justify-between items-center bg-slate-950">
                <p>&copy; 2026 Hero Academy. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <!-- Social icons dummy -->
                    <a href="#" class="text-slate-500 hover:text-white transition"><svg class="w-5 h-5"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg></a>
                    <a href="#" class="text-slate-500 hover:text-white transition"><svg class="w-5 h-5"
                            fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.072 3.252.148 4.771 1.691 4.919 4.919.06 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>