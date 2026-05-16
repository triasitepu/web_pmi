<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Ambulans - PMI Portal</title>
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
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body selection:bg-primary-container selection:text-white">

@extends('partials.header')

<main class="pt-20">
    <!-- Hero Section -->
    <section class="relative min-h-[520px] md:min-h-[680px] lg:min-h-[760px] flex items-center overflow-hidden bg-on-surface">
        <div class="absolute inset-0 z-0">
            <img alt="Ambulance Service" 
                 class="w-full h-full object-cover opacity-40 grayscale-[0.5]" 
                 data-alt="Modern high-tech ambulance..." 
                 src="https://lh3.googleusercontent.com/aida-public/AB6AXuAej87njhqerBaO5FFHo30nzjwhx7xizMTJeJ5_FJVEn32NNRMwqyO2MvCZlBvH1u7fHb67ATOcwtZ7EuC7amxrrC51tpUlzjw9b0fkVSh4d0VzWDKXhZTYR-jOG_fYLczjSLWTFJJLigWl6tSe-jxzioi35nIP1ES1Zz_tGFDQkc5yjpN9MrTImWeWmzySq_wjjX9lLEibssfqL5vK8JYyA_1nJPDFeMeJQezuG4y7lneRtkQPgX5LQCOX8hXjtVLlef2tJwQJNA"/>
             <div class="absolute inset-0 bg-gradient-to-r from-on-background/80 via-on-background/50 to-transparent"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-8 w-full">
            <div class="max-w-2xl">
                <h1 class="font-headline text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-white leading-tight tracking-tighter mb-6">
                    Detik <span class="text-primary-softcontainer">Menyelamatkan</span> Nyawa.
                </h1>
                <p class="text-surface-dim text-base md:text-lg lg:text-xl max-w-lg mb-10 leading-relaxed">
                    Mengerahkan unit perawatan intensif seluler tercanggih di wilayah ini. Kecepatan kemanusiaan, presisi profesional.
                </p>
                <div class="flex flex-wrap gap-4">
                    <button onclick="window.location.href='tel:1800PMI'" 
                            class="flex items-center gap-3 bg-primary-softcontainer text-on-background px-8 py-5 rounded-2xl font-headline font-black text-lg md:text-xl tracking-tight shadow-2xl hover:bg-primary transition-all active:scale-95">
                        <span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">emergency_share</span>
                        Panggil Darurat Sekarang
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Types Bento Grid -->
    <section class="py-16 md:py-24 bg-surface px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 md:mb-16 gap-6">
                <div class="max-w-xl">
                    <h2 class="font-headline text-3xl md:text-4xl font-black tracking-tight text-on-surface">Transit Medis Khusus</h2>
                    <p class="text-secondary text-lg mt-3">Dari respon trauma akut hingga transportasi medis terjadwal, armada kami siap untuk setiap skenario.</p>
                </div>
                <div class="text-primary font-headline font-bold text-4xl opacity-20 hidden md:block">01 — Layanan</div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Emergency -->
                <div class="md:col-span-8 group relative overflow-hidden rounded-3xl bg-surface-container-lowest p-8 md:p-10 min-h-[380px] flex flex-col justify-end">
                    <div class="absolute top-8 right-8">
                        <span class="material-symbols-outlined text-primary/10 text-8xl">ambulance</span>
                    </div>
                    <div class="relative z-10">
                        <h3 class="font-headline text-2xl md:text-3xl font-black mb-4">Layanan Ambulans Darurat</h3>
                        <p class="text-secondary max-w-md leading-relaxed mb-6">
                            Layanan ambulans PMI untuk penanganan kondisi darurat seperti kecelakaan, sakit mendadak, dan evakuasi medis.
                        </p>
                        <ul class="flex flex-wrap gap-3 text-xs font-bold tracking-tight">
                            <li class="px-4 py-2 bg-surface-container-low rounded-full">PERAWATAN TRAUMA</li>
                            <li class="px-4 py-2 bg-surface-container-low rounded-full">DUKUNGAN JANTUNG</li>
                            <li class="px-4 py-2 bg-surface-container-low rounded-full">PERAWATAN NEONATAL</li>
                        </ul>
                    </div>
                </div>

                <!-- Non-Emergency -->
                <div class="md:col-span-4 bg-tertiary-container text-on-tertiary-container p-8 md:p-10 rounded-3xl flex flex-col justify-between">
                    <span class="material-symbols-outlined text-5xl">calendar_month</span>
                    <div>
                        <h3 class="font-headline text-2xl font-bold mb-3">Transportasi Medis Non-Darurat</h3>
                        <p class="text-on-tertiary-container/80 leading-relaxed mb-8">
                            Layanan antar jemput pasien untuk kontrol, rujukan rumah sakit, atau kebutuhan medis terjadwal.
                        </p>
                        <a href="https://wa.me/6281234567890?text=Halo%20Admin%20PMI" class="font-bold underline underline-offset-4 hover:opacity-80 transition-opacity">Pesan Transportasi →</a>
                    </div>
                </div>

                <!-- Armada Khusus -->
                <div class="md:col-span-4 bg-surface-container-low p-8 md:p-10 rounded-3xl">
                    <h3 class="font-headline text-xl font-bold mb-6">Armada Khusus</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-2xl bg-white flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined">helicopter</span>
                            </div>
                            <div>
                                <p class="font-bold">Ambulans Darat &amp; Udara</p>
                                <p class="text-xs text-secondary">Respon cepat di medan sulit</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-2xl bg-white flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined">water_lux</span>
                            </div>
                            <div>
                                <p class="font-bold">Penyelamatan Air</p>
                                <p class="text-xs text-secondary">Respon amfibi untuk zona banjir</p>
                            </div>
                        </div>
                    </div>
                </div>

                
                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Hotline Bar -->
    <section class="bg-primary-softcontainer py-12 px-6 md:px-8 relative overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8 relative z-10">
            <div>
                <h2 class="text-white font-headline text-3xl md:text-5xl font-black tracking-tighter">Butuh bantuan segera?</h2>
                <p class="text-on-primary-container text-lg font-bold mt-2">Petugas siaga 24/7 siap membantu Anda.</p>
            </div>
            <div class="flex items-center gap-6">
                <div class="text-center">
                    <p class="text-on-primary-container text-xs font-black uppercase tracking-widest">Hotline Langsung</p>
                    <p class="text-white text-4xl md:text-5xl font-headline font-black">1-800-PMI</p>
                </div>
                <a href="https://wa.me/6281234567890?text=Halo%20Admin%20PMI"
                   class="w-20 h-20 rounded-full bg-white text-primary flex items-center justify-center shadow-2xl hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1;">call</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Process Steps -->
    <section class="py-16 md:py-24 bg-surface-container-low px-6 md:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
            <div>
                <div class="h-1 w-12 bg-primary-softcontainer mb-6"></div>
                <h4 class="font-headline text-2xl font-bold mb-4">Hubungi PMI</h4>
                <p class="text-secondary">Berikan lokasi dan kondisi darurat Anda. Petugas akan segera merespons.</p>
            </div>
            <div>
                <div class="h-1 w-12 bg-primary-softcontainer mb-6"></div>
                <h4 class="font-headline text-2xl font-bold mb-4">Penanganan Awal</h4>
                <p class="text-secondary">Tim memberikan pertolongan pertama dan menstabilkan kondisi pasien di lokasi.</p>
            </div>
            <div>
                <div class="h-1 w-12 bg-primary-softcontainer mb-6"></div>
                <h4 class="font-headline text-2xl font-bold mb-4">Evakuasi & Rujukan</h4>
                <p class="text-secondary">Pasien dibawa ke fasilitas kesehatan terdekat dengan koordinasi cepat.</p>
            </div>
        </div>
    </section>
</main>

@include('partials.footer')
@include('partials.chatbox')

<!-- Mobile Bottom Navigation -->
<div class="md:hidden fixed bottom-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-t border-surface-container-high px-6 py-3 flex justify-around items-center">
    <a href="#" class="flex flex-col items-center gap-1 text-gray-500">
        <span class="material-symbols-outlined">home</span>
        <span class="text-[10px] font-bold">Beranda</span>
    </a>
    <a href="#" class="flex flex-col items-center gap-1 text-red-600">
        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">ambulance</span>
        <span class="text-[10px] font-bold">Ambulans</span>
    </a>
    <a href="#" class="flex flex-col items-center gap-1 text-gray-500">
        <span class="material-symbols-outlined">map</span>
        <span class="text-[10px] font-bold">Peta</span>
    </a>
    <a href="#" class="flex flex-col items-center gap-1 text-gray-500">
        <span class="material-symbols-outlined">person</span>
        <span class="text-[10px] font-bold">Profil</span>
    </a>
</div>

@stack('scripts')
</body>
</html>