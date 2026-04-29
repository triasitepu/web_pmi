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
<!-- Hero Section: The Empathetic Sentinel Style -->
<section class="relative min-h-[716px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover"
src="https://images.unsplash.com/photo-1584515933487-779824d29309"
alt="Tim medis dan relawan kemanusiaan">
<div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<!-- <span class="text-primary font-headline font-extrabold tracking-widest text-xs uppercase mb-4 block">JADILAH PAHLAWAN</span> -->
<h1 class="text-6xl md:text-8xl font-headline font-black text-on-surface leading-tight tracking-tighter mb-6">Kemanusiaan <br/><span class="text-primary-softcontainer">Dimulai Dari Anda.</span></h1>
<p class="text-lg text-secondary leading-relaxed mb-8 max-w-lg">Bergabunglah dengan ribuan relawan berdedikasi dalam memberikan bantuan penyelamatan jiwa dan harapan bagi masyarakat yang membutuhkan di seluruh negeri.</p>
<div class="flex flex-wrap gap-4">
<a class="bg-primary-softcontainer text-on-primary px-8 py-4 rounded-lg font-headline font-bold text-base shadow-lg shadow-primary/20 hover:scale-[1.02] transition-transform" href="#register">Daftar Relawan</a>
<a class="bg-surface-container-highest text-on-surface px-8 py-4 rounded-lg font-headline font-bold text-base hover:bg-surface-container-high transition-colors" href="#pmr">Jelajahi Program</a>
</div>
</div>
</div>
</section>
<!-- Benefits: Bento Grid Layout -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-8">
<div class="mb-16">
<h2 class="text-4xl font-headline font-black tracking-tight mb-4">Mengapa Menjadi Relawan Kami?</h2>
<div class="h-1.5 w-24 bg-primary-softcontainer rounded-full"></div>
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
<!-- PM SecRtion -->
<section class="py-24 bg-white" id="pmr">
<div class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
<div>
<span class="text-primary font-headline font-bold tracking-widest text-xs uppercase mb-4 block">UNTUK PELAJAR</span>
<h2 class="text-4xl md:text-5xl font-headline font-black mb-6">Palang Merah Remaja (PMR)</h2>
<p class="text-lg text-secondary mb-8 leading-relaxed">
                        Wadah kegiatan remaja di sekolah atau lembaga pendidikan melalui kegiatan ekstrakurikuler yang membentuk karakter kemanusiaan sejak dini.
                    </p>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">
<div class="p-4 bg-surface-container-low rounded-xl border-l-4 border-primary-softcontainer">
<p class="font-black text-on-backgorund text-xl">Mula</p>
<p class="text-xs font-bold text-secondary uppercase">Tingkat SD</p>
</div>
<div class="p-4 bg-surface-container-low rounded-xl border-l-4 border-primary-softcontainer">
<p class="font-black text-on-backgorund text-xl">Madya</p>
<p class="text-xs font-bold text-secondary uppercase">Tingkat SMP</p>
</div>
<div class="p-4 bg-surface-container-low rounded-xl border-l-4 border-primary-softcontainer">
<p class="font-black text-on-backgorund text-xl">Wira</p>
<p class="text-xs font-bold text-secondary uppercase">Tingkat SMA</p>
</div>
</div>
<div class="bg-tertiary-container/10 p-8 rounded-2xl">
<h4 class="font-headline font-bold text-tertiary mb-4 flex items-center gap-2">
<span class="material-symbols-outlined" data-icon="groups">groups</span>
                        Tri Bakti Remaja
</h4>
<ol class="space-y-3 text-sm text-on-tertiary-fixed-variant font-medium">
<li class="flex gap-3">
<span class="font-black text-tertiary">1.</span>
<span>Berbakti kepada masyarakat.</span>
</li>
<li class="flex gap-3">
<span class="font-black text-tertiary">2.</span>
<span>Mempertinggi keterampilan &amp; kesehatan.</span>
</li>
<li class="flex gap-3">
<span class="font-black text-tertiary">3.</span>
<span>Mempererat persahabatan nasional &amp; internasional.</span>
</li>
</ol>
</div>
</div>
<div class="bg-surface-container-lowest p-8 rounded-3xl editorial-shadow">
<h3 class="text-2xl font-headline font-black mb-6">Persyaratan &amp; Kegiatan</h3>
<div class="space-y-8">
<div>
<h4 class="text-xs font-bold text-secondary uppercase tracking-widest mb-4">Syarat Keanggotaan</h4>
@php
$data = explode("\n", $syaratpmr->isi ?? '');
@endphp

