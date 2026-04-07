<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Tentang Kami - PMI Portal</title>
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
<section class="relative h-[716px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="Humanitarian worker providing aid to a child in a sunlit outdoor setting, high-end editorial photography style with warm natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJymdz3pz_nJMZk26SKHTAp_IrwVOSqkWmvJ4IxwKxt5Wi5zoo0Xr9Bt9CS-7qkRWwnTGFRR9O_1tgwpRaDv8yTLhHgHyHwqUU-5a_caBjM2F43W-_tbubO9u2qTlGOgUqxLhkLL3zOuCVGbbbKonAupcvMzeDAhF_Zj-XfMaYlv9dm22sTv_uBUSSK2iu9J5eiYg1h-3hdlqrohD5I3fbpsnzwldLYChQzhjzErAX6ppkKJE-iNSrG_hDj578iOEHUo8b1PRt0Q"/>
<div class="absolute inset-0 bg-black/40"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<span class="inline-block py-1 px-3 bg-primary-container text-on-primary text-xs font-bold tracking-widest rounded mb-6">SEJAK 1945</span>
<h1 class="text-6xl md:text-7xl font-extrabold text-white leading-tight mb-8">Detak jantung <br/><span class="text-primary-fixed">kemanusiaan.</span></h1>
<p class="text-white/90 text-lg md:text-xl leading-relaxed max-w-lg font-light mb-10">Berdedikasi untuk meringankan penderitaan manusia, melindungi kehidupan, dan memastikan rasa hormat terhadap setiap individu melalui aksi kemanusiaan yang netral dan tidak memihak.</p>
</div>
</div>
</div>
</section>
<!-- Mission & Vision: Bento Layout -->
<section class="py-24 bg-surface-container-low px-8">
<div class="max-w-7xl mx-auto">
<div class="grid grid-cols-1 md:grid-cols-12 gap-8">

<!-- Mission -->
<div class="md:col-span-7 bg-surface-container-lowest p-12 flex flex-col justify-between group overflow-hidden relative">
    
    <div class="relative z-10">
        <span class="material-symbols-outlined text-primary text-5xl mb-8">
            volunteer_activism
        </span>

        {{-- Judul --}}
        <h2 class="text-4xl font-extrabold text-on-surface mb-6">
            {{ $misi->nama_submenu ?? 'MISI KAMI' }}
        </h2>

        {{-- Isi --}}
        <div class="text-secondary text-lg leading-relaxed max-w-xl">
            {!! $misi->isi ?? 'Isi misi belum tersedia' !!}
        </div>
    </div>

<div class="mt-12 relative z-10">
<div class="flex items-center gap-4 text-primary font-bold">
</div>
</div>
<!-- Abstract texture -->
<div class="absolute -right-20 -bottom-20 w-64 h-64 bg-primary/5 rounded-full blur-3xl group-hover:bg-primary/10 transition-colors"></div>
</div>

<!-- Vision -->
<div class="md:col-span-5 bg-primary-container p-12 text-on-primary flex flex-col justify-center">
    
    <span class="material-symbols-outlined text-white/40 text-8xl mb-8 self-end"
          style="font-variation-settings: 'FILL' 1;">
        visibility
    </span>

    {{-- Judul --}}
    <h2 class="text-3xl font-bold mb-4">
        {{ $visi->nama_submenu ?? 'VISI KAMI' }}
    </h2>

    {{-- Isi --}}
    <div class="text-white/80 text-lg leading-relaxed">
        {!! $visi->isi ?? 'Isi visi belum tersedia' !!}
    </div>

