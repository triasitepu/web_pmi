<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Tips Keselamatan - Magetan Safety</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                "on-primary-container": "#fffaf9",
                "surface-container-low": "#f3f3f3",
                "outline": "#926f6b",
                "on-surface": "#1a1c1c",
                "error": "#ba1a1a",
                "outline-variant": "#e7bdb8",
                "error-container": "#ffdad6",
                "secondary-fixed-dim": "#c8c6c6",
                "on-secondary-fixed-variant": "#474747",
                "on-tertiary-fixed": "#001e30",
                "primary": "#ba0015",
                "on-background": "#1a1c1c",
                "on-primary": "#ffffff",
                "secondary-fixed": "#e4e2e2",
                "tertiary-container": "#007ab3",
                "surface-tint": "#c00016",
                "tertiary-fixed-dim": "#8ecdff",
                "on-surface-variant": "#5d3f3c",
                "tertiary": "#00608e",
                "surface-container": "#eeeeee",
                "surface": "#f9f9f9",
                "secondary": "#5e5e5e",
                "surface-container-highest": "#e2e2e2",
                "inverse-primary": "#ffb4ac",
                "on-secondary": "#ffffff",
                "primary-container": "#B77466",
                "primary-fixed": "#ffdad6",
                "on-secondary-container": "#646464",
                "on-error": "#ffffff",
                "primary-fixed-dim": "#ffb4ac",
                "on-error-container": "#93000a",
                "on-tertiary": "#ffffff",
                "inverse-surface": "#2f3131",
                "on-secondary-fixed": "#1b1c1c",
                "on-primary-fixed": "#410003",
                "surface-bright": "#f9f9f9",
                "surface-dim": "#dadada",
                "surface-container-high": "#e8e8e8",
                "secondary-container": "#e4e2e2",
                "on-tertiary-container": "#f8faff",
                "background": "#f9f9f9",
                "surface-variant": "#e2e2e2",
                "tertiary-fixed": "#cae6ff",
                "inverse-on-surface": "#f1f1f1",
                "on-tertiary-fixed-variant": "#004b70",
                "surface-container-lowest": "#ffffff",
                "on-primary-fixed-variant": "#93000e"
            },
            "borderRadius": {
                "DEFAULT": "0.125rem",
                "lg": "0.25rem",
                "xl": "0.5rem",
                "full": "0.75rem"
            },
            "fontFamily": {
                "headline": ["Manrope"],
                "display": ["Manrope"],
                "body": ["Inter"],
                "label": ["Inter"]
            }
          }
        }
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3 { font-family: 'Manrope', sans-serif; }
    </style>
</head>
@extends('partials.header')

<body class="bg-background text-on-background font-body selection:bg-primary-container selection:text-on-primary-container pt-20 md:pt-24 lg:pt-28">
    
<main class="max-w-7xl mx-auto px-6 md:px-10 lg:px-16 py-8 lg:py-12">

    <!-- Hero / Header Section -->
    <section class="space-y-4 mb-16">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight text-on-surface">
            Tips Keselamatan
        </h1>
        <p class="text-xl text-secondary max-w-3xl leading-relaxed">
            Panduan komprehensif dari PMI Magetan untuk menghadapi potensi bencana di wilayah Kabupaten Magetan dan sekitarnya.
        </p>
    </section>

   <!-- ==================== BANJIR SECTION ==================== -->
