<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Diklat - PMI Portal</title>
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
                    "primary-container": "#B77466",
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
<section class="relative h-[716px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="medical professional teaching first aid to a group of diverse students in a bright modern classroom with warm natural light" src="{{ url('storage/' . $headline->foto) }}"/>
<div class="absolute inset-0 bg-gradient-to-r from-on-surface/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<!-- <span class="inline-block py-1 px-3 bg-primary-container text-on-primary font-label text-xs font-bold tracking-widest uppercase mb-6 rounded-sm">Diklat &amp; Edukasi</span> -->
<h1 class="text-6xl md:text-8xl font-headline font-extrabold text-white leading-[0.9] tracking-tighter mb-8">Diklat <br/><span class="text-primary-softcontainer">Bersertifikat.</span></h1>
<p class="text-xl text-surface-container-low font-body leading-relaxed max-w-lg mb-10"> {{ $headline->isi ?? 'Deskripsi headline belum tersedia.' }} </p>
<div class="flex flex-wrap gap-4">
<!-- <button class="px-8 py-4 bg-white/10 backdrop-blur-md text-white border border-white/20 font-headline font-bold rounded-lg hover:bg-primary-softcontainer transition-all">Daftar Kursus</button> -->
<a class="px-8 py-4 bg-white/10 backdrop-blur-md text-white border border-white/20 font-headline font-bold rounded-lg hover:bg-primary-softcontainer transition-all" href="#jadwal">Lihat Jadwal</a>
</div>
</div>
</div>
</section>
<!-- Stats Bento Grid -->
<section class="py-24 px-8 max-w-7xl mx-auto" id="jadwal">
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
<div class="md:col-span-2 bg-surface-container-lowest p-10 rounded-xl flex flex-col justify-between min-h-[300px]">
<span class="material-symbols-outlined text-primary text-4xl mb-4" data-icon="verified_user">verified_user</span>
<div>
<h3 class="text-4xl font-headline font-extrabold tracking-tight mb-2">98% Tingkat Kelulusan Peserta</h3>
<p class="text-secondary leading-relaxed">Peserta diklat secara konsisten menunjukkan kompetensi tinggi dalam simulasi tanggap darurat dan praktik lapangan.</p>
</div>
</div>
<div class="bg-primary-softcontainer p-10 rounded-xl text-on-primary flex flex-col justify-between ">
<h3 class="text-4xl font-headline font-extrabold">Peserta Tersertifikasi</h3>
<p class="font-medium opacity-90">Peserta yang telah mengikuti dan lulus pelatihan mendapatkan sertifikat resmi sesuai standar PMI.</p>
</div>
<div class="bg-tertiary p-10 rounded-xl text-on-tertiary-container flex flex-col justify-between">
<span class="material-symbols-outlined text-3xl" data-icon="school">school</span>
<p class="text-xl font-headline font-bold">Sertifikat Resmi PMI</p>
</div>
</div>
</section>
<!-- Schedule Section -->
<section class="py-24 max-w-7xl mx-auto px-8">
<div class="bg-surface-container-lowest rounded-3xl overflow-hidden flex flex-col md:flex-row items-stretch">
<div class="md:w-1/3 bg-on-surface p-12 text-white flex flex-col justify-center">
<h3 class="text-4xl font-headline font-extrabold mb-6 leading-tight">Siklus Pelatihan <br/>Mendatang</h3>
<p class="opacity-70 mb-8 font-light">Kelas dibatasi untuk 20 peserta untuk memastikan pengawasan praktis berkualitas tinggi. Amankan tempat Anda lebih awal.</p>
<!-- <a class="inline-flex items-center gap-2 text-primary-fixed font-bold hover:underline" href="#">Unduh kalender penuh 2024 <span class="material-symbols-outlined" data-icon="download">download</span></a> -->
</div>
<div class="md:w-2/3 p-12 overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="border-b border-surface-container-high">
<th class="pb-4 font-headline text-xs font-bold tracking-widest text-secondary uppercase">Nama Kursus</th>
<th class="pb-4 font-headline text-xs font-bold tracking-widest text-secondary uppercase">Rentang Tanggal</th>
<th class="pb-4"></th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-high">
<tr>
<td class="py-6 pr-4">
<p class="font-bold">Pelatihan Pertolongan Pertama </p>
<p class="text-xs text-secondary">PMI Magetan</p>
</td>
<td class="py-6 pr-4 text-sm font-medium">{{ $pertolongan_pertama->isi ?? 'Tanggal belum tersedia' }}</td>
<!-- <td class="py-6 pr-4">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="text-sm font-medium text-green-700">Tersedia</span>
</div> -->
</td>
<td class="py-6 text-right">
<button class="px-4 py-2 border border-primary-softcontainer text-primary-softcontainer rounded-lg text-sm font-bold hover:bg-primary-softcontainer hover:text-white transition-all">Daftar</button>
</td>
</tr>
<tr>
<td class="py-6 pr-4">
<p class="font-bold">Manajemen Bencana</p>
<p class="text-xs text-secondary">PMI Magetan</p>
</td>
<td class="py-6 pr-4 text-sm font-medium">{{ $manajemen_bencana->isi ?? 'Tanggal belum tersedia' }}</td>
<!-- <td class="py-6 pr-4">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-orange-500"></div>
<span class="text-sm font-medium text-orange-700">Hampir Penuh</span>
</div> -->
</td>
<td class="py-6 text-right">
<button class="px-4 py-2 border border-primary-softcontainer text-primary-softcontainer rounded-lg text-sm font-bold hover:bg-primary-softcontainer hover:text-white transition-all">Daftar</button>
</td>
</tr>
<tr>
<td class="py-6 pr-4">
<p class="font-bold">Pembinaan PMR, TSR dan KSR</p>
<p class="text-xs text-secondary">PMI Magetan</p>
</td>
<td class="py-6 pr-4 text-sm font-medium">{{ $jadwal_pmr->isi ?? 'Tanggal belum tersedia' }}</td>
<!-- <td class="py-6 pr-4">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-red-500"></div>
<span class="text-sm font-medium text-red-700">Ditutup</span>
</div> -->
</td>
<td class="py-6 text-right">
<button class="px-4 py-2 border border-secondary text-secondary rounded-lg text-sm font-bold cursor-not-allowed opacity-50">Daftar Tunggu</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
<!-- Certification Info -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
<div class="relative">
<div class="aspect-square bg-surface-container-high rounded-full overflow-hidden">
<img class="w-full h-full object-cover p-12" data-alt="top view of a professional certification document with a red wax seal and elegant typography on heavy cream paper" src="{{ url('storage/' . $headline->foto) }}"/>
</div>
<!-- <div class="absolute -bottom-6 -right-6 bg-white shadow-2xl p-8 rounded-2xl max-w-xs">
<p class="font-headline font-black text-4xl text-primary mb-2 italic">Terstandarisasi.</p>
<p class="text-sm text-secondary leading-relaxed">Sertifikasi kami diakui oleh Kementerian Kesehatan dan Federasi Internasional Palang Merah.</p>
</div> -->
</div>
<div>
<h2 class="text-5xl font-headline font-extrabold text-on-surface mb-8 tracking-tight">Lencana Keunggulan Anda.</h2>
<div class="space-y-8">
<div class="flex gap-6">
<div class="w-12 h-12 bg-primary-container/10 rounded-xl flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" data-icon="workspace_premium">workspace_premium</span>
</div>
<div>
<h5 class="text-xl font-bold mb-2">Kredensial Global</h5>
<p class="text-secondary">Dapatkan sertifikat yang berlaku secara global di jaringan Palang Merah, membuka pintu untuk relawan internasional.</p>
</div>
</div>
<div class="flex gap-6">
<div class="w-12 h-12 bg-primary-container/10 rounded-xl flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" data-icon="update">update</span>
</div>
<div>
<h5 class="text-xl font-bold mb-2">Dukungan Belajar Seumur Hidup</h5>
<p class="text-secondary">Akses lulusan ke portal online kami untuk kursus penyegaran dan protokol medis terbaru.</p>
</div>
</div>
<div class="flex gap-6">
<div class="w-12 h-12 bg-primary-container/10 rounded-xl flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary" data-icon="qr_code_2">qr_code_2</span>
</div>
<div>
<h5 class="text-xl font-bold mb-2">Verifikasi Digital</h5>
<p class="text-secondary">Setiap sertifikat dilengkapi dengan kode QR unik untuk verifikasi instan oleh pemberi kerja melalui portal aman kami.</p>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-12 px-8 bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
<div>
<div class="text-xl font-bold text-gray-900 dark:white font-headline mb-6">PMI Portal</div>
<p class="font-inter text-sm leading-relaxed text-gray-500 dark:text-gray-400 max-w-xs">Berkomitmen pada kemanusiaan. Menyediakan pelatihan medis kelas dunia dan sistem tanggap darurat ke setiap pelosok negeri.</p>
</div>
<div class="flex flex-col gap-4">
<h6 class="font-headline font-bold text-sm tracking-widest uppercase text-gray-900 dark:text-white">Tautan Cepat</h6>
<div class="flex flex-col gap-2">
<a class="text-gray-500 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400 font-inter text-sm transition-colors" href="#">Kontak</a>
<a class="text-gray-500 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400 font-inter text-sm transition-colors" href="#">Media Sosial</a>
<a class="text-gray-500 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400 font-inter text-sm transition-colors" href="#">Kebijakan Privasi</a>
<a class="text-gray-500 dark:text-gray-400 hover:text-red-600 dark:hover:text-red-400 font-inter text-sm transition-colors" href="#">Ketentuan</a>
</div>
</div>
<div class="flex flex-col gap-4">
<h6 class="font-headline font-bold text-sm tracking-widest uppercase text-gray-900 dark:text-white">Tautan Cepat</h6>
<div class="flex gap-4">
<span class="material-symbols-outlined text-gray-500 hover:text-red-600 cursor-pointer" data-icon="language">language</span>
<span class="material-symbols-outlined text-gray-500 hover:text-red-600 cursor-pointer" data-icon="alternate_email">alternate_email</span>
<span class="material-symbols-outlined text-gray-500 hover:text-red-600 cursor-pointer" data-icon="phone_in_talk">phone_in_talk</span>
</div>
<p class="font-inter text-sm leading-relaxed text-gray-500 dark:text-gray-400 mt-4">© 2024 Layanan Kemanusiaan. Seluruh Hak Cipta Dilindungi.</p>
</div>
</div>
</footer>
</body></html>