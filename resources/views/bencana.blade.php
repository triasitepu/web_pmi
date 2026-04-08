<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Bencana - PMI Portal</title>
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
<!-- Hero Section: Active Disaster Brief -->
<section class="relative w-full py-24 bg-surface-container-low overflow-hidden">
<div class="max-w-7xl mx-auto px-8 grid md:grid-cols-2 gap-16 items-center">
<div class="z-10">
<span class="inline-flex items-center gap-2 px-3 py-1 bg-red-100 text-primary font-bold text-xs tracking-widest uppercase rounded-sm mb-6"><span class="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span> Respon Aktif</span>
<h1 class="text-5xl md:text-6xl font-extrabold text-on-surface leading-[1.1] mb-6">Respon Cepat untuk Banjir Terbaru</h1>
<p class="text-lg text-secondary leading-relaxed mb-10 max-w-lg">Tim kami saat ini berada di lapangan menyediakan air bersih, bantuan medis, dan tempat tinggal bagi lebih dari 5.000 keluarga yang terdampak bencana regional baru-baru ini.</p>
<div class="flex flex-wrap gap-4">
<button class="signature-gradient text-on-primary px-8 py-4 rounded-lg font-bold text-base shadow-lg hover:shadow-xl transition-all active:scale-95">Donasi Sekarang</button>
<button class="bg-surface-container-highest text-on-surface px-8 py-4 rounded-lg font-bold text-base hover:bg-surface-container-high transition-all">Lihat Laporan Situasi</button>
</div>
</div>
<div class="relative">
<div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl relative z-10">
<img class="w-full h-full object-cover" data-alt="Humanitarian aid workers in red vests unloading supplies from a truck in a flooded village at dusk, cinematic low angle lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNrJKDSy9SI_Ti8oNhunvZoQqzngXdwKHrW4kVE2OW9vtBY9WBYN8aWtv9NheroIhlwP9-b-eX16Q2IR2StyddZoqJsFfBrRpaAy5bB3WFVjpsfkDD49b5p2bnpaKPPgGoSzGmHYhJGnV9HYuVA4vDZIPzf19_h7HmxqaSMFitkeJrxzN5XRizIykw3eCAIMwYjNgT99kMJrmembHGwF3d1mNFabNXRUM7olj-b-wVi_49Qy_ZBhRY2B59kTMuRsw1wZFE7PsWDw"/>
</div>
<div class="absolute -bottom-8 -left-8 bg-surface-container-lowest p-8 rounded-xl card-shadow z-20 max-w-xs">
<div class="text-primary text-4xl font-black mb-1">94%</div>
<p class="text-sm text-secondary font-medium">Donasi disalurkan langsung ke operasi lapangan dan pasokan darurat.</p>
</div>
</div>
</div>
</section>
<!-- Current Responses Bento Grid -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-8">
<div class="flex justify-between items-end mb-12">
<div>
<h2 class="text-3xl font-extrabold text-on-surface mb-2">Operasi Bantuan Berjalan</h2>
<p class="text-secondary">Melacak jejak global kami dalam manajemen krisis kemanusiaan.</p>
</div>
<a class="text-primary font-bold flex items-center gap-1 hover:gap-2 transition-all" href="#">Semua Laporan <span class="material-symbols-outlined">arrow_forward</span></a>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-6">
<!-- Bento Main -->
<div class="md:col-span-8 bg-surface-container-lowest rounded-2xl p-8 card-shadow flex flex-col justify-between group cursor-pointer border border-transparent hover:border-outline-variant/30 transition-all">
<div>
<div class="flex justify-between items-start mb-12">
<span class="bg-tertiary/10 text-tertiary px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">Tim respon aktif di lokasi</span>
<span class="text-secondary text-sm">Pembaruan: 2 jam lalu</span>
</div>
<h3 class="text-3xl font-bold mb-4 leading-tight group-hover:text-primary transition-colors">Rekonstruksi Jawa Barat Tahap II</h3>
<p class="text-secondary mb-8 max-w-xl">Fokus pada perumahan tahan gempa dan pusat layanan kesehatan masyarakat bagi warga yang mengungsi di dataran tinggi yang terdampak.</p>
</div>
<div class="flex items-center gap-4">
<div class="flex -space-x-3 overflow-hidden">
<img alt="" class="inline-block h-10 w-10 rounded-full ring-2 ring-white" data-alt="Portrait of a medical volunteer smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVkzq2yvatywfu2m_sT2ME6gGQvTLG0u8XZP5Cudqesjf6dXV1C2icKN6ySQ6od8yooSly_vnGPttFCSsop8QP_kb9ls8XfbkfSDmYoEary9mWroDhyneaSRSbRz3Xe91zCXMqhesDNwsr2lA0-Q5fgJg_QhvtrBSMyY50f6xdQffX1f4VATNCoiZjJ1mfUAVUorT_un7qrmU3SOS2wfvLXNiFlGuAXNC5DC0_pmSdJSkhpN__5VHtGavtsSycc89KjpEYso7Y8A"/>
<img alt="" class="inline-block h-10 w-10 rounded-full ring-2 ring-white" data-alt="Portrait of a female humanitarian coordinator" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkJfAWZypoaSGewS5CHFs45IFEFMpIMsM9V-lMOEAeVjXCmbAmnM5WAhmoiQ4LKH5YsNDsX0SP-wDjtvKGhitXhhuv6XuTllSo5JO16lEeOrSznfpuYDCyLGONZT5su6wue2rgve-S5mWxbCUr8Hmz5h1n4DeVAxjFhHaGd-XkjOfUdflv0s0YN7UWV3pk7NYHdNgU6gWCavQthiBt-YJD53LAltWBGlhr5zaD6QvDcDgDiGu2iPbvsy25ajmHl3b4YZ5o7xoi8A"/>
<div class="h-10 w-10 rounded-full ring-2 ring-white bg-surface-container-high flex items-center justify-center text-[10px] font-bold text-secondary">+12</div>
</div>
<span class="text-xs font-semibold text-secondary">Tim respon aktif di lokasi</span>
</div>
</div>
<!-- Bento Small 1 -->
<div class="md:col-span-4 bg-primary text-on-primary rounded-2xl p-8 flex flex-col justify-between relative overflow-hidden group shadow-lg">
<div class="relative z-10">
<span class="material-symbols-outlined text-4xl mb-4">volunteer_activism</span>
<h3 class="text-xl font-bold mb-2">Dana Bantuan Darurat</h3>
<p class="text-on-primary/80 text-sm leading-relaxed">Pendanaan segera untuk logistik, obat-obatan, dan penyebaran air bersih.</p>
</div>
<button class="relative z-10 w-full mt-8 bg-white text-primary font-bold py-3 rounded-lg hover:bg-on-primary-container transition-colors active:scale-95">Donasi ke Dana Umum</button>
<div class="absolute -right-4 -bottom-4 opacity-10 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[160px]" style="font-variation-settings: 'FILL' 1;">favorite</span>
</div>
</div>
<!-- Bento Side 1 -->
<div class="md:col-span-4 bg-surface-container-low rounded-2xl p-8 border border-transparent hover:border-outline-variant/20 transition-all">
<div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center mb-6">
<span class="material-symbols-outlined text-primary">water_drop</span>
</div>
<h3 class="text-lg font-bold mb-3">Krisis Air Bersih</h3>
<p class="text-secondary text-sm leading-relaxed mb-6">Mengerahkan unit pemurnian mobile ke Sumatera Utara setelah kerusakan infrastruktur.</p>
<div class="w-full bg-surface-container-highest h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full w-3/4 rounded-full"></div>
</div>
<div class="flex justify-between mt-2 text-[10px] font-bold text-secondary-fixed-dim uppercase tracking-tighter">
<span>Target tercapai: 75%</span>
<span>$15k / $20k</span>
</div>
</div>
<!-- Bento Side 2 -->
<div class="md:col-span-8 bg-surface-container-lowest rounded-2xl overflow-hidden grid md:grid-cols-2 card-shadow">
<div class="p-8 flex flex-col justify-center">
<h3 class="text-xl font-bold mb-4">Logistik &amp; Rantai Pasok</h3>
<p class="text-secondary text-sm leading-relaxed mb-6">Sistem gudang otomatis kami memastikan bahwa 95% paket darurat mencapai tujuannya dalam waktu 24 jam setelah pemicu bencana.</p>
<div class="flex gap-4">
<div class="flex items-center gap-2 text-xs font-bold text-on-surface"><span class="material-symbols-outlined text-tertiary">check_circle</span> Siap Angkutan Udara</div>
<div class="flex items-center gap-2 text-xs font-bold text-on-surface"><span class="material-symbols-outlined text-tertiary">check_circle</span> Rantai Dingin</div>
</div>
</div>
<div class="relative min-h-[200px]">
<img class="w-full h-full object-cover" data-alt="Organized stacks of white cardboard aid boxes with a red cross logo in a high-tech warehouse, soft industrial lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJRycnZb6cB1uEpjFjaGjY3KjZ-x_G0VVQK0MIxnRw6HCqLTucLxFVauAn3HO_6APgk7-IiM2c65v_MO6ozosvMbM2Faf-ld2i4aHaFIYZlT8TBqDux4Il_bEL-XtroNN8XPiVngHUONPehX1dZt3Sy-oV1PxOWhQAKD5tlo4p19I9x99S3oyRMAnGZE0Sc27_dItfEi7lwOVsg0PS8dYPkdol36k8QvE8bTpeqC2cEtv7IJL-gbYI_Vk0XtQt4QudZtBNlLR5mA"/>
</div>
</div>
</div>
</div>
</section>
<!-- Safety Tips: Asymmetric Layout -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-8">
<div class="max-w-2xl mb-16">
<h2 class="text-3xl font-extrabold text-on-surface mb-4">Kesiapsiagaan &amp; Tips Keselamatan</h2>
<p class="text-secondary leading-relaxed">Pengetahuan adalah garis pertahanan pertama. Pelajari cara melindungi diri Anda dan komunitas Anda selama berbagai skenario darurat.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
<div class="space-y-8">
<div class="group">
<div class="text-6xl font-black text-surface-container-highest group-hover:text-primary/10 transition-colors mb-[-24px] pointer-events-none">01</div>
<div class="relative pl-4 border-l-2 border-primary/20 group-hover:border-primary transition-colors">
<h4 class="font-bold text-lg mb-2">Tas Siaga Bencana 101</h4>
<p class="text-sm text-secondary leading-relaxed">Siapkan tas siaga 72 jam termasuk air, makanan tahan lama, obat-obatan, dan dokumen penting.</p>
</div>
</div>
<div class="group">
<div class="text-6xl font-black text-surface-container-highest group-hover:text-primary/10 transition-colors mb-[-24px] pointer-events-none">02</div>
<div class="relative pl-4 border-l-2 border-primary/20 group-hover:border-primary transition-colors">
<h4 class="font-bold text-lg mb-2">Rute Evakuasi</h4>
<p class="text-sm text-secondary leading-relaxed">Petakan setidaknya dua jalan keluar dari lingkungan Anda dan tetapkan titik temu keluarga.</p>
</div>
</div>
</div>
<div class="space-y-8 mt-12 md:mt-0">
<div class="group">
<div class="text-6xl font-black text-surface-container-highest group-hover:text-primary/10 transition-colors mb-[-24px] pointer-events-none">03</div>
<div class="relative pl-4 border-l-2 border-primary/20 group-hover:border-primary transition-colors">
<h4 class="font-bold text-lg mb-2">Kesiapsiagaan Banjir</h4>
<p class="text-sm text-secondary leading-relaxed">Jangan pernah berkendara melalui area banjir. Putar balik, jangan nekat. Segera pindah ke dataran tinggi.</p>
</div>
</div>
<div class="group">
<div class="text-6xl font-black text-surface-container-highest group-hover:text-primary/10 transition-colors mb-[-24px] pointer-events-none">04</div>
<div class="relative pl-4 border-l-2 border-primary/20 group-hover:border-primary transition-colors">
<h4 class="font-bold text-lg mb-2">Keselamatan Gempa Bumi</h4>
<p class="text-sm text-secondary leading-relaxed">Berlutut, Berlindung, dan Bertahan. Jauhi kaca, jendela, dan dinding luar.</p>
</div>
</div>
</div>
<div class="bg-surface-container-lowest rounded-2xl p-8 card-shadow self-start md:-mt-8">
<h4 class="font-bold text-xl mb-6">Tetap Terinformasi</h4>
<p class="text-sm text-secondary mb-8">Terima peringatan bencana real-time dan instruksi keselamatan langsung ke perangkat Anda.</p>
<form class="space-y-4">
<div class="space-y-1">
<label class="text-[10px] font-bold uppercase tracking-widest text-secondary-fixed-dim">Lokasi / Kota</label>
<input class="w-full bg-surface-container-high border-none border-b-2 border-outline-variant/30 focus:border-primary focus:ring-0 text-sm py-3 rounded-t-lg transition-all" placeholder="e.g. Jakarta Pusat" type="text"/>
</div>
<button class="w-full bg-on-surface text-surface py-3 rounded-lg font-bold text-sm hover:bg-primary transition-colors">Berlangganan Peringatan</button>
</form>
</div>
</div>
</div>
</section>
<!-- Donation Portal Summary -->
<section class="py-24 bg-surface">
<div class="max-w-4xl mx-auto px-8 text-center">
<div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-red-50 text-primary mb-8">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">volunteer_activism</span>
</div>
<h2 class="text-4xl font-extrabold mb-6">Kontribusi Anda Menyelamatkan Nyawa</h2>
<p class="text-secondary text-lg mb-12">Setiap donasi adalah secercah harapan. Baik itu menyediakan makanan untuk sehari atau membangun kembali rumah komunitas, dukungan Anda sangat berarti.</p>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
<button class="py-4 rounded-xl border border-outline-variant/30 font-bold hover:bg-primary hover:text-white hover:border-primary transition-all">$25</button>
<button class="py-4 rounded-xl border border-outline-variant/30 font-bold hover:bg-primary hover:text-white hover:border-primary transition-all">$50</button>
<button class="py-4 rounded-xl border border-outline-variant/30 font-bold hover:bg-primary hover:text-white hover:border-primary transition-all">$100</button>
<button class="py-4 rounded-xl border border-outline-variant/30 font-bold hover:bg-primary hover:text-white hover:border-primary transition-all">Kustom</button>
</div>
<button class="signature-gradient text-on-primary px-12 py-5 rounded-full font-black text-lg shadow-xl hover:shadow-2xl transition-all active:scale-95 inline-flex items-center gap-3">Donasi Sekarang <span class="material-symbols-outlined">favorite</span></button>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-12 px-8 bg-gray-50 dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto font-inter text-sm leading-relaxed">
<div>
<div class="text-xl font-bold text-gray-900 dark:text-white mb-4">PMI Portal</div>
<p class="text-gray-500 dark:text-gray-400 mb-6">Berdedikasi pada keunggulan kemanusiaan dan intervensi darurat cepat sejak 1945.</p>
<div class="flex space-x-4">
<a class="text-gray-400 hover:text-red-600 transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
<a class="text-gray-400 hover:text-red-600 transition-colors" href="#"><span class="material-symbols-outlined">mail</span></a>
<a class="text-gray-400 hover:text-red-600 transition-colors" href="#"><span class="material-symbols-outlined">call</span></a>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<div>
<h5 class="font-bold text-gray-900 dark:text-white mb-4">Layanan</h5>
<ul class="space-y-2">
<li><a class="text-gray-500 dark:text-gray-400 hover:text-red-600" href="#">Bank Darah</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-red-600" href="#">Ambulans</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-red-600" href="#">Kebencanaan</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-red-600" href="#">Relawan</a></li>
</ul>
</div>
<div>
<h5 class="font-bold text-gray-900 dark:text-white mb-4">Layanan</h5>
<ul class="space-y-2">
<li><a class="text-gray-500 dark:text-gray-400 hover:text-red-600" href="#">Bank Darah</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-red-600" href="#">Ambulans</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-red-600" href="#">Kebencanaan</a></li>
<li><a class="text-gray-500 dark:text-gray-400 hover:text-red-600" href="#">Relawan</a></li>
</ul>
</div>
</div>
<div class="bg-surface-container-high rounded-xl p-6 flex flex-col justify-between">
<div class="font-bold text-on-surface mb-2">Darurat?</div>
<p class="text-xs text-secondary mb-4">Hubungi hotline nasional kami yang tersedia 24/7 untuk koordinasi bencana segera.</p>
<div class="text-2xl font-black text-primary">112</div>
</div>
</div>
<div class="max-w-7xl mx-auto px-8 mt-12 pt-8 border-t border-gray-200 dark:border-gray-800 flex justify-between items-center text-gray-500 dark:text-gray-400 text-xs">
<div>© 2024 Layanan Kemanusiaan. Seluruh Hak Cipta Dilindungi.</div>
<div class="flex gap-6">
<span>Indonesia</span>
<span>Inggris</span>
</div>
</div>
</footer>
<!-- FAB for Emergency -->
<div class="fixed bottom-8 right-8 z-[100] md:hidden">
<button class="signature-gradient w-16 h-16 rounded-full flex items-center justify-center text-white shadow-2xl active:scale-90 transition-transform">
<span class="material-symbols-outlined text-3xl">emergency</span>
</button>
</div>
</body></html>