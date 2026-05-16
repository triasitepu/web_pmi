<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Bencana - PMI Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;800&amp;family=Inter:wght@300;400;500;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
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
            borderRadius: {
                DEFAULT: "0.125rem",
                lg: "0.25rem",
                xl: "0.5rem",
                full: "0.75rem"
            },
            fontFamily: {
                headline: ["Manrope"],
                body: ["Inter"],
                label: ["Inter"]
            }
          }
        }
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
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body selection:bg-primary-container selection:text-white">

@extends('partials.header')

<main class="pt-20">
    <!-- Hero Section -->
    <section class="relative min-h-[520px] md:min-h-[650px] lg:min-h-[716px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover" 
                 data-alt="professional rescue team..." 
                 src="{{ url('storage/' . $headline->foto) }}"/>
            <div class="absolute inset-0 bg-gradient-to-r from-on-background/80 via-on-background/50 to-transparent"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-8 w-full">
            <div class="max-w-3xl">
                <h1 class="font-headline text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black text-white leading-tight tracking-tighter mb-6">
                    Penanggulangan Bencana<br>PMI Kabupaten Magetan
                </h1>
                <p class="text-white/80 text-lg md:text-xl font-body leading-relaxed max-w-lg border-l-4 border-primary-softcontainer pl-6">
                    {{ $headline->isi ?? 'Komitmen kami untuk kesiapsiagaan dan respons cepat dalam menghadapi bencana di Magetan.' }}
                </p>
            </div>
        </div>
    </section>

    <!-- Geografis & Kerentanan -->
    <section class="py-16 md:py-24 bg-surface px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 md:gap-16 items-center">
                <div class="md:col-span-7">
                    <h2 class="font-headline text-3xl md:text-4xl font-extrabold text-on-surface mb-6 md:mb-8 tracking-tight">
                        Geografis &amp; Kerentanan Wilayah
                    </h2>
                    <div class="space-y-6 text-secondary text-[17px] md:text-lg leading-relaxed">
                        <p>Kabupaten Magetan memiliki karakteristik geografis yang unik dengan tantangan bencana yang spesifik. Terletak di lereng Gunung Lawu, wilayah barat Magetan memiliki risiko tinggi terhadap <strong>tanah longsor</strong> dan angin kencang.</p>
                        <p>Sementara itu, wilayah dataran rendah dan bantaran sungai memiliki kerentanan terhadap <strong>banjir genangan</strong> saat musim penghujan ekstrim.</p>
                        <p class="font-bold text-on-surface italic">{{ $visikebencanaan->isi ?? 'Visi dan Misi Kebencanaan belum tersedia' }}</p>
                    </div>
                </div>
               <div class="md:col-span-5">
    <div class="aspect-square bg-surface-container-low relative rounded-3xl overflow-hidden p-6 md:p-8 flex items-center justify-center border border-outline-variant/10">
        
        <img class="absolute inset-0 w-full h-full object-cover mix-blend-multiply opacity-20" 
             src="{{ asset('images/lawu.jpg') }}" alt="Bencana"/>

        <div class="relative text-center">

            @if($bencana)
                
                <!-- Judul (Kategori / Jenis Bencana) -->
                <span class="text-4xl md:text-5xl font-black text-gray-500 font-headline">
                   Laporan Bencana Daerah dari Masyarakat
                </span>

                <!-- Status -->
                <p class="text-xs uppercase font-bold tracking-widest mt-3 text-gray">
                    Laporan Bencana Terbaru
                </p>

                <!-- Isi laporan -->
                <p class="text-sm text-secondary mt-4 max-w-[240px] mx-auto break-words">
                    {{ \Illuminate\Support\Str::limit($bencana->isi, 120) }}
                </p>

                <!-- Waktu -->
                <p class="text-[10px] text-gray-500 mt-2">
                    {{ $bencana->created_at->diffForHumans() }}
                </p>

            @else

                <!-- Kalau belum ada data -->
                <span class="text-4xl font-bold text-gray-400">
                    Belum Ada
                </span>

                <p class="text-sm text-gray-500 mt-3">
                    Belum ada laporan bencana dari masyarakat
                </p>

            @endif

        </div>
    </div>