</div>
<!-- Stats Bar -->
<div class="md:col-span-12 bg-surface-container-lowest py-10 px-12 grid grid-cols-2 md:grid-cols-4 gap-8">
<div class="text-center">
<div class="text-4xl font-extrabold text-primary mb-1">150+</div>
<div class="text-xs uppercase tracking-widest text-secondary font-bold">Chapters Nationwide</div>
</div>
<div class="text-center">
<div class="text-4xl font-extrabold text-primary mb-1">12M</div>
<div class="text-xs uppercase tracking-widest text-secondary font-bold">Beneficiaries Yearly</div>
</div>
<div class="text-center">
<div class="text-4xl font-extrabold text-primary mb-1">50K+</div>
<div class="text-xs uppercase tracking-widest text-secondary font-bold">Active Volunteers</div>
</div>
<div class="text-center">
<div class="text-4xl font-extrabold text-primary mb-1">24/7</div>
<div class="text-xs uppercase tracking-widest text-secondary font-bold">Emergency Response</div>
</div>
</div>
</div>
</div>
</section>
<!-- History: Editorial Timeline -->
<section class="py-24 bg-surface px-8">
<div class="max-w-7xl mx-auto">
<div class="flex flex-col md:flex-row gap-16 items-start">
<div class="md:w-1/3 sticky top-32">
<h2 class="text-5xl font-black text-on-surface mb-6">Dekade <br/><span class="text-primary">Dedikasi.</span></h2>
<p class="text-secondary leading-relaxed">Perjalanan kami dimulai dengan satu janji: untuk hadir saat tidak ada orang lain. Jelajahi tonggak sejarah yang mendefinisikan warisan kemanusiaan kami.</p>
</div>
<div class="md:w-2/3 space-y-24">
<div class="flex gap-8 group">
<div class="text-3xl font-black text-outline-variant/30 group-hover:text-primary transition-colors">1945</div>
<div>
<h3 class="text-2xl font-bold mb-4">Yayasan</h3>
<p class="text-secondary leading-relaxed mb-6">Lahir setelah konflik global, kami mendirikan markas besar pertama kami dengan fokus utama pada penyatuan kembali keluarga dan bantuan medis masa perang.</p>
<img class="w-full h-64 object-cover rounded-xl grayscale hover:grayscale-0 transition-all duration-700" data-alt="Archival black and white style photo of a humanitarian tent station in a historical field setting, nostalgic and respectful mood" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBCrySCVkEISo-IHvaMM3rcfQT-CyY4jG35xyJnHOmNI5GvUfuNnDl4M8aaPVGYYlGiB6_ZlltBbiJLpcmvBr3I88Xo6ZTFuKlh8u2-l3RXZfEkiGmzmP8O3RRLb5G5PMhmfdEfOAQ_10utly32x9IXsydKM1jXNb64OsDD0QI8ZnEQjIckXv-saFL5GkCA_GRN6d5icxKFHhWYscvC0T8JfsgKLa7nl37OwTa_C_3krMW7_lPc0817jByYjEgGqG23iiSNG6opA"/>
</div>
</div>
<div class="flex gap-8 group">
<div class="text-3xl font-black text-outline-variant/30 group-hover:text-primary transition-colors">1982</div>
<div>
<h3 class="text-2xl font-bold mb-4">Perluasan Jaringan Bencana</h3>
<p class="text-secondary leading-relaxed mb-6">Meluncurkan kerangka kerja respon bencana tingkat lanjut, menghubungkan pusat logistik di seluruh negeri untuk mengurangi waktu respon hingga kurang dari 4 jam.</p>
<img class="w-full h-64 object-cover rounded-xl grayscale hover:grayscale-0 transition-all duration-700" data-alt="A fleet of red and white relief trucks parked in a warehouse at dawn, soft atmospheric lighting, organized and ready for action" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCatLyTs01sLsMpmZiwyVpadn9_v0uFkyf1ympZGCveDriTxDEVXegN1rOJ4Fp1sR574i-_WCtqK2lj6be_rN-c90f3z8dC-iIqhgQRyyRV1ilOQIOt-joJR9jthfnnfGfAol_wXxex-586ODG6sa3RimAVT4mPwzYd86jFYaW28pzcAQG2SBYmIiaT6CUHIghQV16f9vLrTcEv0odcyBF3jumJ0NS4FFOUjFvCxzesu8ZcOPU6vMhfK8_e94XAOzvvjq6W_SSNgg"/>
</div>
</div>
<div class="flex gap-8 group">
<div class="text-3xl font-black text-outline-variant/30 group-hover:text-primary transition-colors">2024</div>
<div>
<h3 class="text-2xl font-bold mb-4">Garis Depan Digital</h3>
<p class="text-secondary leading-relaxed mb-6">Mengintegrasikan AI dan data waktu nyata untuk memprediksi zona krisis dan mengoptimalkan distribusi bank darah, memastikan kami proaktif, bukan sekadar reaktif.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Our Team: Asymmetric Cards -->
<section class="py-24 bg-surface-container-low px-8 overflow-hidden">
<div class="max-w-7xl mx-auto">
<div class="mb-16 text-center">
<h2 class="text-4xl font-extrabold mb-4">Pemimpin Penuh Kasih</h2>
<p class="text-secondary max-w-xl mx-auto">Temui para ahli berdedikasi yang mengarahkan misi kami menuju masa depan yang lebih aman dan tangguh.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
<div class="relative group pt-12">
<div class="absolute top-0 left-0 w-full h-[85%] bg-surface-container-lowest rounded-2xl -z-10 group-hover:translate-y-2 transition-transform duration-500"></div>
<div class="px-8 pb-12">
<img class="w-48 h-48 rounded-full object-cover mx-auto mb-8 shadow-2xl ring-8 ring-surface-container-low"
     src="{{ url('storage/' . $Direktur->foto) }}"
     alt="{{ $Direktur->nama }}" />

