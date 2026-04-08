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

@extends('partials.header')

<main class="pt-20">
<!-- Hero Section -->
<section class="relative h-[716px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="medical professional teaching first aid to a group of diverse students in a bright modern classroom with warm natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqkPEKIXZlC4nWY8aOsc8CtU8bMaYpNGUWNobwe_sjCe6h0bXDmerdmIiOY0EnTQJQO55K3XCYPkhjscGG7fobFR6h6X6MEtaQcuGxcv0eispqFZTeTjnxBRmB2z28VyzPLqbDg908McToVCpNd2Bzn8YWzIO6fBasOzO0ln1fG-EGmv4m9f0tbLCJvlu-1zFOes8wlpC3ndp-OHdlvj9xp-sLkO5UIaqA2lImIh4DO5T8l1Blkw1CpQyoy8dHjTSWV2eAkHiAcA"/>
<div class="absolute inset-0 bg-gradient-to-r from-on-surface/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<span class="inline-block py-1 px-3 bg-primary-container text-on-primary font-label text-xs font-bold tracking-widest uppercase mb-6 rounded-sm">Diklat &amp; Edukasi</span>
<h1 class="text-6xl md:text-8xl font-headline font-extrabold text-white leading-[0.9] tracking-tighter mb-8">Memberdayakan <br/><span class="text-primary-container">Penyelamat.</span></h1>
<p class="text-xl text-surface-container-low font-body leading-relaxed max-w-lg mb-10">Bergabunglah dengan tradisi Kemanusiaan. Kuasai keterampilan yang menjembatani celah antara krisis dan perawatan dengan program Diklat bersertifikat kami.</p>
<div class="flex flex-wrap gap-4">
<button class="px-8 py-4 bg-primary-container text-on-primary font-headline font-bold rounded-lg shadow-xl hover:bg-primary transition-all">Daftar Kursus</button>
<button class="px-8 py-4 bg-white/10 backdrop-blur-md text-white border border-white/20 font-headline font-bold rounded-lg hover:bg-white/20 transition-all">Lihat Jadwal</button>
</div>
</div>
</div>
</section>
<!-- Stats Bento Grid -->
<section class="py-24 px-8 max-w-7xl mx-auto">
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
<div class="md:col-span-2 bg-surface-container-lowest p-10 rounded-xl flex flex-col justify-between min-h-[300px]">
<span class="material-symbols-outlined text-primary text-4xl mb-4" data-icon="verified_user">verified_user</span>
<div>
<h3 class="text-4xl font-headline font-extrabold tracking-tight mb-2">98% Tingkat Kelulusan</h3>
<p class="text-secondary leading-relaxed">Lulusan kami secara konsisten menunjukkan kemahiran tinggi dalam simulasi tanggap darurat dan skenario dunia nyata.</p>
</div>
</div>
<div class="bg-primary-container p-10 rounded-xl text-on-primary flex flex-col justify-between">
<h3 class="text-5xl font-headline font-extrabold">98% Tingkat Kelulusan</h3>
<p class="font-medium opacity-90">Penyelamat Tersertifikasi yang dilatih setiap tahun di seluruh negeri.</p>
</div>
<div class="bg-tertiary p-10 rounded-xl text-on-tertiary-container flex flex-col justify-between">
<span class="material-symbols-outlined text-3xl" data-icon="school">school</span>
<p class="text-xl font-headline font-bold">Sertifikasi Terakreditasi BNSP</p>
</div>
</div>
</section>
<!-- Course Catalog - Asymmetric Layout -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-8">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
<div class="max-w-xl">
<h2 class="text-5xl font-headline font-extrabold tracking-tight text-on-surface mb-6">Kuasai Seni Intervensi</h2>
<p class="text-secondary text-lg">Kurikulum terperinci yang dirancang oleh ahli medis dan petugas garis depan untuk mempersiapkan Anda menghadapi situasi apa pun.</p>
</div>
<div class="flex gap-2">
<button class="p-3 bg-surface-container-highest rounded-full"><span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span></button>
<button class="p-3 bg-primary-container text-on-primary rounded-full"><span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span></button>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Card 1 -->
<div class="group bg-surface-container-lowest rounded-2xl overflow-hidden transition-all duration-300 hover:translate-y-[-8px]">
<div class="h-64 overflow-hidden relative">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="close up of medical training hands performing CPR on a practice mannequin in a clean studio lighting environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfkDeOIiImS5FLdNpFnQL-HgyB1GueSZ4sGnkVFaBoL4_tc195NxcTz1luhtU2B4FE58IaKACQZr-ub4j2EgAp2LTxHADanEaBSrHAWjGB_QuFWZBxYNRx1NrxkgtmsyPiWqp_obOJYuDY7zL9hwmnIYXpt890vC5Mn3XXOBJLykERCYFWxRpoJhN6D-J8BtomnGgOeW2dqz6lau20HIC-LPMKDfY-lzWwygS4z8ph1ppoCE5hKKjw2jaw5342iOjsztvKgBabxQ"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-primary">POPULER</div>
</div>
<div class="p-8">
<h4 class="text-2xl font-headline font-bold mb-3">Pertolongan Pertama Dasar (BFA)</h4>
<p class="text-secondary mb-6 line-clamp-3">Keterampilan penyelamatan jiwa yang penting termasuk perawatan luka, penanganan tersedak, dan stabilisasi pasien untuk masyarakat umum.</p>
<div class="flex items-center justify-between pt-6 border-t border-surface-container-high">
<span class="text-sm font-semibold flex items-center gap-2"><span class="material-symbols-outlined text-sm" data-icon="calendar_today"><span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span> 3 Hari</span> 3 Days</span>
<button class="text-primary font-bold text-sm flex items-center gap-1 group-hover:gap-2 transition-all">Detail <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span></button>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="group bg-surface-container-lowest rounded-2xl overflow-hidden transition-all duration-300 hover:translate-y-[-8px] lg:mt-12">
<div class="h-64 overflow-hidden relative">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="advanced medical monitor showing vitals in a dimmed clinical setting with cool blue tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCA_6gJEz5OFEl9Pm2fvrs7zab5EsDQdLMHHMGYrpzvLU2d9KBAmV5_5SynfB2BNuMtrgcsOgC4EpW059pW-EIFb3_7evTfWHafNNE5QQiqbJSZ-5Y11hS18SDeNxBH9Jup3iO05-0FnRYkyeKDb7_ACaaubevoCxdpDMjdvjmmYMwC-v6PTlCitZzb516uYxUKATfdjzxYKSv718dYyfA6HpDusGPkwk5rLZ8VnaeNUiROeRBaigguk3gXnDT9DPqe5ljEkobvPQ"/>
</div>
<div class="p-8">
<h4 class="text-2xl font-headline font-bold mb-3">Bantuan Hidup Lanjutan</h4>
<p class="text-secondary mb-6 line-clamp-3">Pelatihan intensif bagi tenaga medis profesional yang mencakup manajemen jalan napas tingkat lanjut dan intervensi farmakologis.</p>
<div class="flex items-center justify-between pt-6 border-t border-surface-container-high">
<span class="text-sm font-semibold flex items-center gap-2"><span class="material-symbols-outlined text-sm" data-icon="calendar_today"><span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span> 5 Hari</span> 5 Days</span>
<button class="text-primary font-bold text-sm flex items-center gap-1 group-hover:gap-2 transition-all">Detail <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span></button>
</div>
</div>
</div>
<!-- Card 3 -->
<div class="group bg-surface-container-lowest rounded-2xl overflow-hidden transition-all duration-300 hover:translate-y-[-8px]">
<div class="h-64 overflow-hidden relative">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="emergency rescue team operating in a simulated disaster zone with orange safety gear and dusty environment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZMv6vKK_QJFSRG5hbuwPvg3I0a9w3z2mPWF9VsSI5_LkmTGohODHprN85SPl8XX84hFUtIKHHDvSetMz-xy_rNZslV9m2c-1zYca9NhlYQG1ZRQEmRPWrpcrxwPLoDsMP6VTAJ8AnuBEPPS35KCHg8Zzg5BZyGd0whitiFXryLLs3BSFAKD04t86NroRjJk2gKt0EBqtKH7eKrx2Esp5M5-UioER0Uihv7iglHdY9-y04mhA0VDWNjvC2kSuWhlOLWVaxaDFuhQ"/>
</div>
<div class="p-8">
<h4 class="text-2xl font-headline font-bold mb-3">Manajemen Bencana</h4>
<p class="text-secondary mb-6 line-clamp-3">Pelatihan berbasis lapangan tentang logistik darurat skala besar, sistem triase, dan strategi ketahanan masyarakat.</p>
<div class="flex items-center justify-between pt-6 border-t border-surface-container-high">
<span class="text-sm font-semibold flex items-center gap-2"><span class="material-symbols-outlined text-sm" data-icon="calendar_today"><span class="material-symbols-outlined text-sm" data-icon="calendar_today">calendar_today</span> 7 Hari</span> 7 Days</span>
<button class="text-primary font-bold text-sm flex items-center gap-1 group-hover:gap-2 transition-all">Detail <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span></button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Schedule Section -->
<section class="py-24 max-w-7xl mx-auto px-8">
<div class="bg-surface-container-lowest rounded-3xl overflow-hidden flex flex-col md:flex-row items-stretch">
<div class="md:w-1/3 bg-on-surface p-12 text-white flex flex-col justify-center">
<h3 class="text-4xl font-headline font-extrabold mb-6 leading-tight">Siklus Pelatihan <br/>Mendatang</h3>
<p class="opacity-70 mb-8 font-light">Kelas dibatasi untuk 20 peserta untuk memastikan pengawasan praktis berkualitas tinggi. Amankan tempat Anda lebih awal.</p>
<a class="inline-flex items-center gap-2 text-primary-fixed font-bold hover:underline" href="#">Unduh kalender penuh 2024 <span class="material-symbols-outlined" data-icon="download">download</span></a>
</div>
<div class="md:w-2/3 p-12 overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="border-b border-surface-container-high">
<th class="pb-4 font-headline text-xs font-bold tracking-widest text-secondary uppercase">Nama Kursus</th>
<th class="pb-4 font-headline text-xs font-bold tracking-widest text-secondary uppercase">Rentang Tanggal</th>
<th class="pb-4 font-headline text-xs font-bold tracking-widest text-secondary uppercase">Ketersediaan</th>
<th class="pb-4"></th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container-high">
<tr>
<td class="py-6 pr-4">
<p class="font-bold">Pertolongan Pertama Anak</p>
<p class="text-xs text-secondary">Jakarta Training Center</p>
</td>
<td class="py-6 pr-4 text-sm font-medium">Nov 12 - 14, 2024</td>
<td class="py-6 pr-4">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="text-sm font-medium text-green-700">Tersedia</span>
</div>
</td>
<td class="py-6 text-right">
<button class="px-4 py-2 border border-primary text-primary rounded-lg text-sm font-bold hover:bg-primary-container hover:text-on-primary transition-all">Pesan</button>
</td>
</tr>
<tr>
<td class="py-6 pr-4">
<p class="font-bold">Keselamatan Industri Tingkat 2</p>
<p class="text-xs text-secondary">Bandung Hub</p>
</td>
<td class="py-6 pr-4 text-sm font-medium">Nov 18 - 22, 2024</td>
<td class="py-6 pr-4">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-orange-500"></div>
<span class="text-sm font-medium text-orange-700">Hampir Penuh</span>
</div>
</td>
<td class="py-6 text-right">
<button class="px-4 py-2 border border-primary text-primary rounded-lg text-sm font-bold hover:bg-primary-container hover:text-on-primary transition-all">Pesan</button>
</td>
</tr>
<tr>
<td class="py-6 pr-4">
<p class="font-bold">Sertifikasi Penyelamatan Air</p>
<p class="text-xs text-secondary">Bali Regional Office</p>
</td>
<td class="py-6 pr-4 text-sm font-medium">Dec 02 - 07, 2024</td>
<td class="py-6 pr-4">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-red-500"></div>
<span class="text-sm font-medium text-red-700">Ditutup</span>
</div>
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
<img class="w-full h-full object-cover p-12" data-alt="top view of a professional certification document with a red wax seal and elegant typography on heavy cream paper" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcSimOgaUZb1nQiwbfpil9_Rws0Siwj0UJSGn_U84lvyNITpX1YJn3Byi96lwzFLX7dYSWBKt30IJ3n_KbRgOLfwuRVapeTnnnsa5e0khQl02vJK6DE1GbsyQHTA_ayl-83lTYU80hfj-2IB2HWh6o6YoIF9qZ13aZaK97XeomJN0XcJp5d0_ZDGP-TPNVozYB8X4K0GUDbrkXcDKaH8mMtqGyahTFtGPeNT6e5Lswonx1qdV1To9Fdbe-Jub8d_oMhiLKNc31wg"/>
</div>
<div class="absolute -bottom-6 -right-6 bg-white shadow-2xl p-8 rounded-2xl max-w-xs">
<p class="font-headline font-black text-4xl text-primary mb-2 italic">Terstandarisasi.</p>
<p class="text-sm text-secondary leading-relaxed">Sertifikasi kami diakui oleh Kementerian Kesehatan dan Federasi Internasional Palang Merah.</p>
</div>
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
<!-- Newsletter / CTA -->
<section class="py-24 px-8">
<div class="max-w-7xl mx-auto bg-primary-container rounded-[2rem] p-12 md:p-24 text-center text-on-primary relative overflow-hidden">
<div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
<div class="relative z-10 max-w-3xl mx-auto">
<h2 class="text-4xl md:text-6xl font-headline font-extrabold mb-8 leading-tight tracking-tighter">Siap untuk membuat perubahan dalam hidup seseorang?</h2>
<p class="text-lg opacity-90 mb-12 font-medium">Jadilah yang pertama tahu saat siklus pelatihan baru dibuka di wilayah Anda.</p>
<div class="flex flex-col md:flex-row gap-4 max-w-lg mx-auto">
<input class="flex-1 bg-white/20 border-white/20 border-2 rounded-xl px-6 py-4 placeholder:text-white/60 focus:bg-white focus:text-on-surface focus:ring-0 transition-all outline-none" placeholder="Alamat email Anda" type="email"/>
<button class="bg-white text-primary font-headline font-extrabold px-8 py-4 rounded-xl hover:bg-surface-container-low transition-colors">Beri Tahu Saya</button>
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