</div>
            </div>
        </div>
    </section>

    <!-- Mandat & Dasar Hukum -->
    <section class="py-16 md:py-24 bg-surface-container-low px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                <div class="md:col-span-4">
                    <h2 class="font-headline text-3xl md:text-4xl font-extrabold text-on-surface leading-tight">Mandat &amp; Dasar Hukum</h2>
                    <div class="w-16 h-1 bg-primary-softcontainer mt-6"></div>
                </div>
                <div class="md:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="bg-surface-container-lowest p-8 rounded-2xl border-l-4 border-primary-softcontainer">
                        <h4 class="font-headline font-bold text-lg mb-3">UU No. 1 Tahun 2018</h4>
                        <p class="text-sm text-secondary leading-relaxed">Landasan hukum penyelenggaraan Kepalangmerahan di Indonesia yang mengatur tugas PMI dalam penanggulangan bencana.</p>
                    </div>
                    <div class="bg-surface-container-lowest p-8 rounded-2xl border-l-4 border-primary-softcontainer">
                        <h4 class="font-headline font-bold text-lg mb-3">Perda Kabupaten Magetan</h4>
                        <p class="text-sm text-secondary leading-relaxed">Sinergi PMI dengan BPBD Magetan dalam kerangka sistem penanggulangan bencana daerah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prinsip 6 Jam -->
    <section class="py-20 md:py-32 relative overflow-hidden bg-on-background text-white">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-primary-softcontainer skew-x-12 translate-x-20"></div>
        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-headline text-5xl md:text-6xl lg:text-7xl font-black tracking-tighter">Prinsip <span class="text-primary-softcontainer">6 Jam</span></h2>
                    <p class="text-xl text-white/70 mt-4">Komitmen respons tercepat untuk keselamatan jiwa di Magetan.</p>
                    
                    <div class="flex items-start gap-6 mt-10">
                        <div class="flex-shrink-0 w-14 h-14 rounded-full border-2 border-primary-softcontainer flex items-center justify-center">
                            <span class="material-symbols-outlined text-3xl text-primary-softcontainer">timer</span>
                        </div>
                        <p class="text-lg leading-relaxed text-white/80">Personil dan bantuan logistik dasar harus sudah tiba di lokasi maksimal dalam waktu 6 jam setelah informasi diterima.</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="relative w-56 h-56 md:w-64 md:h-64 flex items-center justify-center">
                        <div class="absolute inset-0 border-8 border-white/30 rounded-full"></div>
                        <div class="text-6xl md:text-7xl font-black font-headline text-white">06:00</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kapasitas Operasi -->
    <section class="py-16 md:py-24 bg-surface px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-headline text-3xl md:text-4xl font-extrabold text-on-surface mb-2">Kapasitas Operasi PMI Magetan</h2>
            <p class="text-secondary mb-12">Sumber daya lokal dengan dukungan jaringan regional PMI Jawa Timur.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Warehouse -->
                <div class="md:col-span-2 lg:col-span-2 bg-surface-container-low rounded-3xl p-8 md:p-10 flex flex-col">
                    <span class="material-symbols-outlined text-5xl text-primary-container mb-6">warehouse</span>
                    <h3 class="text-2xl font-bold mb-4">Pusat Logistik Lokal</h3>
                    <p class="text-secondary flex-1">Gudang Markas PMI Magetan menyimpan paket bantuan darurat yang siap dimobilisasi.</p>
                    <div class="grid grid-cols-2 gap-3 mt-8">
                        <div class="bg-white text-xs font-bold uppercase px-4 py-3 rounded-xl flex items-center gap-2"><span class="w-2 h-2 bg-primary-container rounded-full"></span>Markas Pusat</div>
                        <div class="bg-white text-xs font-bold uppercase px-4 py-3 rounded-xl flex items-center gap-2"><span class="w-2 h-2 bg-primary-container rounded-full"></span>Unit Siaga Lawu</div>
                    </div>
                </div>

                <!-- Small Cards -->
                <div class="bg-surface-container-lowest border border-surface-container-high rounded-3xl p-8 hover:bg-primary-container hover:text-white group transition-all">
                    <span class="material-symbols-outlined text-4xl mb-4 group-hover:text-white">terrain</span>
                    <h4 class="font-bold">Unit 4x4</h4>
                    <p class="text-sm text-secondary group-hover:text-white/70 mt-1">Akses medan berat di lereng Gunung Lawu</p>
                </div>

                <div class="bg-surface-container-lowest border border-surface-container-high rounded-3xl p-8 hover:bg-primary-container hover:text-white group transition-all">
                    <span class="material-symbols-outlined text-4xl mb-4 group-hover:text-white">communication</span>
                    <h4 class="font-bold">Radio Jaring</h4>
                    <p class="text-sm text-secondary group-hover:text-white/70 mt-1">Komunikasi area blank spot pegunungan</p>
                </div>

                <div class="bg-surface-container-lowest border border-surface-container-high rounded-3xl p-8 hover:bg-primary-container hover:text-white group transition-all">
                    <span class="material-symbols-outlined text-4xl mb-4 group-hover:text-white">water_drop</span>
                    <h4 class="font-bold">Tangki Air</h4>
                    <p class="text-sm text-secondary group-hover:text-white/70 mt-1">Distribusi air bersih pasca bencana</p>
                </div>

                <div class="bg-surface-container-lowest border border-surface-container-high rounded-3xl p-8 hover:bg-primary-container hover:text-white group transition-all">
                    <span class="material-symbols-outlined text-4xl mb-4 group-hover:text-white">emergency</span>
                    <h4 class="font-bold">Ambulans</h4>
                    <p class="text-sm text-secondary group-hover:text-white/70 mt-1">Layanan medis gawat darurat 24 jam</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Kemanusiaan -->
    <section class="py-16 md:py-24 bg-surface-container-lowest px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="font-headline text-3xl md:text-4xl font-extrabold text-on-surface">Layanan Kemanusiaan Magetan</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-4">
                <div class="flex flex-col items-center p-6 text-center bg-white rounded-2xl">
                    <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary-container">
                        <span class="material-symbols-outlined text-3xl">groups</span>
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider">Evakuasi</span>
                </div>
                <div class="flex flex-col items-center p-6 text-center">
                <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary-container">
                <span class="material-symbols-outlined text-3xl">home_work</span>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider">Shelter</span>
                </div>
                <div class="flex flex-col items-center p-6 text-center bg-white rounded-2xl">
                    <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary-container">
                        <span class="material-symbols-outlined text-3xl">local_hospital</span>
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider">Medis</span>
                </div>  
               <div class="flex flex-col items-center p-6 text-center bg-white rounded-2xl">
               <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary-container">
                <span class="material-symbols-outlined text-3xl">ambulance</span>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider">Ambulans</span>
                </div>  
                <div class="flex flex-col items-center p-6 text-center bg-white rounded-2xl">
                    <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary-container">
                        <span class="material-symbols-outlined text-3xl">water_drop</span>
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider">Air Bersih</span>
                </div>
                <div class="flex flex-col items-center p-6 text-center bg-white rounded-2xl">
                    <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary-container">
                        <span class="material-symbols-outlined text-3xl">food_bank</span>
                    </div>
                    <span class="text-xs font-bold uppercase tracking-wider">Logistik</span>
                </div>
                <div class="flex flex-col items-center p-6 text-center bg-white rounded-2xl">
                <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center mb-4 text-primary-container">
                <span class="material-symbols-outlined text-3xl">faucet</span>
                </div>
                <span class="text-xs font-bold uppercase tracking-wider">WASH</span>
                </div>
        </div>
    </section>

    <!-- Tips Keselamatan -->
    <section class="py-16 md:py-24 bg-surface-container-low px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
                    <h2 class="font-headline text-3xl md:text-4xl font-extrabold text-on-surface">Tips Keselamatan Warga Magetan</h2>
                    <p class="text-secondary mt-2">Panduan mitigasi mandiri berdasarkan karakteristik wilayah.</p>
                </div>
                <a href="{{ route('tips_bencana') }}" class="text-primary-container font-bold flex items-center gap-2 whitespace-nowrap">
                    Baca Selengkapnya <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
               <!-- Flood -->
