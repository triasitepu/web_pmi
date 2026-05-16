<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>PMI Portal | Donor Darah</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
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

<body class="bg-background text-on-background font-body selection:bg-primary-container selection:text-on-primary-container">

@extends('partials.header')

<main class="pt-20">
    <!-- Hero Section -->
    <section class="relative min-h-[520px] md:min-h-[620px] lg:min-h-[680px] flex items-center overflow-hidden bg-surface">
        <div class="absolute inset-0 z-0">
            <img class="w-full h-full object-cover" 
                 data-alt="close-up of a healthcare professional preparing equipment for a blood donation" 
                 src="{{ url('storage/' . $headline->foto) }}"/>
                  <div class="absolute inset-0 bg-gradient-to-r from-on-background/80 via-on-background/50 to-transparent"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-8 w-full">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-headline font-extrabold text-white leading-tight tracking-tight mb-6">
                    Darah Anda <br/><span class="text-primary-softcontainer">adalah harapan</span> <br/> bagi mereka.
                </h1>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#jadwal-donor" 
                       class="bg-primary-softcontainer text-on-background px-8 py-4 rounded-2xl font-headline font-bold text-lg hover:brightness-110 transition-all text-center">
                        Cek Jadwal
                    </a>
                    <a href="#syarat-donor" 
                       class="bg-surface-container-highest text-on-surface px-8 py-4 rounded-2xl font-headline font-bold text-lg hover:bg-surface-container-high transition-all text-center">
                        Syarat Donor
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stok Darah Real-time -->
    <section id="cek-stok" class="py-16 md:py-24 bg-surface-container-low px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div>
                    <h2 class="text-3xl md:text-4xl font-headline font-extrabold mb-4 tracking-tight">Stok Darah Real-time</h2>
                    <p class="text-secondary max-w-md leading-relaxed">Pantau ketersediaan stok darah di bank darah kami secara langsung.</p>
                </div>
                <div class="flex items-center gap-2 text-sm font-semibold text-secondary">
                    <span class="w-3 h-3 rounded-full bg-green-500 animate-pulse"></span>
                    Update terakhir: {{ $donornasional->updated_at ? $donornasional->updated_at->format('d M Y H:i') : '-' }}
                </div>
            </div>

            <!-- Summary Metrics -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-12">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-surface-container-high flex items-center gap-6">
                    <div class="w-16 h-16 rounded-full bg-primary-container/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-4xl">volunteer_activism</span>
                    </div>
                    <div>
                        <p class="text-secondary text-xs font-bold uppercase tracking-wider">Total Stok Darah Hari Ini</p>
                        <div class="flex items-baseline gap-2">
                            <span class="text-3xl font-headline font-black text-on-surface">{{ $totalstokdarah ?? 0 }}</span>
                            <span class="text-secondary text-sm font-semibold">Kantong</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-surface-container-high flex items-center gap-6">
                    <div class="w-16 h-16 rounded-full bg-primary-container/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-4xl">groups</span>
                    </div>
                    <div>
                        <p class="text-secondary text-xs font-bold uppercase tracking-wider">Rata-rata Donor Harian Nasional</p>
                        <div class="flex items-baseline gap-2">
                            <span class="text-3xl font-headline font-black text-on-surface">{{ $donornasional->isi ?? 0 }}</span>
                            <span class="text-secondary text-sm font-semibold">Orang</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stock Table -->
            <div class="bg-on-primary rounded-3xl overflow-hidden shadow-sm border border-surface-container-high">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-primary-softcontainer border-b border-surface-container-high">
<tr>
<th class="px-8 py-5 font-headline font-bold text-white tracking-wider text-black">
    Komponen Darah
</th>
<th class="px-8 py-5 text-center font-headline font-black text-lg text-white">A</th>
<th class="px-8 py-5 text-center font-headline font-black text-lg text-white">B</th>
<th class="px-8 py-5 text-center font-headline font-black text-lg text-white">O</th>
<th class="px-8 py-5 text-center font-headline font-black text-lg text-white">AB</th>
</tr>
</thead>

<tbody class="divide-y divide-surface-container-high">

{{-- FUNCTION STATUS --}}
@php
function getStatus($val) {
    if ($val == 0) return ['Kosong', 'text-error'];
    if ($val <= 5) return ['Kritis', 'text-error'];
    return ['Aman', 'text-on-surface'];
}
@endphp

<!-- WB -->
<tr class="hover:bg-surface-container transition-colors">
<td class="px-8 py-6">
    <div class="font-headline font-bold text-base">Whole Blood (WB)</div>
    <div class="text-secondary text-xs">Darah Lengkap</div>
</td>