<ul class="space-y-2">
@foreach($data as $item)
<li class="flex items-center gap-2">
    <span class="material-symbols-outlined text-primary text-sm">
        check_circle
    </span>
    {{ trim($item) }}
</li>
@endforeach
</ul>
</div>
<div>
<h4 class="text-xs font-bold text-secondary uppercase tracking-widest mb-4">Aktivitas Utama</h4>
<div class="flex flex-wrap gap-2">
<span class="px-3 py-1 bg-surface-container-high rounded text-xs font-semibold">Bantuan Bencana</span>
<span class="px-3 py-1 bg-surface-container-high rounded text-xs font-semibold">Kunjungan Sosial</span>
<span class="px-3 py-1 bg-surface-container-high rounded text-xs font-semibold">Perawatan Lansia</span>
<span class="px-3 py-1 bg-surface-container-high rounded text-xs font-semibold">Pelatih Sebaya HIV/AIDS</span>
<span class="px-3 py-1 bg-surface-container-high rounded text-xs font-semibold">Donor Darah Siswa</span>
<span class="px-3 py-1 bg-surface-container-high rounded text-xs font-semibold">Lomba Mural/Seni</span>
<span class="px-3 py-1 bg-surface-container-high rounded text-xs font-semibold">Jumbara</span>
</div>
</div>
<div class="pt-6 border-t border-outline-variant/30">
<p class="text-sm font-bold mb-3">Cara Mendaftar:</p>
<div class="flex items-start gap-3 bg-primary/5 p-4 rounded-lg">
<span class="material-symbols-outlined text-primary" data-icon="school">school</span>
<p class="text-sm text-secondary">Silakan hubungi unit kegiatan siswa atau pembina ekstrakurikuler di sekolah masing-masing.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- KSR & TSR Section -->
<section class="py-24 bg-surface-container-low" id="ksr-tsr">
<div class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<!-- KSR -->
<div class="bg-surface-container-lowest p-10 rounded-2xl editorial-shadow relative overflow-hidden group">
<div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-bl-full -mr-8 -mt-8 group-hover:bg-primary/10 transition-colors"></div>
<div class="relative z-10">
<div class="w-16 h-16 bg-primary-softcontainer text-white rounded-xl flex items-center justify-center mb-8">
<span class="material-symbols-outlined text-3xl" data-icon="volunteer_activism">volunteer_activism</span>
</div>
<h3 class="text-3xl font-headline font-black mb-4">Korps Sukarela (KSR)</h3>
<p class="text-secondary leading-relaxed mb-8">
                            Relawan terlatih PMI yang aktif dalam aksi sosial, penanggulangan bencana, layanan kesehatan, dan pengelolaan donor darah.
                        </p>
<div class="space-y-6">
<div>
<h4 class="text-xs font-bold text-secondary uppercase tracking-widest mb-3">Persyaratan</h4>
@php
$data = explode("\n", $syaratksr->isi ?? '');
@endphp

<ul class="space-y-2">
@foreach($data as $item)
<li class="flex items-center gap-2">
    <span class="material-symbols-outlined text-primary-softcontainer text-sm" data-icon="check">check

    </span>
    {{ trim($item) }}