<div class="bg-surface-container-lowest p-1 overflow-hidden rounded-2xl shadow-sm hover:shadow-xl transition-shadow group">
<img class="w-full h-48 object-cover rounded-xl mb-6" data-alt="conceptual photo of flood emergency kit including boots and waterproof bag on a wet surface with moody atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6Sh-2RhrzeI-qJAI8yWkmcpQRzHNZ44ojF8E77TDBfHYriH-2VGsd0ZgpZaD9dCzXZUIlfzmmvb9135sIIvthTOlNcm02BP0GSWuaIjZghWGgo_QhW7iqpGJw29Dr6NjGYE_sfMTKF1gm2fM3Sw-wuk5BDupgXWVgb4p44bdegOniXdm-FFBvBGRMqsJqNray-1wTZLjNzEa94D6nmBMjE1cZmgzBoHgJ-6jOg6J4A6kznTKl6A4IaE_b-UCABonXNF50qqXnJQ"/>
<div class="p-6">
<h4 class="font-headline font-extrabold text-xl mb-3">Siaga Banjir</h4>
<p class="text-xs text-secondary leading-relaxed mb-6">Untuk warga di dataran rendah, pantau tinggi muka air sungai saat hujan lebat di hulu Lawu.</p>
<!-- <a class="text-[10px] font-black uppercase tracking-widest text-primary flex items-center gap-2" href="#">Baca Selengkapnya <span class="material-symbols-outlined text-xs">arrow_forward</span></a> -->
</div>
</div>
<!-- Landslide -->
<div class="bg-surface-container-lowest p-1 overflow-hidden rounded-2xl shadow-sm hover:shadow-xl transition-shadow">
<img class="w-full h-48 object-cover rounded-xl mb-6" data-alt="mountainous area with visible landslide warning signs and lush green vegetation under overcast sky" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGAJ0XoWzm8bi5IeSqs6y8WRCauznJ1PfJj7VqAdzXrDKOQzaXIPzzgCZVYG3imQ4zzM2ZKzUWyk-RlK-a3F17Po3RMDWGkJ3nLvremlFsJ8_hwghC1eXKmyMZXMcg2-FvCPqfIJ9MP_YJiKwSbhbrhSg-afMkE1ozg2Ddyrgsz6_8mrr_RxWhv082TYzbkbXr1KdcwFu5ZCVPuxWJ0W77jCg9i8iq6bXJ5BRwjG-rSvSsoya731b3hx_f5sLvVy08cVU3UStToQ"/>
<div class="p-6">
<h4 class="font-headline font-extrabold text-xl mb-3">Waspada Longsor</h4>
<p class="text-xs text-secondary leading-relaxed mb-6">Waspadai rekahan tanah di lereng Lawu. Segera mengungsi jika terdengar suara gemuruh dari atas.</p>
<!-- <a class="text-[10px] font-black uppercase tracking-widest text-primary flex items-center gap-2" href="#">Baca Selengkapnya <span class="material-symbols-outlined text-xs">arrow_forward</span></a> -->
</div>
</div>
<!-- Earthquake -->
<div class="bg-surface-container-lowest p-1 overflow-hidden rounded-2xl shadow-sm hover:shadow-xl transition-shadow">
<img class="w-full h-48 object-cover rounded-xl mb-6" data-alt="safety demonstration showing a person doing drop cover and hold on under a sturdy table in a modern living room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4DGODtTqLlO0blGVtpAAmi4MXd5a4iO8JJM2s9vx2FAJTxZG-YqbGIMXbh1Sk7FIAnEO4CuxQPgTwZ7Ea7EBYG-o2im-TczBlNzhw5gClYWHClPkHTOC9xa491A-qZ35WtSTRy6GKyuoqlmNTw5k7y8BVDmuOP1BAxcZkM9npF4NZhAKJTOcLNi0u3OvPWEwEi3tAOar6V_R0ILSaAN-yb1Eb1ewOWuBEX4oap33fBf6rF9a9IYcw1a4trK0dHJ3wcXgjsRFPfg"/>
<div class="p-6">
<h4 class="font-headline font-extrabold text-xl mb-3">Gempa Bumi</h4>
<p class="text-xs text-secondary leading-relaxed mb-6">Jangan panik, lakukan Drop-Cover-Hold On. Hindari area di dekat dinding kaca atau lemari tinggi.</p>
<!-- <a class="text-[10px] font-black uppercase tracking-widest text-primary flex items-center gap-2" href="#">Baca Selengkapnya <span class="material-symbols-outlined text-xs">arrow_forward</span></a> -->
</div>
</div>
<!-- Volcano -->
<div class="bg-surface-container-lowest p-1 overflow-hidden rounded-2xl shadow-sm hover:shadow-xl transition-shadow">
<img class="w-full h-48 object-cover rounded-xl mb-6" data-alt="emergency N95 mask and goggles laid out for volcanic ash protection with a blurred mountain in the background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfFA9O1QczI9uDfaz-hug7ErzqADpWhW2AivXTBhbRkoREmNDvzt6oGH7Qo4SVk3OMtpmd4In96WMIjoaaL_MRlGjG-c_8Eedo190qyYdAKSpKfCBdWHI5OiNZniczgS2uoD1AQUMUkj56b_qfEzDQI1JOVvzGM7nePhoSzc98QyUEmVe5MI9eCrdR-bBZy3QlVfo__VYRI4DhenwJRohbzadKteBxfZTwEUWx69ltm75SJ0rFdCBgnBsrjwmZEFDk62vhXY5i_A"/>
<div class="p-6">
<h4 class="font-headline font-extrabold text-xl mb-3">Abu Vulkanik</h4>
<p class="text-xs text-secondary leading-relaxed mb-6">Selalu sediakan masker N95 di rumah jika terjadi peningkatan aktivitas vulkanik di kawasan Lawu.</p>
<!-- <a class="text-[10px] font-black uppercase tracking-widest text-primary flex items-center gap-2" href="#">Baca Selengkapnya <span class="material-symbols-outlined text-xs">arrow_forward</span></a> -->
</div>
</div>
</div>
</div>
</section>
</main>

@include('partials.footer')
@include('partials.chatbox')
@stack('scripts')

</body>
</html>