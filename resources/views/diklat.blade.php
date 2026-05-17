<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Diklat - PMI Portal</title>
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
                 data-alt="medical professional teaching first aid..." 
                 src="{{ url('storage/' . $headline->foto) }}"/>
            <div class="absolute inset-0 bg-gradient-to-r from-on-surface/80 via-on-surface/60 to-transparent"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-8 w-full">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-headline font-extrabold text-white leading-tight tracking-tighter mb-6">
                    Diklat <br/><span class="text-primary-softcontainer">Bersertifikat.</span>
                </h1>
                <p class="text-lg md:text-xl text-surface-container-low font-body leading-relaxed max-w-lg mb-10">
                    {{ $headline->isi ?? 'Deskripsi headline belum tersedia.' }}
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#jadwal" 
                       class="inline-block px-8 py-4 bg-white/10 backdrop-blur-md text-white border border-white/30 font-headline font-bold rounded-2xl hover:bg-primary-softcontainer hover:border-primary-softcontainer transition-all">
                        Lihat Jadwal
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Bento Grid -->
    <section class="py-16 md:py-24 px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="md:col-span-2 bg-surface-container-lowest p-8 md:p-10 rounded-3xl flex flex-col justify-between min-h-[280px] md:min-h-[320px]">
                    <span class="material-symbols-outlined text-primary text-5xl mb-6">verified_user</span>
                    <div>
                        <h3 class="text-3xl md:text-4xl font-headline font-extrabold tracking-tight mb-3">98% Tingkat Kelulusan</h3>
                        <p class="text-secondary leading-relaxed">Peserta diklat secara konsisten menunjukkan kompetensi tinggi dalam simulasi tanggap darurat dan praktik lapangan.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-primary-softcontainer p-8 md:p-10 rounded-3xl text-on-primary flex flex-col justify-between">
                    <h3 class="text-3xl md:text-4xl font-headline font-extrabold leading-tight">Peserta Tersertifikasi</h3>
                    <p class="font-medium opacity-90 mt-6">Peserta yang telah mengikuti dan lulus pelatihan mendapatkan sertifikat resmi sesuai standar PMI.</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-tertiary p-8 md:p-10 rounded-3xl text-on-tertiary-container flex flex-col justify-between">
                    <span class="material-symbols-outlined text-4xl mb-6">school</span>
                    <p class="text-2xl font-headline font-bold">Sertifikat Resmi PMI</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Jadwal Pelatihan -->
    <section id="jadwal" class="py-16 md:py-24 bg-surface px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="bg-surface-container-lowest rounded-3xl overflow-hidden flex flex-col lg:flex-row">
                <!-- Left Side -->
                <div class="lg:w-1/3 bg-on-surface p-8 md:p-12 text-white flex flex-col justify-center">
                    <h3 class="text-3xl md:text-4xl font-headline font-extrabold leading-tight mb-6">Siklus Pelatihan Mendatang</h3>
                    <p class="opacity-75 leading-relaxed">Kelas dibatasi hanya 20 peserta agar kualitas praktik tetap tinggi. Daftar segera!</p>
                </div>

                <!-- Right Side Table -->
                <div class="lg:w-2/3 p-8 md:p-12 overflow-x-auto">
                    <table class="w-full text-left min-w-[600px]">
                        <thead>
                            <tr class="border-b border-surface-container-high">
                                <th class="pb-6 font-headline text-xs font-bold tracking-widest text-secondary uppercase">Nama Kursus</th>
                                <th class="pb-6 font-headline text-xs font-bold tracking-widest text-secondary uppercase">Waktu Pelaksanaan</th>
                                <th class="pb-6 w-28"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-container-high">
                            <tr>
                            <td class="py-7">
                                <p class="font-bold">Pelatihan Pertolongan Pertama</p>
                                <p class="text-xs text-secondary">PMI Magetan</p>
                            </td>

                            @php
                                $aktif_pp = optional($jadwal_pelatihan_pertolongan_pertama)->is_active == 1;
                            @endphp

                            <td class="py-7 text-sm font-medium">
                                @if($aktif_pp)
                                    {{ $jadwal_pelatihan_pertolongan_pertama->isi ?? '-' }}
                                @else
                                    <span class="text-gray-400 italic">
                                        Pendaftaran belum dibuka
                                    </span>
                                @endif
                            </td>

                            <td class="py-7 text-right">
                                <a href="{{ $aktif_pp ? 'https://pelatihan.pmikabmagetan.or.id/' : '#' }}"
                                class="inline-block px-6 py-3 rounded-2xl text-sm font-bold transition-all
                                {{ $aktif_pp
                                        ? 'border border-primary-softcontainer text-primary-softcontainer hover:bg-primary-softcontainer hover:text-white'
                                        : 'bg-gray-300 text-gray-500 cursor-not-allowed pointer-events-none' }}">
                                    Daftar
                                </a>
                            </td>
                        </tr>
                            <tr>
                                <td class="py-7">
                                    <p class="font-bold">Pelatihan Manajemen Bencana</p>
                                    <p class="text-xs text-secondary">PMI Magetan</p>
                                </td>

                                @php
                                    $aktif_mb = optional($jadwal_manajemen_bencana)->is_active == 1;
                                @endphp

                                <td class="py-7 text-sm font-medium">
                                    @if($aktif_mb)
                                        {{ $jadwal_manajemen_bencana->isi ?? '-' }}
                                    @else
                                        <span class="text-gray-400 italic">
                                            Pendaftaran belum dibuka
                                        </span>
                                    @endif
                                </td>

                                <td class="py-7 text-right">
                                    <a href="{{ $aktif_mb ? 'https://pelatihan.pmikabmagetan.or.id/' : '#' }}"
                                    class="inline-block px-6 py-3 rounded-2xl text-sm font-bold transition-all
                                    {{ $aktif_mb
                                            ? 'border border-primary-softcontainer text-primary-softcontainer hover:bg-primary-softcontainer hover:text-white'
                                            : 'bg-gray-300 text-gray-500 cursor-not-allowed pointer-events-none' }}">
                                        Daftar
                                    </a>
                                </td>
                                <tr>
                                    <td class="py-7">
                                        <p class="font-bold">Pelatihan Pembinaan PMR, TSR, dan KSR</p>
                                        <p class="text-xs text-secondary">PMI Magetan</p>
                                    </td>

                                    @php
                                        $aktif_pmr = optional($pembinaan_pmrtsr_dan_ksr)->is_active == 1;
                                    @endphp

                                    <td class="py-7 text-sm font-medium">
                                        @if($aktif_pmr)
                                            {{ $pembinaan_pmrtsr_dan_ksr->isi ?? '-' }}
                                        @else
                                            <span class="text-gray-400 italic">
                                                Pendaftaran belum dibuka
                                            </span>
                                        @endif
                                    </td>

                                    <td class="py-7 text-right">
                                        <a href="{{ $aktif_pmr ? 'https://pelatihan.pmikabmagetan.or.id/' : '#' }}"
                                        class="inline-block px-6 py-3 rounded-2xl text-sm font-bold transition-all
                                        {{ $aktif_pmr
                                                ? 'border border-primary-softcontainer text-primary-softcontainer hover:bg-primary-softcontainer hover:text-white'
                                                : 'bg-gray-300 text-gray-500 cursor-not-allowed pointer-events-none' }}">
                                            Daftar
                                        </a>
                                    </td>
                            
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Certification Info -->
    <section class="py-16 md:py-24 bg-surface px-6 md:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center">
            <div class="relative">
                <div class="aspect-square bg-surface-container-high rounded-3xl overflow-hidden">
                    <img class="w-full h-full object-cover p-8 md:p-12" 
                         src="{{ url('storage/' . $headline->foto) }}" 
                         alt="Sertifikat"/>
                </div>
            </div>
            
            <div>
                <h2 class="text-4xl md:text-5xl font-headline font-extrabold text-on-surface leading-tight tracking-tight mb-10">Lencana Keunggulan Anda.</h2>
                
                <div class="space-y-10">
                    <div class="flex gap-6">
                        <div class="w-12 h-12 bg-primary-container/10 rounded-2xl flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-3xl">workspace_premium</span>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold mb-2">Kredensial Global</h5>
                            <p class="text-secondary">Dapatkan sertifikat yang berlaku secara global di jaringan Palang Merah.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="w-12 h-12 bg-primary-container/10 rounded-2xl flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-3xl">update</span>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold mb-2">Dukungan Belajar Seumur Hidup</h5>
                            <p class="text-secondary">Akses materi penyegaran dan protokol terbaru setelah lulus.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="w-12 h-12 bg-primary-container/10 rounded-2xl flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-primary text-3xl">qr_code_2</span>
                        </div>
                        <div>
                            <h5 class="text-xl font-bold mb-2">Verifikasi Digital</h5>
                            <p class="text-secondary">Setiap sertifikat memiliki QR Code untuk verifikasi cepat.</p>
                        </div>
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