<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Donor - PMI Portal</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;800&amp;family=Inter:wght@300;400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "tertiary": "#00608e",
                    "secondary-fixed-dim": "#c8c6c6",
                    "error": "#ba1a1a",
                    "surface-dim": "#dadada",
                    "surface-container-high": "#e8e8e8",
                    "on-primary-fixed-variant": "#93000e",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-highest": "#e2e2e2",
                    "outline": "#926f6b",
                    "on-tertiary-fixed": "#001e30",
                    "background": "#f9f9f9",
                    "on-error-container": "#93000a",
                    "tertiary-container": "#007ab3",
                    "on-tertiary-fixed-variant": "#004b70",
                    "on-primary-fixed": "#410003",
                    "on-surface": "#1a1c1c",
                    "primary-container": "#e21f26",
                    "outline-variant": "#e7bdb8",
                    "inverse-on-surface": "#f1f1f1",
                    "on-secondary-fixed-variant": "#474747",
                    "on-surface-variant": "#5d3f3c",
                    "surface": "#f9f9f9",
                    "surface-bright": "#f9f9f9",
                    "secondary-container": "#e4e2e2",
                    "tertiary-fixed": "#cae6ff",
                    "on-background": "#1a1c1c",
                    "on-secondary-fixed": "#1b1c1c",
                    "surface-variant": "#e2e2e2",
                    "primary-fixed-dim": "#ffb4ac",
                    "inverse-surface": "#2f3131",
                    "error-container": "#ffdad6",
                    "secondary-fixed": "#e4e2e2",
                    "on-tertiary-container": "#f8faff",
                    "surface-container-low": "#f3f3f3",
                    "on-error": "#ffffff",
                    "secondary": "#5e5e5e",
                    "on-primary-container": "#fffaf9",
                    "surface-tint": "#c00016",
                    "primary-fixed": "#ffdad6",
                    "surface-container": "#eeeeee",
                    "primary": "#ba0015",
                    "tertiary-fixed-dim": "#8ecdff",
                    "on-secondary-container": "#646464",
                    "inverse-primary": "#ffb4ac",
                    "on-primary": "#ffffff",
                    "on-tertiary": "#ffffff",
                    "on-secondary": "#ffffff"
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
        .glass-nav {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .editorial-shadow {
            box-shadow: 0 12px 32px -4px rgba(74, 74, 74, 0.08);
        }
        .asymmetric-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
        }
        @media (max-width: 768px) {
            .asymmetric-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body selection:bg-primary-container selection:text-white">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-white/80 dark:bg-gray-950/80 backdrop-blur-md shadow-sm dark:shadow-none">
<div class="flex justify-between items-center px-8 h-20 max-w-screen-2xl mx-auto">
<div class="text-2xl font-black text-red-600 dark:text-red-500 font-headline">PMI Magetan</div>
<div class="hidden md:flex items-center gap-8 font-headline text-sm font-semibold tracking-tight">
<a class="text-gray-600 dark:text-gray-400 hover:text-red-500 transition-colors duration-150" href="/">Beranda</a>    
<a class="text-gray-600 dark:text-gray-400 hover:text-red-500 transition-colors duration-150" href="{{ route('about') }}">Tentang Kami</a>
<a class="text-gray-600 dark:text-gray-400 hover:text-red-500 transition-colors duration-150" href="{{ route('ambulans') }}">Ambulans</a>
<a class="text-gray-600 dark:text-gray-400 hover:text-red-500 transition-colors duration-150" href="{{ route('bencana') }}">Bencana</a>
<a class="text-gray-600 dark:text-gray-400 hover:text-red-500 transition-colors duration-150" href="{{ route('diklat') }}">Pelatihan</a>
<a class="text-gray-600 dark:text-gray-400 hover:text-red-500 transition-colors duration-150" href="{{ route('donor') }}">Darah</a>
<a class="text-red-600 dark:text-red-500 border-b-2 border-red-600 pb-1" href="{{ route('relawan') }}">Relawan</a>
</div>
<button class="bg-primary-container text-white px-6 py-2.5 rounded-lg font-headline font-bold text-sm hover:opacity-90 active:scale-95 transition-all">Hotline Darurat</button>
</div>
</nav>

<main class="pt-20">
<!-- Hero Section -->
<section class="relative h-[614px] flex items-center overflow-hidden bg-surface">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover opacity-20" data-alt="close-up of a healthcare professional preparing equipment for a blood donation in a clean, modern medical facility with soft ambient lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8yoS-4TOYFxqIizRZEhIfi6PmQyb9aEKsUe5ZX2XF4fFfuipcJ5IAJqgPyVtJAayIbtf2LFa2_Fko6qVjWqoyc_wBOfiwh4rcSut0vTzEcXIFP6M5nSgKpBrcM8iWDwlTwOtTcSGZ9Kgdp7Ninqk7Bzo3ngWQyVJnx_WY_8it2P2UDvDcBide7RScj_k9DA_f08h2faABuAfQHXMTHQz1B7SrC5qlVsAdoV82iOecbegBR8LuDZpscq8UFENUcfGKr2u0CFR3lQ"/>
<div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<span class="inline-block px-4 py-1.5 mb-6 bg-primary-container/10 text-primary font-headline font-bold text-xs uppercase tracking-widest rounded">Hadiah Kehidupan</span>
<h1 class="text-6xl md:text-7xl font-headline font-extrabold text-on-background leading-[1.1] mb-8 tracking-tight">Darah Anda <br/><span class="text-primary">adalah harapan</span> <br/> bagi mereka.</h1>
<div class="flex flex-wrap gap-4">
<button class="bg-primary-container text-on-primary-container px-8 py-4 rounded font-headline font-bold text-lg hover:brightness-110 transition-all">Cek Jadwal</button>
<button class="bg-surface-container-highest text-on-surface px-8 py-4 rounded font-headline font-bold text-lg hover:bg-surface-container-high transition-all">Syarat Donor</button>
</div>
</div>
</div>
</section>
<!-- Bento Grid: Blood Stocks & Status -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-8">
<div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
<div>
<h2 class="text-4xl font-headline font-extrabold mb-4 tracking-tight">Stok Darah Real-time</h2>
<p class="text-secondary max-w-md font-body leading-relaxed">Pemantauan real-time bank darah lokal. Tipe O- dan B- saat ini sangat dibutuhkan.</p>
</div>
<div class="flex items-center gap-2 text-sm font-label font-semibold text-secondary"><span class="w-3 h-3 rounded-full bg-green-500 animate-pulse"></span> Update terakhir: 14:02 Hari Ini</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
<!-- High Demand Card -->
<div class="md:col-span-2 bg-surface-container-lowest p-8 rounded-xl flex flex-col justify-between">
<div>
<span class="material-symbols-outlined text-primary text-4xl mb-6">warning</span>
<h3 class="text-2xl font-headline font-bold mb-2">Kekurangan Kritis</h3>
<p class="text-secondary mb-8 leading-relaxed">Donor universal (O Negatif) sangat dibutuhkan untuk operasi trauma darurat hari ini.</p>
</div>
<div class="grid grid-cols-4 gap-4">
<div class="text-center">
<div class="text-3xl font-headline font-black text-primary">O-</div>
<div class="text-[10px] font-label font-bold uppercase text-primary">KRITIS</div>
</div>
<div class="text-center">
<div class="text-3xl font-headline font-black text-tertiary">B-</div>
<div class="text-[10px] font-label font-bold uppercase text-tertiary">RENDAH</div>
</div>
<div class="text-center opacity-40">
<div class="text-3xl font-headline font-black text-on-surface">A+</div>
<div class="text-[10px] font-label font-bold uppercase">STABIL</div>
</div>
<div class="text-center opacity-40">
<div class="text-3xl font-headline font-black text-on-surface">AB+</div>
<div class="text-[10px] font-label font-bold uppercase">STABIL</div>
</div>
</div>
</div>
<!-- Supply Level Bento Items -->
<div class="bg-surface-container-lowest p-8 rounded-xl border-l-4 border-primary">
<h4 class="font-headline font-bold text-lg mb-1">O Positive</h4>
<div class="text-4xl font-headline font-black mb-4">42%</div>
<div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
<div class="bg-primary h-full w-[42%]"></div>
</div>
<p class="mt-4 text-xs font-label text-secondary">Tingkat optimal: 75%+</p>
</div>
<div class="bg-surface-container-lowest p-8 rounded-xl border-l-4 border-tertiary">
<h4 class="font-headline font-bold text-lg mb-1">A Negative</h4>
<div class="text-4xl font-headline font-black mb-4">68%</div>
<div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden">
<div class="bg-tertiary h-full w-[68%]"></div>
</div>
<p class="mt-4 text-xs font-label text-secondary">Pasokan stabil tersedia</p>
</div>
<!-- Small Stat Cards -->
<div class="bg-white p-8 rounded-xl shadow-sm md:col-span-1">
<span class="material-symbols-outlined text-secondary mb-4">volunteer_activism</span>
<div class="text-4xl font-headline font-black text-on-surface">1,240</div>
<div class="text-sm font-label text-secondary">Donations this month</div>
</div>
<div class="bg-white p-8 rounded-xl shadow-sm md:col-span-1">
<span class="material-symbols-outlined text-secondary mb-4">schedule</span>
<div class="text-4xl font-headline font-black text-on-surface">15m</div>
<div class="text-sm font-label text-secondary">Avg. donation time</div>
</div>
<div class="bg-primary text-on-primary p-8 rounded-xl md:col-span-2 flex items-center justify-between">
<div>
<h4 class="text-2xl font-headline font-bold">Siap membantu?</h4>
<p class="text-on-primary/80 text-sm">Temukan pusat donor terdekat dan pesan slot Anda.</p>
</div>
<button class="bg-white text-primary px-6 py-3 rounded font-headline font-bold text-sm">Cek Jadwal</button>
</div>
</div>
</div>
</section>
<!-- Requirements Section: Editorial Layout -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
<div class="relative">
<img class="rounded-2xl z-10 relative" data-alt="warm and welcoming lifestyle shot of a smiling donor comfortably sitting in a modern donation chair with a healthcare provider nearby" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcUEcpTQ5Ik6u3nVeKCwozJWVHi0KI5zy2Z0ccm1ewZS6Kc1BKrm3AagmnHK6QjcWbLGxNk2QbiJQjTUaoUgLWJE0HCacbesBEUfRRSk19-ygXvpwQQmxEB93m8WcZTMRaONflTSbN3GWpzcc8HrVKUjfpFvKLuUj4oUOFQZ9N3NU0xXVT5SzDkwIRNfur6UJc29Jvryr9DLwPpzF_WihMdI8qTAChYCsSGbLancZ_L6SHqga_E3T0_wwah1jaiCFym8HW3Jv9lA"/>
<div class="absolute -bottom-10 -right-10 w-64 h-64 bg-primary-container/10 rounded-full -z-0"></div>
</div>
<div>
<h2 class="text-4xl font-headline font-extrabold mb-8 tracking-tight">Bisakah Anda berdonor?</h2>
<p class="text-lg text-secondary mb-12 font-body leading-relaxed">Kebanyakan orang bisa mendonorkan darah jika dalam kondisi sehat. Periksa persyaratan dasar kami untuk melihat apakah Anda bisa menjadi pahlawan hari ini.</p>
<ul class="space-y-8">
<li class="flex gap-6">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-primary">cake</span>
</div>
<div>
<h4 class="font-headline font-bold text-lg">Persyaratan Usia</h4>
<p class="text-secondary text-sm">Minimal berusia 17 tahun (16 tahun dengan izin orang tua di beberapa wilayah).</p>
</div>
</li>
<li class="flex gap-6">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-primary">monitor_weight</span>
</div>
<div>
<h4 class="font-headline font-bold text-lg">Berat Badan &amp; Kesehatan</h4>
<p class="text-secondary text-sm">Berat badan minimal 50kg dan dalam kondisi kesehatan umum yang baik saat mendonor.</p>
</div>
</li>
<li class="flex gap-6">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-primary">restaurant_menu</span>
</div>
<div>
<h4 class="font-headline font-bold text-lg">Persiapan</h4>
<p class="text-secondary text-sm">Makan makanan bergizi dan minum banyak air putih sebelum jadwal temu Anda.</p>
</div>
</li>
</ul>
</div>
</div>
</section>
<!-- Schedules: Interactive Table Style -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-5xl mx-auto px-8">
<div class="text-center mb-16">
<h2 class="text-4xl font-headline font-extrabold mb-4 tracking-tight">Stok Darah Real-time</h2>
<p class="text-secondary font-body">Pemantauan real-time bank darah lokal. Tipe O- dan B- saat ini sangat dibutuhkan.</p>
</div>
<div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm">
<div class="grid grid-cols-1 divide-y divide-surface-container-high">
<!-- Schedule Row -->
<div class="p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 hover:bg-surface-container-lowest transition-colors">
<div class="flex gap-6 items-center">
<div class="text-center bg-surface-container-high px-4 py-2 rounded">
<div class="text-sm font-label font-bold text-secondary uppercase">Nov</div>
<div class="text-2xl font-headline font-extrabold text-on-surface">24</div>
</div>
<div>
<h4 class="font-headline font-bold text-lg">Central Plaza Mobile Unit</h4>
<p class="text-secondary text-sm">Pemantauan real-time bank darah lokal. Tipe O- dan B- saat ini sangat dibutuhkan.</p>
</div>
</div>
<div class="flex items-center gap-4 w-full md:w-auto">
<div class="hidden lg:flex items-center gap-2 text-xs font-label text-tertiary bg-tertiary-fixed px-3 py-1 rounded-full">
<span class="material-symbols-outlined text-sm">check_circle</span>
                                    12 Slots Left
                                </div>
<button class="w-full md:w-auto bg-on-surface text-surface px-6 py-2 rounded font-headline font-bold text-sm">Pesan Jadwal</button>
</div>
</div>
<div class="p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 hover:bg-surface-container-lowest transition-colors">
<div class="flex gap-6 items-center">
<div class="text-center bg-surface-container-high px-4 py-2 rounded">
<div class="text-sm font-label font-bold text-secondary uppercase">Nov</div>
<div class="text-2xl font-headline font-extrabold text-on-surface">25</div>
</div>
<div>
<h4 class="font-headline font-bold text-lg">District Health Hospital</h4>
<p class="text-secondary text-sm">Pemantauan real-time bank darah lokal. Tipe O- dan B- saat ini sangat dibutuhkan.</p>
</div>
</div>
<div class="flex items-center gap-4 w-full md:w-auto">
<div class="hidden lg:flex items-center gap-2 text-xs font-label text-error bg-error-container px-3 py-1 rounded-full">
<span class="material-symbols-outlined text-sm">warning</span>
                                    Filling Fast
                                </div>
<button class="w-full md:w-auto bg-on-surface text-surface px-6 py-2 rounded font-headline font-bold text-sm">Pesan Jadwal</button>
</div>
</div>
<div class="p-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 hover:bg-surface-container-lowest transition-colors">
<div class="flex gap-6 items-center">
<div class="text-center bg-surface-container-high px-4 py-2 rounded">
<div class="text-sm font-label font-bold text-secondary uppercase">Nov</div>
<div class="text-2xl font-headline font-extrabold text-on-surface">27</div>
</div>
<div>
<h4 class="font-headline font-bold text-lg">Community Community Hall</h4>
<p class="text-secondary text-sm">Pemantauan real-time bank darah lokal. Tipe O- dan B- saat ini sangat dibutuhkan.</p>
</div>
</div>
<div class="flex items-center gap-4 w-full md:w-auto">
<div class="hidden lg:flex items-center gap-2 text-xs font-label text-tertiary bg-tertiary-fixed px-3 py-1 rounded-full">
<span class="material-symbols-outlined text-sm">check_circle</span>
                                    45 Slots Left
                                </div>
<button class="w-full md:w-auto bg-on-surface text-surface px-6 py-2 rounded font-headline font-bold text-sm">Pesan Jadwal</button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Process Section -->
<section class="py-24 bg-surface-container-highest">
<div class="max-w-7xl mx-auto px-8">
<h2 class="text-4xl font-headline font-extrabold mb-16 tracking-tight text-center">Apa yang diharapkan</h2>
<div class="grid grid-cols-1 md:grid-cols-4 gap-12">
<div class="text-center">
<div class="text-6xl font-headline font-black text-outline-variant/30 mb-4">01</div>
<h4 class="font-headline font-bold text-xl mb-2">Registrasi</h4>
<p class="text-secondary text-sm">Masuk, tunjukkan ID Anda, dan baca materi informasi donor.</p>
</div>
<div class="text-center">
<div class="text-6xl font-headline font-black text-outline-variant/30 mb-4">02</div>
<h4 class="font-headline font-bold text-xl mb-2">Pemeriksaan Fisik Singkat</h4>
<p class="text-secondary text-sm">Pemeriksaan cepat denyut nadi, tekanan darah, dan kadar hemoglobin Anda.</p>
</div>
<div class="text-center">
<div class="text-6xl font-headline font-black text-outline-variant/30 mb-4">03</div>
<h4 class="font-headline font-bold text-xl mb-2">Proses Donasi</h4>
<p class="text-secondary text-sm">Duduk santai dan rileks. Proses donasi hanya memakan waktu sekitar 8-10 menit.</p>
</div>
<div class="text-center">
<div class="text-6xl font-headline font-black text-outline-variant/30 mb-4">04</div>
<h4 class="font-headline font-bold text-xl mb-2">Pemulihan</h4>
<p class="text-secondary text-sm">Nikmati makanan ringan dan minuman gratis sambil beristirahat selama 15 menit.</p>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-12 px-8 bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
<div>
<div class="text-xl font-bold text-gray-900 dark:text-white mb-4">PMI Portal</div>
<p class="text-gray-500 dark:text-gray-400 font-inter text-sm leading-relaxed max-w-xs">© 2024 Layanan Kemanusiaan. Seluruh Hak Cipta Dilindungi.</p>
</div>
<div class="grid grid-cols-2 gap-4">
<div>
<h5 class="text-red-600 dark:text-red-500 font-bold mb-4 uppercase text-xs tracking-widest">SUMBER DAYA</h5>
<ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
<li><a class="hover:text-red-600 dark:hover:text-red-400 transition-colors" href="#">Golongan Darah</a></li>
<li><a class="hover:text-red-600 dark:hover:text-red-400 transition-colors" href="#">Manfaat</a></li>
<li><a class="hover:text-red-600 dark:hover:text-red-400 transition-colors" href="#">Kisah Donor</a></li>
</ul>
</div>
<div>
<h5 class="text-red-600 dark:text-red-500 font-bold mb-4 uppercase text-xs tracking-widest">LEGAL</h5>
<ul class="space-y-2 text-sm text-gray-500 dark:text-gray-400">
<li><a class="hover:text-red-600 dark:hover:text-red-400 transition-colors" href="#">Kebijakan Privasi</a></li>
<li><a class="hover:text-red-600 dark:hover:text-red-400 transition-colors" href="#">Syarat &amp; Ketentuan</a></li>
</ul>
</div>
</div>
<div>
<h5 class="text-red-600 dark:text-red-500 font-bold mb-4 uppercase text-xs tracking-widest">TETAP TERUPDATE</h5>
<div class="flex flex-col gap-4">
<p class="text-sm text-gray-500 dark:text-gray-400">Berlangganan untuk mendapatkan peringatan stok darurat.</p>
<div class="flex gap-2">
<input class="bg-surface-container-high border-none rounded px-4 py-2 text-sm w-full focus:ring-2 focus:ring-primary-container" placeholder="Alamat email" type="email"/>
<button class="bg-on-surface text-surface px-4 py-2 rounded text-sm font-bold">Gabung</button>
</div>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto mt-12 pt-8 border-t border-gray-200 dark:border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4">
<div class="text-gray-500 dark:text-gray-400 font-inter text-sm">© 2024 Layanan Kemanusiaan. Seluruh Hak Cipta Dilindungi.</div>
<div class="flex gap-6 text-gray-400">
<a class="hover:text-red-600 transition-colors" href="#">Kontak</a>
<a class="hover:text-red-600 transition-colors" href="#">Media Sosial</a>
</div>
</div>
</footer>
</body></html>