<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Relawan - PMI Portal</title>
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
<!-- Hero Section: The Empathetic Sentinel Style -->
<section class="relative min-h-[716px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="portrait of diverse humanitarian volunteers smiling warmly in a bright community center with soft natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAd0ScAyIvscY76x3jDqFCPHutmu1OzjGnxeM6uMLUwA2EbUpft2WP9nexBkwUSxLRZKT5IJvXJOv5-Q8upTTn8vMmJJ88J_t_yN84NdAcoF--Reh-NEpBtx9yHDBHI2N_X9Hk7v56HA4prOlGSNZmpRXyTSi5WmLEvMq7lek0NKS24uKYxuYGEUmQ9lYv8HXjUEZDpWoR9hCAgHjA-uyDiVcCMEaPZrB3-huzij7cThK62_lUe7GVf-LZcwAkt2OZp6dVoHwsqSg"/>
<div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<span class="text-primary font-headline font-extrabold tracking-widest text-xs uppercase mb-4 block">JADILAH PAHLAWAN</span>
<h1 class="text-6xl md:text-8xl font-headline font-black text-on-surface leading-tight tracking-tighter mb-6">Kemanusiaan <br/><span class="text-primary">Dimulai Dari Anda.</span></h1>
<p class="text-lg text-secondary leading-relaxed mb-8 max-w-lg">Bergabunglah dengan ribuan relawan berdedikasi dalam memberikan bantuan penyelamatan jiwa dan harapan bagi masyarakat yang membutuhkan di seluruh negeri.</p>
<div class="flex flex-wrap gap-4">
<a class="bg-primary-container text-on-primary px-8 py-4 rounded-lg font-headline font-bold text-base shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform" href="#register">Daftar Relawan</a>
<a class="bg-surface-container-highest text-on-surface px-8 py-4 rounded-lg font-headline font-bold text-base hover:bg-surface-container-high transition-colors" href="#programs">Jelajahi Program</a>
</div>
</div>
</div>
</section>
<!-- Benefits: Bento Grid Layout -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-8">
<div class="mb-16">
<h2 class="text-4xl font-headline font-black tracking-tight mb-4">Mengapa Menjadi Relawan Kami?</h2>
<div class="h-1.5 w-24 bg-primary rounded-full"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Benefit 1 -->
<div class="md:col-span-2 bg-surface-container-lowest p-10 rounded-xl editorial-shadow flex flex-col md:flex-row gap-8 items-center">
<div class="bg-primary/5 p-6 rounded-full">
<span class="material-symbols-outlined text-primary text-5xl" data-icon="diversity_3">diversity_3</span>
</div>
<div>
<h3 class="text-2xl font-headline font-bold mb-3">Dampak Masyarakat</h3>
<p class="text-secondary leading-relaxed">Sentuh langsung kehidupan dengan berpartisipasi dalam inisiatif kesehatan lokal, respons bencana, dan program kesejahteraan sosial yang membangun bangsa yang lebih kuat.</p>
</div>
</div>
<!-- Benefit 2 -->
<div class="bg-tertiary-container text-on-tertiary-container p-10 rounded-xl flex flex-col justify-between">
<span class="material-symbols-outlined text-4xl" data-icon="school">school</span>
<div>
<h3 class="text-2xl font-headline font-bold mb-3">Pengembangan Keahlian</h3>
<p class="text-on-tertiary-container/80 leading-relaxed">Dapatkan pelatihan medis bersertifikat, pengalaman kepemimpinan, dan keterampilan manajemen krisis yang diakui secara global.</p>
</div>
</div>
<!-- Benefit 3 -->
<div class="bg-surface-container-lowest p-10 rounded-xl editorial-shadow">
<span class="material-symbols-outlined text-primary text-4xl mb-6" data-icon="auto_awesome">auto_awesome</span>
<h3 class="text-xl font-headline font-bold mb-3">Pertumbuhan Pribadi</h3>
<p class="text-secondary leading-relaxed">Kembangkan empati dan ketangguhan sambil terhubung dengan komunitas pembuat perubahan yang berpikiran sama.</p>
</div>
<!-- Benefit 4 -->
<div class="md:col-span-2 bg-secondary-container p-10 rounded-xl flex items-center justify-between overflow-hidden relative">
<div class="relative z-10 max-w-md">
<h3 class="text-2xl font-headline font-bold mb-3">Sertifikasi Resmi</h3>
<p class="text-secondary leading-relaxed">Terima pengakuan formal dan dokumentasi jam relawan untuk portofolio profesional atau akademik Anda.</p>
</div>
<span class="material-symbols-outlined text-[120px] text-on-surface/5 absolute -right-4 -bottom-4" data-icon="verified_user">verified_user</span>
</div>
</div>
</div>
</section>
<!-- Programs: Asymmetric Editorial Layout -->
<section class="py-24 bg-surface-container-low" id="programs">
<div class="max-w-7xl mx-auto px-8">
<div class="asymmetric-grid gap-16 items-start">
<div>
<h2 class="text-5xl font-headline font-black tracking-tight mb-12">Program Aktif</h2>
<div class="space-y-12">
<!-- Program 1 -->
<div class="group flex gap-8 pb-12 border-b border-outline-variant/20">
<span class="text-4xl font-headline font-black text-primary/20 group-hover:text-primary transition-colors">01</span>
<div>
<h3 class="text-2xl font-headline font-extrabold mb-4 group-hover:text-primary transition-colors">Respons Darurat Bencana</h3>
<p class="text-secondary mb-6 leading-relaxed">Tim pengerahan cepat untuk zona bencana alam, menyediakan pertolongan pertama, dukungan logistik, dan distribusi air bersih.</p>
<div class="flex gap-4">
<span class="px-3 py-1 bg-surface-container-highest text-xs font-bold rounded-full">URGENT</span>
<span class="px-3 py-1 bg-surface-container-highest text-xs font-bold rounded-full">MENDESAK</span>
</div>
</div>
</div>
<!-- Program 2 -->
<div class="group flex gap-8 pb-12 border-b border-outline-variant/20">
<span class="text-4xl font-headline font-black text-primary/20 group-hover:text-primary transition-colors">02</span>
<div>
<h3 class="text-2xl font-headline font-extrabold mb-4 group-hover:text-primary transition-colors">Klinik Kesehatan Keliling</h3>
<p class="text-secondary mb-6 leading-relaxed">Membantu tenaga medis di daerah terpencil dengan pemeriksaan kesehatan, vaksinasi, dan pendidikan kesehatan masyarakat.</p>
<div class="flex gap-4">
<span class="px-3 py-1 bg-surface-container-highest text-xs font-bold rounded-full">MEDICAL</span>
<span class="px-3 py-1 bg-surface-container-highest text-xs font-bold rounded-full">MEDIS</span>
</div>
</div>
</div>
<!-- Program 3 -->
<div class="group flex gap-8">
<span class="text-4xl font-headline font-black text-primary/20 group-hover:text-primary transition-colors">03</span>
<div>
<h3 class="text-2xl font-headline font-extrabold mb-4 group-hover:text-primary transition-colors">Logistik Donor Darah</h3>
<p class="text-secondary mb-6 leading-relaxed">Mengelola pendaftaran donor dan dukungan di lokasi untuk kampanye donor darah nasional.</p>
<div class="flex gap-4">
<span class="px-3 py-1 bg-surface-container-highest text-xs font-bold rounded-full">ADMIN</span>
<span class="px-3 py-1 bg-surface-container-highest text-xs font-bold rounded-full">ADMIN</span>
</div>
</div>
</div>
</div>
</div>
<div class="sticky top-32 space-y-8">
<div class="bg-surface-container-lowest p-8 rounded-xl editorial-shadow overflow-hidden relative">
<div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full -mr-10 -mt-10"></div>
<h4 class="text-xl font-headline font-extrabold mb-4 relative z-10">Dampak Saat Ini</h4>
<div class="space-y-6 relative z-10">
<div>
<p class="text-3xl font-headline font-black text-primary">12.4k</p>
<p class="text-sm text-secondary font-bold uppercase tracking-wider">Relawan Aktif</p>
</div>
<div>
<p class="text-3xl font-headline font-black text-primary">450+</p>
<p class="text-sm text-secondary font-bold uppercase tracking-wider">Misi Setiap Tahun</p>
</div>
</div>
</div>
<img class="w-full h-64 object-cover rounded-xl grayscale hover:grayscale-0 transition-all duration-700" data-alt="cinematic close-up of two people shaking hands with red cross insignia on a volunteer uniform sleeve" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTjWpZ-RWpk7Hv2BfpxkZ5d3oAJG_oPgvYt_XOaxRTRNL_D54Kjvu294Sl6eoqNMLRc5t8P8NQ-VekGXETu8P0FDkyn-SyxO_hO7chLn5Ws4ScXEtGde3HSBOiSzLp6_foGMKnbhyA1K78EfU_Rj96eNi2PvGMqZUUU-98M0Us3_GGdjfaYupulhx02GJymYdMy2a9SOZCzWGnHvRcAvqL4Qq84918wsU5G7EZWYMS0nCE3t6eVxH4FXVq1DTI8quoBtU4RfrTog"/>
</div>
</div>
</div>
</section>
<!-- Registration Form -->
<section class="py-24 bg-surface overflow-hidden" id="register">
<div class="max-w-7xl mx-auto px-8">
<div class="bg-surface-container-lowest rounded-2xl overflow-hidden flex flex-col md:flex-row shadow-2xl shadow-on-surface/5">
<div class="md:w-1/3 bg-primary p-12 text-on-primary flex flex-col justify-between">
<div>
<h2 class="text-4xl font-headline font-black mb-6">Ambil langkah pertama.</h2>
<p class="text-on-primary/80 leading-relaxed">Perjalanan Anda sebagai relawan PMI dimulai di sini. Isi formulir dan koordinator kami akan menghubungi Anda dalam waktu 48 jam.</p>
</div>
<div class="space-y-4">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-sm font-bold">Tanda Pengenal Resmi</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-sm font-bold">Tanda Pengenal Resmi</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined" data-icon="check_circle" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="text-sm font-bold">Cakupan Asuransi</span>
</div>
</div>
</div>
<div class="md:w-2/3 p-12">
<form class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="space-y-2">
<label class="text-xs font-bold text-secondary uppercase tracking-widest">Nama Lengkap</label>
<input class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary focus:ring-0 rounded-t-lg transition-colors py-4" placeholder="Nama Anda" type="text"/>
</div>
<div class="space-y-2">
<label class="text-xs font-bold text-secondary uppercase tracking-widest">Alamat Email</label>
<input class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary focus:ring-0 rounded-t-lg transition-colors py-4" placeholder="john@example.com" type="email"/>
</div>
<div class="space-y-2">
<label class="text-xs font-bold text-secondary uppercase tracking-widest">Nomor Telepon</label>
<input class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary focus:ring-0 rounded-t-lg transition-colors py-4" placeholder="+62 812 ..." type="tel"/>
</div>
<div class="space-y-2">
<label class="text-xs font-bold text-secondary uppercase tracking-widest">Program Pilihan</label>
<select class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary focus:ring-0 rounded-t-lg transition-colors py-4">
<option>Respons Darurat</option>
<option>Klinik Kesehatan</option>
<option>Logistik Darah</option>
<option>Dukungan Admin</option>
</select>
</div>
<div class="md:col-span-2 space-y-2">
<label class="text-xs font-bold text-secondary uppercase tracking-widest">Pesan / Pengalaman (Opsional)</label>
<textarea class="w-full bg-surface-container-high border-none border-b-2 border-transparent focus:border-primary focus:ring-0 rounded-t-lg transition-colors py-4" placeholder="Ceritakan mengapa Anda ingin bergabung..." rows="4"></textarea>
</div>
<div class="md:col-span-2">
<button class="w-full bg-primary-container text-on-primary py-5 rounded-lg font-headline font-bold text-lg hover:opacity-90 transition-opacity" type="submit">Daftar Relawan</button>
<p class="text-center text-xs text-secondary mt-4">Dengan mengirimkan, Anda menyetujui Ketentuan Layanan dan Kebijakan Privasi kami.</p>
</div>
</form>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-12 px-8 bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
<div>
<div class="text-xl font-bold text-gray-900 dark:text-white font-headline mb-4">PMI Magetan</div>
<p class="text-gray-500 dark:text-gray-400 font-inter text-sm leading-relaxed max-w-xs">© 2024 Layanan Kemanusiaan. Seluruh Hak Cipta Dilindungi Undang-Undang.</p>
</div>
<div class="flex flex-col gap-3">
<h4 class="font-bold text-gray-900 dark:text-white text-sm mb-2">Tautan Cepat</h4>
<a class="text-gray-500 dark:text-gray-400 hover:text-red-600 transition-colors text-sm" href="#">Kontak</a>
<a class="text-gray-500 dark:text-gray-400 hover:text-red-600 transition-colors text-sm" href="#">Sosial</a>
<a class="text-gray-500 dark:text-gray-400 hover:text-red-600 transition-colors text-sm" href="#">Kebijakan Privasi</a>
<a class="text-gray-500 dark:text-gray-400 hover:text-red-600 transition-colors text-sm" href="#">Ketentuan</a>
</div>
<div>
<h4 class="font-bold text-gray-900 dark:text-white text-sm mb-4">Tautan Cepat</h4>
<div class="flex gap-2">
<input class="bg-white dark:bg-gray-800 border-none rounded px-4 py-2 text-sm w-full outline-none focus:ring-1 focus:ring-red-500" placeholder="Alamat email" type="text"/>
<button class="bg-red-600 text-white px-4 py-2 rounded text-sm font-bold">Gabung</button>
</div>
<p class="mt-6 text-gray-500 dark:text-gray-400 text-xs">© 2024 Layanan Kemanusiaan. Seluruh Hak Cipta Dilindungi Undang-Undang.</p>
</div>
</div>
</footer>
</body></html>