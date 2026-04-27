<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Beranda - PMI Portal</title>
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
<!-- Hero Section -->
<section class="relative h-[870px] flex items-center overflow-hidden bg-surface-dim">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover opacity-60 mix-blend-multiply" data-alt="Humanitarian workers providing medical assistance in a community setting, warm cinematic lighting, high-end editorial photography style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1f9mxCTL3rdhuC1nlA-3B0V5Qvl3vJ4RfyjFYy4BTay53vBAvUKEbK8mg4otmYVSAycFVK38N7Oc9pXbwBHHE5g4nSCOf3BaOBPNNgE8vOpxH9rOqAAHIwCLwvW6oJxBK_BT8-MviIxSVx6NAEtznCrmVFLnLJEKvwyJ23F_3fO7JgL0ycu5YOGW4dVnvU-Q01Uzn5ZP7T7cXR5aIchi3ItXUJCMlq8jtxicZUdxFVNVMEowYTa7Nt0l7YmlNzdN6T4zcQJVksQ"/>
<div class="absolute inset-0 bg-gradient-to-r from-primary/40 to-transparent"></div>
</div>
<div class="relative z-10 max-w-7xl mx-auto px-8 w-full">
<div class="max-w-2xl space-y-6">
<h1 class="text-6xl md:text-8xl font-black text-white leading-tight tracking-tighter">
                        Kemanusiaan untuk Semua
                    </h1>
<p class="text-xl text-white/90 font-medium leading-relaxed max-w-lg">
                        Melayani dengan tulus, bergerak dengan sigap. Kami hadir sebagai garda terdepan dalam aksi kemanusiaan di Kabupaten Magetan.
                    </p>
<div class="flex flex-wrap gap-4 pt-4">
<!-- <button class="bg-primary-container text-on-primary px-10 py-4 rounded-xl font-bold text-lg hover:bg-primary transition-all shadow-lg">
                            Donasi Sekarang
                        </button> -->
<button class="bg-white/10 backdrop-blur-md border border-white/30 text-white px-10 py-4 rounded-xl font-bold text-lg hover:bg-white/20 transition-all">
                            Layanan Darurat
                        </button>
</div>
</div>
</div>
</section>
<!-- Stats Section (Asymmetric) -->
<section class="bg-surface-container-low py-24 relative overflow-hidden">
<div class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12">
<div class="space-y-2">
<span class="text-primary font-bold tracking-widest text-sm uppercase">Dampak Nyata</span>
<h2 class="text-4xl font-black text-on-surface">Statistik Kemanusiaan</h2>
</div>
<div class="bg-surface-container-lowest p-10 rounded-2xl shadow-sm border-b-4 border-primary">
<span class="text-5xl font-black text-primary block mb-2">
     {{ $totalrelawan->isi ?? 0 }}
</span>
<p class="text-secondary font-bold">Relawan Aktif</p>
</div>
<div class="bg-surface-container-lowest p-10 rounded-2xl shadow-sm mt-8 md:mt-12">
<span class="text-5xl font-black text-primary block mb-2">450</span>
<p class="text-secondary font-bold">Kantong Darah/Bulan</p>
</div>
<div class="bg-surface-container-lowest p-10 rounded-2xl shadow-sm">
<span class="text-5xl font-black text-primary block mb-2">24/7</span>
<p class="text-secondary font-bold">Respon Ambulans</p>
</div>
</div>
</div>
</section>
<!-- Main Services (Bento Grid) -->
<section class="py-32 bg-surface">
<div class="max-w-7xl mx-auto px-8">
<div class="mb-16 text-center max-w-2xl mx-auto">
<h2 class="text-4xl font-extrabold mb-4">Layanan Utama Kami</h2>
<p class="text-secondary text-lg">Komitmen kami untuk memberikan bantuan dan pelayanan terbaik bagi masyarakat Magetan melalui berbagai program unggulan.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-6 h-auto md:h-[600px]">
<!-- Card 1: Ambulans -->
<div class="md:col-span-8 bg-surface-container-lowest rounded-3xl overflow-hidden group relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-20" data-alt="Close up of a modern emergency ambulance vehicle with reflective markings, bright daytime lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAkyBzLhNlrBapa5q7TKfjsemsoh7amoaNK-ul3YUqIDvMPnIRmQBUP4Ar-lV2KT3tOlsl6_PKVkq1JhrE38Lqd2gauJtjRpRpbS7K4FLQHJm3PDXtbZVztrisVhvwjKGFVEAYusE9tXai1difTcZTsuYd_Zr3ft0v3GtIgGV_oM2BAYqdpSYG_xp5UiAjrVWGhphHp3HbiC8clCvOzh-zWGZoy5CWc7iQdhb2YgUSid4M1LONWJI9ktV9K5PG4PqEBk8qU9nxOgw"/>
<div class="absolute inset-0 p-12 flex flex-col justify-end">
<span class="material-symbols-outlined text-primary text-5xl mb-6">emergency</span>
<h3 class="text-3xl font-black mb-4">Layanan Ambulans 24 Jam</h3>
<p class="text-secondary max-w-md mb-8">Respon cepat darurat medis untuk seluruh wilayah Kabupaten Magetan dengan fasilitas medis lengkap.</p>
<a href="{{ route('ambulans') }}" 
   class="text-primary font-bold flex items-center gap-2 group-hover:gap-4 transition-all">
    Selengkapnya 
    <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