<h3 class="text-xl font-bold text-center mb-1">
    {{ $Direktur->nama_submenu ?? 'Nama Direktur' }}
</h3>

<p class="text-primary text-xs uppercase tracking-widest font-bold text-center mb-4">
    {{ $Direktur->isi ?? 'Isi belum tersedia' }}
</p>
<p class="text-secondary text-sm text-center leading-relaxed italic">"Kekuatan kita tidak terletak pada infrastruktur, melainkan pada empati para relawan kita."</p>
</div>
</div>
<div class="relative group md:translate-y-12">
<div class="absolute top-0 left-0 w-full h-[85%] bg-surface-container-lowest rounded-2xl -z-10 group-hover:translate-y-2 transition-transform duration-500"></div>
<div class="px-8 pb-12">
<img class="w-48 h-48 rounded-full object-cover mx-auto mb-8 shadow-2xl ring-8 ring-surface-container-low" data-alt="Professional portrait of a male medical director, friendly and authoritative, natural light, clean minimalist background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6tLe9aqjQAhC5inUUgeti6RQgccyNHryi0Ukxo739LDrNZugBrTnCJCtOQ4hsnNUo4XBwJWWcCJ7yywL_-umqQCuYdIwGUIlaZGX_iAL8zYQSm1E_YCCPSpnzgddSNPNSPqO8117yZXYGE9AbJ35rnFgnB9aAVPXCyDpFHiltRwLroyNxxxz5Ear-XLSFSSoh0Rlr7mXzOf6gtD9EwYyCfYrZ7n8bH7IRJsGialu6YEMQEk0zN1TfA-0ExnygVczLxvrleumQhg"/>
<h3 class="text-xl font-bold text-center mb-1">Dr. Michael Chen</h3>
<p class="text-primary text-xs uppercase tracking-widest font-bold text-center mb-4">Operasi Medis</p>
<p class="text-secondary text-sm text-center leading-relaxed italic">"Efisiensi dalam bantuan kemanusiaan adalah pembeda antara nyawa yang hilang dan nyawa yang terselamatkan."</p>
</div>
</div>
<div class="relative group pt-12">
<div class="absolute top-0 left-0 w-full h-[85%] bg-surface-container-lowest rounded-2xl -z-10 group-hover:translate-y-2 transition-transform duration-500"></div>
<div class="px-8 pb-12">
<img class="w-48 h-48 rounded-full object-cover mx-auto mb-8 shadow-2xl ring-8 ring-surface-container-low" data-alt="Professional portrait of a woman in humanitarian field gear, looking optimistic, soft sunlight filtering through trees" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTGen51CwSspnfeQ3xiTGYCw6KA6viwwTPopedr8nQO2vk8mOey0Ct3uycupg_V2Dp0IPh08m7mc7Xm-EJCH_bdp0wDbZ3ycZB52c5r0F8PQx8-K2W8hLwROZxPM8oySIw7WniSQ8eYAiyc164RNJ2SRKF1OrsvQF_zDD33YXORj_98OWPzJ4a24-L_YsphwHjMrk6zZVwi6uuiaUaoF8_kbPoa9oN1Nyph5NJzu1pDlLLhqwaJ8Qhu89RVNnKtGkg05xLZfvdAQ"/>
<h3 class="text-xl font-bold text-center mb-1">Elena Rodriguez</h3>
<p class="text-primary text-xs uppercase tracking-widest font-bold text-center mb-4">Pemimpin Relawan Global</p>
<p class="text-secondary text-sm text-center leading-relaxed italic">"Membangun jembatan harapan melintasi setiap perbatasan dan setiap budaya."</p>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
<div class="relative group pt-12">
<div class="absolute top-0 left-0 w-full h-[85%] bg-surface-container-lowest rounded-2xl -z-10 group-hover:translate-y-2 transition-transform duration-500"></div>
<div class="px-8 pb-12">
<img class="w-48 h-48 rounded-full object-cover mx-auto mb-8 shadow-2xl ring-8 ring-surface-container-low"
     src="{{ url('storage/' . $Direktur->foto) }}"
     alt="{{ $Direktur->nama }}" />