<section class="space-y-8 mb-20" id="banjir">
    <div class="flex items-center space-x-4 border-l-4 border-primary-container pl-4">
        <span class="material-symbols-outlined text-primary-container text-4xl">flood</span>
        <h2 class="text-3xl font-bold">Banjir (Flood)</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Sebelum: Persiapan -->
        <div class="bg-primary-container-lowest p-8 rounded-3xl shadow-sm border-b-4 border-tertiary">
            <div class="flex justify-between items-start mb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-tertiary">TAHAP 01</span>
                <h3 class="text-2xl font-bold">Sebelum: Persiapan</h3>
            </div>
            <p class="text-secondary leading-relaxed">
                Siapkan <strong>Tas Siaga Bencana</strong> berisi: Dokumen penting (dalam plastik kedap air), pakaian ganti, makanan kering, air minum, obat-obatan, dan lampu senter.
            </p>
            <div class="mt-6 bg-primary-container-low p-5 rounded-2xl">
                <p class="text-xs font-semibold text-secondary mb-1">TIP KUNCI</p>
                <p class="text-sm italic">Letakkan barang elektronik dan dokumen penting di tempat yang lebih tinggi.</p>
            </div>
        </div>

        <!-- Saat: Tindakan -->
        <div class="bg-primary-container-lowest p-8 rounded-3xl shadow-sm border-b-4 border-primary-container">
            <div class="flex justify-between items-start mb-6">
                <span class="text-xs font-bold uppercase tracking-widest text-primary-container">TAHAP 02</span>
                    <h3 class="text-2xl font-bold">Saat: Tindakan</h3>
                </div>
            <ul class="space-y-4 text-secondary">
                <li class="flex items-start gap-3">
                    <span class="material-symbols-outlined text-primary-container mt-1">check_circle</span>
                    <span>Matikan aliran listrik dan gas di rumah.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="material-symbols-outlined  mt-1">check_circle</span>
                    <span>Evakuasi segera ke tempat yang lebih tinggi.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="material-symbols-outlined text-primary-container mt-1">check_circle</span>
                    <span>Hindari berjalan atau berkendara di air mengalir.</span>
                </li>
            </ul>
        </div>

        <!-- Sesudah: Higienitas -->
        <div class="md:col-span-2 bg-primary-container-lowest p-8 rounded-3xl shadow-sm border-b-4 border-secondary flex flex-col lg:flex-row gap-8 items-center">
            <div class="w-full lg:w-2/5">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB11QIL_jIyushLVqJElft25o1NM4LWdP_p2JUePNEKdTuvDzbs5Aw-cRsZaBLelXZKt7oCdHX1WcxZKt5LCsxSxdSRudZ_kzevpQsUFRNiKytM7yHfmzzIzmO_BaK8RaISQCPri74Uv8w_InPu0ftZM8k8NTGFoPeLGrDaGEzQP4w9vfLkR4gUTEJfZomqcW-Sol8qL36_viWTUTwnabK7PhVE7KYxG31MVQlioJfStr9h_K-H5C9PoEXmULbqGvle3uhanQC-Fw" 
                     alt="Hygiene kit after flood" 
                     class="rounded-3xl w-full h-64 object-cover shadow-md">
            </div>
            <div class="w-full lg:w-3/5 space-y-4">
                <h3 class="text-2xl font-bold">Sesudah: Higienitas &amp; Pemulihan</h3>
                <p class="text-secondary">
                    Bersihkan rumah segera setelah air surut. Gunakan desinfektan untuk mencegah penyakit yang ditularkan melalui air. Pastikan sumber air minum aman dan tidak tercemar.
                </p>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-surface-container text-xs font-semibold rounded-full">Sanitasi</span>
                    <span class="px-4 py-2 bg-surface-container text-xs font-semibold rounded-full">Pemulihan</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== GEMPA BUMI SECTION ==================== -->
<section class="space-y-8 mb-20" id="gempa">
    <div class="flex items-center space-x-4 border-l-4 border-primary-container pl-4">
        <span class="material-symbols-outlined text-primary-container text-4xl">volcano</span>
        <h2 class="text-3xl font-bold">Gempa Bumi (Earthquake)</h2>
    </div>

    <div class="bg-on-primary-container p-1 rounded-3xl overflow-hidden">
        <div class="bg-primary-container-lowest p-8 md:p-12 rounded-3xl space-y-12">
            <!-- DROP - COVER - HOLD ON -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center space-y-4">
                    <div class="w-20 h-20 bg-primary-container text-white rounded-full flex items-center justify-center mx-auto shadow-lg">
                        <span class="material-symbols-outlined text-5xl">keyboard_double_arrow_down</span>
                    </div>
                    <h4 class="font-bold text-xl">DROP</h4>
                    <p class="text-sm text-secondary">Merunduk ke lantai sebelum guncangan menjatuhkan Anda.</p>
                </div>
                <div class="text-center space-y-4">
                    <div class="w-20 h-20 bg-primary-container text-white rounded-full flex items-center justify-center mx-auto shadow-lg">
                        <span class="material-symbols-outlined text-5xl">table_restaurant</span>
                    </div>
                    <h4 class="font-bold text-xl">COVER</h4>
                    <p class="text-sm text-secondary">Lindungi kepala dan leher di bawah meja yang kokoh.</p>
                </div>
                <div class="text-center space-y-4">
                    <div class="w-20 h-20 bg-primary-container text-white rounded-full flex items-center justify-center mx-auto shadow-lg">
                        <span class="material-symbols-outlined text-5xl">front_hand</span>
                    </div>
                    <h4 class="font-bold text-xl">HOLD ON</h4>
                    <p class="text-sm text-secondary">Tetap bertahan di posisi hingga guncangan benar-benar berhenti.</p>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-8 border-t border-primary-container-high">
                <div class="space-y-4">
                    <h4 class="text-primary-container font-bold flex items-center gap-2 text-lg">
                        <span class="material-symbols-outlined">home</span> 
                        Identifikasi Titik Aman
                    </h4>
                    <ul class="text-sm text-secondary space-y-2 list-disc pl-5">
                        <li>Bawah meja kayu yang solid.</li>
                        <li>Sudut ruangan tanpa benda menggantung.</li>
                        <li>Area terbuka jauh dari gedung, pohon, atau tiang listrik.</li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="text-primary-container font-bold flex items-center gap-2 text-lg">
                        <span class="material-symbols-outlined">exit_to_app</span> 
                        Prosedur Evakuasi
                    </h4>
                    <ul class="text-sm text-secondary space-y-2 list-disc pl-5">
                        <li>Gunakan tangga darurat, jangan lift.</li>
                        <li>Lindungi kepala dengan tas atau bantal.</li>
                        <li>Ikuti jalur evakuasi menuju titik kumpul.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== TANAH LONGSOR SECTION ==================== -->