</div>
<!-- Card 2: Donor Darah -->
<div class="md:col-span-4 bg-primary-softcontainer rounded-3xl p-10 flex flex-col justify-between text-white">
<div>
<span class="material-symbols-outlined text-5xl mb-6" style="font-variation-settings: 'FILL' 1;">volunteer_activism</span>
<h3 class="text-2xl font-black mb-4">Donor Darah</h3>
<p class="opacity-90 leading-relaxed">Setetes darah Anda, nyawa bagi mereka. Cek stok darah dan jadwal donor hari ini.</p>
</div>
<a href="{{ route('donor') }}"
   class="bg-white text-primary font-bold py-3 rounded-xl hover:bg-surface-container-low transition-colors mt-8 flex justify-center items-center">
   Cek Stok Darah
</a>
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
<p class="text-secondary mb-4">Wujudkan kepedulianmu melalui aksi nyata. Bergabunglah dengan ribuan relawan PMI Magetan lainnya.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Mitra Kami Section -->
<section class="py-24 bg-surface">
<div class="max-w-7xl mx-auto px-8">
<div class="text-center mb-12">
<h2 class="text-2xl font-bold text-secondary">Mitra Strategis Kami</h2>
</div>
<div class="flex flex-wrap justify-center items-center gap-16 grayscale opacity-50 hover:grayscale-0 transition-all">
<span class="text-2xl font-black font-manrope">PEMKAB MAGETAN</span>
<span class="text-2xl font-black font-manrope">KEMENKES RI</span>
<span class="text-2xl font-black font-manrope">BASARNAS</span>
<span class="text-2xl font-black font-manrope">BNPB</span>
<span class="text-2xl font-black font-manrope">RSUD SAYIDIMAN</span>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 font-inter text-sm leading-relaxed">
<div class="flex flex-col md:flex-row justify-between items-center px-8 py-12 max-w-7xl mx-auto gap-6">
<div class="space-y-4 text-center md:text-left">
<div class="font-manrope font-bold text-slate-900 dark:text-white text-xl">
                    PMI Kabupaten Magetan
                </div>
<p class="text-slate-500 max-w-xs">Markas PMI Kab. Magetan, Jl. Salak No.1, Magetan, Jawa Timur.</p>
<p class="text-slate-500 dark:text-slate-400">© 2024 PMI Kabupaten Magetan. Kemanusiaan untuk Semua.</p>
</div>
<div class="flex flex-wrap justify-center gap-8">
<a class="text-slate-500 dark:text-slate-400 hover:text-red-600 dark:hover:text-red-400 underline-offset-4 hover:underline transition-all duration-300" href="#">Kebijakan Privasi</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-red-600 dark:hover:text-red-400 underline-offset-4 hover:underline transition-all duration-300" href="#">Kontak Darurat</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-red-600 dark:hover:text-red-400 underline-offset-4 hover:underline transition-all duration-300" href="#">Pusat Bantuan</a>
<a class="text-slate-500 dark:text-slate-400 hover:text-red-600 dark:hover:text-red-400 underline-offset-4 hover:underline transition-all duration-300" href="#">Lokasi Markas</a>
</div>
<div class="flex gap-4">
<button class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all">
<span class="material-symbols-outlined text-sm">public</span>
</button>
<button class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center hover:bg-primary hover:text-white transition-all">
<span class="material-symbols-outlined text-sm">share</span>
</button>
</div>
</div>
</footer>