<h3 class="text-xl font-bold text-center mb-1">
    {{ $Direktur->nama_submenu ?? 'Nama Direktur' }}
</h3>

<p class="text-primary text-xs uppercase tracking-widest font-bold text-center mb-4">
    {{ $Direktur->isi ?? 'Isi belum tersedia' }}
</p>
<p class="text-secondary text-sm text-center leading-relaxed italic">"Kekuatan kita tidak terletak pada infrastruktur, melainkan pada empati para relawan kita."</p>
</div>
</div>
<div class="relative group md:translate-y-12">
<div class="absolute top-0 left-0 w-full h-[85%] bg-surface-container-lowest rounded-2xl -z-10 group-hover:translate-y-2 transition-transform duration-500"></div>
<div class="px-8 pb-12">
<img class="w-48 h-48 rounded-full object-cover mx-auto mb-8 shadow-2xl ring-8 ring-surface-container-low" data-alt="Professional portrait of a male medical director, friendly and authoritative, natural light, clean minimalist background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6tLe9aqjQAhC5inUUgeti6RQgccyNHryi0Ukxo739LDrNZugBrTnCJCtOQ4hsnNUo4XBwJWWcCJ7yywL_-umqQCuYdIwGUIlaZGX_iAL8zYQSm1E_YCCPSpnzgddSNPNSPqO8117yZXYGE9AbJ35rnFgnB9aAVPXCyDpFHiltRwLroyNxxxz5Ear-XLSFSSoh0Rlr7mXzOf6gtD9EwYyCfYrZ7n8bH7IRJsGialu6YEMQEk0zN1TfA-0ExnygVczLxvrleumQhg"/>
<h3 class="text-xl font-bold text-center mb-1">Dr. Michael Chen</h3>
<p class="text-primary text-xs uppercase tracking-widest font-bold text-center mb-4">Operasi Medis</p>
<p class="text-secondary text-sm text-center leading-relaxed italic">"Efisiensi dalam bantuan kemanusiaan adalah pembeda antara nyawa yang hilang dan nyawa yang terselamatkan."</p>
</div>
</div>
<div class="relative group pt-12">
<div class="absolute top-0 left-0 w-full h-[85%] bg-surface-container-lowest rounded-2xl -z-10 group-hover:translate-y-2 transition-transform duration-500"></div>
<div class="px-8 pb-12">
<img class="w-48 h-48 rounded-full object-cover mx-auto mb-8 shadow-2xl ring-8 ring-surface-container-low" data-alt="Professional portrait of a woman in humanitarian field gear, looking optimistic, soft sunlight filtering through trees" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTGen51CwSspnfeQ3xiTGYCw6KA6viwwTPopedr8nQO2vk8mOey0Ct3uycupg_V2Dp0IPh08m7mc7Xm-EJCH_bdp0wDbZ3ycZB52c5r0F8PQx8-K2W8hLwROZxPM8oySIw7WniSQ8eYAiyc164RNJ2SRKF1OrsvQF_zDD33YXORj_98OWPzJ4a24-L_YsphwHjMrk6zZVwi6uuiaUaoF8_kbPoa9oN1Nyph5NJzu1pDlLLhqwaJ8Qhu89RVNnKtGkg05xLZfvdAQ"/>
<h3 class="text-xl font-bold text-center mb-1">Elena Rodriguez</h3>
<p class="text-primary text-xs uppercase tracking-widest font-bold text-center mb-4">Pemimpin Relawan Global</p>
<p class="text-secondary text-sm text-center leading-relaxed italic">"Membangun jembatan harapan melintasi setiap perbatasan dan setiap budaya."</p>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-24 px-8">
<div class="max-w-5xl mx-auto signature-gradient rounded-3xl p-16 text-center text-white relative overflow-hidden">
<div class="relative z-10">
<h2 class="text-4xl md:text-5xl font-black mb-6">Siap untuk membuat perubahan?</h2>
<p class="text-white/80 text-lg mb-10 max-w-2xl mx-auto">Waktu atau donasi Anda bisa menjadi titik balik
     bagi seseorang yang berada dalam krisis. Bergabunglah dengan portal hari ini.</p>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-gray-50 py-12 px-8 border-t border-gray-200">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
