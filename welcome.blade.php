<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hero Academy - Temukan Potensimu</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .bg-grid-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%239C92AC' fill-opacity='0.1' fill-rule='evenodd'%3E%3Cpath d='M0 40L40 0H20L0 20M40 40V20L20 40'/%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="antialiased font-sans bg-white text-slate-900" x-data="{ mobileMenuOpen: false }">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-2">
                    <svg class="h-8 w-8 text-primary-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    <span class="font-bold text-xl text-primary-600 tracking-tight">Hero Academy</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#" class="text-slate-600 hover:text-primary-600 transition font-medium">Beranda</a>
                    <a href="#" class="text-slate-600 hover:text-primary-600 transition font-medium">Hero AI</a>
                    <a href="#" class="text-slate-600 hover:text-primary-600 transition font-medium">Kelas</a>
                    <a href="#" class="text-slate-600 hover:text-primary-600 transition font-medium">Try Out</a>
                </div>

                <!-- Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/login" class="px-5 py-2 text-sm font-medium text-primary-600 border border-primary-600 rounded-xl hover:bg-primary-50 transition">
                        Masuk
                    </a>
                    <a href="/register" class="px-5 py-2 text-sm font-medium text-white bg-primary-600 rounded-xl hover:bg-primary-700 shadow-lg shadow-primary-500/30 transition">
                        Daftar
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-500 hover:text-primary-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-cloak class="md:hidden bg-white border-t border-slate-100 absolute w-full left-0 shadow-xl">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="#" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg">Beranda</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg">Hero AI</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg">Kelas</a>
                <a href="#" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg">Try Out</a>
                <div class="pt-4 flex flex-col space-y-3">
                    <a href="/login" class="w-full text-center px-4 py-2 text-primary-600 border border-primary-600 rounded-xl font-medium">Masuk</a>
                    <a href="/register" class="w-full text-center px-4 py-2 text-white bg-primary-600 rounded-xl font-medium shadow-lg">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-40 overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-[0.03] z-0"></div>
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-primary-50/50 to-transparent -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-100/50 text-primary-700 border border-primary-200">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                        <span class="text-sm font-semibold">Platform Pembelajaran AI Masa Depan</span>
                    </div>

                    <h1 class="text-5xl lg:text-7xl font-extrabold tracking-tight text-slate-900 leading-[1.1]">
                        Temukan Potensimu Bersama <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary-600 to-primary-800">Hero Academy</span>
                    </h1>

                    <p class="text-xl text-slate-600 leading-relaxed max-w-lg">
                        Platform pembelajaran berbasis AI yang membantu siswa mengenal potensi diri, belajar efektif, dan mempersiapkan masa depan gemilang dengan semangat Indonesia Maju.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/hero-ai" class="inline-flex justify-center items-center px-8 py-4 text-lg font-semibold text-white bg-primary-600 rounded-2xl hover:bg-primary-700 shadow-xl shadow-primary-500/20 transition-all hover:-translate-y-1">
                            <span>Mulai Hero AI</span>
                            <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                        <a href="/register" class="inline-flex justify-center items-center px-8 py-4 text-lg font-semibold text-slate-700 bg-white border border-slate-200 rounded-2xl hover:border-primary-600 hover:text-primary-600 transition-all">
                            Daftar Sekarang
                        </a>
                    </div>

                    <div class="pt-8 flex items-center gap-8 border-t border-slate-100">
                        <div class="flex items-center gap-3">
                            <div class="flex -space-x-3">
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-500">U1</div>
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-500">U2</div>
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-500">U3</div>
                            </div>
                            <div class="text-sm">
                                <p class="font-bold text-slate-900">10,000+ Siswa</p>
                                <p class="text-slate-500">Telah Bergabung</p>
                            </div>
                        </div>
                        <div class="h-8 w-px bg-slate-200"></div>
                        <div class="flex items-center gap-2">
                            <svg class="h-6 w-6 text-yellow-500 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <div class="text-sm">
                                <p class="font-bold text-slate-900">4.9/5.0</p>
                                <p class="text-slate-500">Rating Rata-rata</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content (Visual) -->
                <div class="relative hidden lg:block">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-primary-300/20 rounded-full blur-3xl animate-pulse"></div>
                    <div class="relative bg-white/60 backdrop-blur-xl border border-white/40 shadow-2xl rounded-3xl p-6 border-t-white transform rotate-2 hover:rotate-0 transition duration-500">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary-500 to-primary-700 flex items-center justify-center shadow-lg shadow-primary-500/40">
                                <svg class="w-8 h-8 text-white relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-xl text-slate-800">Hero AI Assistant</h3>
                                <p class="text-primary-600 text-sm font-medium flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                                    Online & Siap Membantu
                                </p>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <!-- Chat Bubble AI -->
                            <div class="bg-slate-50 p-4 rounded-2xl rounded-tl-none border border-slate-100">
                                <p class="text-slate-700 text-sm">
                                    👋 Halo! Saya Hero AI. Mari analisa potensi belajarmu. Ceritakan gaya belajar yang kamu sukai!
                                </p>
                            </div>
                            <!-- Chat Bubble User -->
                            <div class="bg-primary-50 p-4 rounded-2xl rounded-tr-none border border-primary-100 ml-12">
                                <p class="text-slate-800 text-sm">
                                    Saya lebih suka belajar dengan visual (gambar) dan praktek langsung. 📚
                                </p>
                            </div>
                             <!-- Chat Bubble AI Response -->
                             <div class="bg-slate-50 p-4 rounded-2xl rounded-tl-none border border-slate-100">
                                <p class="text-slate-700 text-sm">
                                    Menarik! Kamu sepertinya tipe <span class="font-bold text-primary-700">Visual-Kinesthetic</span>. Saya rekomendasikan kelas Robotik & Desain Grafis untukmu! 🚀
                                </p>
                            </div>
                        </div>
                        
                        <!-- Floating Card -->
                        <div class="absolute -right-8 bottom-12 bg-white p-4 rounded-2xl shadow-xl border border-slate-100 animate-bounce" style="animation-duration: 3s;">
                             <div class="flex items-center gap-3">
                                 <div class="p-2 bg-green-100 rounded-lg text-green-600">
                                     <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                     </svg>
                                 </div>
                                 <div class="text-xs font-bold text-slate-700">Analisa Selesai<br>Akurasi 98%</div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-primary-600 font-semibold tracking-wide uppercase text-sm">Kenapa Hero Academy?</span>
                <h2 class="mt-2 text-3xl font-bold text-slate-900 sm:text-4xl">Teknologi Pendidikan Terdepan</h2>
                <p class="mt-4 text-lg text-slate-600">Kami menggabungkan kurikulum standar nasional dengan teknologi AI untuk pengalaman belajar yang personal.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:border-primary-200 border border-transparent transition-all group">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-primary-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">AI-Powered Learning</h3>
                    <p class="text-slate-600 leading-relaxed">Analisa mendalam dengan teknologi AI untuk memahami gaya belajar unik dan potensi terpendam setiap siswa.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:border-primary-200 border border-transparent transition-all group">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-primary-600 mb-6 group-hover:scale-110 transition-transform">
                         <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Guru Berpengalaman</h3>
                    <p class="text-slate-600 leading-relaxed">Belajar langsung dari praktisi dan akademisi terbaik di Indonesia yang berdedikasi tinggi.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:border-primary-200 border border-transparent transition-all group">
                    <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-primary-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Keamanan Data</h3>
                    <p class="text-slate-600 leading-relaxed">Privasi siswa adalah prioritas. Data hasil analisa AI tersimpan aman dengan enkripsi tingkat tinggi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero AI Section (Red Gradient) -->
    <section class="py-24 bg-gradient-to-br from-primary-600 to-primary-800 text-white relative overflow-hidden">
        <!-- Decoration -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10 pointer-events-none">
             <div class="absolute -top-24 -left-24 w-96 h-96 rounded-full bg-white blur-3xl"></div>
             <div class="absolute bottom-0 right-0 w-96 h-96 rounded-full bg-white blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
             <h2 class="text-3xl md:text-5xl font-bold mb-6">Kenali Dirimu Lewat Hero AI</h2>
             <p class="text-primary-100 text-xl max-w-2xl mx-auto mb-16">
                 Satu-satunya asesmen pendidikan dengan pendekatan holistik untuk memetakan masa depanmu.
             </p>

             <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                 <!-- Card 1 -->
                 <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition cursor-default">
                     <h3 class="font-bold text-xl mb-2">Analisa SWOT</h3>
                     <p class="text-sm text-primary-100">Petakan Kekuatan & Kelemahan diri untuk strategi belajar.</p>
                 </div>
                 <!-- Card 2 -->
                 <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition cursor-default">
                     <h3 class="font-bold text-xl mb-2">Gaya Belajar VAK</h3>
                     <p class="text-sm text-primary-100">Visual, Auditory, atau Kinestetik? Temukan di sini.</p>
                 </div>
                 <!-- Card 3 -->
                 <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition cursor-default">
                     <h3 class="font-bold text-xl mb-2">Minat RIASEC</h3>
                     <p class="text-sm text-primary-100">Temukan karir yang cocok dengan kepribadianmu.</p>
                 </div>
                 <!-- Card 4 -->
                 <div class="bg-white/10 backdrop-blur-md rounded-2xl p-6 border border-white/20 hover:bg-white/20 transition cursor-default">
                     <h3 class="font-bold text-xl mb-2">Kecerdasan Majemuk</h3>
                     <p class="text-sm text-primary-100">8 Tipe kecerdasan untuk memaksimalkan potensimu.</p>
                 </div>
             </div>

             <div class="mt-12">
                 <a href="/hero-ai" class="inline-block px-10 py-5 bg-white text-primary-700 font-bold rounded-2xl shadow-xl hover:scale-105 transition-transform">
                     Coba Hero AI Gratis
                 </a>
                 <p class="mt-4 text-sm text-primary-200 opacity-80">Tanpa Login • Hasil Instan</p>
             </div>
        </div>
    </section>

    <!-- Classes Section Preview -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                     <h2 class="text-3xl font-bold text-slate-900">Kelas Unggulan</h2>
                     <p class="text-slate-500 mt-2">Mulai perjalanan belajarmu hari ini.</p>
                </div>
                <a href="#" class="text-primary-600 font-semibold hover:text-primary-700 hidden sm:block">Lihat Semua Kelas -></a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Class Card 1 -->
                <div class="group border border-slate-100 rounded-2xl overflow-hidden hover:shadow-xl transition-all">
                    <div class="h-48 bg-slate-200 relative overflow-hidden">
                        <!-- Dummy Image Placeholder -->
                        <div class="absolute inset-0 bg-primary-900/10 group-hover:scale-105 transition-transform duration-500"></div>
                        <div class="absolute top-4 right-4 bg-white px-3 py-1 rounded-full text-xs font-bold text-primary-600 shadow-sm">
                            POPULER
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-slate-900 mb-2 group-hover:text-primary-600 transition-colors">Dasar Artificial Intelligence</h3>
                        <p class="text-sm text-slate-500 mb-4 line-clamp-2">Pelajari dasar-dasar AI dan bagaimana cara kerjanya dalam kehidupan sehari-hari.</p>
                        
                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-slate-100">
                             <div class="flex items-center gap-2">
                                 <div class="w-8 h-8 rounded-full bg-slate-200"></div>
                                 <span class="text-xs font-medium text-slate-600">Dr. Suryanto</span>
                             </div>
                             <span class="text-primary-600 font-bold">Gratis</span>
                        </div>
                    </div>
                </div>

                 <!-- Class Card 2 -->
                 <div class="group border border-slate-100 rounded-2xl overflow-hidden hover:shadow-xl transition-all">
                    <div class="h-48 bg-slate-200 relative overflow-hidden">
                         <div class="absolute inset-0 bg-primary-900/10 group-hover:scale-105 transition-transform duration-500"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-slate-900 mb-2 group-hover:text-primary-600 transition-colors">Persiapan UTBK Saintek</h3>
                        <p class="text-sm text-slate-500 mb-4 line-clamp-2">Strategi jitu menaklukan soal-soal HOTS untuk masuk perguruan tinggi impian.</p>
                        
                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-slate-100">
                             <div class="flex items-center gap-2">
                                 <div class="w-8 h-8 rounded-full bg-slate-200"></div>
                                 <span class="text-xs font-medium text-slate-600">Tim Pengajar</span>
                             </div>
                             <div class="w-full max-w-[80px] h-2 bg-slate-100 rounded-full overflow-hidden ml-auto">
                                 <div class="h-full bg-primary-600 w-3/4"></div>
                             </div>
                        </div>
                    </div>
                </div>

                <!-- Class Card 3 -->
                  <div class="group border border-slate-100 rounded-2xl overflow-hidden hover:shadow-xl transition-all">
                    <div class="h-48 bg-slate-200 relative overflow-hidden">
                         <div class="absolute inset-0 bg-primary-900/10 group-hover:scale-105 transition-transform duration-500"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-slate-900 mb-2 group-hover:text-primary-600 transition-colors">Public Speaking for Teen</h3>
                        <p class="text-sm text-slate-500 mb-4 line-clamp-2">Bangun kepercayaan diri dan kemampuan komunikasi yang memukau.</p>
                        
                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-slate-100">
                             <div class="flex items-center gap-2">
                                 <div class="w-8 h-8 rounded-full bg-slate-200"></div>
                                 <span class="text-xs font-medium text-slate-600">Kak Sarah</span>
                             </div>
                              <span class="text-primary-600 font-bold">Rp 150k</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 text-slate-400 py-12 border-t border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-1">
                    <span class="font-bold text-2xl text-white tracking-tight">Hero Academy</span>
                    <p class="mt-4 text-sm text-slate-500">
                        Membangun generasi emas Indonesia melalui pendidikan teknologi yang adaptif dan personal.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Platform</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-primary-500 transition">Beranda</a></li>
                        <li><a href="#" class="hover:text-primary-500 transition">Hero AI</a></li>
                        <li><a href="#" class="hover:text-primary-500 transition">Kelas</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Program</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-primary-500 transition">Untuk Siswa</a></li>
                        <li><a href="#" class="hover:text-primary-500 transition">Untuk Guru</a></li>
                        <li><a href="#" class="hover:text-primary-500 transition">Untuk Sekolah</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Hubungi Kami</h4>
                    <ul class="space-y-2 text-sm">
                        <li>support@heroacademy.id</li>
                        <li>Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-900 pt-8 flex flex-col md:flex-row justify-between items-center text-sm">
                <p>&copy; 2026 Hero Academy. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition">Privacy</a>
                    <a href="#" class="hover:text-white transition">Terms</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
