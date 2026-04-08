<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>PMI Kabupaten Magetan - Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-container-high": "#e8e8e8",
                    "surface-container": "#eeeeee",
                    "surface-container-highest": "#e2e2e2",
                    "inverse-surface": "#2f3131",
                    "primary-fixed": "#ffdad6",
                    "on-primary-fixed-variant": "#93000e",
                    "surface-tint": "#c00016",
                    "primary": "#ba0015",
                    "surface-container-low": "#f3f3f3",
                    "on-secondary-container": "#646464",
                    "secondary-fixed": "#e4e2e2",
                    "surface-bright": "#f9f9f9",
                    "tertiary-container": "#007ab3",
                    "primary-container": "#e21f26",
                    "inverse-primary": "#ffb4ac",
                    "tertiary-fixed": "#cae6ff",
                    "on-surface-variant": "#5d3f3c",
                    "outline-variant": "#e7bdb8",
                    "on-secondary-fixed-variant": "#474747",
                    "error-container": "#ffdad6",
                    "on-primary-container": "#fffaf9",
                    "surface-dim": "#dadada",
                    "outline": "#926f6b",
                    "secondary": "#5e5e5e",
                    "on-error-container": "#93000a",
                    "on-background": "#1a1c1c",
                    "secondary-fixed-dim": "#c8c6c6",
                    "secondary-container": "#e4e2e2",
                    "on-surface": "#1a1c1c",
                    "background": "#f9f9f9",
                    "surface-variant": "#e2e2e2",
                    "primary-fixed-dim": "#ffb4ac",
                    "on-tertiary-fixed": "#001e30",
                    "tertiary-fixed-dim": "#8ecdff",
                    "surface": "#f9f9f9",
                    "on-tertiary": "#ffffff",
                    "on-secondary": "#ffffff",
                    "on-error": "#ffffff",
                    "tertiary": "#00608e",
                    "surface-container-lowest": "#ffffff",
                    "inverse-on-surface": "#f1f1f1",
                    "error": "#ba1a1a",
                    "on-secondary-fixed": "#1b1c1c",
                    "on-primary": "#ffffff",
                    "on-primary-fixed": "#410003",
                    "on-tertiary-container": "#f8faff",
                    "on-tertiary-fixed-variant": "#004b70"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Manrope"],
                    "body": ["Inter"],
                    "label": ["Inter"]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-headline { font-family: 'Manrope', sans-serif; }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen">
<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-full flex flex-col bg-slate-50 dark:bg-slate-900 h-screen w-72 border-r-0 z-50">
<div class="p-8">
<div class="flex items-center gap-3 mb-10">
<div class="w-10 h-10 bg-primary-container rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">health_and_safety</span>
</div>
<div>
<div class="text-lg font-bold text-slate-900 dark:text-white leading-tight">PMI Magetan</div>
<div class="text-xs text-slate-500 font-medium">Admin Portal</div>
</div>
</div>
<nav class="space-y-1">
<!-- Dashboard Active -->
<a class="flex items-center gap-3 px-4 py-3 text-red-600 dark:text-red-500 font-bold border-r-4 border-red-600 bg-slate-100 dark:bg-slate-800 transition-colors font-manrope text-sm font-medium" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
{{-- PROFIL PMI --}}
<div class="flex flex-col">
    <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium"
       href="{{ route('admin.profil-submenu.index') }}">
       
        <span class="material-symbols-outlined">account_circle</span>
        Kelola Profil PMI
    </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium"
       href="{{ route('admin.donor-submenu.index') }}">
<span class="material-symbols-outlined" data-icon="bloodtype">bloodtype</span>
                    Donor Darah
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium" 
      href="{{ route('admin.relawan-submenu.index') }}">
<span class="material-symbols-outlined" data-icon="groups">groups</span>
                    Kelola Relawan
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium" 
      href="#">
<span class="material-symbols-outlined" data-icon="school">school</span>
                    Diklat PMI
                </a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium" 
      href="{{ route('admin.kebencanaan-submenu.index') }}">
<span class="material-symbols-outlined" data-icon="volcano">volcano</span>
                    Kelola Kebencanaan
                </a>

    {{-- SUPERADMIN --}}
    @if(strtolower(auth()->user()->peran) === 'superadmin')

      <a class="flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 transition-colors font-manrope text-sm font-medium" 
      href="{{ route('admin.superadmin.users.index') }}">
<span class="material-symbols-outlined" data-icon="people">people</span>
                    Kelola Pengguna
                </a>
    @endif
</nav>
</div>
<div class="mt-auto p-8">
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit"
        class="w-full flex items-center gap-3 px-4 py-3 text-slate-600 dark:text-slate-400 hover:bg-red-200 dark:hover:bg-red-800 transition-colors font-manrope text-sm font-medium text-left">
        
        <span class="material-symbols-outlined">logout</span>
        Logout
    </button>