</li>
@endforeach
</ul>
</div>
<div>
<h4 class="text-xs font-bold text-secondary uppercase tracking-widest mb-3">Kegiatan</h4>
<div class="grid grid-cols-1 gap-2">
<div class="flex items-center gap-3 text-sm font-semibold text-on-surface">
<span class="w-1.5 h-1.5 bg-primary rounded-full"></span> Tanggap Darurat Bencana
</div>
<div class="flex items-center gap-3 text-sm font-semibold text-on-surface">
<span class="w-1.5 h-1.5 bg-primary rounded-full"></span> Pelayanan Kesehatan
</div>
<div class="flex items-center gap-3 text-sm font-semibold text-on-surface">
<span class="w-1.5 h-1.5 bg-primary rounded-full"></span> Manajemen Donor Darah
</div>
</div>
</div>
</div>
</div>
</div>
<!-- TSR -->
<div class="bg-surface-container-lowest p-10 rounded-2xl editorial-shadow relative overflow-hidden group">
<div class="absolute top-0 right-0 w-32 h-32 bg-tertiary/5 rounded-bl-full -mr-8 -mt-8 group-hover:bg-tertiary/10 transition-colors"></div>
<div class="relative z-10">
<div class="w-16 h-16 bg-tertiary text-white rounded-xl flex items-center justify-center mb-8">
<span class="material-symbols-outlined text-3xl" data-icon="engineering">engineering</span>
</div>
<h3 class="text-3xl font-headline font-black mb-4">Tenaga Sukarela (TSR)</h3>
<p class="text-secondary leading-relaxed mb-8">
                            Relawan ahli yang berkontribusi berdasarkan spesialisasi profesi atau keahlian khusus untuk mendukung operasi kemanusiaan.
                        </p>
<div class="space-y-6">
<div>
<h4 class="text-xs font-bold text-secondary uppercase tracking-widest mb-3">Persyaratan</h4>
@php
$data = explode("\n", $syarattsr->isi ?? '');
@endphp

<ul class="space-y-2">
@foreach($data as $item)
<li class="flex items-center gap-2">
    <span class="material-symbols-outlined text-tertiary text-sm" data-icon="check">check

    </span>
    {{ trim($item) }}
</li>
@endforeach
</ul>
</div>
<div>
<h4 class="text-xs font-bold text-secondary uppercase tracking-widest mb-3">Kegiatan</h4>
<div class="grid grid-cols-1 gap-2">
<div class="flex items-center gap-3 text-sm font-semibold text-on-surface">
<span class="w-1.5 h-1.5 bg-tertiary rounded-full"></span> Dukungan Teknis Operasi
</div>
<div class="flex items-center gap-3 text-sm font-semibold text-on-surface">
<span class="w-1.5 h-1.5 bg-tertiary rounded-full"></span> Konsultasi Profesional
</div>
<div class="flex items-center gap-3 text-sm font-semibold text-on-surface">
<span class="w-1.5 h-1.5 bg-tertiary rounded-full"></span> Pelatihan Spesialis
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<!-- Registration Form -->
<section  id="register" class="py-24 bg-primary-softcontainer/10 text-on-surface">
<div class="max-w-5xl mx-auto px-8 text-center">
<h2 class="text-4xl md:text-5xl font-black mb-8 tracking-tighter">Siap Menjadi Relawan Masa Depan?</h2>
<p class="text-xl text-black/80 mb-12 max-w-2xl mx-auto leading-relaxed">Pendaftaran anggota PMR dilakukan langsung melalui unit sekolah masing-masing di bawah koordinasi Pembina PMR Sekolah.</p>
<div class="bg-white/10 backdrop-blur-sm p-8 rounded-xl border border-white/20 inline-block text-left mb-12">
<h4 class="font-bold text-lg mb-4 flex items-center gap-2">
<span class="material-symbols-outlined" data-icon="info">info</span>
                        Langkah Pendaftaran:
                    </h4>
<ol class="space-y-3 text-sm text-black/90 list-decimal list-inside">
<li>Hubungi Pembina PMR atau Pengurus OSIS di sekolahmu.</li>
<li>Isi formulir pendaftaran yang disediakan pihak sekolah.</li>
<li>Kumpulkan berkas pendukung (foto, surat izin orang tua).</li>
<li>Ikuti masa orientasi dan pelantikan anggota baru.</li>
</ol>
</div>
<div class="flex flex-col sm:flex-row justify-center gap-4">

<a href="{{ $formulir->isi ?? '#' }}" 
   target="_blank"
   class="bg-white text-black px-10 py-5 rounded-md font-extrabold shadow-xl 
          hover:bg-primary-softcontainer hover:text-on-background transition-all duration-300">
   Download Formulir Umum
</a>

<a href="{{ $persyaratan->isi ?? '#' }}" 
   target="_blank"
   class="bg-white text-black px-10 py-5 rounded-md font-extrabold shadow-xl 
          hover:bg-primary-softcontainer hover:text-on-background transition-all duration-300">
   Download Persyaratan
</a>

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