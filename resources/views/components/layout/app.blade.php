@props(['title' => 'The Grand Wizarding Conquest'])

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  {{-- Favicon otomatis dipaksa HTTPS jika di live server lewat AppServiceProvider --}}
  <link rel="icon" type="image/png" href="{{ asset('Asset/logo-isfest.png') }}" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> ISFEST 2026 | {{ $title }}</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Amarante&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  
  <style>
    body { font-family: 'Inter', sans-serif; background-color: #0b1120; color: #f8fafc; }
    .font-amarante { font-family: 'Amarante', serif; }

    @keyframes bg-pan { 0% { transform: scale(1.05); filter: brightness(0.6); } 100% { transform: scale(1); filter: brightness(0.7); } }
    .animate-bg-pan { animation: bg-pan 4s ease-out forwards; }

    /* Input Global Style agar semua komponen form bisa membaca */
    .input-dark { background-color: #0b1120; border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 0.75rem; color: #f8fafc; transition: all 0.3s ease; }
    .input-dark:focus { outline: none; border-color: #f59e0b; box-shadow: 0 0 0 1px #f59e0b; }
    .input-dark::placeholder { color: #475569; }
    input[type=file]::file-selector-button { background-color: #1e293b; color: #94a3b8; border: 1px solid rgba(255,255,255,0.1); padding: 0.5rem 1rem; border-radius: 0.5rem; cursor: pointer; font-weight: 500; transition: all 0.2s; margin-right: 1rem; }
    input[type=file]::file-selector-button:hover { background-color: #334155; color: #f8fafc; }

    ::-webkit-scrollbar { width: 5px; }
    ::-webkit-scrollbar-track { background: #0b1120; }
    ::-webkit-scrollbar-thumb { background: #334155; border-radius: 10px; }
  </style>
</head>
<body class="selection:bg-amber-500/20 selection:text-amber-400 min-h-screen flex flex-col">

  {{-- BACKGROUND LAYER GLOBAL --}}
  <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden bg-[#0a101d]">
      <img src="{{ asset('backgrounds/background.png') }}" alt="Mystical Forest" class="absolute inset-0 w-full h-full object-cover object-center animate-bg-pan" />
      <div class="absolute inset-0 bg-gradient-to-b from-[#0a101d]/60 via-[#0a101d]/80 to-[#0a101d]"></div>
  </div>

  {{-- NAVBAR GLOBAL --}}
  <div class="relative z-40">
    @include('navbar')
  </div>

  {{-- KONTEN DINAMIS YANG AKAN BERUBAH-UBAH --}}
  <main class="flex-grow relative z-30">
      {{ $slot }}
  </main>

  {{-- FOOTER GLOBAL --}}
  <div class="relative z-30">
    @include('footer')
  </div>

</body>
</html>