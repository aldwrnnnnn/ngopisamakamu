<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ngopi Sama Kamu. Ruang tenang untuk cerita, tawa, dan secangkir kopi hangat di Abiansemal, Badung, Bali. Pilihan kopi nusantara, camilan lezat, dan suasana santai.">
    <title>Ngopi Sama Kamu | Ruang Santai & Seduhan Kopi Hangat</title>

    <!-- Open Graph / WhatsApp & Social Share Preview -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Ngopi Sama Kamu | Ruang Santai & Seduhan Kopi Hangat">
    <meta property="og:description" content="Ruang tenang untuk cerita, tawa, dan secangkir kopi hangat di Abiansemal, Badung, Bali. Kopi nusantara, camilan lezat, dan suasana santai.">
    <meta property="og:image" content="{{ asset('images/hero-coffee.jpg') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ngopi Sama Kamu | Ruang Santai & Seduhan Kopi Hangat">
    <meta name="twitter:description" content="Ruang tenang untuk cerita, tawa, dan secangkir kopi hangat di Abiansemal, Badung, Bali.">
    <meta name="twitter:image" content="{{ asset('images/hero-coffee.jpg') }}">

    <!-- Favicon & Canonical -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @if (file_exists(public_path('images/logo.png')))
        <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    @endif
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Google Fonts: Fraunces & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400..700;1,9..144,400..700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FAF7F2] text-[#1A1310] font-sans antialiased selection:bg-[#BC5B38] selection:text-white">

    <!-- Navigation Header -->
    <header class="sticky top-0 z-40 bg-[#FAF7F2]/90 backdrop-blur-md border-b border-[#E8E1D4] transition-all">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group focus:outline-none focus-visible:ring-2 focus-visible:ring-[#BC5B38] rounded-lg">
                @if (file_exists(public_path('images/logo.png')))
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Ngopi Sama Kamu" class="w-10 h-10 rounded-full object-cover shadow-sm ring-1 ring-[#E8E1D4]">
                @else
                    <div class="w-10 h-10 rounded-full bg-[#1A1310] text-[#FAF7F2] flex items-center justify-center font-serif text-lg font-bold shadow-sm group-hover:bg-[#BC5B38] transition-colors">
                        ☕
                    </div>
                @endif
                <div class="flex flex-col">
                    <span class="font-serif text-xl sm:text-2xl font-bold tracking-tight text-[#1A1310] leading-none">
                        Ngopi Sama Kamu
                    </span>
                    <span class="text-xs text-[#887262] tracking-wide mt-1">Kedai Kopi & Ruang Cerita</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-8" aria-label="Navigasi Utama">
                <a href="#tentang" class="text-sm font-medium text-[#524136] hover:text-[#BC5B38] transition-colors py-2">
                    Suasana
                </a>
                <a href="#menu" class="text-sm font-medium text-[#524136] hover:text-[#BC5B38] transition-colors py-2">
                    Pilihan Menu
                </a>
                <a href="#galeri" class="text-sm font-medium text-[#524136] hover:text-[#BC5B38] transition-colors py-2">
                    Ruang Santai
                </a>
                <a href="#lokasi" class="text-sm font-medium text-[#524136] hover:text-[#BC5B38] transition-colors py-2">
                    Lokasi & Jam
                </a>
                <a href="#faq" class="text-sm font-medium text-[#524136] hover:text-[#BC5B38] transition-colors py-2">
                    Tanya Jawab
                </a>
            </nav>

            <!-- Right CTA Button -->
            <div class="hidden sm:flex items-center gap-3">
                <button
                    type="button"
                    onclick="window.openOrderModal()"
                    class="inline-flex items-center justify-center gap-2 bg-[#BC5B38] hover:bg-[#A14B2B] text-white px-5 py-2.5 rounded-full text-sm font-semibold transition-colors shadow-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-[#BC5B38]"
                >
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.146-.539-1.748-.724-2.884-2.485-2.971-2.602-.088-.117-.714-.951-.714-1.815 0-.865.452-1.29.613-1.464.161-.174.351-.218.468-.218.117 0 .234.001.336.006.108.004.253-.041.395.3.144.346.497 1.213.541 1.301.044.088.073.19.015.305-.058.117-.088.19-.175.292-.088.102-.185.228-.264.306-.088.087-.18.182-.078.358.102.175.455.751.976 1.215.672.598 1.238.784 1.413.872.175.088.278.073.38-.044.103-.117.439-.511.556-.687.117-.175.234-.146.395-.088.161.058 1.023.482 1.198.57.175.088.292.131.336.204.044.074.044.425-.1.83z"/>
                    </svg>
                    <span>Pesan via WA</span>
                </button>
            </div>

            <!-- Mobile Hamburger Button -->
            <button
                type="button"
                id="mobile-menu-button"
                aria-expanded="false"
                aria-label="Buka navigasi menu"
                class="md:hidden inline-flex items-center justify-center p-2.5 rounded-lg text-[#524136] hover:text-[#1A1310] hover:bg-[#E8E1D4] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#BC5B38]"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Drawer Overlay -->
        <div id="mobile-menu" class="hidden md:hidden fixed inset-0 z-50 bg-[#1A1310]/60 backdrop-blur-sm" role="dialog" aria-modal="true">
            <div class="fixed inset-y-0 right-0 max-w-xs w-full bg-[#FAF7F2] p-6 shadow-xl flex flex-col justify-between overflow-y-auto">
                <div>
                    <div class="flex items-center justify-between pb-6 border-b border-[#E8E1D4]">
                        <div class="flex items-center gap-2.5">
                            @if (file_exists(public_path('images/logo.png')))
                                <img src="{{ asset('images/logo.png') }}" alt="Logo Ngopi Sama Kamu" class="w-8 h-8 rounded-full object-cover">
                            @endif
                            <span class="font-serif text-lg font-bold text-[#1A1310]">Ngopi Sama Kamu</span>
                        </div>
                        <button
                            type="button"
                            id="mobile-menu-close"
                            aria-label="Tutup menu"
                            class="p-2 text-[#524136] hover:text-[#1A1310] rounded-lg focus:outline-none focus-visible:ring-2 focus-visible:ring-[#BC5B38]"
                        >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <nav class="flex flex-col gap-4 mt-6" aria-label="Menu Ponsel">
                        <a href="#tentang" class="mobile-nav-link text-base font-medium text-[#1A1310] hover:text-[#BC5B38] py-2 border-b border-[#F3EFE6]">
                            Suasana & Cerita
                        </a>
                        <a href="#menu" class="mobile-nav-link text-base font-medium text-[#1A1310] hover:text-[#BC5B38] py-2 border-b border-[#F3EFE6]">
                            Pilihan Menu
                        </a>
                        <a href="#galeri" class="mobile-nav-link text-base font-medium text-[#1A1310] hover:text-[#BC5B38] py-2 border-b border-[#F3EFE6]">
                            Ruang Santai
                        </a>
                        <a href="#lokasi" class="mobile-nav-link text-base font-medium text-[#1A1310] hover:text-[#BC5B38] py-2 border-b border-[#F3EFE6]">
                            Lokasi & Jam Buka
                        </a>
                        <a href="#faq" class="mobile-nav-link text-base font-medium text-[#1A1310] hover:text-[#BC5B38] py-2 border-b border-[#F3EFE6]">
                            Tanya Jawab
                        </a>
                    </nav>
                </div>

                <div class="pt-6 border-t border-[#E8E1D4] flex flex-col gap-3">
                    <button
                        type="button"
                        onclick="window.openOrderModal(); toggleMobileMenu(false);"
                        class="w-full inline-flex items-center justify-center gap-2 bg-[#BC5B38] hover:bg-[#A14B2B] text-white py-3 rounded-xl text-sm font-semibold transition-colors"
                    >
                        <span>Pesan via WhatsApp</span>
                    </button>
                    <p class="text-xs text-center text-[#887262]">Buka setiap hari jam 08.00 s.d. 22.00 WITA</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="relative pt-6 pb-10 sm:pt-8 sm:pb-14 overflow-hidden">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 items-start">
                    <!-- Left Copy Column -->
                    <div class="lg:col-span-7 flex flex-col items-start">
                        <!-- Main Relaxed Headline -->
                        <h1 class="font-serif text-2xl sm:text-4xl lg:text-[3.25rem] font-bold text-[#1A1310] tracking-tight leading-[1.18] mb-4 sm:mb-5">
                            Ruang tenang untuk cerita, tawa, dan secangkir kopi hangat.
                        </h1>

                        <!-- Human, Unhurried Subtitle -->
                        <p class="text-sm sm:text-base text-[#524136] leading-relaxed max-w-lg mb-6">
                            Disangrai segar dari petani nusantara dan diseduh tanpa terburu-buru. Tempat nyaman untuk rehat sejenak, fokus menyelesaikan pekerjaan, atau sekadar berbagi kabar sama orang tersayang.
                        </p>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 w-full sm:w-auto mb-6 sm:mb-8">
                            <a
                                href="#menu"
                                class="inline-flex items-center justify-center gap-2 bg-[#1A1310] hover:bg-[#3A2D25] text-white px-6 py-3 rounded-full text-sm sm:text-base font-semibold transition-colors shadow-sm text-center"
                            >
                                <span>Lihat Pilihan Menu</span>
                            </a>
                            <a
                                href="#lokasi"
                                class="inline-flex items-center justify-center gap-2 bg-white hover:bg-[#F3EFE6] text-[#1A1310] border border-[#D9CFC0] px-6 py-3 rounded-full text-sm sm:text-base font-semibold transition-colors text-center"
                            >
                                <span>Petunjuk Arah & Jam</span>
                            </a>
                        </div>

                        <!-- Quick Facilities Strip -->
                        <div class="grid grid-cols-3 gap-3 sm:gap-4 pt-4 sm:pt-5 border-t border-[#E8E1D4] w-full max-w-md">
                            <div>
                                <div class="text-sm sm:text-base font-serif font-bold text-[#1A1310]">100%</div>
                                <div class="text-xs text-[#887262]">Kopi Lokal Nusantara</div>
                            </div>
                            <div>
                                <div class="text-sm sm:text-base font-serif font-bold text-[#1A1310]">100 Mbps</div>
                                <div class="text-xs text-[#887262]">Wi-Fi Cepat & Stabil</div>
                            </div>
                            <div>
                                <div class="text-sm sm:text-base font-serif font-bold text-[#1A1310]">Tiap Meja</div>
                                <div class="text-xs text-[#887262]">Ada Stopkontak Listrik</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Visual Column -->
                    <div class="lg:col-span-5 relative">
                        <div class="relative mx-auto max-w-sm sm:max-w-md lg:max-w-none">
                            <!-- Floating "New Menu" Label Badge -->
                            <div class="absolute -top-3 left-4 sm:left-6 z-10 inline-flex items-center px-3 py-0.5 rounded-full bg-[#BC5B38] text-white shadow-md text-[11px] font-semibold tracking-wide">
                                <span>New Menu</span>
                            </div>

                            <!-- Main Decorative Card Frame -->
                            <div class="rounded-3xl overflow-hidden shadow-lg border border-[#E8E1D4] bg-white p-3">
                                <img
                                    src="{{ asset('images/hero-coffee.jpg') }}?v={{ file_exists(public_path('images/hero-coffee.jpg')) ? filemtime(public_path('images/hero-coffee.jpg')) : 1 }}"
                                    alt="Gelas es kopi susu gula aren segar dingin Ngopi Sama Kamu"
                                    class="w-full h-72 sm:h-[21.5rem] object-cover rounded-2xl"
                                    loading="eager"
                                />
                                <div class="p-3.5 sm:p-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <h3 class="font-serif font-bold text-[#1A1310] text-base sm:text-lg">Kopi Susu Kamu</h3>
                                            <p class="text-xs text-[#887262]">Espresso, susu segar, dan gula aren organik</p>
                                        </div>
                                        <span class="font-serif font-bold text-base text-[#BC5B38]">Rp 20.000</span>
                                    </div>
                                    <button
                                        type="button"
                                        onclick="window.openOrderModal('Kopi Susu Kamu')"
                                        class="mt-2.5 w-full py-2 bg-[#FAF7F2] hover:bg-[#F3EFE6] border border-[#E8E1D4] rounded-xl text-xs font-semibold text-[#1A1310] transition-colors"
                                    >
                                        Pesan Menu Ini via WhatsApp
                                    </button>
                                </div>
                            </div>

                            <!-- Floating Cozy Note Badge -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Suasana & Cerita (#tentang) -->
        <section id="tentang" class="py-16 sm:py-24 bg-white border-y border-[#E8E1D4]">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <!-- Section Header -->
                <div class="max-w-2xl mx-auto text-center mb-16">
                    <span class="text-xs sm:text-sm font-semibold tracking-wider text-[#BC5B38] uppercase">Cerita di Balik Cangkir</span>
                    <h2 class="font-serif text-2xl sm:text-4xl font-bold text-[#1A1310] mt-2 mb-4">
                        Bukan sekadar minum kopi, ini tentang menikmati waktu luang.
                    </h2>
                    <p class="text-sm sm:text-base text-[#524136] leading-relaxed">
                        Kami membangun Ngopi Sama Kamu sebagai tempat perlindungan dari riuhnya kesibukan harian. Di sini, kamu boleh duduk berlama-lama, membaca buku, ngobrol tanpa tergesa-gesa, atau sekadar membiarkan pikiran beristirahat.
                    </p>
                </div>

                <!-- 3 Pillars Grid with Supporting Real Visuals -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <!-- Pillar 1 -->
                    <div class="bg-[#FAF7F2] rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#E8E1D4]">
                            <img
                                src="{{ asset('images/biji-kopi.jpg') }}"
                                alt="Biji kopi sangrai pilihan nusantara yang harum dan berkualitas"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#3C503C] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Biji Kopi Lokal Pilihan
                            </span>
                        </div>
                        <div class="p-6 sm:p-7 flex flex-col flex-1 justify-between">
                            <div>
                                <h3 class="font-serif text-xl font-bold text-[#1A1310] mb-3">
                                    Biji Kopi Nusantara
                                </h3>
                                <p class="text-sm text-[#524136] leading-relaxed">
                                    Kami menyeduh biji kopi pilihan dari petani lokal di Aceh Gayo, Toraja, dan Flores Bajawa. Dipanggang dengan tingkat sangrai pas agar ramah di lambung dan harum saat disajikan.
                                </p>
                            </div>
                            <div class="mt-6 pt-4 border-t border-[#E8E1D4] text-xs text-[#887262]">
                                Tersedia seduh manual V60 dan espresso blend
                            </div>
                        </div>
                    </div>

                    <!-- Pillar 2 (Featured elevation) -->
                    <div class="bg-[#261D18] text-[#F3EFE6] rounded-2xl overflow-hidden border border-[#3A2D25] shadow-md hover:border-[#BC5B38] transition-all flex flex-col justify-between group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#3A2D25]">
                            <img
                                src="{{ asset('images/ruang-santai.jpg') }}"
                                alt="Sudut interior kedai kopi yang hangat dengan tanaman hijau dan meja kayu"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-white bg-[#BC5B38] px-2.5 py-1 rounded-full shadow-xs">
                                Ruang Tenang & Nyaman
                            </span>
                        </div>
                        <div class="p-6 sm:p-7 flex flex-col flex-1 justify-between">
                            <div>
                                <h3 class="font-serif text-xl font-bold text-white mb-3">
                                    Ruang Ramah untuk Siapa Saja
                                </h3>
                                <p class="text-sm text-[#D9CFC0] leading-relaxed">
                                    Mau kerja mandiri (WFC), mengerjakan tugas bareng teman, atau santai bareng keluarga. Pilihan area indoor dingin ber-AC dan area semi-outdoor sejuk dikelilingi tanaman hijau.
                                </p>
                            </div>
                            <div class="mt-6 pt-4 border-t border-[#3A2D25] text-xs text-[#A89586]">
                                Colokan listrik di setiap meja & playlist santai
                            </div>
                        </div>
                    </div>

                    <!-- Pillar 3 -->
                    <div class="bg-[#FAF7F2] rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#E8E1D4]">
                            <img
                                src="{{ asset('images/camilan-pastry.jpg') }}"
                                alt="Aneka roti dan pastry segar di atas meja kayu hangat"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#853C20] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Dipanggang Setiap Pagi
                            </span>
                        </div>
                        <div class="p-6 sm:p-7 flex flex-col flex-1 justify-between">
                            <div>
                                <h3 class="font-serif text-xl font-bold text-[#1A1310] mb-3">
                                    Camilan Hangat Pendamping
                                </h3>
                                <p class="text-sm text-[#524136] leading-relaxed">
                                    Secangkir kopi nikmat semakin pas saat disandingkan dengan kudapan hangat. Mulai dari donat kentang gula halus klasik, pisang goreng wijen madu, hingga butter croissant renyah.
                                </p>
                            </div>
                            <div class="mt-6 pt-4 border-t border-[#E8E1D4] text-xs text-[#887262]">
                                Dipanggang dan disajikan segar setiap hari
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual Atmosphere Narrative Banner (Ritme Hari di Kedai) -->
                <div class="bg-[#FAF7F2] rounded-3xl p-6 sm:p-10 border border-[#E8E1D4]">
                    <div class="max-w-2xl mb-8">
                        <span class="text-xs font-semibold tracking-wider text-[#BC5B38] uppercase">Ritme Waktu di Kedai</span>
                        <h3 class="font-serif text-xl sm:text-2xl font-bold text-[#1A1310] mt-1">
                            Setiap waktu punya suasana dan kenikmatan tersendiri
                        </h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Pagi -->
                        <div class="bg-white rounded-2xl p-5 border border-[#E8E1D4] shadow-xs">
                            <div class="flex items-center gap-2 text-xs font-bold text-[#BC5B38] mb-2">
                                <span class="w-2 h-2 rounded-full bg-[#BC5B38]"></span>
                                <span>Pagi Hari: 08.00 s.d. 11.00 WITA</span>
                            </div>
                            <h4 class="font-serif font-bold text-base text-[#1A1310] mb-1.5">Awal Hari yang Tenang</h4>
                            <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed">
                                Udara sejuk di teras outdoor, aroma seduhan kopi pertama, dan croissant hangat yang baru matang untuk menyemangati harimu.
                            </p>
                        </div>

                        <!-- Siang -->
                        <div class="bg-white rounded-2xl p-5 border border-[#E8E1D4] shadow-xs">
                            <div class="flex items-center gap-2 text-xs font-bold text-[#3C503C] mb-2">
                                <span class="w-2 h-2 rounded-full bg-[#3C503C]"></span>
                                <span>Siang Produktif: 11.00 s.d. 16.00 WITA</span>
                            </div>
                            <h4 class="font-serif font-bold text-base text-[#1A1310] mb-1.5">Fokus Nyaman Tanpa Gangguan</h4>
                            <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed">
                                Ruang indoor sejuk ber-AC, stopkontak siap di setiap bangku, serta Wi-Fi 100 Mbps yang lancar untuk meeting atau tugas.
                            </p>
                        </div>

                        <!-- Sore-Malam -->
                        <div class="bg-white rounded-2xl p-5 border border-[#E8E1D4] shadow-xs">
                            <div class="flex items-center gap-2 text-xs font-bold text-[#853C20] mb-2">
                                <span class="w-2 h-2 rounded-full bg-[#853C20]"></span>
                                <span>Sore & Malam: 16.00 s.d. 22.00 WITA</span>
                            </div>
                            <h4 class="font-serif font-bold text-base text-[#1A1310] mb-1.5">Momen Rehat & Berbagi Cerita</h4>
                            <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed">
                                Lampu gantung temaram yang hangat, playlist akustik santai, serta aneka minuman non-kopi dan donat kentang hangat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Daftar Menu (#menu) -->
        <section id="menu" class="py-16 sm:py-24 bg-[#FAF7F2]">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <!-- Section Header -->
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 mb-12">
                    <div>
                        <span class="text-xs sm:text-sm font-semibold tracking-wider text-[#BC5B38] uppercase">Pilihan Seduhan & Kudapan</span>
                        <h2 class="font-serif text-2xl sm:text-4xl font-bold text-[#1A1310] mt-2">
                            Daftar Menu Santai
                        </h2>
                        <p class="text-sm sm:text-base text-[#524136] mt-1">
                            Semua harga sudah termasuk pajak dan diracik langsung saat kamu memesan.
                        </p>
                    </div>

                    <!-- Filter Tabs -->
                    <div class="flex flex-wrap items-center gap-2 bg-[#E8E1D4]/60 p-1.5 rounded-2xl">
                        <button
                            type="button"
                            data-category="all"
                            aria-pressed="true"
                            class="menu-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-medium transition-all bg-[#1A1310] text-white shadow-sm"
                        >
                            Semua Menu
                        </button>
                        <button
                            type="button"
                            data-category="coffee"
                            aria-pressed="false"
                            class="menu-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-medium transition-all bg-white text-[#524136] border border-[#E8E1D4] hover:border-[#1A1310]"
                        >
                            Kopi Pilihan
                        </button>
                        <button
                            type="button"
                            data-category="non-coffee"
                            aria-pressed="false"
                            class="menu-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-medium transition-all bg-white text-[#524136] border border-[#E8E1D4] hover:border-[#1A1310]"
                        >
                            Non-Kopi & Teh
                        </button>
                        <button
                            type="button"
                            data-category="bites"
                            aria-pressed="false"
                            class="menu-filter-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-medium transition-all bg-white text-[#524136] border border-[#E8E1D4] hover:border-[#1A1310]"
                        >
                            Camilan & Roti
                        </button>
                    </div>
                </div>

                <!-- Menu Cards Grid -->
                <div id="menu-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <!-- Item 1 (Coffee) -->
                    <div data-category="coffee" class="menu-card-item bg-white rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#FAF7F2]">
                            <img
                                src="{{ asset('images/menu-kopi-susu.jpg') }}"
                                alt="Gelas kaca es kopi susu gula aren segar dingin dengan sedotan"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#3C503C] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Signature / Favorit
                            </span>
                            <span class="absolute top-3 right-3 text-[11px] font-medium text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Dingin / Hangat
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-2">
                                    <h3 class="font-serif text-lg font-bold text-[#1A1310] leading-snug">Kopi Susu Kamu</h3>
                                    <span class="font-serif font-bold text-base text-[#BC5B38] whitespace-nowrap">Rp 20.000</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed mb-4">
                                    Espresso house blend, susu segar creamy, gula aren organik asli dengan sentuhan aroma pandan wangi.
                                </p>
                            </div>
                            <div class="pt-3 border-t border-[#F3EFE6] flex items-center justify-between">
                                <span class="text-xs text-[#887262]">Suhu: Es / Hangat</span>
                                <button
                                    type="button"
                                    data-item-name="Kopi Susu Kamu"
                                    class="open-order-btn text-xs font-semibold text-[#BC5B38] hover:text-[#A14B2B] bg-[#F8EDE7] hover:bg-[#F3EFE6] px-3.5 py-2 rounded-xl transition-colors"
                                >
                                    Pesan Cepat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 (Coffee) -->
                    <div data-category="coffee" class="menu-card-item bg-white rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#FAF7F2]">
                            <img
                                src="{{ asset('images/menu-caramel-macchiato.jpg') }}"
                                alt="Caramel macchiato dingin berbusa lembut dengan lelehan saus karamel manis gurih"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#853C20] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Manis Gurih
                            </span>
                            <span class="absolute top-3 right-3 text-[11px] font-medium text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Dingin / Hangat
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-2">
                                    <h3 class="font-serif text-lg font-bold text-[#1A1310] leading-snug">Caramel Macchiato</h3>
                                    <span class="font-serif font-bold text-base text-[#BC5B38] whitespace-nowrap">Rp 25.000</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed mb-4">
                                    Lapisan susu vanilla dingin berpadu dengan espresso pekat dan lelehan saus karamel mentega gurih.
                                </p>
                            </div>
                            <div class="pt-3 border-t border-[#F3EFE6] flex items-center justify-between">
                                <span class="text-xs text-[#887262]">Suhu: Es / Hangat</span>
                                <button
                                    type="button"
                                    data-item-name="Caramel Macchiato"
                                    class="open-order-btn text-xs font-semibold text-[#BC5B38] hover:text-[#A14B2B] bg-[#F8EDE7] hover:bg-[#F3EFE6] px-3.5 py-2 rounded-xl transition-colors"
                                >
                                    Pesan Cepat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 (Coffee) -->
                    <div data-category="coffee" class="menu-card-item bg-white rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#FAF7F2]">
                            <img
                                src="{{ asset('images/menu-v60.jpg') }}"
                                alt="Seduhan kopi manual brew V60 hangat menetes ke server kaca bening"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#3C503C] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Single Origin
                            </span>
                            <span class="absolute top-3 right-3 text-[11px] font-medium text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Hangat / Es
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-2">
                                    <h3 class="font-serif text-lg font-bold text-[#1A1310] leading-snug">Manual Brew V60</h3>
                                    <span class="font-serif font-bold text-base text-[#BC5B38] whitespace-nowrap">Rp 24.000</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed mb-4">
                                    Seduhan lambat dengan pilihan biji kopi Aceh Gayo, Flores Bajawa, atau Toraja. Body bersih dan aroma floral segar.
                                </p>
                            </div>
                            <div class="pt-3 border-t border-[#F3EFE6] flex items-center justify-between">
                                <span class="text-xs text-[#887262]">Suhu: Hangat / Es</span>
                                <button
                                    type="button"
                                    data-item-name="Manual Brew V60"
                                    class="open-order-btn text-xs font-semibold text-[#BC5B38] hover:text-[#A14B2B] bg-[#F8EDE7] hover:bg-[#F3EFE6] px-3.5 py-2 rounded-xl transition-colors"
                                >
                                    Pesan Cepat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 (Coffee) -->
                    <div data-category="coffee" class="menu-card-item bg-white rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#FAF7F2]">
                            <img
                                src="{{ asset('images/menu-cold-brew.jpg') }}"
                                alt="Kopi cold brew hitam dingin disajikan di atas es batu dalam gelas bening"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Ekstraksi 16 Jam
                            </span>
                            <span class="absolute top-3 right-3 text-[11px] font-medium text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Es Dingin
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-2">
                                    <h3 class="font-serif text-lg font-bold text-[#1A1310] leading-snug">Cold Brew Klasik</h3>
                                    <span class="font-serif font-bold text-base text-[#BC5B38] whitespace-nowrap">Rp 22.000</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed mb-4">
                                    Kopi diseduh dingin perlahan selama 16 jam. Karakter rasa sangat halus, keasaman rendah, dengan aroma dark chocolate alami.
                                </p>
                            </div>
                            <div class="pt-3 border-t border-[#F3EFE6] flex items-center justify-between">
                                <span class="text-xs text-[#887262]">Suhu: Es Dingin</span>
                                <button
                                    type="button"
                                    data-item-name="Cold Brew Klasik"
                                    class="open-order-btn text-xs font-semibold text-[#BC5B38] hover:text-[#A14B2B] bg-[#F8EDE7] hover:bg-[#F3EFE6] px-3.5 py-2 rounded-xl transition-colors"
                                >
                                    Pesan Cepat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 (Non-Coffee) -->
                    <div data-category="non-coffee" class="menu-card-item bg-white rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#FAF7F2]">
                            <img
                                src="{{ asset('images/menu-matcha-latte.jpg') }}"
                                alt="Iced matcha latte dengan perpaduan warna hijau teh matcha murni dan susu putih segar"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#3C503C] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Matcha Asli
                            </span>
                            <span class="absolute top-3 right-3 text-[11px] font-medium text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Dingin / Hangat
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-2">
                                    <h3 class="font-serif text-lg font-bold text-[#1A1310] leading-snug">Artisan Matcha Latte</h3>
                                    <span class="font-serif font-bold text-base text-[#BC5B38] whitespace-nowrap">Rp 24.000</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed mb-4">
                                    Bubuk matcha murni berkualitas dipadu susu segar lembut. Rasa earthy seimbang dengan manis tipis alami.
                                </p>
                            </div>
                            <div class="pt-3 border-t border-[#F3EFE6] flex items-center justify-between">
                                <span class="text-xs text-[#887262]">Suhu: Es / Hangat</span>
                                <button
                                    type="button"
                                    data-item-name="Artisan Matcha Latte"
                                    class="open-order-btn text-xs font-semibold text-[#BC5B38] hover:text-[#A14B2B] bg-[#F8EDE7] hover:bg-[#F3EFE6] px-3.5 py-2 rounded-xl transition-colors"
                                >
                                    Pesan Cepat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 (Non-Coffee) -->
                    <div data-category="non-coffee" class="menu-card-item bg-white rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#FAF7F2]">
                            <img
                                src="{{ asset('images/menu-cokelat-klasik.jpg') }}"
                                alt="Secangkir minuman cokelat hangat lembut kaya rasa dengan taburan bubuk cokelat"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#853C20] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Rich & Creamy
                            </span>
                            <span class="absolute top-3 right-3 text-[11px] font-medium text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Dingin / Hangat
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-2">
                                    <h3 class="font-serif text-lg font-bold text-[#1A1310] leading-snug">Cokelat Klasik Warisan</h3>
                                    <span class="font-serif font-bold text-base text-[#BC5B38] whitespace-nowrap">Rp 22.000</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed mb-4">
                                    Cokelat hitam lokal kaya rasa berpadu susu murni lembut dan taburan bubuk kakao harum di atasnya.
                                </p>
                            </div>
                            <div class="pt-3 border-t border-[#F3EFE6] flex items-center justify-between">
                                <span class="text-xs text-[#887262]">Suhu: Es / Hangat</span>
                                <button
                                    type="button"
                                    data-item-name="Cokelat Klasik Warisan"
                                    class="open-order-btn text-xs font-semibold text-[#BC5B38] hover:text-[#A14B2B] bg-[#F8EDE7] hover:bg-[#F3EFE6] px-3.5 py-2 rounded-xl transition-colors"
                                >
                                    Pesan Cepat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 7 (Non-Coffee) -->
                    <div data-category="non-coffee" class="menu-card-item bg-white rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#FAF7F2]">
                            <img
                                src="{{ asset('images/menu-berry-lemon.jpg') }}"
                                alt="Minuman soda buah beri dan lemon segar bersoda dingin dengan es batu"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Segar & Dingin
                            </span>
                            <span class="absolute top-3 right-3 text-[11px] font-medium text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Es Dingin
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-2">
                                    <h3 class="font-serif text-lg font-bold text-[#1A1310] leading-snug">Berry Lemon Fizz</h3>
                                    <span class="font-serif font-bold text-base text-[#BC5B38] whitespace-nowrap">Rp 22.000</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed mb-4">
                                    Sari lemon peras segar, selai stroberi racikan sendiri, dan soda dingin yang melegakan di tengah cuaca panas.
                                </p>
                            </div>
                            <div class="pt-3 border-t border-[#F3EFE6] flex items-center justify-between">
                                <span class="text-xs text-[#887262]">Suhu: Es Dingin</span>
                                <button
                                    type="button"
                                    data-item-name="Berry Lemon Fizz"
                                    class="open-order-btn text-xs font-semibold text-[#BC5B38] hover:text-[#A14B2B] bg-[#F8EDE7] hover:bg-[#F3EFE6] px-3.5 py-2 rounded-xl transition-colors"
                                >
                                    Pesan Cepat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 8 (Bites) -->
                    <div data-category="bites" class="menu-card-item bg-white rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#FAF7F2]">
                            <img
                                src="{{ asset('images/menu-croissant.jpg') }}"
                                alt="Pastry croissant mentega renyah kecokelatan yang dipanggang segar"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#853C20] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Fresh Baked
                            </span>
                            <span class="absolute top-3 right-3 text-[11px] font-medium text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Hangat
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-2">
                                    <h3 class="font-serif text-lg font-bold text-[#1A1310] leading-snug">Croissant Butter Renyah</h3>
                                    <span class="font-serif font-bold text-base text-[#BC5B38] whitespace-nowrap">Rp 18.000</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed mb-4">
                                    Pastry mentega berlapis renyah di luar dan lembut berserat di dalam. Sangat nikmat dicelup ke kopi hitam hangat.
                                </p>
                            </div>
                            <div class="pt-3 border-t border-[#F3EFE6] flex items-center justify-between">
                                <span class="text-xs text-[#887262]">Penyajian: Hangat</span>
                                <button
                                    type="button"
                                    data-item-name="Croissant Butter Renyah"
                                    class="open-order-btn text-xs font-semibold text-[#BC5B38] hover:text-[#A14B2B] bg-[#F8EDE7] hover:bg-[#F3EFE6] px-3.5 py-2 rounded-xl transition-colors"
                                >
                                    Pesan Cepat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 9 (Bites) -->
                    <div data-category="bites" class="menu-card-item bg-white rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#FAF7F2]">
                            <img
                                src="{{ asset('images/menu-donat-kentang.jpg') }}"
                                alt="Donat kentang bulat empuk bertabur gula halus putih manis"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#3C503C] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Teman Nostalgia
                            </span>
                            <span class="absolute top-3 right-3 text-[11px] font-medium text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Isi 2 pcs
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-2">
                                    <h3 class="font-serif text-lg font-bold text-[#1A1310] leading-snug">Donat Kentang Gula Dingin</h3>
                                    <span class="font-serif font-bold text-base text-[#BC5B38] whitespace-nowrap">Rp 12.000</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed mb-4">
                                    Donat kentang buatan tangan yang empuk dan harum, dibalut gula halus dingin yang tidak bikin serak di tenggorokan.
                                </p>
                            </div>
                            <div class="pt-3 border-t border-[#F3EFE6] flex items-center justify-between">
                                <span class="text-xs text-[#887262]">Isi: 2 pcs per porsi</span>
                                <button
                                    type="button"
                                    data-item-name="Donat Kentang Gula Dingin"
                                    class="open-order-btn text-xs font-semibold text-[#BC5B38] hover:text-[#A14B2B] bg-[#F8EDE7] hover:bg-[#F3EFE6] px-3.5 py-2 rounded-xl transition-colors"
                                >
                                    Pesan Cepat
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 10 (Bites) -->
                    <div data-category="bites" class="menu-card-item bg-white rounded-2xl overflow-hidden border border-[#E8E1D4] hover:border-[#BC5B38] transition-all flex flex-col justify-between shadow-xs group">
                        <div class="relative w-full h-48 sm:h-52 overflow-hidden bg-[#FAF7F2]">
                            <img
                                src="{{ asset('images/menu-pisang-goreng.jpg') }}"
                                alt="Kudapan pisang goreng renyah keemasan berbalut siraman madu dan taburan wijen"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                loading="lazy"
                            />
                            <span class="absolute top-3 left-3 text-[11px] font-semibold text-[#853C20] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Gurih Manis
                            </span>
                            <span class="absolute top-3 right-3 text-[11px] font-medium text-[#524136] bg-white/95 backdrop-blur-xs px-2.5 py-1 rounded-full shadow-xs">
                                Hangat Segar
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-start justify-between gap-2 mb-2">
                                    <h3 class="font-serif text-lg font-bold text-[#1A1310] leading-snug">Pisang Goreng Wijen Madu</h3>
                                    <span class="font-serif font-bold text-base text-[#BC5B38] whitespace-nowrap">Rp 16.000</span>
                                </div>
                                <p class="text-xs sm:text-sm text-[#6B5749] leading-relaxed mb-4">
                                    Pisang kepok manis berbalut adonan renyah bertabur wijen sangrai, disajikan hangat dengan siraman madu hutan murni.
                                </p>
                            </div>
                            <div class="pt-3 border-t border-[#F3EFE6] flex items-center justify-between">
                                <span class="text-xs text-[#887262]">Penyajian: Hangat Segar</span>
                                <button
                                    type="button"
                                    data-item-name="Pisang Goreng Wijen Madu"
                                    class="open-order-btn text-xs font-semibold text-[#BC5B38] hover:text-[#A14B2B] bg-[#F8EDE7] hover:bg-[#F3EFE6] px-3.5 py-2 rounded-xl transition-colors"
                                >
                                    Pesan Cepat
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Order Notice Banner -->
                <div class="mt-12 bg-[#F3EFE6] border border-[#E8E1D4] rounded-2xl p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#BC5B38] text-white flex items-center justify-center font-bold text-xl shrink-0">
                            💬
                        </div>
                        <div>
                            <h4 class="font-serif text-lg font-bold text-[#1A1310]">Ingin Pesan Dulu Sebelum Datang?</h4>
                            <p class="text-xs sm:text-sm text-[#524136]">Kirim pesananmu lebih awal lewat WhatsApp agar siap saat kamu sampai di kedai.</p>
                        </div>
                    </div>
                    <button
                        type="button"
                        onclick="window.openOrderModal()"
                        class="inline-flex items-center justify-center gap-2 bg-[#1A1310] hover:bg-[#3A2D25] text-white px-6 py-3 rounded-full text-sm font-semibold transition-colors shrink-0"
                    >
                        <span>Buat Pesanan Sekarang</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Section Ruang Santai (Gallery / Ambience Showcase) -->
        <section id="galeri" class="py-16 sm:py-24 bg-white border-t border-[#E8E1D4]">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <div class="max-w-2xl mb-12">
                    <span class="text-xs sm:text-sm font-semibold tracking-wider text-[#BC5B38] uppercase">Sudut Kedai</span>
                    <h2 class="font-serif text-2xl sm:text-4xl font-bold text-[#1A1310] mt-2 mb-3">
                        Ruang santai untuk setiap kebutuhanmu
                    </h2>
                    <p class="text-sm sm:text-base text-[#524136]">
                        Mulai dari meja komunal luas untuk kerja kelompok, sudut membaca yang tenang, hingga area outdoor dengan udara segar.
                    </p>
                </div>

                <!-- Gallery Showcase Grid (RHYTHM 2, varied layout) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Image 1 -->
                    <div class="group relative rounded-2xl overflow-hidden border border-[#E8E1D4] bg-[#FAF7F2]">
                        <img
                            src="{{ asset('images/galeri-sudut-baca.jpg') }}"
                            alt="Area tempat duduk nyaman berkayu hangat di dalam kedai"
                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300"
                            loading="lazy"
                        />
                        <div class="p-4 bg-white border-t border-[#E8E1D4]">
                            <h4 class="font-serif font-bold text-[#1A1310] text-sm">Sudut Meja Kayu & Membaca</h4>
                            <p class="text-xs text-[#887262] mt-0.5">Pencahayaan hangat untuk kenyamanan mata saat membaca.</p>
                        </div>
                    </div>

                    <!-- Image 2 -->
                    <div class="group relative rounded-2xl overflow-hidden border border-[#E8E1D4] bg-[#FAF7F2]">
                        <img
                            src="{{ asset('images/galeri-bar-seduh.jpg') }}"
                            alt="Bar kopi barista dengan mesin espresso dan peralatan manual brew"
                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300"
                            loading="lazy"
                        />
                        <div class="p-4 bg-white border-t border-[#E8E1D4]">
                            <h4 class="font-serif font-bold text-[#1A1310] text-sm">Bar Seduh Terbuka</h4>
                            <p class="text-xs text-[#887262] mt-0.5">Bisa ngobrol santai langsung dengan barista seputar biji kopi.</p>
                        </div>
                    </div>

                    <!-- Image 3 -->
                    <div class="group relative rounded-2xl overflow-hidden border border-[#E8E1D4] bg-[#FAF7F2] sm:col-span-2 lg:col-span-1">
                        <img
                            src="{{ asset('images/galeri-area-kerja.jpg') }}"
                            alt="Area kerja laptop komunal yang terang dan lega"
                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300"
                            loading="lazy"
                        />
                        <div class="p-4 bg-white border-t border-[#E8E1D4]">
                            <h4 class="font-serif font-bold text-[#1A1310] text-sm">Area Komunal WFC</h4>
                            <p class="text-xs text-[#887262] mt-0.5">Stopkontak di setiap bangku dan koneksi internet stabil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Lokasi & Jam Operasional (#lokasi) -->
        <section id="lokasi" class="py-16 sm:py-24 bg-[#FAF7F2] border-t border-[#E8E1D4]">
            <div class="max-w-6xl mx-auto px-4 sm:px-6">
                <!-- Section Header (Centered on Top) -->
                <div class="max-w-2xl mx-auto text-center mb-6 sm:mb-8">
                    <span class="text-xs sm:text-sm font-semibold tracking-wider text-[#BC5B38] uppercase">Kunjungi Kami</span>
                    <h2 class="font-serif text-2xl sm:text-4xl font-bold text-[#1A1310] mt-1.5">
                        Mampir dan rasakan suasananya
                    </h2>
                </div>

                <!-- Balanced 2-Column Cards Grid (Equal Height & Perfectly Aligned) -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                    <!-- Left Card: Alamat & Fasilitas Kedai -->
                    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-[#E8E1D4] shadow-xs flex flex-col justify-between h-full">
                        <div>
                            <!-- Header Alamat -->
                            <div class="flex items-center gap-3 mb-6 pb-6 border-b border-[#E8E1D4]">
                                <div class="w-10 h-10 rounded-xl bg-[#F8EDE7] text-[#BC5B38] flex items-center justify-center text-lg shrink-0">
                                    📍
                                </div>
                                <div>
                                    <h3 class="font-serif font-bold text-lg text-[#1A1310]">Alamat & Rute Kedai</h3>
                                    <p class="text-xs text-[#887262]">Abiansemal, Badung, Bali</p>
                                </div>
                            </div>

                            <!-- Address Info -->
                            <div class="mb-6">
                                <p class="text-sm font-medium text-[#1A1310] leading-relaxed">
                                    Abiansemal, Badung, Bali
                                </p>
                                <p class="text-xs text-[#6B5749] mt-1 leading-relaxed">
                                    Kawasan sejuk dan asri di Abiansemal, mudah dijangkau dari pusat Badung dan sekitarnya.
                                </p>
                                <div class="flex flex-wrap items-center gap-3 mt-4">
                                    <button
                                        type="button"
                                        id="copy-address-btn"
                                        class="inline-flex items-center gap-2 text-xs font-semibold bg-[#FAF7F2] hover:bg-[#F3EFE6] text-[#1A1310] border border-[#E8E1D4] px-4 py-2.5 rounded-xl transition-colors cursor-pointer"
                                    >
                                        <svg class="w-3.5 h-3.5 text-[#887262]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                        </svg>
                                        <span>Salin Alamat</span>
                                    </button>
                                    <a
                                        href="https://maps.google.com/?q=Abiansemal+Badung+Bali"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-2 text-xs font-semibold bg-[#BC5B38] hover:bg-[#A14B2B] text-white px-4 py-2.5 rounded-xl transition-colors"
                                    >
                                        <span>Buka di Google Maps</span>
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Facilities Section (Aligned at bottom of left card) -->
                        <div class="pt-6 border-t border-[#E8E1D4]">
                            <h4 class="font-serif font-bold text-xs uppercase tracking-wider text-[#887262] mb-3">Fasilitas yang Tersedia</h4>
                            <div class="grid grid-cols-2 gap-2.5 text-xs text-[#524136]">
                                <div class="flex items-center gap-2">
                                    <span class="text-emerald-600 font-bold">✓</span>
                                    <span>Wi-Fi Cepat 100 Mbps</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-emerald-600 font-bold">✓</span>
                                    <span>Stopkontak di Tiap Meja</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-emerald-600 font-bold">✓</span>
                                    <span>Musholla & Tempat Wudhu</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-emerald-600 font-bold">✓</span>
                                    <span>Toilet Bersih & Wangi</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-emerald-600 font-bold">✓</span>
                                    <span>Parkir Mobil & Motor</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-emerald-600 font-bold">✓</span>
                                    <span>Area Ramah Hewan (Outdoor)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Card: Jadwal Operasional & Kontak Barista -->
                    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-[#E8E1D4] shadow-xs flex flex-col justify-between h-full">
                        <div>
                            <!-- Header Jadwal -->
                            <div class="flex items-center gap-3 mb-6 pb-6 border-b border-[#E8E1D4]">
                                <div class="w-10 h-10 rounded-xl bg-[#EAF0E9] text-[#3C503C] flex items-center justify-center text-lg shrink-0">
                                    ⏰
                                </div>
                                <div>
                                    <h3 class="font-serif font-bold text-lg text-[#1A1310]">Jadwal Operasional</h3>
                                    <p class="text-xs text-[#887262]">Siap menyambut kedatanganmu setiap hari</p>
                                </div>
                            </div>

                            <!-- Schedule Rows -->
                            <div class="space-y-3.5 text-sm">
                                <div class="flex items-center justify-between py-2 border-b border-[#F3EFE6]">
                                    <span class="font-medium text-[#1A1310]">Senin s.d. Kamis</span>
                                    <span class="font-semibold text-[#524136]">08.00 - 22.00 WITA</span>
                                </div>
                                <div class="flex items-center justify-between py-2 border-b border-[#F3EFE6]">
                                    <span class="font-medium text-[#1A1310]">Jumat</span>
                                    <span class="font-semibold text-[#524136]">08.00 - 23.00 WITA</span>
                                </div>
                                <div class="flex items-center justify-between py-2.5 border-b border-[#F3EFE6] bg-[#FAF7F2] px-3.5 rounded-xl">
                                    <span class="font-semibold text-[#BC5B38]">Sabtu (Malam Minggu)</span>
                                    <span class="font-bold text-[#BC5B38]">07.30 - 23.30 WITA</span>
                                </div>
                                <div class="flex items-center justify-between py-2 border-b border-[#F3EFE6]">
                                    <span class="font-medium text-[#1A1310]">Minggu (Pagi Santai)</span>
                                    <span class="font-semibold text-[#524136]">07.00 - 22.00 WITA</span>
                                </div>
                            </div>
                        </div>

                        <!-- Barista Assistance Container -->
                        <div class="pt-6 border-t border-[#E8E1D4] flex flex-col sm:flex-row items-center justify-between gap-4">
                            <div class="text-xs text-[#887262] text-center sm:text-left">
                                <p class="font-semibold text-[#1A1310]">Butuh info meja atau katering?</p>
                                <p>Hubungi barista kami via WhatsApp</p>
                            </div>
                            <button
                                type="button"
                                onclick="window.openOrderModal()"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-[#1A1310] hover:bg-[#3A2D25] text-white px-5 py-2.5 rounded-full text-xs font-semibold transition-colors cursor-pointer"
                            >
                                <span>Hubungi Barista</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Tanya Jawab (#faq) - R-28 compliant real questions -->
        <section id="faq" class="py-16 sm:py-24 bg-white border-t border-[#E8E1D4]">
            <div class="max-w-4xl mx-auto px-4 sm:px-6">
                <div class="text-center mb-12">
                    <span class="text-xs sm:text-sm font-semibold tracking-wider text-[#BC5B38] uppercase">Informasi Kedai</span>
                    <h2 class="font-serif text-2xl sm:text-4xl font-bold text-[#1A1310] mt-2 mb-3">
                        Pertanyaan yang Sering Ditanyakan
                    </h2>
                    <p class="text-sm sm:text-base text-[#524136]">
                        Hal-hal praktis yang sering ditanyakan oleh teman-teman sebelum mampir ke Ngopi Sama Kamu.
                    </p>
                </div>

                <div class="space-y-4">
                    <!-- Q1 -->
                    <div class="border border-[#E8E1D4] rounded-2xl overflow-hidden bg-[#FAF7F2]">
                        <button
                            type="button"
                            aria-expanded="false"
                            class="faq-accordion-btn w-full p-5 text-left font-serif font-bold text-base text-[#1A1310] flex items-center justify-between gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#BC5B38]"
                        >
                            <span>Apakah nyaman untuk kerja seharian (Work From Cafe)?</span>
                            <svg class="faq-icon w-5 h-5 text-[#887262] transition-transform duration-200 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden p-5 pt-0 text-sm text-[#524136] leading-relaxed border-t border-[#E8E1D4]/60">
                            Sangat nyaman. Setiap meja di area indoor maupun semi-outdoor kami lengkapi dengan stopkontak listrik, kursi duduk yang ergonomis, serta koneksi Wi-Fi berkecepatan 100 Mbps. Musik latar kami atur di volume santai agar tidak mengganggu fokus kerja atau percakapanmu.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="border border-[#E8E1D4] rounded-2xl overflow-hidden bg-[#FAF7F2]">
                        <button
                            type="button"
                            aria-expanded="false"
                            class="faq-accordion-btn w-full p-5 text-left font-serif font-bold text-base text-[#1A1310] flex items-center justify-between gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#BC5B38]"
                        >
                            <span>Apakah ada pilihan minuman untuk yang tidak minum kopi?</span>
                            <svg class="faq-icon w-5 h-5 text-[#887262] transition-transform duration-200 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden p-5 pt-0 text-sm text-[#524136] leading-relaxed border-t border-[#E8E1D4]/60">
                            Tentu ada banyak pilihan. Kami menyediakan Artisan Matcha Latte, Cokelat Klasik Warisan, aneka teh seduh beraroma menenangkan (seperti Earl Grey dan Chamomile), hingga minuman segar soda buah seperti Berry Lemon Fizz.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="border border-[#E8E1D4] rounded-2xl overflow-hidden bg-[#FAF7F2]">
                        <button
                            type="button"
                            aria-expanded="false"
                            class="faq-accordion-btn w-full p-5 text-left font-serif font-bold text-base text-[#1A1310] flex items-center justify-between gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#BC5B38]"
                        >
                            <span>Apakah boleh membawa hewan peliharaan (pet friendly)?</span>
                            <svg class="faq-icon w-5 h-5 text-[#887262] transition-transform duration-200 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden p-5 pt-0 text-sm text-[#524136] leading-relaxed border-t border-[#E8E1D4]/60">
                            Boleh banget! Hewan peliharaan dipersilakan berada di area semi-outdoor dan teras taman kami. Kami juga dengan senang hati menyediakan mangkuk air minum untuk anabul kesayanganmu. Mohon tetap menjaga kenyamanan sesama pengunjung ya.
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="border border-[#E8E1D4] rounded-2xl overflow-hidden bg-[#FAF7F2]">
                        <button
                            type="button"
                            aria-expanded="false"
                            class="faq-accordion-btn w-full p-5 text-left font-serif font-bold text-base text-[#1A1310] flex items-center justify-between gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#BC5B38]"
                        >
                            <span>Bisakah reservasi tempat untuk kumpul komunitas atau rapat kecil?</span>
                            <svg class="faq-icon w-5 h-5 text-[#887262] transition-transform duration-200 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="hidden p-5 pt-0 text-sm text-[#524136] leading-relaxed border-t border-[#E8E1D4]/60">
                            Bisa. Kamu bisa memesan meja komunal minimal H-1 melalui kontak WhatsApp kami tanpa dikenakan biaya pemesanan meja tambahan. Kami siap menyiapkan meja sesuai jumlah teman-teman yang akan hadir.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-[#1A1310] text-[#F3EFE6] pt-16 pb-12 border-t border-[#3A2D25]">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-[#3A2D25]">
                <!-- Brand Info -->
                <div class="md:col-span-6 flex flex-col items-start">
                    <div class="flex items-center gap-3 mb-4">
                        @if (file_exists(public_path('images/logo.png')))
                            <img src="{{ asset('images/logo.png') }}" alt="Logo Ngopi Sama Kamu" class="w-9 h-9 rounded-full object-cover ring-1 ring-[#3A2D25]">
                        @else
                            <div class="w-9 h-9 rounded-full bg-[#BC5B38] text-white flex items-center justify-center font-serif text-base font-bold">
                                ☕
                            </div>
                        @endif
                        <span class="font-serif text-2xl font-bold tracking-tight text-white">
                            Ngopi Sama Kamu
                        </span>
                    </div>
                    <p class="text-sm text-[#A89586] max-w-sm leading-relaxed mb-6">
                        Kedai kopi dengan suasana santai, tempat kamu bisa rehat sejenak dari riuhnya kota dan menikmati seduhan kopi nusantara yang ramah di hati.
                    </p>
                    <div class="flex items-center gap-4 text-xs text-[#D9CFC0]">
                        <span class="inline-flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            <span>Buka Hari Ini 08.00 s.d. 22.00 WITA</span>
                        </span>
                    </div>
                </div>

                <!-- Fast Nav Links -->
                <div class="md:col-span-3">
                    <h4 class="font-serif font-bold text-white text-sm mb-4">Jelajahi Kedai</h4>
                    <ul class="space-y-2.5 text-sm text-[#A89586]">
                        <li><a href="#tentang" class="hover:text-white transition-colors">Suasana & Cerita</a></li>
                        <li><a href="#menu" class="hover:text-white transition-colors">Daftar Menu</a></li>
                        <li><a href="#galeri" class="hover:text-white transition-colors">Sudut Kedai</a></li>
                        <li><a href="#lokasi" class="hover:text-white transition-colors">Lokasi & Rute</a></li>
                        <li><a href="#faq" class="hover:text-white transition-colors">Tanya Jawab</a></li>
                    </ul>
                </div>

                <!-- Contact & Social -->
                <div class="md:col-span-3">
                    <h4 class="font-serif font-bold text-white text-sm mb-4">Kontak & Media Sosial</h4>
                    <ul class="space-y-3 text-sm text-[#A89586]">
                        <li>
                            <a
                                href="https://wa.me/6281529434240?text=Halo%20Ngopi%20Sama%20Kamu"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 hover:text-[#BC5B38] transition-colors"
                            >
                                <span>📱 WhatsApp: 0815-2943-4240</span>
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://instagram.com/ngopisamakamu"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 hover:text-[#BC5B38] transition-colors"
                            >
                                <span>📷 Instagram: @ngopisamakamu</span>
                            </a>
                        </li>
                        <li class="text-xs text-[#887262] leading-relaxed pt-2">
                            Abiansemal, Badung, Bali
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-[#887262]">
                <p>© 2026 Ngopi Sama Kamu. Semua hak cipta dilindungi.</p>
                <p>Diseduh dengan penuh cinta untuk harimu.</p>
            </div>
        </div>
    </footer>

    <!-- Interactive WhatsApp Order Modal (Accessible & Fully Functional, R-26) -->
    <div id="order-modal" class="hidden fixed inset-0 z-50 overflow-y-auto" role="dialog" aria-modal="true" aria-labelledby="order-modal-title">
        <!-- Backdrop -->
        <div id="order-modal-backdrop" class="fixed inset-0 bg-[#1A1310]/70 backdrop-blur-xs transition-opacity"></div>

        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
            <div class="relative transform overflow-hidden rounded-3xl bg-[#FAF7F2] text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border border-[#E8E1D4]">
                <!-- Modal Header -->
                <div class="bg-white px-6 py-5 border-b border-[#E8E1D4] flex items-center justify-between">
                    <div>
                        <h3 id="order-modal-title" class="font-serif text-lg sm:text-xl font-bold text-[#1A1310]">
                            Pesan Kopi Praktis via WhatsApp
                        </h3>
                        <p class="text-xs text-[#887262]">Pilih menu favoritmu, pesan kami siapkan saat kamu tiba.</p>
                    </div>
                    <button
                        type="button"
                        id="order-modal-close"
                        aria-label="Tutup form pemesanan"
                        class="p-2 text-[#524136] hover:text-[#1A1310] rounded-xl hover:bg-[#FAF7F2] focus:outline-none focus-visible:ring-2 focus-visible:ring-[#BC5B38]"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Modal Body Form -->
                <form id="order-form" class="p-6 space-y-4">
                    <!-- Customer Name -->
                    <div>
                        <label for="order-name" class="block text-xs font-semibold text-[#1A1310] mb-1">
                            Nama Kamu
                        </label>
                        <input
                            type="text"
                            id="order-name"
                            required
                            placeholder="Contoh: Dimas / Sarah"
                            class="w-full px-4 py-2.5 bg-white border border-[#D9CFC0] rounded-xl text-sm text-[#1A1310] placeholder-[#A89586] focus:outline-none focus:border-[#BC5B38]"
                        />
                    </div>

                    <!-- Select Menu Item -->
                    <div>
                        <label for="order-item-select" class="block text-xs font-semibold text-[#1A1310] mb-1">
                            Pilih Menu
                        </label>
                        <select
                            id="order-item-select"
                            class="w-full px-4 py-2.5 bg-white border border-[#D9CFC0] rounded-xl text-sm text-[#1A1310] focus:outline-none focus:border-[#BC5B38]"
                        >
                            <option value="Kopi Susu Kamu">Kopi Susu Kamu (Rp 20.000)</option>
                            <option value="Caramel Macchiato">Caramel Macchiato (Rp 25.000)</option>
                            <option value="Manual Brew V60">Manual Brew V60 (Rp 24.000)</option>
                            <option value="Cold Brew Klasik">Cold Brew Klasik (Rp 22.000)</option>
                            <option value="Artisan Matcha Latte">Artisan Matcha Latte (Rp 24.000)</option>
                            <option value="Cokelat Klasik Warisan">Cokelat Klasik Warisan (Rp 22.000)</option>
                            <option value="Berry Lemon Fizz">Berry Lemon Fizz (Rp 22.000)</option>
                            <option value="Croissant Butter Renyah">Croissant Butter Renyah (Rp 18.000)</option>
                            <option value="Donat Kentang Gula Dingin">Donat Kentang Gula Dingin (Rp 12.000)</option>
                            <option value="Pisang Goreng Wijen Madu">Pisang Goreng Wijen Madu (Rp 16.000)</option>
                        </select>
                    </div>

                    <!-- Suhu / Temperature -->
                    <div id="order-temp-container">
                        <span class="block text-xs font-semibold text-[#1A1310] mb-1.5">Pilihan Suhu Minuman</span>
                        <div class="grid grid-cols-2 gap-3 text-xs">
                            <label class="flex items-center gap-2 p-2.5 bg-white border border-[#D9CFC0] has-[:checked]:border-[#BC5B38] has-[:checked]:bg-[#FAF7F2] rounded-xl cursor-pointer hover:border-[#BC5B38] transition-colors">
                                <input type="radio" name="order_temp" value="Dingin (Es)" checked class="text-[#BC5B38] focus:ring-[#BC5B38]">
                                <span class="font-medium text-[#1A1310]">Dingin (Es Batu)</span>
                            </label>
                            <label class="flex items-center gap-2 p-2.5 bg-white border border-[#D9CFC0] has-[:checked]:border-[#BC5B38] has-[:checked]:bg-[#FAF7F2] rounded-xl cursor-pointer hover:border-[#BC5B38] transition-colors">
                                <input type="radio" name="order_temp" value="Hangat" class="text-[#BC5B38] focus:ring-[#BC5B38]">
                                <span class="font-medium text-[#1A1310]">Hangat (Hot)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Sugar Level -->
                    <div id="order-sugar-container">
                        <span class="block text-xs font-semibold text-[#1A1310] mb-1.5">Tingkat Manis (Gula)</span>
                        <div class="grid grid-cols-3 gap-2 text-xs">
                            <label class="flex items-center justify-center p-2 bg-white border border-[#D9CFC0] has-[:checked]:border-[#BC5B38] has-[:checked]:bg-[#FAF7F2] rounded-xl cursor-pointer hover:border-[#BC5B38] text-center transition-colors">
                                <input type="radio" name="order_sugar" value="Normal" checked class="sr-only peer">
                                <span class="peer-checked:font-bold peer-checked:text-[#BC5B38]">Normal</span>
                            </label>
                            <label class="flex items-center justify-center p-2 bg-white border border-[#D9CFC0] has-[:checked]:border-[#BC5B38] has-[:checked]:bg-[#FAF7F2] rounded-xl cursor-pointer hover:border-[#BC5B38] text-center transition-colors">
                                <input type="radio" name="order_sugar" value="Sedikit Gula (Less Sugar)" class="sr-only peer">
                                <span class="peer-checked:font-bold peer-checked:text-[#BC5B38]">Sedikit</span>
                            </label>
                            <label class="flex items-center justify-center p-2 bg-white border border-[#D9CFC0] has-[:checked]:border-[#BC5B38] has-[:checked]:bg-[#FAF7F2] rounded-xl cursor-pointer hover:border-[#BC5B38] text-center transition-colors">
                                <input type="radio" name="order_sugar" value="Tanpa Gula (No Sugar)" class="sr-only peer">
                                <span class="peer-checked:font-bold peer-checked:text-[#BC5B38]">Tanpa Gula</span>
                            </label>
                        </div>
                    </div>

                    <!-- Quantity & Notes -->
                    <div class="grid grid-cols-3 gap-3">
                        <div class="col-span-1">
                            <label for="order-qty" class="block text-xs font-semibold text-[#1A1310] mb-1">
                                Jumlah
                            </label>
                            <input
                                type="number"
                                id="order-qty"
                                min="1"
                                max="20"
                                value="1"
                                class="w-full px-3 py-2 bg-white border border-[#D9CFC0] rounded-xl text-sm text-[#1A1310] focus:outline-none focus:border-[#BC5B38]"
                            />
                        </div>
                        <div class="col-span-2">
                            <label for="order-notes" class="block text-xs font-semibold text-[#1A1310] mb-1">
                                Catatan Khusus
                            </label>
                            <input
                                type="text"
                                id="order-notes"
                                placeholder="Misal: takeaway / duduk di outdoor"
                                class="w-full px-3 py-2 bg-white border border-[#D9CFC0] rounded-xl text-sm text-[#1A1310] placeholder-[#A89586] focus:outline-none focus:border-[#BC5B38]"
                            />
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button
                            type="submit"
                            class="w-full inline-flex items-center justify-center gap-2 bg-[#25D366] hover:bg-[#20ba59] text-white py-3 rounded-xl text-sm font-semibold transition-colors shadow-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-emerald-500"
                        >
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.146-.539-1.748-.724-2.884-2.485-2.971-2.602-.088-.117-.714-.951-.714-1.815 0-.865.452-1.29.613-1.464.161-.174.351-.218.468-.218.117 0 .234.001.336.006.108.004.253-.041.395.3.144.346.497 1.213.541 1.301.044.088.073.19.015.305-.058.117-.088.19-.175.292-.088.102-.185.228-.264.306-.088.087-.18.182-.078.358.102.175.455.751.976 1.215.672.598 1.238.784 1.413.872.175.088.278.073.38-.044.103-.117.439-.511.556-.687.117-.175.234-.146.395-.088.161.058 1.023.482 1.198.57.175.088.292.131.336.204.044.074.044.425-.1.83z"/>
                            </svg>
                            <span>Lanjut Kirim ke WhatsApp</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