@foreach([$whole_blood_a->isi ?? 0, $whole_blood_b->isi ?? 0, $whole_blood_o->isi ?? 0, $whole_blood_ab->isi ?? 0] as $val)
@php [$label, $color] = getStatus($val); @endphp
<td class="px-8 py-6 text-center">
    <div class="font-headline font-black text-2xl {{ $color }}">{{ $val }}</div>
    <div class="text-[10px] font-bold uppercase {{ $color }} mt-1">{{ $label }}</div>
</td>
@endforeach

</tr>

<!-- PRC -->
<tr class="hover:bg-surface-container transition-colors">
<td class="px-8 py-6">
    <div class="font-headline font-bold text-base">Packed Red Cell (PRC)</div>
    <div class="text-secondary text-xs">Sel Darah Merah Pekat</div>
</td>

@foreach([$packed_red_cell_a->isi ?? 0, $packed_red_cell_b->isi ?? 0, $packed_red_cell_o->isi ?? 0, $packed_red_cell_ab->isi ?? 0] as $val)
@php [$label, $color] = getStatus($val); @endphp
<td class="px-8 py-6 text-center">
    <div class="font-headline font-black text-2xl {{ $color }}">{{ $val }}</div>
    <div class="text-[10px] font-bold uppercase {{ $color }} mt-1">{{ $label }}</div>
</td>
@endforeach

</tr>

<!-- TC -->
<tr class="hover:bg-surface-container transition-colors">
<td class="px-8 py-6">
    <div class="font-headline font-bold text-base">Trombocyte Concentrate (TC)</div>
    <div class="text-secondary text-xs">Konsentrat Trombosit</div>
</td>

@foreach([$trombocyte_concentrate_a->isi ?? 0, $trombocyte_concentrate_b->isi ?? 0, $trombocyte_concentrate_o->isi ?? 0, $trombocyte_concentrate_ab->isi ?? 0] as $val)
@php [$label, $color] = getStatus($val); @endphp
<td class="px-8 py-6 text-center">
    <div class="font-headline font-black text-2xl {{ $color }}">{{ $val }}</div>
    <div class="text-[10px] font-bold uppercase {{ $color }} mt-1">{{ $label }}</div>
</td>
@endforeach

</tr>

<!-- FFP -->
<tr class="hover:bg-surface-container transition-colors">
<td class="px-8 py-6">
    <div class="font-headline font-bold text-base">Fresh Frozen Plasma (FFP)</div>
    <div class="text-secondary text-xs">Plasma Beku Segar</div>
</td>

@foreach([$fresh_frozen_plasma_a->isi ?? 0, $fresh_frozen_plasma_b->isi ?? 0, $fresh_frozen_plasma_o->isi ?? 0, $fresh_frozen_plasma_ab->isi ?? 0] as $val)
@php [$label, $color] = getStatus($val); @endphp
<td class="px-8 py-6 text-center">
    <div class="font-headline font-black text-2xl {{ $color }}">{{ $val }}</div>
    <div class="text-[10px] font-bold uppercase {{ $color }} mt-1">{{ $label }}</div>
</td>
@endforeach

</tr>

</tbody>
</table>
</div>

<div class="bg-primary-container/0 px-8 py-4 border-t border-surface-container-high">
<p class="text-xs text-secondary italic">
    * Data di atas adalah jumlah kantong darah yang tersedia saat ini.
</p>
</div>
</div>
</div>
</section>


    <!-- Jadwal Donor Darah -->
    <section id="jadwal-donor" class="py-16 md:py-24 bg-primary-softcontainer px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl font-headline font-extrabold tracking-tight text-white">Jadwal Donor Darah</h2>
                <p class="text-white/90 mt-3 max-w-md">Sesi donor darah rutin di lokasi rumah sakit dan pusat kesehatan tetap.</p>
            </div>

            <div class="bg-surface-container-low rounded-3xl overflow-hidden shadow-sm border border-surface-container-high">
                <table class="w-full text-left">
                    <thead class="bg-surface-container border-b border-surface-container-high">
                        <tr>
                            <th class="px-6 md:px-8 py-5 font-headline font-bold text-sm uppercase tracking-wider text-secondary">Lokasi</th>
                            <th class="px-6 md:px-8 py-5 font-headline font-bold text-sm uppercase tracking-wider text-secondary">Waktu Operasional</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container-high">
                        <tr class="hover:bg-surface-container transition-colors">
            <td class="px-8 py-6">
                <div class="font-headline font-bold text-lg">
                    {{ $lokasi1->isi ?? '' }}
                </div>
            </td>

            @php
                $jadwal = explode('|', $jadwal1->isi ?? '');
            @endphp

            <td class="px-8 py-6">
                <div class="text-on-surface font-semibold text-sm">
                    {{ $jadwal[0] ?? '' }}
                </div>
                <div class="text-secondary text-xs mt-1">
                    {{ $jadwal[1] ?? '' }}
                </div>
            </td>
        </tr>

        <tr class="hover:bg-surface-container transition-colors">
            <td class="px-8 py-6">
                <div class="font-headline font-bold text-lg">
                    {{ $lokasi2->isi ?? '' }}
                </div>
            </td>

            @php
                $jadwal = explode('|', $jadwal2->isi ?? '');
            @endphp

            <td class="px-8 py-6">
                <div class="text-on-surface font-semibold text-sm">
                    {{ $jadwal[0] ?? '' }}
                </div>
                <div class="text-secondary text-xs mt-1">
                    {{ $jadwal[1] ?? '' }}
                </div>
            </td>
        </tr>

    </tbody>
