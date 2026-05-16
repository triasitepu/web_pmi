<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tentang Kami - PMI Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;600;800&amp;family=Inter:wght@300;400;500;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            content: ["**/*.blade.php"],
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

@extends('partials.header')
@stack('scripts')

<main class="pt-20">
    <!-- Hero Section -->
    <section class="relative min-h-[480px] md:min-h-[650px] lg:min-h-[716px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover" 
                 data-alt="Humanitarian worker providing aid to a child..." 
                 src="{{ url('storage/' . $headline->foto) }}"/>
             <div class="absolute inset-0 bg-gradient-to-r from-on-background/80 via-on-background/50 to-transparent"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-8 w-full">
            <div class="max-w-xl md:max-w-2xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-white leading-tight mb-6">
                    Detak jantung <br/>kemanusiaan</span>
                </h1>
                <p class="text-base md:text-lg lg:text-xl text-white/90 leading-relaxed font-light">
                    {{ $headline->isi ?? 'Komitmen kami untuk kesiapsiagaan dan respons cepat dalam menghadapi bencana di Magetan.' }}
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-16 md:py-24 bg-surface-container-low px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-stretch">
                <!-- Mission -->
                <div class="md:col-span-7 bg-surface-container-lowest p-8 md:p-12 flex flex-col justify-between group overflow-hidden relative min-h-[420px]">
                    <div class="relative z-10">
                        <h2 class="text-3xl md:text-4xl font-extrabold text-on-surface mb-6">
                            {{ $misi->nama_submenu ?? 'MISI KAMI' }}
                        </h2>
                        <div class="text-secondary text-[17px] md:text-lg leading-relaxed">
                            {!! $misi->isi ?? 'Isi misi belum tersedia' !!}
                        </div>
                    </div>
                    <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-primary/5 rounded-full blur-3xl group-hover:bg-primary/10 transition-colors"></div>
                </div>

                <!-- Vision -->
                <div class="md:col-span-5 bg-primary-softcontainer p-8 md:p-12 text-on-primary flex flex-col justify-between group overflow-hidden relative min-h-[420px]">
                    <div class="relative z-10">
                        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
                            {{ $visi->nama_submenu ?? 'VISI KAMI' }}
                        </h2>
                        <div class="text-white/80 text-[17px] md:text-lg leading-relaxed">
                            {!! $visi->isi ?? 'Isi visi belum tersedia' !!}
                        </div>
                    </div>
                    <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                </div>
            </div>

            <!-- Stats Bar -->
            <div class="mt-8 md:mt-12 bg-surface-container-lowest py-10 px-6 md:px-12 grid grid-cols-2 md:grid-cols-4 gap-8 rounded-2xl">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-extrabold text-primary-softcontainer mb-1">150+</div>
                    <div class="text-xs uppercase tracking-widest text-secondary font-bold">Cabang Nasional</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-extrabold text-primary-softcontainer mb-1">12M</div>
                    <div class="text-xs uppercase tracking-widest text-secondary font-bold">Penerima Manfaat Tahunan</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-extrabold text-primary-softcontainer mb-1">50K+</div>
                    <div class="text-xs uppercase tracking-widest text-secondary font-bold">Relawan Aktif</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-extrabold text-primary-softcontainer mb-1">24/7</div>
                    <div class="text-xs uppercase tracking-widest text-secondary font-bold">Respon Cepat</div>
                </div>
            </div>
        </div>
    </section>

    <!-- History -->
    <section class="py-16 md:py-24 bg-surface px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 items-start">
                <div class="lg:w-1/3 lg:sticky lg:top-28">
                    <h2 class="text-4xl md:text-5xl font-black text-on-surface mb-6 leading-tight">
                        Sejarah dan <span class="text-primary-softcontainer">Dedikasi.</span>
                    </h2>
                    <p class="text-secondary leading-relaxed text-[17px]">
                        Perjalanan kami dimulai dengan satu janji: untuk hadir saat tidak ada orang lain.
                    </p>
                </div>

                <div class="lg:w-2/3 space-y-16 md:space-y-24">
                    <!-- PMI Indonesia -->
                    <div class="flex gap-6 md:gap-8 group">
                        <div class="text-3xl font-black text-outline-variant/30 group-hover:text-primary transition-colors hidden sm:block">01</div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4">PMI INDONESIA</h3>
                            <div class="text-secondary leading-relaxed text-[17px]">
                                {{ $sejarah_pmi->isi ?? 'Isi belum tersedia' }}
                            </div>
                        </div>
                    </div>

                    <!-- PMI Magetan -->
                    <div class="flex gap-6 md:gap-8 group">
                        <div class="text-3xl font-black text-outline-variant/30 group-hover:text-primary transition-colors hidden sm:block">02</div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold mb-4">PMI MAGETAN</h3>
                            <div class="text-secondary leading-relaxed text-[17px] mb-6">
                                {{ $sejarah_pmi_magetan->isi ?? 'Isi belum tersedia' }}
                            </div>
                            <img class="w-full h-64 md:h-80 object-cover rounded-2xl grayscale hover:grayscale-0 transition-all duration-700" 
                                 src="https://lh3.googleusercontent.com/aida-public/AB6AXuCatLyTs01sLsMpmZiwyVpadn9_v0uFkyf1ympZGCveDriTxDEVXegN1rOJ4Fp1sR574i-_WCtqK2lj6be_rN-c90f3z8dC-iIqhgQRyyRV1ilOQIOt-joJR9jthfnnfGfAol_wXxex-586ODG6sa3RimAVT4mPwzYd86jFYaW28pzcAQG2SBYmIiaT6CUHIghQV16f9vLrTcEv0odcyBF3jumJ0NS4FFOUjFvCxzesu8ZcOPU6vMhfK8_e94XAOzvvjq6W_SSNgg" 
                                 alt="PMI Magetan"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team -->
    <section class="py-16 md:py-24 bg-surface-container-low px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Tim Kami</h2>
                <p class="text-secondary max-w-xl mx-auto">Temui para ahli berdedikasi yang mengarahkan misi kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Direktur -->
                <div class="relative group">
                    <div class="absolute inset-0 bg-surface-container-lowest rounded-3xl -z-10 group-hover:-translate-y-2 transition-transform"></div>
                    <div class="p-8 text-center">
                        <img class="w-44 h-44 md:w-48 md:h-48 rounded-full object-cover mx-auto mb-6 shadow-xl ring-8 ring-surface-container-low" 
                             src="{{ url('storage/' . $Direktur->foto) }}" 
                             alt="{{ $Direktur->nama ?? '' }}"/>
                        <h3 class="text-xl font-bold mb-1">{{ $Direktur->isi ?? 'Nama belum tersedia' }}</h3>
                        <p class="text-primary-softcontainer text-sm font-bold tracking-widest mb-4">DIREKTUR</p>
                        <p class="text-secondary text-sm italic">"Kekuatan kita tidak terletak pada infrastruktur, melainkan pada empati para relawan kita."</p>
                    </div>
                </div>

                <!-- Direktur 2 -->
                <div class="relative group">
                    <div class="absolute inset-0 bg-surface-container-lowest rounded-3xl -z-10 group-hover:-translate-y-2 transition-transform"></div>
                    <div class="p-8 text-center">
                        <img class="w-44 h-44 md:w-48 md:h-48 rounded-full object-cover mx-auto mb-6 shadow-xl ring-8 ring-surface-container-low" 
                             src="{{ url('storage/' . $Direktur2->foto) }}"/>
                        <h3 class="text-xl font-bold mb-1">{{ $Direktur2->isi ?? 'Nama belum tersedia' }}</h3>
                        <p class="text-primary-softcontainer text-sm font-bold tracking-widest mb-4">OPERASI MEDIS</p>
                        <p class="text-secondary text-sm italic">"Efisiensi dalam bantuan kemanusiaan adalah pembeda antara nyawa yang hilang dan nyawa yang terselamatkan."</p>
                    </div>
                </div>

                <!-- Direktur 3 -->
                <div class="relative group">
                    <div class="absolute inset-0 bg-surface-container-lowest rounded-3xl -z-10 group-hover:-translate-y-2 transition-transform"></div>
                    <div class="p-8 text-center">
                        <img class="w-44 h-44 md:w-48 md:h-48 rounded-full object-cover mx-auto mb-6 shadow-xl ring-8 ring-surface-container-low" 
                             src="{{ url('storage/' . $Direktur3->foto) }}"/>
                        <h3 class="text-xl font-bold mb-1">{{ $Direktur3->isi ?? 'Nama belum tersedia' }}</h3>
                        <p class="text-primary-softcontainer text-sm font-bold tracking-widest mb-4">PEMIMPIN RELAWAN</p>
                        <p class="text-secondary text-sm italic">"Membangun jembatan harapan melintasi setiap perbatasan dan setiap budaya."</p>
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