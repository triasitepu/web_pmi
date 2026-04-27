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
<section class="relative h-[716px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="professional rescue team in red uniforms conducting disaster preparedness drill in mountain terrain during dawn with cinematic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOZ-9k4rUIPfEHCVncwM_DgowYAsL3NXX4q4EZ71vLQyz6YK7fRnXzPSKLNoLUq6wP8_F7Z6vM8em8drKLGT4LxLxP9C1rV22BdSaGyfBqvUeli09p_zGM5cT3QelSb46jgoC1vkec4PJt659PvOq3GRmbZ46JPaDftq1BSEYUibUkmxwWLVFhjlfSMXdCaq8hfiQydiR0tWnFu4nHCCceoqBKMffiHrF9C2in6Vn1OkoB63p1cIEP2-vd3PVHQroT-vNToiTzsg"/>
<div class="absolute inset-0 bg-gradient-to-r from-on-background/80 via-on-background/40 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-3xl">
<span class="inline-block px-3 py-1 bg-primary-container text-on-primary text-[10px] font-black tracking-widest uppercase mb-4 rounded-sm">DIVISI PENANGGULANGAN BENCANA</span>
<h1 class="font-headline text-5xl md:text-7xl font-black text-white leading-none tracking-tighter mb-6 uppercase">Penanggulangan Bencana PMI Kabupaten Magetan</h1>
<p class="text-white/80 text-xl font-body leading-relaxed max-w-lg border-l-4 border-primary-container pl-6">Membangun ketangguhan masyarakat Magetan melalui kesiapsiagaan terpadu dan respons cepat yang berlandaskan kemanusiaan.</p>
</div>
</div>
</section>
<!-- Section 2: Geografis & Kerentanan -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 md:grid-cols-12 gap-16 items-center">
<div class="md:col-span-7">
<h2 class="font-headline text-4xl font-extrabold text-on-surface mb-8 tracking-tight uppercase">Geografis &amp; Kerentanan Wilayah</h2>
<div class="space-y-6 text-secondary text-lg leading-relaxed">
<p>Kabupaten Magetan memiliki karakteristik geografis yang unik dengan tantangan bencana yang spesifik. Terletak di lereng Gunung Lawu, wilayah barat Magetan memiliki risiko tinggi terhadap <strong>tanah longsor</strong> dan angin kencang.</p>
<p>Sementara itu, wilayah dataran rendah dan bantaran sungai memiliki kerentanan terhadap <strong>banjir genangan</strong> saat musim penghujan ekstrim. PMI Kabupaten Magetan secara aktif memetakan titik-titik rawan ini untuk mempercepat koordinasi saat tanggap darurat.</p>
<p class="font-bold text-on-surface italic">"Kesiapsiagaan masyarakat di lereng Lawu dan dataran rendah Magetan adalah prioritas utama kami dalam meminimalisir dampak bencana."</p>
</div>
</div>
<div class="md:col-span-5">
<div class="aspect-square bg-surface-container-low relative rounded-2xl overflow-hidden p-8 flex items-center justify-center border border-outline-variant/10">
<img class="absolute inset-0 w-full h-full object-cover mix-blend-multiply opacity-20" data-alt="minimalist clean topographic map showing disaster risk zones in monochrome red and gray palette with surgical precision styling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDv_UMglFm5RfG0V9_4r7Pp9hm5sOCbflR_1fssTlV7D7qp4ruU0Go7uxKwx5R9Tb_MbLnZ42rcTSBS3uch5c9rZeIZIKpfBHu-ZVbB7XuU5Uc8SEnM1aBGDRHHu0zxN3eKadlPWIm-ZwFai6f2lGJStB4Qh2OeVZt1CJrcSTWdb9jryqmpyl1GStrozHnTC5NmcgMfTLaUlxaygjvayW1s5676luQG8zbZaD1QG_-joubotgc_rg6KtO3Lp24V_ukAwdfX_vSd2Q"/>
<div class="relative text-center">
<span class="text-7xl font-black text-primary font-headline uppercase">Lawu</span>
<p class="text-xs uppercase font-bold tracking-widest mt-2 text-secondary">Zona Risiko Tinggi</p>
<p class="text-sm text-secondary mt-4 max-w-[200px] mx-auto">Pemetaan intensif area rawan longsor dan pergerakan tanah di Magetan Barat.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section 3: Mandat & Dasar Hukum -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="md:col-span-1">
<h2 class="font-headline text-3xl font-extrabold text-on-surface uppercase tracking-tight leading-none mb-4">Mandat &amp;<br/>Dasar Hukum</h2>
<div class="w-16 h-1 bg-primary-container"></div>
</div>
<div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
<div class="bg-surface-container-lowest p-8 rounded-xl border-l-4 border-primary shadow-sm">
<h4 class="font-headline font-bold text-lg mb-2">UU No. 1 Tahun 2018</h4>
<p class="text-sm text-secondary leading-relaxed">Landasan hukum penyelenggaraan Kepalangmerahan di Indonesia yang mengatur tugas PMI dalam penanggulangan bencana.</p>
</div>
<div class="bg-surface-container-lowest p-8 rounded-xl border-l-4 border-primary shadow-sm">
<h4 class="font-headline font-bold text-lg mb-2">Perda Kabupaten Magetan</h4>
<p class="text-sm text-secondary leading-relaxed">Sinergi PMI dengan BPBD Magetan dalam kerangka sistem penanggulangan bencana daerah secara terpadu.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Section 4: Prinsip 6 Jam -->
<section class="py-32 relative overflow-hidden bg-on-background text-white">
<div class="absolute top-0 right-0 w-1/3 h-full bg-primary-container skew-x-12 translate-x-20"></div>
<div class="max-w-7xl mx-auto px-8 relative z-10">
<div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
<div>
<h2 class="font-headline text-7xl font-black tracking-tighter uppercase mb-4">Prinsip <span class="text-primary-container">6 Jam</span></h2>
<p class="text-xl text-white/60 font-medium mb-8">Komitmen respons tercepat untuk keselamatan jiwa di Magetan.</p>
<div class="flex items-start gap-6">
<div class="flex-shrink-0 w-12 h-12 rounded-full border-2 border-primary-container flex items-center justify-center">
<span class="material-symbols-outlined text-primary-container">timer</span>
</div>
<p class="text-lg leading-relaxed text-white/80">Personil dan bantuan logistik dasar dari Markas PMI Magetan harus sudah tiba di lokasi kejadian maksimal dalam waktu 6 jam setelah informasi diterima.</p>
</div>
</div>
<div class="flex justify-center">
<div class="relative w-64 h-64 flex items-center justify-center">
<div class="absolute inset-0 border-8 border-white/10 rounded-full"></div>
<div class="absolute inset-0 border-t-8 border-primary-container rounded-full rotate-45"></div>
<span class="text-6xl font-black font-headline">06:00</span>
</div>
</div>
</div>
</div>
</section>
<!-- Section 5: Kapasitas Operasi -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-8">
<div class="flex justify-between items-end mb-16">
<div>
<h2 class="font-headline text-4xl font-extrabold text-on-surface tracking-tight uppercase">Kapasitas Operasi PMI Magetan</h2>
<p class="text-secondary mt-2">Sumber daya lokal dengan dukungan jaringan regional PMI Jawa Timur.</p>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap-6">
<!-- Warehouse Card -->
<div class="md:col-span-2 md:row-span-2 bg-surface-container-low rounded-2xl p-10 flex flex-col justify-between">
<div>
<span class="material-symbols-outlined text-4xl text-primary mb-6" data-weight="fill">warehouse</span>
<h3 class="text-2xl font-bold mb-4 font-headline uppercase">Pusat Logistik Lokal</h3>
<p class="text-secondary text-sm mb-8">Gudang Markas PMI Magetan menyimpan paket bantuan darurat yang siap dimobilisasi segera ke seluruh kecamatan.</p>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="flex items-center gap-3 bg-white p-3 rounded-lg"><span class="w-2 h-2 bg-primary rounded-full"></span><span class="text-xs font-bold uppercase">Markas Pusat</span></div>
<div class="flex items-center gap-3 bg-white p-3 rounded-lg"><span class="w-2 h-2 bg-primary rounded-full"></span><span class="text-xs font-bold uppercase">Unit Siaga Lawu</span></div>
<div class="flex items-center gap-3 bg-white p-3 rounded-lg"><span class="w-2 h-2 bg-primary rounded-full"></span><span class="text-xs font-bold uppercase">Logistik Regional</span></div>
<div class="flex items-center gap-3 bg-white p-3 rounded-lg"><span class="w-2 h-2 bg-primary rounded-full"></span><span class="text-xs font-bold uppercase">Cadangan Darurat</span></div>
</div>
</div>
<!-- Specialty Equipments -->
<div class="bg-surface-container-lowest border border-surface-container-high rounded-2xl p-8 group hover:bg-primary-container transition-all duration-300">
<span class="material-symbols-outlined text-3xl mb-4 group-hover:text-white transition-colors">terrain</span>
<h4 class="font-bold text-sm uppercase group-hover:text-white transition-colors">Unit 4x4</h4>
<p class="text-[10px] text-secondary mt-2 group-hover:text-white/70 transition-colors">Akses medan berat di lereng Gunung Lawu.</p>
</div>
<div class="bg-surface-container-lowest border border-surface-container-high rounded-2xl p-8 group hover:bg-primary-container transition-all duration-300">
<span class="material-symbols-outlined text-3xl mb-4 group-hover:text-white transition-colors">communication</span>
<h4 class="font-bold text-sm uppercase group-hover:text-white transition-colors">Radio Jaring</h4>
<p class="text-[10px] text-secondary mt-2 group-hover:text-white/70 transition-colors">Komunikasi area blank spot pegunungan.</p>
</div>
<div class="bg-surface-container-lowest border border-surface-container-high rounded-2xl p-8 group hover:bg-primary-container transition-all duration-300">
<span class="material-symbols-outlined text-3xl mb-4 group-hover:text-white transition-colors">water_drop</span>
<h4 class="font-bold text-sm uppercase group-hover:text-white transition-colors">Tangki Air</h4>
<p class="text-[10px] text-secondary mt-2 group-hover:text-white/70 transition-colors">Distribusi air bersih pasca bencana.</p>
</div>
<div class="bg-surface-container-lowest border border-surface-container-high rounded-2xl p-8 group hover:bg-primary-container transition-all duration-300">
<span class="material-symbols-outlined text-3xl mb-4 group-hover:text-white transition-colors">emergency</span>
<h4 class="font-bold text-sm uppercase group-hover:text-white transition-colors">Ambulans</h4>
<p class="text-[10px] text-secondary mt-2 group-hover:text-white/70 transition-colors">Layanan medis gawat darurat 24 jam.</p>
</div>
</div>
</div>
</section>
<!-- Section 6: Daftar Layanan -->
<section class="py-24 bg-surface-container-lowest">
<div class="max-w-7xl mx-auto px-8">
<div class="text-center mb-16">
<h2 class="font-headline text-4xl font-extrabold text-on-surface uppercase mb-4 tracking-tighter">Layanan Kemanusiaan Magetan</h2>
<div class="w-24 h-1 bg-primary-container mx-auto"></div>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4">
<div class="flex flex-col items-center p-6 text-center">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">groups</span>
</div>
<span class="text-xs font-bold uppercase tracking-wider">Evakuasi</span>
</div>
<div class="flex flex-col items-center p-6 text-center">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">home_work</span>
</div>
<span class="text-xs font-bold uppercase tracking-wider">Shelter</span>
</div>
<div class="flex flex-col items-center p-6 text-center">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">medical_services</span>
</div>
<span class="text-xs font-bold uppercase tracking-wider">P3K</span>
</div>
<div class="flex flex-col items-center p-6 text-center">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">ambulance</span>
</div>
<span class="text-xs font-bold uppercase tracking-wider">Ambulans</span>
</div>
<div class="flex flex-col items-center p-6 text-center">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">soup_kitchen</span>
</div>
<span class="text-xs font-bold uppercase tracking-wider">Dapur Umum</span>
</div>
<div class="flex flex-col items-center p-6 text-center">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">package_2</span>
</div>
<span class="text-xs font-bold uppercase tracking-wider">Logistik</span>
</div>
<div class="flex flex-col items-center p-6 text-center">
<div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">faucet</span>
</div>
<span class="text-xs font-bold uppercase tracking-wider">WASH</span>
</div>
</div>
</div>
</section>
<!-- Section 7: Tips Keselamatan -->
<section class="py-24 bg-surface-container-low">
<div class="max-w-7xl mx-auto px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
<div class="max-w-xl">
<h2 class="font-headline text-4xl font-extrabold text-on-surface uppercase tracking-tight">Tips Keselamatan Warga Magetan</h2>
<p class="text-secondary mt-2">Panduan mitigasi mandiri berdasarkan karakteristik wilayah Kabupaten Magetan.</p>
</div>
<div class="h-px flex-grow bg-outline-variant/30 hidden md:block mx-8 mb-4"></div>
<button class="text-primary font-bold text-sm uppercase flex items-center gap-2">Unduh Panduan <span class="material-symbols-outlined">download</span></button>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Flood -->
<div class="bg-surface-container-lowest p-1 overflow-hidden rounded-2xl shadow-sm hover:shadow-xl transition-shadow group">
<img class="w-full h-48 object-cover rounded-xl mb-6" data-alt="conceptual photo of flood emergency kit including boots and waterproof bag on a wet surface with moody atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6Sh-2RhrzeI-qJAI8yWkmcpQRzHNZ44ojF8E77TDBfHYriH-2VGsd0ZgpZaD9dCzXZUIlfzmmvb9135sIIvthTOlNcm02BP0GSWuaIjZghWGgo_QhW7iqpGJw29Dr6NjGYE_sfMTKF1gm2fM3Sw-wuk5BDupgXWVgb4p44bdegOniXdm-FFBvBGRMqsJqNray-1wTZLjNzEa94D6nmBMjE1cZmgzBoHgJ-6jOg6J4A6kznTKl6A4IaE_b-UCABonXNF50qqXnJQ"/>
<div class="p-6">
<h4 class="font-headline font-extrabold text-xl mb-3">Siaga Banjir</h4>
<p class="text-xs text-secondary leading-relaxed mb-6">Untuk warga di dataran rendah, pantau tinggi muka air sungai saat hujan lebat di hulu Lawu.</p>
<a class="text-[10px] font-black uppercase tracking-widest text-primary flex items-center gap-2" href="#">Baca Selengkapnya <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
</div>
</div>
<!-- Landslide -->
<div class="bg-surface-container-lowest p-1 overflow-hidden rounded-2xl shadow-sm hover:shadow-xl transition-shadow">
<img class="w-full h-48 object-cover rounded-xl mb-6" data-alt="mountainous area with visible landslide warning signs and lush green vegetation under overcast sky" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGAJ0XoWzm8bi5IeSqs6y8WRCauznJ1PfJj7VqAdzXrDKOQzaXIPzzgCZVYG3imQ4zzM2ZKzUWyk-RlK-a3F17Po3RMDWGkJ3nLvremlFsJ8_hwghC1eXKmyMZXMcg2-FvCPqfIJ9MP_YJiKwSbhbrhSg-afMkE1ozg2Ddyrgsz6_8mrr_RxWhv082TYzbkbXr1KdcwFu5ZCVPuxWJ0W77jCg9i8iq6bXJ5BRwjG-rSvSsoya731b3hx_f5sLvVy08cVU3UStToQ"/>
<div class="p-6">
<h4 class="font-headline font-extrabold text-xl mb-3">Waspada Longsor</h4>
<p class="text-xs text-secondary leading-relaxed mb-6">Waspadai rekahan tanah di lereng Lawu. Segera mengungsi jika terdengar suara gemuruh dari atas.</p>
<a class="text-[10px] font-black uppercase tracking-widest text-primary flex items-center gap-2" href="#">Baca Selengkapnya <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
</div>
</div>
<!-- Earthquake -->
<div class="bg-surface-container-lowest p-1 overflow-hidden rounded-2xl shadow-sm hover:shadow-xl transition-shadow">
<img class="w-full h-48 object-cover rounded-xl mb-6" data-alt="safety demonstration showing a person doing drop cover and hold on under a sturdy table in a modern living room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4DGODtTqLlO0blGVtpAAmi4MXd5a4iO8JJM2s9vx2FAJTxZG-YqbGIMXbh1Sk7FIAnEO4CuxQPgTwZ7Ea7EBYG-o2im-TczBlNzhw5gClYWHClPkHTOC9xa491A-qZ35WtSTRy6GKyuoqlmNTw5k7y8BVDmuOP1BAxcZkM9npF4NZhAKJTOcLNi0u3OvPWEwEi3tAOar6V_R0ILSaAN-yb1Eb1ewOWuBEX4oap33fBf6rF9a9IYcw1a4trK0dHJ3wcXgjsRFPfg"/>
<div class="p-6">
<h4 class="font-headline font-extrabold text-xl mb-3">Gempa Bumi</h4>
<p class="text-xs text-secondary leading-relaxed mb-6">Jangan panik, lakukan Drop-Cover-Hold On. Hindari area di dekat dinding kaca atau lemari tinggi.</p>
<a class="text-[10px] font-black uppercase tracking-widest text-primary flex items-center gap-2" href="#">Baca Selengkapnya <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
</div>
</div>
<!-- Volcano -->
<div class="bg-surface-container-lowest p-1 overflow-hidden rounded-2xl shadow-sm hover:shadow-xl transition-shadow">
<img class="w-full h-48 object-cover rounded-xl mb-6" data-alt="emergency N95 mask and goggles laid out for volcanic ash protection with a blurred mountain in the background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfFA9O1QczI9uDfaz-hug7ErzqADpWhW2AivXTBhbRkoREmNDvzt6oGH7Qo4SVk3OMtpmd4In96WMIjoaaL_MRlGjG-c_8Eedo190qyYdAKSpKfCBdWHI5OiNZniczgS2uoD1AQUMUkj56b_qfEzDQI1JOVvzGM7nePhoSzc98QyUEmVe5MI9eCrdR-bBZy3QlVfo__VYRI4DhenwJRohbzadKteBxfZTwEUWx69ltm75SJ0rFdCBgnBsrjwmZEFDk62vhXY5i_A"/>
<div class="p-6">
<h4 class="font-headline font-extrabold text-xl mb-3">Abu Vulkanik</h4>
<p class="text-xs text-secondary leading-relaxed mb-6">Selalu sediakan masker N95 di rumah jika terjadi peningkatan aktivitas vulkanik di kawasan Lawu.</p>
<a class="text-[10px] font-black uppercase tracking-widest text-primary flex items-center gap-2" href="#">Baca Selengkapnya <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer Shell -->
<footer class="bg-slate-50 dark:bg-slate-950">
<div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center py-12 px-8 border-t border-slate-200 dark:border-slate-800">
<div class="mb-8 md:mb-0">
<div class="text-lg font-bold text-slate-900 dark:text-slate-100 uppercase font-headline mb-2">PMI KABUPATEN MAGETAN</div>
<p class="font-['Inter'] text-xs tracking-wide leading-relaxed text-slate-500 uppercase">© 2024 PALANG MERAH INDONESIA KABUPATEN MAGETAN. DIVISI PENANGGULANGAN BENCANA.</p>
</div>
<nav class="flex flex-wrap justify-center gap-8 font-['Inter'] text-xs tracking-wide uppercase">
<a class="text-slate-500 hover:text-slate-900 underline decoration-red-600/30 underline-offset-4 transition-opacity opacity-80 hover:opacity-100" href="#">Etika Operasional</a>
<a class="text-slate-500 hover:text-slate-900 underline decoration-red-600/30 underline-offset-4 transition-opacity opacity-80 hover:opacity-100" href="#">Privasi</a>
<a class="text-slate-500 hover:text-slate-900 underline decoration-red-600/30 underline-offset-4 transition-opacity opacity-80 hover:opacity-100" href="#">Legal</a>
<a class="text-slate-500 hover:text-slate-900 underline decoration-red-600/30 underline-offset-4 transition-opacity opacity-80 hover:opacity-100" href="#">Donasi</a>
</nav>
</div>
</footer>
</body></html>