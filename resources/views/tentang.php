<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tentang — ISFEST 2026</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&display=swap" rel="stylesheet" />
  <style>body { font-family:'Inter',sans-serif; }</style>
</head>
<body class="bg-[#0a101d] text-slate-200 min-h-screen flex items-center justify-center">
  <div class="text-center space-y-4">
    <h1 class="text-4xl font-black text-white">Halaman <span style="background:linear-gradient(90deg,#ffec1f,#f59e0b);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">Tentang</span></h1>
    <p class="text-slate-400">Coming soon — sedang dibangun 🧙</p>
    <a href="{{ route('home') }}" class="inline-block mt-4 px-6 py-2.5 rounded-xl bg-[#f59e0b] text-slate-950 font-bold text-sm hover:bg-[#d97706] transition-all">← Kembali ke Home</a>
  </div>
</body>


{{-- ===================== TENTANG SINGKAT ===================== --}}
  <section class="relative z-10 py-24">
    <div class="max-w-7xl mx-auto px-6">

      {{-- Label + judul --}}
      <div class="text-center mb-14">
        <span class="inline-block px-4 py-1.5 rounded-full glass border border-[#ffec1f]/20 text-[#ffec1f] text-xs font-bold tracking-widest uppercase mb-5">
          Tentang ISFEST
        </span>
        <h2 class="text-4xl md:text-5xl font-black text-white mb-5">
          Apa itu <span class="text-shimmer">ISFEST?</span>
        </h2>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto leading-relaxed">
          ISFEST adalah event tahunan yang mempertemukan talenta-talenta terbaik di bidang teknologi informasi dari seluruh Indonesia untuk berkompetisi, berinovasi, dan berkolaborasi.
        </p>
      </div>

      {{-- 3 kartu --}}
      <div class="grid md:grid-cols-3 gap-6 mb-12">

        {{-- Kompetisi --}}
        <div class="glass rounded-2xl p-8 card-lift">
          <div class="w-14 h-14 rounded-2xl bg-[#ffec1f]/10 border border-[#ffec1f]/20 flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-[#ffec1f]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Kompetisi Bergengsi</h3>
          <p class="text-slate-400 text-sm leading-relaxed">
            Adu kemampuan di bidang Data Science, UI/UX, Web Development, dan Business Case dengan hadiah total jutaan rupiah.
          </p>
        </div>

        {{-- Networking --}}
        <div class="glass rounded-2xl p-8 card-lift">
          <div class="w-14 h-14 rounded-2xl bg-blue-500/10 border border-blue-500/20 flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Networking Luas</h3>
          <p class="text-slate-400 text-sm leading-relaxed">
            Terhubung dengan ratusan mahasiswa dari berbagai universitas dan bangun jaringan profesionalmu sejak dini.
          </p>
        </div>

        {{-- Inovasi --}}
        <div class="glass rounded-2xl p-8 card-lift">
          <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-white mb-3">Inovasi Nyata</h3>
          <p class="text-slate-400 text-sm leading-relaxed">
            Hadirkan ide-ide segar dan solusi inovatif untuk permasalahan nyata di industri teknologi masa kini.
          </p>
        </div>

      </div>

      {{-- CTA ke halaman tentang --}}
      <div class="text-center">
        <a href="{{ route('tentang') }}"
           class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl glass border border-slate-600/40 text-slate-300 font-semibold text-sm hover:border-[#ffec1f]/40 hover:text-[#ffec1f] transition-all">
          Selengkapnya tentang ISFEST →
        </a>
      </div>

    </div>
  </section>
</html>