<section class="space-y-8 mb-20" id="longsor">
    <div class="flex items-center space-x-4 border-l-4 border-primary-container pl-4">
        <span class="material-symbols-outlined text-primary-container text-4xl">landscape</span>
        <h2 class="text-3xl font-bold">Tanah Longsor (Landslide)</h2>
    </div>

    <div class="bg-primary-container-low rounded-3xl p-8 lg:p-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <div class="lg:w-1/2 space-y-6">
                <span class="px-5 py-2 bg-primary-container text-white text-xs font-bold rounded-full">Fokus: Lereng Gunung Lawu</span>
                <h3 class="text-2xl font-bold leading-tight">Waspadai Tanda-Tanda Tanah Longsor</h3>
                <p class="text-secondary leading-relaxed">
                    Khususnya warga di kawasan Plaosan, Poncol, dan lereng Gunung Lawu lainnya. Perhatikan perubahan lingkungan saat musim hujan.
                </p>

                <div class="space-y-4">
                    <div class="flex gap-4 p-5 bg-primary-container-lowest rounded-2xl border-l-4 border-primary-container">
                        <span class="material-symbols-outlined text-red-500 text-2xl">warning</span>
                        <div>
                            <h5 class="font-bold">Retakan pada tanah atau bangunan</h5>
                            <p class="text-sm text-secondary">Munculnya retakan baru di tanah, jalan, atau dinding rumah.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 p-5 bg-primary-container-lowest rounded-2xl border-l-4 border-primary-container">
                        <span class="material-symbols-outlined text-primary-container text-2xl">nature</span>
                        <div>
                            <h5 class="font-bold">Pohon dan tiang miring</h5>
                            <p class="text-sm text-secondary">Pohon atau tiang listrik yang tiba-tiba condong ke arah lereng.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 relative rounded-3xl overflow-hidden min-h-[320px]">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKkTeSPU98zc-ti3OSs9Tv6H6u1xn-JUjh2_m_9fhMkgcBA1ovzrnYF2rmvqPgm_O0fX7yZKnvDKGFLyl0oFpfyuftAQG24pTfwOeMJdFBCgeYTzoDTtN8mLnsSoAT6ga3LYIm2CezvG_CfvthD6uCO3mH9-ddgIvs4cIRmYTe9IFeVJDbFZxtwTsPHeo6RlUJYvQy1bY8hjsFlfAVNVagbsP1Bvj6eQ6cGowYt-zcyvCp0SgzdFFMkKhvqHvggC91ygBQyKj3yA" 
                     alt="Tanah Longsor Gunung Lawu" 
                     class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-md p-6 rounded-2xl">
                    <h5 class="font-bold text-primary-container flex items-center gap-2 mb-2">
                        <span class="material-symbols-outlined">route</span>
                        Rute Evakuasi
                    </h5>
                    <p class="text-sm text-on-surface">
                        Segera menjauh dari lereng menuju area datar yang stabil. Jangan kembali ke rumah saat hujan deras masih berlangsung.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== ABU VULKANIK / GUNUNG API SECTION ==================== -->
