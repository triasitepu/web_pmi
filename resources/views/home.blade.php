<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Beranda - PMI Portal</title>
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
        html { scroll-behavior: smooth; }
    </style>
</head>

<body class="bg-background text-on-surface font-body selection:bg-primary-softcontainer selection:text-white">

@extends('partials.header')

<main class="pt-20">
    <!-- Hero Section -->
    <section class="relative min-h-[520px] md:min-h-[650px] lg:min-h-[720px] flex items-center overflow-hidden bg-surface-dim">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover opacity-60 mix-blend-multiply" 
                 data-alt="Humanitarian workers providing medical assistance..." 
                 src="{{ url('storage/' . $headlineberanda->foto) }}"/>
                  <div class="absolute inset-0 bg-gradient-to-r from-on-background/80 via-on-background/50 to-transparent"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-8 w-full">
            <div class="max-w-2xl space-y-6">
                <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black text-white leading-tight tracking-tighter">
                    Kemanusiaan untuk Semua
                </h1>
                <p class="text-lg md:text-xl text-white/90 font-medium leading-relaxed max-w-lg">
                    {{ $headlineberanda->isi ?? 'Komitmen kami untuk kesiapsiagaan dan respons cepat dalam menghadapi bencana di Magetan.' }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="{{ route('ambulans') }}" 
                       class="bg-white/10 backdrop-blur-md border border-white/30 text-white px-8 py-4 rounded-2xl font-bold text-base md:text-lg hover:bg-white/20 transition-all text-center">
                        Layanan Darurat
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-surface-container-low py-16 md:py-24 px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-2 md:col-span-1">
                    <span class="text-primary font-bold tracking-widest text-sm uppercase">Dampak Nyata</span>
                    <h2 class="text-3xl md:text-4xl font-black text-on-surface">Statistik Kemanusiaan</h2>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border-b-4 border-primary-softcontainer text-center">
                    <span class="text-4xl md:text-5xl font-black text-primary-softcontainer block mb-2">
                        {{ $totalrelawan->isi ?? 0 }}
                    </span>
                    <p class="text-secondary font-bold">Relawan Aktif</p>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border-b-4 border-primary-softcontainer text-center">
                    <span class="text-4xl md:text-5xl font-black text-primary-softcontainer block mb-2">{{ $totalstokdarah ?? 0 }}</span>
                    <p class="text-secondary font-bold">Kantong Darah Hari Ini</p>
                </div>
                <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border-b-4 border-primary-softcontainer text-center">
                    <span class="text-4xl md:text-5xl font-black text-primary-softcontainer block mb-2">24/7</span>
                    <p class="text-secondary font-bold">Respon Ambulans</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Services -->
    <section class="py-16 md:py-24 bg-surface px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Layanan Utama Kami</h2>
                <p class="text-secondary text-lg max-w-2xl mx-auto">Komitmen kami untuk memberikan bantuan dan pelayanan terbaik bagi masyarakat Magetan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Card 1: Ambulans -->
                <div class="md:col-span-8 bg-surface-container-lowest rounded-3xl overflow-hidden group relative h-[380px] md:h-[460px]">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-20" 
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkyBzLhNlrBapa5q7TKfjsemsoh7amoaNK-ul3YUqIDvMPnIRmQBUP4Ar-lV2KT3tOlsl6_PKVkq1JhrE38Lqd2gauJtjRpRpbS7K4FLQHJm3PDXtbZVztrisVhvwjKGFVEAYusE9tXai1difTcZTsuYd_Zr3ft0v3GtIgGV_oM2BAYqdpSYG_xp5UiAjrVWGhphHp3HbiC8clCvOzh-zWGZoy5CWc7iQdhb2YgUSid4M1LONWJI9ktV9K5PG4PqEBk8qU9nxOgw"/>
                    <div class="absolute inset-0 p-8 md:p-12 flex flex-col justify-end">
                        <span class="material-symbols-outlined text-primary text-5xl mb-6">emergency</span>
                        <h3 class="text-2xl md:text-3xl font-black mb-4">Layanan Ambulans 24 Jam</h3>
                        <p class="text-secondary max-w-md mb-6">Respon cepat darurat medis untuk seluruh wilayah Kabupaten Magetan.</p>
                        <a href="{{ route('ambulans') }}" class="text-primary font-bold flex items-center gap-2 hover:gap-3 transition-all">
                            Selengkapnya <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                </div>

<!-- Card 2: Donor Darah -->
<div class="md:col-span-4 bg-primary-softcontainer rounded-3xl p-8 md:p-12 flex flex-col justify-between text-white min-h-[460px] md:min-h-[540px]">
    <div>
        <span class="material-symbols-outlined text-5xl mb-6" style="font-variation-settings: 'FILL' 1;">volunteer_activism</span>
        <h3 class="text-2xl md:text-3xl font-black mb-4">Donor Darah</h3>
        <p class="opacity-90 leading-relaxed text-[15px] md:text-base">
            Setetes darah Anda, nyawa bagi mereka. Cek stok darah dan jadwal donor hari ini.
        </p>
    </div>
    
    <!-- Tombol selalu vertical (atas-bawah) -->
    <div class="flex flex-col gap-3 mt-10">
        <!-- Tombol Cek Stok Darah -->
        <a href="{{ route('donor') }}#cek-stok" 
           class="group inline-flex items-center justify-center w-full gap-2 bg-white text-primary-softcontainer font-bold py-4 px-8 rounded-3xl hover:bg-white hover:shadow-xl active:scale-[0.97] transition-all duration-300 shadow-md text-base">
            <span>Cek Stok Darah</span>
            <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">arrow_forward</span>
        </a>
        
        <!-- Tombol Jadwal Donor -->
        <a href="{{ route('donor') }}#jadwal-donor" 
           class="group inline-flex items-center justify-center w-full gap-2 border-2 border-white/70 hover:border-white bg-transparent hover:bg-white/10 text-white font-bold py-4 px-8 rounded-3xl active:scale-[0.97] transition-all duration-300 text-base">
            <span>Jadwal Donor</span>
            <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">calendar_today</span>
        </a>
    </div>
</div>

                <!-- Card 3: Diklat -->
<div class="md:col-span-5 bg-surface-container-low rounded-3xl p-10 relative overflow-hidden group">
<div class="relative z-10">
<h3 class="text-2xl font-black mb-2">Diklat &amp; Pelatihan</h3>
<p class="text-secondary">Pelatihan Pertolongan Pertama dan Kesiapsiagaan Bencana untuk instansi dan sekolah.</p>
<a href="{{ route('diklat') }}" 
class="bg-on-background text-surface px-6 py-2 rounded-lg font-bold flex justify-center hover:opacity-90 transition-opacity">
                                Daftar Sekarang
                            </a>
</div>
<div class="absolute -bottom-10 -right-10 opacity-10 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-[200px]">medical_services</span>
</div>
</div>
<!-- Card 4: Relawan -->
<div class="md:col-span-7 bg-surface-container-high rounded-3xl p-10 flex items-center gap-8">
<div class="hidden sm:block w-32 h-32 rounded-full overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="Portrait of a smiling young volunteer in a uniform, soft natural outdoor lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwke_9QCEWgH9cItFhsMIvKxfG1zNOK8tMiCBUZeV_Zx67SJsb5Ascbv9UbeGTjsUtSPAXucMAgjnrKx3OX8BEP6Iyp8mf409qafbVfccTK4ALaLikSEZlef9z7VPbN5luBl6jsxC4hnww6aEOWZTLnOsCCxA1Fa4eGgt9Y6bzxh1cPhKR3GJdzRnHgOgNDVqY8PPni4rTAdBmj2WVxrW1sajOXJOuIRp2EdYesnyKr9orpz6oNzZt-vZ6me1gSCrZpQSFCEIyVw"/>
</div>
<div>
    <h3 class="text-2xl font-black mb-2">Gabung Menjadi Relawan</h3>
    <p class="text-secondary mb-6">Wujudkan kepedulianmu melalui aksi nyata. Bergabunglah dengan ribuan relawan PMI Magetan lainnya.</p>
    
    <a href="https://dash.s.id/l/relawanpmimagetan" 
       target="_blank"
       class="inline-flex items-center justify-center gap-2 border-2 border-primary-softcontainer hover:bg-primary-softcontainer hover:text-white text-primary-softcontainer px-8 py-4 rounded-2xl font-bold transition-all duration-300">
        <span>Daftar Sekarang</span>
        <span class="material-symbols-outlined text-xl">arrow_forward</span>
    </a>
</div>
</div>
</div>
</div>
</section>
    <!-- Mitra Kami -->
    <section class="py-16 md:py-24 bg-surface px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Mitra & Kolaborator</h2>
                <p class="text-secondary">Bekerja sama dengan berbagai instansi terpercaya</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8 md:gap-12 items-center">
         <a href="https://magetan.go.id/" target="_blank" class="flex justify-center opacity-60 hover:opacity-100 transition">
        <img src="{{ asset('images/magetan.png') }}" alt="Pemkab Magetan" class="h-12 object-contain">
      </a>

      <a href="https://www.bmkg.go.id" target="_blank" class="flex justify-center opacity-60 hover:opacity-100 transition">
        <img  src="{{ asset('images/bmkg.png') }}"  alt="BMKG" class="h-12 object-contain">
      </a>

      <a href="https://www.bpbd.go.id" target="_blank" class="flex justify-center opacity-60 hover:opacity-100 transition">
        <img src="{{ asset('images/bpbd.png') }}" alt="BPBD" class="h-12 object-contain">
      </a>

      <a href="https://www.bnpb.go.id" target="_blank" class="flex justify-center opacity-60 hover:opacity-100 transition">
        <img src="{{ asset('images/bnpb.png') }}" alt="BNPB" class="h-12 object-contain">
      </a>

      <a href="https://www.icrc.org" target="_blank" class="flex justify-center opacity-60 hover:opacity-100 transition">
        <img src="{{ asset('images/icrc.png') }}" alt="ICRC" class="h-12 object-contain">
      </a>

            </div>
        </div>
    </section>
</main>

@include('partials.footer')
@include('partials.chatbox')
@stack('scripts')

</body>
</html>