<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ambulans - PMI Portal</title>
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
                    "primary-softcontainer": "#B77466",
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
@extends('partials.header')



<main class="pt-20">
<!-- Hero Section -->
<section class="relative h-[819px] flex items-center overflow-hidden bg-on-surface">
<div class="absolute inset-0 z-0">
<img alt="Ambulance Service" class="w-full h-full object-cover opacity-40 grayscale-[0.5]" data-alt="Modern high-tech ambulance with red sirens parked in front of a glass medical building at twilight, cinematic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAej87njhqerBaO5FFHo30nzjwhx7xizMTJeJ5_FJVEn32NNRMwqyO2MvCZlBvH1u7fHb67ATOcwtZ7EuC7amxrrC51tpUlzjw9b0fkVSh4d0VzWDKXhZTYR-jOG_fYLczjSLWTFJJLigWl6tSe-jxzioi35nIP1ES1Zz_tGFDQkc5yjpN9MrTImWeWmzySq_wjjX9lLEibssfqL5vK8JYyA_1nJPDFeMeJQezuG4y7lneRtkQPgX5LQCOX8hXjtVLlef2tJwQJNA"/>
<div class="absolute inset-0 bg-gradient-to-r from-on-surface via-on-surface/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<span class="inline-block py-1 px-3 bg-primary-softcontainer text-on-primary-softcontainer text-xs font-bold tracking-widest uppercase mb-6 rounded-sm">Respon Cepat 24/7</span>
<h1 class="font-headline text-6xl md:text-8xl font-extrabold text-white leading-[0.9] tracking-tighter mb-8">Detik <span class="text-primary-softcontainer">Menyelamatkan</span> Nyawa.</h1>
<p class="text-surface-dim text-lg md:text-xl max-w-lg mb-10 leading-relaxed">Mengerahkan unit perawatan intensif seluler tercanggih di wilayah ini. Kecepatan kemanusiaan, presisi profesional.</p>
<div class="flex flex-wrap gap-4">
<button class="flex items-center gap-3 bg-primary-softcontainer text-on-background px-8 py-5 rounded-lg font-headline font-black text-xl tracking-tight shadow-2xl hover:bg-primary transition-all active:scale-95"><span class="material-symbols-outlined" data-icon="emergency_share" style="font-variation-settings: 'FILL' 1;">emergency_share</span> Panggil Darurat Sekarang</button>
<!-- <button class="flex items-center gap-3 bg-surface-container-highest text-on-surface px-8 py-5 rounded-lg font-headline font-bold text-xl tracking-tight hover:bg-white transition-all">Wilayah Layanan</button> -->
</div>
</div>
</div>
</section>
<!-- Service Types Bento Grid -->
<section class="py-24 bg-surface px-8">
<div class="max-w-7xl mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
<div class="max-w-xl">
<h2 class="font-headline text-4xl font-black tracking-tight text-on-surface mb-4">Transit Medis Khusus</h2>
<p class="text-secondary text-lg">Dari respon trauma akut hingga transportasi medis terjadwal, armada kami siap untuk setiap skenario.</p>
</div>
<div class="text-primary font-headline font-bold text-5xl opacity-20">01 — Layanan</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-6">
<!-- Emergency Case -->
<div class="md:col-span-8 group relative overflow-hidden rounded-xl bg-surface-container-lowest p-8 min-h-[400px] flex flex-col justify-end border-none transition-all">
<div class="absolute top-0 right-0 p-8">
<span class="material-symbols-outlined text-primary/15 text-6xl " data-icon="ambulance">ambulance</span>
</div>
<div class="relative z-10">
<h3 class="font-headline text-3xl font-black mb-4">Layanan Ambulans Darurat</h3>
<p class="text-secondary max-w-md mb-6 leading-relaxed">Layanan ambulans PMI untuk penanganan kondisi darurat seperti kecelakaan, sakit mendadak, dan evakuasi medis ke fasilitas kesehatan terdekat.</p>
<ul class="flex flex-wrap gap-3 text-xs font-bold tracking-tight">
<li class="px-3 py-1 bg-surface-container-low rounded-full">PERAWATAN TRAUMA</li>
<li class="px-3 py-1 bg-surface-container-low rounded-full">DUKUNGAN JANTUNG</li>
<li class="px-3 py-1 bg-surface-container-low rounded-full">PERAWATAN NEONATAL</li>
</ul>
</div>
</div>
<!-- Non-Emergency Case -->
<div class="md:col-span-4 bg-tertiary-container text-on-tertiary-container p-8 rounded-xl flex flex-col justify-between">
<span class="material-symbols-outlined text-4xl" data-icon="calendar_month">calendar_month</span>
<div>
<h3 class="font-headline text-2xl font-bold mb-3">Transportasi Medis Non-Darurat</h3>
<p class="text-on-tertiary-container/80 text-sm mb-6 leading-relaxed">Layanan antar jemput pasien untuk kontrol, rujukan rumah sakit, atau kebutuhan medis lainnya secara terjadwal.</p>
<a class="font-bold underline underline-offset-4 hover:opacity-80 transition-opacity" href="#">Pesan Transportasi</a>
</div>
</div>
<!-- Air Ambulance / Special -->
<div class="md:col-span-4 bg-surface-container-low p-8 rounded-xl flex flex-col gap-6">
<h3 class="font-headline text-xl font-bold">Armada Khusus</h3>
<div class="space-y-4">
<div class="flex items-start gap-4">
<div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined" data-icon="helicopter">helicopter</span>
</div>
<div>
<p class="font-bold text-sm">Fasilitas Ambulans</p>
<p class="text-xs text-secondary">Respon amfibi untuk zona banjir.</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-primary shrink-0">
<span class="material-symbols-outlined" data-icon="water_lux">water_lux</span>
</div>
<div>
<p class="font-bold text-sm">Penyelamatan Air</p>
<p class="text-xs text-secondary">Respon amfibi untuk zona banjir.</p>
</div>
</div>
</div>
</div>
<!-- Coverage Area Map Preview -->
<div class="md:col-span-8 bg-on-surface text-white rounded-xl overflow-hidden relative group">
<div class="absolute inset-0 bg-cover bg-center opacity-30 mix-blend-overlay grayscale" data-alt="Abstract dark topo map of a major city with glowing red dots indicating ambulance hubs" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA_WX-PGhC7T46AKxnWEqjto1EgwuBuAYutWdo5VNE20ygrVtQdcCbu3aV3Zgmrlui-oLUXfpYiys1OnbC8r9EUamrq6gJih6qlCzDZkz4ggZx_4TlorlHLBz85-gSvlSdARQRqdDJIfRYVem481DDp8cqXHUj4vJcmxTY8ft5t4tgHOcxDaaus30oTOd1F59MNGLEeibysi_J0BUmQUa_IlpZUP2bI_HvG5paEwI9OmgoJY_o0lt6SoJCFNUY1Jm-ZGBsIVRYNMg')">
</div>
<div class="relative p-8 h-full flex flex-col justify-between">
<div class="flex justify-between items-start">
<h3 class="font-headline text-3xl font-black">Jangkauan Layanan</h3>
<span class="bg-primary-softcontainer px-3 py-1 rounded text-[10px] font-black uppercase tracking-widest">AKTIF LIVE</span>
</div>
<div class="flex flex-col md:flex-row gap-8 mt-12">
<div>
<p class="text-4xl font-headline font-black text-primary-softcontainer">24 Jam</p>
<p class="text-xs font-bold text-surface-dim uppercase tracking-widest">Siaga Layanan</p>
</div>
<div>
<p class="text-4xl font-headline font-black text-primary-softcontainer">±10 menit</p>
<p class="text-xs font-bold text-surface-dim uppercase tracking-widest">Estimasi Respon</p>
</div>
<div class="flex-grow"></div> 
<div class="text-right self-end">
<p class="text-sm font-bold opacity-80 mb-2">Cakupan Utama: Kabupaten/Kota Anda dan sekitarnya</p>
<button class="text-xs font-black text-primary-softcontainer border-b-2 border-primary-softcontainer pb-1">Lihat Jaringan Langsung</button>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- High-Contrast Emergency Bar -->
<section class="bg-primary-softcontainer py-12 px-8 overflow-hidden relative">
<div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-10">
<h2 class="text-[20vw] font-black font-headline text-white whitespace-nowrap leading-none">EMERGENCY • EMERGENCY • EMERGENCY</h2>
</div>
<div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8 relative z-10">
<div class="text-center md:text-left">
<h2 class="text-white font-headline text-4xl md:text-5xl font-black tracking-tighter mb-2 italic">Butuh bantuan segera?</h2>
<p class="text-on-primary-container text-lg font-bold opacity-90">Petugas siaga 24/7 untuk mengirimkan bantuan ke tempat Anda.</p>
</div>
<div class="flex items-center gap-6">
<div class="text-center">
<p class="text-on-primary-container text-[10px] font-black uppercase tracking-[0.2em] mb-1">Hotline Langsung</p>
<p class="text-white text-5xl font-headline font-black tracking-tight">1-800-PMI</p>
</div>
<a class="w-20 h-20 rounded-full bg-white text-primary flex items-center justify-center shadow-xl hover:scale-110 transition-transform cursor-pointer" href="tel:1800PMI">
<span class="material-symbols-outlined text-4xl" data-icon="call" style="font-variation-settings: 'FILL' 1;">call</span>
</a>
</div>
</div>
</section>
<!-- Process / Safety Cards -->
<section class="py-24 bg-surface-container-low px-8">
<div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12">
<div class="space-y-6">
<div class="h-1 bg-primary-softcontainer w-12"></div>
<h4 class="font-headline text-2xl font-bold">Hubungi PMI</h4>
<p class="text-secondary leading-relaxed">Berikan lokasi dan kondisi darurat Anda. Petugas PMI akan segera menerima laporan dan mengidentifikasi kebutuhan penanganan.</p>
</div>
<div class="space-y-6">
<div class="h-1 bg-primary-softcontainer w-12"></div>
<h4 class="font-headline text-2xl font-bold">Penanganan Awal</h4>
<p class="text-secondary leading-relaxed">Tim ambulans memberikan pertolongan pertama di lokasi dan menstabilkan kondisi pasien sebelum proses evakuasi.</p>
</div>
<div class="space-y-6">
<div class="h-1 bg-primary-softcontainer w-12"></div>
<h4 class="font-headline text-2xl font-bold">Evakuasi & Rujukan</h4>
<p class="text-secondary leading-relaxed">Pasien dievakuasi ke fasilitas kesehatan terdekat dengan koordinasi langsung agar penanganan lanjutan dapat segera dilakukan.</p>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-gray-50 dark:bg-gray-900 w-full py-12 px-8 border-t border-gray-200 dark:border-gray-800">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
<div class="flex flex-col gap-4">
<div class="text-xl font-bold text-gray-900 dark:text-white font-headline">PMI Portal</div>
<p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed font-inter">Pemimpin global dalam respon kemanusiaan dan logistik medis darurat. Memberikan perawatan ketika setiap detik sangat berarti.</p>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="flex flex-col gap-2">
<span class="text-red-600 dark:text-red-500 text-xs font-black uppercase tracking-widest mb-2">Layanan</span>
<a class="text-gray-500 dark:text-gray-400 text-sm hover:text-red-600 dark:hover:text-red-400 transition-opacity" href="#">Ambulans</a>
<a class="text-gray-500 dark:text-gray-400 text-sm hover:text-red-600 dark:hover:text-red-400 transition-opacity" href="#">Bencana</a>
<a class="text-gray-500 dark:text-gray-400 text-sm hover:text-red-600 dark:hover:text-red-400 transition-opacity" href="#">Pelatihan</a>
</div>
<div class="flex flex-col gap-2">
<span class="text-red-600 dark:text-red-500 text-xs font-black uppercase tracking-widest mb-2">Layanan</span>
<a class="text-gray-500 dark:text-gray-400 text-sm hover:text-red-600 dark:hover:text-red-400 transition-opacity" href="#">Kontak</a>
<a class="text-gray-500 dark:text-gray-400 text-sm hover:text-red-600 dark:hover:text-red-400 transition-opacity" href="#">Sosial</a>
<a class="text-gray-500 dark:text-gray-400 text-sm hover:text-red-600 dark:hover:text-red-400 transition-opacity" href="#">Kebijakan Privasi</a>
</div>
</div>
<div class="flex flex-col justify-between items-start md:items-end">
<div class="flex gap-4">
<span class="material-symbols-outlined text-secondary hover:text-primary transition-colors cursor-pointer" data-icon="public">public</span>
<span class="material-symbols-outlined text-secondary hover:text-primary transition-colors cursor-pointer" data-icon="mail">mail</span>
</div>
<div class="text-gray-500 dark:text-gray-400 text-sm font-inter mt-8">© 2024 Layanan Kemanusiaan. Seluruh hak cipta dilindungi undang-undang.</div>
</div>
</div>
</footer>
<!-- Mobile Navigation Shell -->
<div class="md:hidden fixed bottom-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md px-6 py-4 flex justify-around items-center">
<a class="flex flex-col items-center gap-1 text-gray-500" href="#">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="text-[10px] font-bold">Beranda</span>
</a>
<a class="flex flex-col items-center gap-1 text-red-600" href="#">
<span class="material-symbols-outlined" data-icon="ambulance" style="font-variation-settings: 'FILL' 1;">ambulance</span>
<span class="text-[10px] font-bold">Ambulans</span>
</a>
<a class="flex flex-col items-center gap-1 text-gray-500" href="#">
<span class="material-symbols-outlined" data-icon="map">map</span>
<span class="text-[10px] font-bold">Peta</span>
</a>
<a class="flex flex-col items-center gap-1 text-gray-500" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="text-[10px] font-bold">Profil</span>
</a>
</div>
</body></html>