</table>
</div>

</div>
</section>

    <!-- Syarat Donor -->
    <section id="syarat-donor" class="py-16 md:py-24 bg-surface px-6 md:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="relative">
                <img class="rounded-3xl w-full" 
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcUEcpTQ5Ik6u3nVeKCwozJWVHi0KI5zy2Z0ccm1ewZS6Kc1BKrm3AagmnHK6QjcWbLGxNk2QbiJQjTUaoUgLWJE0HCacbesBEUfRRSk19-ygXvpwQQmxEB93m8WcZTMRaONflTSbN3GWpzcc8HrVKUjfpFvKLuUj4oUOFQZ9N3NU0xXVT5SzDkwIRNfur6UJc29Jvryr9DLwPpzF_WihMdI8qTAChYCsSGbLancZ_L6SHqga_E3T0_wwah1jaiCFym8HW3Jv9lA" 
                     alt="Donor Darah"/>
                <div class="absolute -bottom-8 -right-8 w-52 h-52 bg-primary-softcontainer rounded-full -z-10"></div>
            </div>
            
            <div>
                <h2 class="text-3xl md:text-4xl font-headline font-extrabold mb-6">Bisakah Anda berdonor?</h2>
                <p class="text-secondary mb-10 leading-relaxed">Kebanyakan orang bisa mendonorkan darah jika dalam kondisi sehat. Periksa persyaratan dasar kami.</p>
                
                <ul class="space-y-8">
                <li class="flex gap-6">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-primary">cake</span>
</div>
<div>
<h4 class="font-headline font-bold text-lg">Persyaratan Usia</h4>
<p class="text-secondary text-sm">Minimal berusia 17 tahun (16 tahun dengan izin orang tua di beberapa wilayah).</p>
</div>
</li>
<li class="flex gap-6">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-primary">monitor_weight</span>
</div>
<div>
<h4 class="font-headline font-bold text-lg">Berat Badan &amp; Kesehatan</h4>
<p class="text-secondary text-sm">Berat badan minimal 50kg dan dalam kondisi kesehatan umum yang baik saat mendonor.</p>
</div>
</li>
<li class="flex gap-6">
<div class="flex-shrink-0 w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-primary">restaurant_menu</span>
</div>
<div>
<h4 class="font-headline font-bold text-lg">Persiapan</h4>
<p class="text-secondary text-sm">Makan makanan bergizi dan minum banyak air putih sebelum jadwal temu Anda.</p>
</div>
</li>
</ul>
</div>
</div>
</section>

    <!-- Alur Donor -->
    <section class="py-16 md:py-24 bg-primary-softcontainer px-6 md:px-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-headline font-extrabold mb-12 text-center text-white">Alur Donor Darah</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
              <div class="text-center">
<div class="text-6xl font-headline font-black text-white mb-4">01</div>
<h4 class="font-headline font-bold text-xl mb-2 text-white">Registrasi</h4>
<p class="text-white text-sm">Masuk, tunjukkan ID Anda, dan baca materi informasi donor.</p>
</div>
<div class="text-center">
<div class="text-6xl font-headline font-black text-white mb-4">02</div>
<h4 class="font-headline font-bold text-xl mb-2 text-white">Pemeriksaan Fisik</h4>
<p class="text-white text-sm">Pemeriksaan cepat denyut nadi, tekanan darah, dan kadar hemoglobin Anda.</p>
</div>
<div class="text-center">
<div class="text-6xl font-headline font-black text-white mb-4">03</div>
<h4 class="font-headline font-bold text-xl mb-2 text-white">Proses Donor</h4>
<p class="text-white text-sm">Duduk santai dan rileks. Proses donasi hanya memakan waktu sekitar 8-10 menit.</p>
</div>
<div class="text-center">
<div class="text-6xl font-headline font-black text-white mb-4">04</div>
<h4 class="font-headline font-bold text-xl mb-2 text-white">Pemulihan</h4>
<p class="text-white text-sm">Nikmati makanan ringan gratis sambil beristirahat selama 15 menit.</p>
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