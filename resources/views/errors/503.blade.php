<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Sedang Diperbaiki | ISFEST 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;900&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-cinzel { font-family: 'Cinzel', serif; }
        
        /* Animasi Mengambang untuk Maskot */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float-custom {
            animation: float 4s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-[#0a101d] text-slate-200">
    <main class="min-h-screen flex flex-col items-center justify-center p-4 relative overflow-hidden">
        
        {{-- Background --}}
        <div class="fixed inset-0 z-0 pointer-events-none">
            {{-- Sesuaikan nama gambar background Anda jika berbeda (misal: Asset/background.png) --}}
            <img src="{{ asset('background-leaderboard.png') }}" alt="Mystical Background" class="w-full h-full object-cover object-center" />
            <div class="absolute inset-0 bg-[#0a101d]/80 backdrop-blur-[4px]"></div>
        </div>

        {{-- Konten Utama --}}
        <div class="relative z-10 flex flex-col items-center max-w-lg w-full px-6 py-12 text-center">
            
            <div class="relative w-40 h-40 mb-8 animate-float-custom">
                {{-- Saya tambahkan fallback onerror jika mascot-side.png tidak ada, ia akan memuat mascot-wand.png --}}
                <img 
                    src="{{ asset('mascot/mascot-side.png') }}" 
                    alt="Mascot Maintenance" 
                    class="w-full h-full object-contain"
                    onerror="this.src='{{ asset('mascot-wand.png') }}'" 
                />
            </div>

            <h1 class="font-cinzel text-4xl md:text-5xl lg:text-6xl font-black text-[#ffec1f] mb-4 drop-shadow-lg">
                Sistem Sedang Diperbaiki
            </h1>
            
            <p class="text-slate-400 text-sm md:text-base leading-relaxed mb-8 max-w-sm mx-auto">
                Para penyihir sedang memperbarui mantra di dalam sistem. Arena akan kembali dibuka dalam waktu singkat.
            </p>

            {{-- Animasi Loading (Titik Melompat) --}}
            <div class="flex gap-2.5 justify-center">
                {{-- Di HTML biasa, kita menggunakan inline style untuk delay animasi --}}
                <div class="w-2.5 h-2.5 rounded-full bg-[#ffec1f] animate-bounce" style="animation-delay: -0.3s; box-shadow: 0 0 10px rgba(255,236,31,0.5);"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-[#ffec1f] animate-bounce" style="animation-delay: -0.15s; box-shadow: 0 0 10px rgba(255,236,31,0.5);"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-[#ffec1f] animate-bounce" style="box-shadow: 0 0 10px rgba(255,236,31,0.5);"></div>
            </div>
        </div>

    </main>
</body>
</html>