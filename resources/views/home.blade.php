<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <link rel="icon" type="image/png" href="{{ asset('Asset/logo-isfest.png') }}" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ISFEST 2026 | The Grand Wizarding Conquest</title>
  <script src="https://cdn.tailwindcss.com"></script>
  
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Amarante&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
  
  <style>
    body { font-family: 'Inter', sans-serif; background-color: #0a101d; }
    .font-amarante { font-family: 'Amarante', serif; }

    /* =========================================
       ANIMASI & GAYA TEKS
       ========================================= */

    .ppt-text-style {
      color: #ffd700; 
      text-shadow: 4px 6px 4px rgba(0, 0, 0, 0.7); 
    }

    @keyframes text-reveal {
      0% { opacity: 0; transform: scale(0.9); filter: blur(10px); }
      100% { opacity: 1; transform: scale(1); filter: blur(0px); }
    }

    @keyframes bg-focus {
      0% { transform: scale(1.1); filter: brightness(0.5); }
      100% { transform: scale(1); filter: brightness(0.8); }
    }

    .animate-reveal { animation: text-reveal 2s ease-out 0.5s forwards; opacity: 0; }
    .animate-bg-focus { animation: bg-focus 4s ease-out forwards; }

    .glass-nav {
      background: rgba(10, 16, 29, 0.3);
      backdrop-filter: blur(15px);
      border-bottom: 1px solid rgba(255, 236, 31, 0.1);
    }
    
    ::-webkit-scrollbar { width: 5px; }
    ::-webkit-scrollbar-track { background: #0a101d; }
    ::-webkit-scrollbar-thumb { background: #334155; border-radius: 10px; }
  </style>
</head>
<body class="text-slate-200 overflow-x-hidden selection:bg-[#ffec1f]/20 selection:text-[#ffec1f]">

  {{-- BACKGROUND LAYER --}}
  <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden bg-[#0a101d]">
      <img 
        src="{{ asset('backgrounds/background.png') }}" 
        alt="Mystical Forest" 
        class="absolute inset-0 w-full h-full object-cover object-center animate-bg-focus" 
      />
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#0a101d]/40 to-[#0a101d]"></div>
  </div>

  {{-- NAVBAR --}}
  <div class="relative z-40">
    @include('navbar')
  </div>

  {{-- HERO SECTION --}}
  <section class="relative z-30 min-h-[calc(100vh-5rem)] flex flex-col items-center justify-center text-center px-6 overflow-hidden">
    
    <div class="max-w-5xl mx-auto w-full flex flex-col items-center justify-center animate-reveal">
      
      {{-- Maskot Utama (Di tengah layar) --}}
      {{-- PENYESUAIAN: Menambahkan mt-24 (margin-top besar) agar turun dan bubble tidak tertutup navbar --}}
      <div class="w-48 sm:w-64 md:w-80 lg:w-96 relative z-50 mt-20 md:mt-28">
          
          <div class="absolute inset-0 bg-gradient-to-tr from-[#ffec1f]/10 to-transparent rounded-full blur-[60px] pointer-events-none"></div>
          
          @include('components.mascot')
      </div>

    </div>

  </section>

  {{-- FOOTER --}}
  <div class="relative z-30">
    @include('footer')
  </div>

</body>
</html>