@include('partials.chatbox')

<button id="chatToggle"
class="fixed bottom-6 right-6 flex items-center gap-2 px-4 py-3 
bg-gradient-to-r from-red-600 to-red-500 
text-white rounded-full shadow-xl 
hover:scale-105 hover:shadow-2xl 
transition-all duration-300 z-50 group">

    <span class="material-symbols-outlined text-2xl group-hover:rotate-12 transition">
        support_agent
    </span>

    <span class="font-semibold text-sm hidden md:block">
        Chat PMI
    </span>

</button>

<script>
document.addEventListener("DOMContentLoaded", function(){

    const toggle = document.getElementById('chatToggle');
    const box = document.getElementById('chatBox');
    const closeBtn = document.getElementById('closeChat');

    toggle.onclick = () => {
        if (box.style.display === "none") {
            box.style.display = "flex";
        } else {
            box.style.display = "none";
        }
    }

    closeBtn.onclick = () => {
        box.style.display = "none";
    }

});
</script>

<script>
function handleEmergency() {
    const nomorAdmin = "6281234567890"; // ganti nomor kamu

    const pesan = encodeURIComponent(
        "🚨 Halo Admin PMI, saya ingin melaporkan kondisi DARURAT.\nMohon segera dibantu."
    );

    window.open(`https://wa.me/${nomorAdmin}?text=${pesan}`, "_blank");
}
</script>
<script>
function startChatbot() {
    const content = document.getElementById('chatContent');

    content.innerHTML = `
        <div class="space-y-3">

            <!-- BOT MESSAGE -->
            <div class="bg-gray-100 p-2 rounded w-fit max-w-[80%]">
                Halo 👋, silakan pilih kebutuhan Anda:
            </div>

            <!-- BUTTON PILIHAN -->
            <button onclick="kirimAuto('Ambulans')"
            class="w-full border p-2 rounded">🚑 Ambulans</button>

            <button onclick="kirimAuto('Keluhan')"
            class="w-full border p-2 rounded">📢 Keluhan</button>

            <button onclick="kirimAuto('Donor Darah')"
            class="w-full border p-2 rounded">🩸 Donor Darah</button>

        </div>
    `;
}
</script>
<script>
function kirimAuto(kategori) {
    const content = document.getElementById('chatContent');

    let reply = '';

    if(kategori === 'Ambulans'){
        reply = 'Untuk layanan ambulans, silakan hubungi hotline kami atau gunakan menu emergency 🚨';
    } 
    else if(kategori === 'Keluhan'){
        reply = 'Silakan tuliskan keluhan Anda, kami akan membantu 😊';
    } 
    else if(kategori === 'Donor Darah'){
        reply = 'Untuk info donor darah, cek jadwal di menu donor atau hubungi admin.';
    }

    content.innerHTML = `
        <div class="space-y-3">

            <!-- USER -->
            <div class="text-right">
                <div class="inline-block bg-red-600 text-white p-2 rounded">
                    ${kategori}
                </div>
            </div>

            <!-- BOT -->
            <div class="bg-gray-100 p-2 rounded w-fit max-w-[80%]">
                ${reply}
            </div>

            <!-- INPUT -->
            <textarea id="pesan"
            class="w-full border p-2 rounded mt-2"
            placeholder="Tulis pesan..."></textarea>

            <button onclick="kirimPesan('${kategori}')"
            class="bg-red-600 text-white px-3 py-2 rounded w-full">
                Kirim
            </button>

        </div>
    `;
}
</script>
<script>
function kirimPesan(kategori) {
    const isi = document.getElementById('pesan').value;
    const content = document.getElementById('chatContent');

    content.innerHTML += `
        <div class="text-right">
            <div class="inline-block bg-red-600 text-white p-2 rounded mt-2">
                ${isi}
            </div>
        </div>

        <div class="bg-gray-100 p-2 rounded w-fit max-w-[80%] mt-2">
            🤖 Terima kasih, pesan Anda sudah kami terima.
        </div>
    `;

    // OPTIONAL: kirim ke Laravel
    fetch("{{ route('pengaduan.store') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            kategori: kategori,
            isi: isi
        })
    });
}
</script>

</body></html>

