{{-- ================= SCROLL PROGRESS ================= --}}
<div
    id="scroll-progress"
    class="fixed top-0 left-0 z-[60] h-[3px] rounded-full w-0"
    style="
        background: linear-gradient(90deg, #ffec1f, #ffa500);
        box-shadow: 0 0 8px rgba(255,236,31,.18);
        transition: width .1s linear;
    "
></div>

{{-- ================= MASCOT ================= --}}
<div
    id="mascot-container"
    class="
        fixed
        bottom-4 md:bottom-6
        right-4 md:right-6
        z-40
        cursor-pointer
        select-none
    "
    style="filter: drop-shadow(0 0 10px rgba(255,236,31,.12));"
>
    <div
        id="mascot-bubble"
        class="
            absolute
            -top-14
            -right-2
            w-36
            px-3 py-2
            rounded-2xl
            text-[10px]
            font-bold
            text-slate-900
            text-center
            pointer-events-none
        "
        style="
            background: #ffec1f;
            opacity: 0;
            transform: scale(.8) translateY(8px);
            transition: .45s;
        "
    >
        <span id="bubble-text">Psst daftar sekarang ✨</span>
    </div>

    <img
        id="mascot-wand"
        src="{{ asset('mascot/mascot-wand.png') }}"
        class="
            w-20 h-20
            md:w-28 md:h-28
            object-contain
            transition-all
            duration-500
            opacity-100
            scale-100
        "
        style="animation: mascotIdle 3s ease-in-out infinite;"
    >

    <img
        id="mascot-jump"
        src="{{ asset('mascot/flitwick-jump.png') }}"
        class="
            absolute
            inset-0
            w-20 h-20
            md:w-28 md:h-28
            object-contain
            opacity-0
            scale-75
            transition-all
            duration-500
            pointer-events-none
        "
    >
</div>

{{-- ================= NAVBAR ROLL ================= --}}
<div
    id="nav-wrapper"
    class="
        fixed
        top-5
        left-6
        z-50
        opacity-0
        translate-y-[-20px]
        transition-all
        duration-700
    "
>
    <div
        id="nav-roll"
        class="
            relative
            flex
            items-center
            w-14
            h-14
            rounded-full
            bg-[#172236]/90
            backdrop-blur-xl
            border
            border-slate-700/40
            shadow-[0_10px_30px_rgba(0,0,0,.45)]
            overflow-hidden
            transition-all
            duration-700
        "
        style="transform-origin: left center;"
    >
        <div class="w-14 h-14 shrink-0 flex items-center justify-center">
            <img
                src="{{ asset('logo/logo-isfest.png') }}"
                class="w-14 h-14 object-contain"
            >
        </div>

        <div
            id="nav-content"
            class="
                flex
                items-center
                justify-between
                h-14
                w-0
                opacity-0
                overflow-hidden
                transition-all
                duration-700
            "
        >
            <div class="hidden md:flex items-center gap-8 ml-6 h-14">
                @foreach([
                    ['route' => 'home', 'label' => 'Home'],
                    ['route' => 'tentang', 'label' => 'Tentang'],
                    ['route' => 'lomba', 'label' => 'Lomba'],
                    ['route' => 'divisi', 'label' => 'Divisi']
                ] as $item)

                    <a
                        href="{{ route($item['route']) }}"
                        class="
                            uppercase
                            text-[11px]
                            font-bold
                            tracking-[.15em]
                            {{
                                request()->routeIs($item['route'])
                                    ? 'text-[#ffec1f]'
                                    : 'text-slate-400 hover:text-white'
                            }}
                            transition-all
                        "
                    >
                        {{ $item['label'] }}
                    </a>

                @endforeach
            </div>

            <a
                href="{{ route('lomba') }}"
                class="
                    hidden
                    md:flex
                    ml-10
                    px-5
                    py-2
                    rounded-xl
                    bg-[#ffec1f]
                    text-slate-900
                    text-[11px]
                    font-black
                    hover:scale-105
                    transition
                "
            >
                Daftar
            </a>

            <button
                id="mob-toggle"
                class="md:hidden text-white ml-4 mr-4"
            >
                ☰
            </button>
        </div>
    </div>
</div>

{{-- ================= MOBILE MENU ================= --}}
<div
    id="mob-menu"
    class="
        fixed
        top-[88px]
        left-6
        right-6
        z-40
        rounded-2xl
        bg-[#0a101d]/95
        backdrop-blur-xl
        border border-slate-700/30
        overflow-hidden
        max-h-0
        opacity-0
        transition-all
        duration-500
    "
>
    <div class="p-3 space-y-2">
        @foreach([
            ['route' => 'home', 'label' => 'Home'],
            ['route' => 'tentang', 'label' => 'Tentang'],
            ['route' => 'lomba', 'label' => 'Lomba'],
            ['route' => 'divisi', 'label' => 'Divisi']
        ] as $item)

            <a
                href="{{ route($item['route']) }}"
                class="
                    block
                    px-4 py-3
                    rounded-xl
                    text-sm
                    font-bold
                    text-slate-300
                    hover:bg-slate-800/50
                "
            >
                {{ $item['label'] }}
            </a>

        @endforeach
    </div>
</div>

<style>
    @keyframes mascotIdle {
        0%, 100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {

    // ================= NAV APPEAR =================
    const nav = document.getElementById('nav-wrapper');

    setTimeout(() => {
        nav.style.opacity = 1;
        nav.style.transform = 'translateY(0)';
    }, 200);

    // ================= SCROLL PROGRESS =================
    const progress = document.getElementById('scroll-progress');

    window.addEventListener('scroll', () => {
        const total =
            document.documentElement.scrollHeight - window.innerHeight;

        const current = window.scrollY;

        progress.style.width =
            ((current / total) * 100) + '%';
    });

    // ================= NAV ROLL =================
    const roll = document.getElementById('nav-roll');
    const content = document.getElementById('nav-content');

    let open = false;

    function showNav() {
        if (open) return;

        open = true;

        roll.style.width = '900px';
        roll.style.borderRadius = '22px';

        content.style.width = '830px';
        content.style.opacity = 1;
        content.style.padding = '0 20px';
    }

    function hideNav() {
        open = false;

        roll.style.width = '56px';
        roll.style.borderRadius = '999px';

        content.style.width = '0';
        content.style.opacity = 0;
        content.style.padding = '0';
    }

    document.addEventListener('mousemove', (e) => {

        const navRect = nav.getBoundingClientRect();
        const padding = 40;

        const insideNav =
            e.clientX >= navRect.left - padding &&
            e.clientX <= navRect.right + padding &&
            e.clientY >= navRect.top - padding &&
            e.clientY <= navRect.bottom + padding;

        const inTriggerZone =
            e.clientX < 300 &&
            e.clientY < 130;

        if (inTriggerZone || (open && insideNav)) {
            showNav();
        } else {
            hideNav();
        }
    });

    // ================= MASCOT =================
    const mascot = document.getElementById('mascot-container');
    const wand = document.getElementById('mascot-wand');
    const jump = document.getElementById('mascot-jump');
    const bubble = document.getElementById('mascot-bubble');
    const text = document.getElementById('bubble-text');

    const msg = [
        'Yuk ikut lomba ✨',
        'Rise Beyond Limits ⚡',
        'Klik aku 🐸',
        'Jangan telat 🏆'
    ];

    function showBubble() {
        text.innerText =
            msg[Math.floor(Math.random() * msg.length)];

        bubble.style.opacity = 1;
        bubble.style.transform = 'scale(1) translateY(0)';

        setTimeout(() => {
            bubble.style.opacity = 0;
            bubble.style.transform = 'scale(.8) translateY(8px)';
        }, 3000);
    }

    setInterval(showBubble, 8000);

    mascot.addEventListener('mouseenter', () => {

        wand.classList.remove('opacity-100', 'scale-100');
        wand.classList.add('opacity-0', 'scale-75');

        jump.classList.remove('opacity-0', 'scale-75');
        jump.classList.add('opacity-100', 'scale-100');

        showBubble();
    });

    mascot.addEventListener('mouseleave', () => {

        wand.classList.remove('opacity-0', 'scale-75');
        wand.classList.add('opacity-100', 'scale-100');

        jump.classList.remove('opacity-100', 'scale-100');
        jump.classList.add('opacity-0', 'scale-75');
    });

    // ================= MOBILE MENU =================
    const mob = document.getElementById('mob-menu');
    const btn = document.getElementById('mob-toggle');

    let m = false;

    btn.onclick = () => {
        m = !m;

        if (m) {
            mob.style.maxHeight = '400px';
            mob.style.opacity = 1;
        } else {
            mob.style.maxHeight = '0';
            mob.style.opacity = 0;
        }
    };
});
</script>