<div class="space-y-4">
<div class="text-xl font-bold text-gray-900">PMI Portal</div>
<p class="font-inter text-sm leading-relaxed text-gray-500 max-w-xs">Memberdayakan layanan kemanusiaan melalui transparansi dan tindakan segera sejak 1945.</p>
<div class="flex gap-4">
<span class="material-symbols-outlined text-gray-400 hover:text-red-600 cursor-pointer" data-icon="public">public</span>
<span class="material-symbols-outlined text-gray-400 hover:text-red-600 cursor-pointer" data-icon="share">share</span>
<span class="material-symbols-outlined text-gray-400 hover:text-red-600 cursor-pointer" data-icon="mail">mail</span>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="space-y-2">
<h4 class="font-headline font-bold text-sm text-gray-900 mb-4">Organisasi</h4>
<a class="block font-inter text-sm text-gray-500 hover:text-red-600 transition-colors" href="#">Tentang Kami</a>
<a class="block font-inter text-sm text-gray-500 hover:text-red-600 transition-colors" href="#">Tata Kelola</a>
<a class="block font-inter text-sm text-gray-500 hover:text-red-600 transition-colors" href="#">Laporan Tahunan</a>
<a class="block font-inter text-sm text-gray-500 hover:text-red-600 transition-colors" href="#">Karir</a>
</div>
<div class="space-y-2">
<h4 class="font-headline font-bold text-sm text-gray-900 mb-4">Hukum</h4>
<a class="block font-inter text-sm text-gray-500 hover:text-red-600 transition-colors" href="#">Kebijakan Privasi</a>
<a class="block font-inter text-sm text-gray-500 hover:text-red-600 transition-colors" href="#">Syarat Penggunaan</a>
<a class="block font-inter text-sm text-gray-500 hover:text-red-600 transition-colors" href="#">Kebijakan Cookie</a>
<a class="block font-inter text-sm text-gray-500 hover:text-red-600 transition-colors" href="#">Ketentuan Donasi</a>
</div>
</div>
<div class="space-y-6">
<h4 class="font-headline font-bold text-sm text-gray-900">Berlangganan Berita Kami</h4>
<div class="flex">
<input class="w-full bg-white border-gray-200 text-sm py-2 px-4 focus:ring-red-500 focus:border-red-500 rounded-l-lg outline-none" placeholder="email@address.com" type="email"/>
<button class="bg-primary text-white px-4 py-2 rounded-r-lg">
<span class="material-symbols-outlined text-sm" data-icon="send">send</span>
</button>
</div>
<p class="font-inter text-xs text-gray-400">© 2024 Layanan Kemanusiaan. Seluruh Hak Cipta Dilindungi.</p>
</div>
</div>
</footer>
</body></html>