</form>
</div>
</aside>
<!-- TopNavBar -->
<header class="fixed top-0 left-72 right-0 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl flex justify-between items-center h-16 px-8 border-b border-slate-200/50 dark:border-slate-800/50 z-40">
<div class="flex items-center gap-8">
<h1 class="font-black text-red-600 dark:text-red-500 font-headline tracking-tight uppercase text-sm">Dashboard Utama</h1>
<nav class="hidden md:flex gap-6">
<a class="text-red-600 border-b-2 border-red-600 pb-1 font-manrope text-sm tracking-tight" href="#">Dashboard</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-red-500 transition-all font-manrope text-sm tracking-tight" href="#">Kelola Profil</a>
</nav>
</div>
<div class="flex items-center gap-6">
<div class="flex items-center gap-3 pl-4 border-l border-slate-200 dark:border-slate-800">
<div class="text-right">
<p class="text-xs font-bold text-slate-900 dark:text-white leading-none"> {{ auth()->user()->nama_pengguna ?? 'Admin' }}</p>
</div>
<img alt="Administrator Profile" class="w-8 h-8 rounded-full object-cover border border-slate-200" data-alt="professional portrait of a confident middle-aged man in business attire, clean grey background, soft studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOh27tdFfyiOjhTq67ooP2rK7W-kusvrkOGenRDQ2TnP7zHmPmJAWolaBYfGThLCj1v-l_4f-cFcpHye2OWih9KX0ZXZpLHGIIEROcrcbgEusxVFU1dd0mlV3zojD5Ejyf8WYK1T2QLmVKDCoQQH5ZqOIq4Iy-UF3gbPzEDKoU6wcpdL4n5YeMgX5ItVy0YIIWs9QMOypZBdIxp0As_sRDRwbEIHWzpRSN2o31IKNK8rT6nrvfABk_O8psWeZUdcwMt4rBBnjzjQ"/>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="ml-72 mt-16 p-8 min-h-[calc(100vh-4rem)]">
<!-- Hero Section / Statistics -->
<div class="mb-10">
<p class="text-secondary font-body">Selamat datang kembali. Berikut adalah status terkini unit PMI Kabupaten Magetan hari ini.</p>
</div>
<!-- Bento Grid for Quick Stats -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
<!-- Total Volunteers -->
<div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden group">
<div class="absolute -right-4 -top-4 opacity-5 group-hover:scale-110 transition-transform duration-500">
<span class="material-symbols-outlined text-9xl">groups</span>
</div>
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
<span class="material-symbols-outlined">groups</span>
</div>
<span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded">+12%</span>
</div>
<p class="text-secondary text-xs font-bold uppercase tracking-widest mb-1">Total Relawan</p>
<p class="text-3xl font-black text-on-surface font-headline">1,428</p>
</div>
<!-- Blood Stock Alerts -->
<div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden border-l-4 border-red-500 group">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center text-red-600">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">bloodtype</span>
</div>
<span class="text-[10px] font-black text-white bg-red-600 px-2 py-1 rounded uppercase">Kritis</span>
</div>
<p class="text-secondary text-xs font-bold uppercase tracking-widest mb-1">Stok Darah (O+)</p>
<p class="text-3xl font-black text-on-surface font-headline">12 Unit</p>
<p class="text-[10px] text-red-600 mt-2 font-medium">Butuh donor segera</p>
</div>
<!-- Training Cycles -->
<div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden group">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center text-purple-600">
<span class="material-symbols-outlined">school</span>
</div>
</div>
<p class="text-secondary text-xs font-bold uppercase tracking-widest mb-1">Siklus Diklat</p>
<p class="text-3xl font-black text-on-surface font-headline">4 Aktif</p>
<div class="w-full bg-surface-container-high h-1 mt-4 rounded-full overflow-hidden">
<div class="bg-purple-600 h-full w-3/4"></div>
</div>
</div>
<!-- Disaster Reports -->
<div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden group">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-lg bg-orange-50 flex items-center justify-center text-orange-600">
<span class="material-symbols-outlined">report_problem</span>
</div>
</div>
<p class="text-secondary text-xs font-bold uppercase tracking-widest mb-1">Laporan Bencana</p>
<p class="text-3xl font-black text-on-surface font-headline">2 Baru</p>
<p class="text-[10px] text-orange-600 mt-2 font-medium">Tindakan diperlukan segera</p>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Left Column: Detailed Monitoring -->
<div class="lg:col-span-2 space-y-8">
<!-- Blood Stock Detailed -->
<div class="bg-surface-container-lowest rounded-xl overflow-hidden">
<div class="p-6 border-b border-surface-container flex justify-between items-center">
<h3 class="font-bold text-lg font-headline">Status Stok Darah Nasional</h3>
<button class="text-primary text-xs font-bold hover:underline">Lihat Detail Inventaris</button>
</div>
<div class="p-8 grid grid-cols-2 md:grid-cols-4 gap-8">
<div class="text-center">
<div class="text-4xl font-black text-red-600 font-headline mb-2">A+</div>
<p class="text-xs font-bold text-secondary uppercase">24 Unit</p>
<div class="mt-2 h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
<div class="bg-emerald-500 h-full w-[60%]"></div>
</div>
</div>
<div class="text-center">
<div class="text-4xl font-black text-red-600 font-headline mb-2">B+</div>
<p class="text-xs font-bold text-secondary uppercase">18 Unit</p>
<div class="mt-2 h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
<div class="bg-amber-500 h-full w-[40%]"></div>
</div>
</div>
<div class="text-center">
<div class="text-4xl font-black text-red-600 font-headline mb-2">AB+</div>
<p class="text-xs font-bold text-secondary uppercase">8 Unit</p>
<div class="mt-2 h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
<div class="bg-red-500 h-full w-[15%]"></div>
</div>
</div>
<div class="text-center">
<div class="text-4xl font-black text-red-600 font-headline mb-2">O+</div>
<p class="text-xs font-bold text-secondary uppercase">12 Unit</p>
<div class="mt-2 h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
<div class="bg-red-500 h-full w-[25%]"></div>
</div>
</div>
</div>
</div>


</main>
<!-- Optional Support Text -->
<footer class="ml-72 p-8 border-t border-surface-container flex justify-between items-center text-secondary">
<p class="text-xs">© 2024 PMI Kabupaten Magetan. Sistem Informasi Manajemen Administrasi Terpadu.</p>
<div class="flex gap-4">
<a class="text-xs hover:text-primary transition-colors" href="#">Panduan</a>
<a class="text-xs hover:text-primary transition-colors" href="#">Bantuan</a>
</div>
</footer>
</body></html>