<section class="space-y-8 mb-20" id="gunungapi">
    <div class="flex items-center space-x-4 border-l-4 border-primary-container pl-4">
        <span class="material-symbols-outlined text-primary-container text-4xl">terrain</span>
        <h2 class="text-3xl font-bold">Abu Vulkanik (Gunung Api)</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Pelindung Abu -->
        <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border-b-4 border-primary-container">
            <h4 class="font-bold text-xl flex items-center gap-3 mb-4">
                <span class="material-symbols-outlined text-primary-container">masks</span>
                Pelindung Diri dari Abu Vulkanik
            </h4>
            <p class="text-secondary mb-6">Paparan abu vulkanik dapat mengganggu pernapasan dan mata. Siapkan perlindungan berikut:</p>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-surface-container p-6 rounded-2xl text-center">
                    <span class="material-symbols-outlined text-4xl text-primary-container mb-2 block">masks</span>
                    <p class="font-semibold text-sm">Masker N95 atau Masker Bedah</p>
                </div>
                <div class="bg-surface-container p-6 rounded-2xl text-center">
                    <span class="material-symbols-outlined text-4xl text-primary-container mb-2 block">visibility</span>
                    <p class="font-semibold text-sm">Kacamata Pelindung (Goggles)</p>
                </div>
            </div>
        </div>

        <!-- Pantau Status -->
        <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border-b-4 border-tertiary">
            <h4 class="font-bold text-xl flex items-center gap-3 mb-4">
                <span class="material-symbols-outlined text-tertiary">monitor_heart</span>
                Pantau Status Gunung Lawu
            </h4>
            <p class="text-secondary">
                Selalu perbarui informasi melalui situs resmi <strong>Magma Indonesia</strong> atau <strong>BPBD Kabupaten Magetan</strong> mengenai tingkat aktivitas Gunung Lawu.
            </p>
            <a href="#" class="inline-flex items-center mt-6 text-tertiary font-bold hover:underline">
                Cek Status Terkini 
                <span class="material-symbols-outlined ml-1">open_in_new</span>
            </a>
        </div>
    </div>
</section>

    <!-- Download Resources -->
    <!-- <section class="bg-on-tertiary-fixed text-on-tertiary p-10 rounded-3xl space-y-8 mt-16">
        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="space-y-3 text-center md:text-left">
                <h2 class="text-3xl font-bold">Unduh Panduan Lengkap</h2>
                <p class="text-tertiary-fixed-dim">Dapatkan materi edukasi dalam format PDF untuk dibaca luring.</p>
            </div>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="flex items-center gap-2 bg-surface-container-lowest text-on-surface px-8 py-4 rounded-2xl font-bold text-sm shadow-lg hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined">download</span> 
                    Buku Saku PMI
                </button>
                <button class="flex items-center gap-2 bg-primary-container text-white px-8 py-4 rounded-2xl font-bold text-sm shadow-lg hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined">picture_as_pdf</span> 
                    Peta ZRB Lawu
                </button>
            </div>
        </div>
    </section> -->

</main>

<!-- Bottom Navigation (Mobile) -->
<!-- <nav class="md:hidden fixed bottom-0 left-0 w-full z-50 rounded-t-3xl bg-white/90 dark:bg-slate-950/90 backdrop-blur-2xl shadow-[0_-8px_30px_rgb(0,0,0,0.04)]">
    <div class="flex justify-around items-center px-4 pt-3 pb-8">
        <div class="flex flex-col items-center justify-center text-slate-500">
            <span class="material-symbols-outlined">home</span>
            <span class="font-inter text-[10px] font-semibold uppercase tracking-wider">Home</span>
        </div>
        <div class="flex flex-col items-center justify-center bg-red-50 dark:bg-red-900/20 text-red-700 dark:text-red-400 rounded-2xl px-6 py-2">
            <span class="material-symbols-outlined">shield_with_heart</span>
            <span class="font-inter text-[10px] font-semibold uppercase tracking-wider">Safety Tips</span>
        </div>
        <div class="flex flex-col items-center justify-center text-slate-500">
            <span class="material-symbols-outlined">call</span>
            <span class="font-inter text-[10px] font-semibold uppercase tracking-wider">Contacts</span>
        </div>
        <div class="flex flex-col items-center justify-center text-slate-500">
            <span class="material-symbols-outlined">person</span>
            <span class="font-inter text-[10px] font-semibold uppercase tracking-wider">Profile</span>
        </div>
    </div>
</nav> -->
</body></html>