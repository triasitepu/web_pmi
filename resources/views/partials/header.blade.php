<header>
   <nav class="fixed top-0 w-full z-50 bg-white dark:bg-gray-950 shadow-md">
<div class="flex justify-between items-center px-8 h-20 max-w-screen-2xl mx-auto">
    <div class="flex items-center">
    <a href="/" class="flex items-center bg-white rounded-b-lg px-2 py-1 shadow-sm">
        <img src="{{ asset('images/logo.png') }}" 
             alt="PMI Logo" 
             class="h-12 w-auto object-contain">

        <span class="ml-3 font-bold text-lg text-red-600">
            Magetan
        </span>
    </a>
</div>
<div class="hidden md:flex items-center gap-8 font-headline text-sm font-semibold tracking-tight">
<a class="text-gray-600 dark:text-gray-400 hover:text-red-500 transition-colors duration-150" href="/">Beranda</a>    
<a class="text-gray-600 dark:text-gray-400 hover:text-red-500 transition-colors duration-150" href="{{ route('about') }}">Tentang Kami</a>
<div class="relative">
    <button onclick="toggleDropdown()" 
        class="flex items-center gap-1 text-gray-600 dark:text-gray-400 hover:text-red-500">
        Layanan
        <span class="material-symbols-outlined text-base">expand_more</span>
    </button>

    {{-- DROPDOWN --}}
    <div id="dropdownMenu"
         class="hidden absolute bg-white dark:bg-gray-900 shadow-lg rounded-xl mt-3 w-52 py-2 z-50">

        <a href="{{ route('ambulans') }}" class="block px-4 py-2 hover:bg-red-50 text-sm">
            Ambulans
        </a>

        <a href="{{ route('bencana') }}" class="block px-4 py-2 hover:bg-red-50 text-sm">
            Bencana
        </a>

        <a href="{{ route('diklat') }}" class="block px-4 py-2 hover:bg-red-50 text-sm">
            Pelatihan
        </a>

        <a href="{{ route('donor') }}" class="block px-4 py-2 hover:bg-red-50 text-sm">
            Donor Darah
        </a>

        <a href="{{ route('relawan') }}" class="block px-4 py-2 hover:bg-red-50 text-sm">
            Relawan
        </a>

    </div>
</div>

<button>
<a href="https://wa.me/6281234567890?text=Halo%20Admin%20PMI"
target="_blank"
class="bg-red-600 text-white px-6 py-2.5 rounded-lg flex items-center gap-2 hover:opacity-90 transition">
    <i class="bi bi-whatsapp"></i>
    Hotline Darurat
</a></button>
</div>
</div>
</nav>

<script>
function toggleDropdown() {
    const menu = document.getElementById('dropdownMenu');
    menu.classList.toggle('hidden');
}

// Tutup dropdown kalau klik di luar
document.addEventListener('click', function (e) {
    const button = e.target.closest('button');
    const menu = document.getElementById('dropdownMenu');

    if (!e.target.closest('#dropdownMenu') && !button) {
        menu.classList.add('hidden');
    }
});
</script>

</header>
