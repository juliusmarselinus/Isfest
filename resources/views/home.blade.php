<x-layout.app title="The Grand Wizarding Conquest">
  
  {{-- HERO SECTION --}}
  <section class="min-h-[calc(100vh-5rem)] flex flex-col items-center justify-center text-center px-6 overflow-hidden">
    
    <div class="max-w-5xl mx-auto w-full flex flex-col items-center justify-center animate-reveal">
      
      {{-- Maskot Utama (Di tengah layar) --}}
      {{-- mt-20 md:mt-28 agar turun dan bubble tidak tertutup navbar --}}
      <div class="w-48 sm:w-64 md:w-80 lg:w-96 relative z-50 mt-20 md:mt-28">
          
          {{-- Efek cahaya lembut di belakang maskot --}}
          <div class="absolute inset-0 bg-gradient-to-tr from-[#ffec1f]/10 to-transparent rounded-full blur-[60px] pointer-events-none"></div>
          
          @include('components.mascot')
      </div>

    </div>

  </section>

</x-layout.app>