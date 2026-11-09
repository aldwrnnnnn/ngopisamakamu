<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Tidak Ditemukan | Ngopi Sama Kamu</title>

    <!-- Google Fonts: Fraunces & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400..700;1,9..144,400..700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FAF7F2] text-[#1A1310] font-sans min-h-screen flex flex-col justify-between antialiased selection:bg-[#BC5B38] selection:text-white">

    <!-- Minimal Header -->
    <header class="py-6 px-4 border-b border-[#E8E1D4]">
        <div class="max-w-4xl mx-auto flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-full bg-[#1A1310] text-[#FAF7F2] flex items-center justify-center font-serif text-base font-bold shadow-xs group-hover:bg-[#BC5B38] transition-colors">
                    ☕
                </div>
                <span class="font-serif text-xl font-bold tracking-tight text-[#1A1310]">
                    Ngopi Sama Kamu
                </span>
            </a>
            <a href="{{ url('/') }}" class="text-xs sm:text-sm font-medium text-[#524136] hover:text-[#BC5B38] transition-colors">
                ← Ke Beranda
            </a>
        </div>
    </header>

    <!-- Main Error Content -->
    <main class="flex-1 flex items-center justify-center px-4 py-16">
        <div class="max-w-md w-full text-center">
            <span class="inline-block text-5xl sm:text-6xl mb-4">☕</span>
            <div class="inline-block px-3 py-1 rounded-full bg-[#EAF0E9] text-[#3C503C] text-xs font-semibold tracking-wider uppercase mb-3">
                Error 404
            </div>
            <h1 class="font-serif text-2xl sm:text-4xl font-bold text-[#1A1310] mb-3">
                Cangkir kopinya belum tersedia
            </h1>
            <p class="text-sm sm:text-base text-[#524136] leading-relaxed mb-8">
                Halaman yang kamu cari sepertinya belum diseduh atau sudah pindah meja. Yuk kembali ke beranda untuk melihat daftar menu hangat kami.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a
                    href="{{ url('/') }}"
                    class="w-full sm:w-auto inline-flex items-center justify-center bg-[#BC5B38] hover:bg-[#A14B2B] text-white px-6 py-3 rounded-full text-sm font-semibold transition-colors shadow-sm"
                >
                    Kembali ke Beranda
                </a>
                <a
                    href="https://wa.me/6281529434240?text=Halo%20Ngopi%20Sama%20Kamu"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="w-full sm:w-auto inline-flex items-center justify-center bg-white hover:bg-[#F3EFE6] text-[#1A1310] border border-[#D9CFC0] px-6 py-3 rounded-full text-sm font-semibold transition-colors"
                >
                    Hubungi Barista
                </a>
            </div>
        </div>
    </main>

    <!-- Minimal Footer -->
    <footer class="py-6 px-4 border-t border-[#E8E1D4] text-center text-xs text-[#887262]">
        <p>© 2026 Ngopi Sama Kamu. Abiansemal, Badung, Bali.</p>
    </footer>

</body>
</html>
