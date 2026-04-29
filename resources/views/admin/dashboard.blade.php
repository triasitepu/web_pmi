@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="p-8">

    <!-- Hero Section -->
    <div class="bg-white rounded-lg p-6 mb-10">
        <p class="text-secondary font-body">
            Selamat datang kembali. Berikut adalah status terkini unit PMI Kabupaten Magetan hari ini.
        </p>
    </div>

    <!-- Bento Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">

        <!-- Total Relawan -->
        <div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 opacity-5 group-hover:scale-110 transition-transform duration-500">
                <span class="material-symbols-outlined text-9xl">groups</span>
            </div>

            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                    <span class="material-symbols-outlined">groups</span>
                </div>
            </div>

            <p class="text-secondary text-xs font-bold uppercase tracking-widest mb-1">
                Total Relawan
            </p>

            <p class="text-3xl font-black text-on-surface font-headline">
                {{ $totalrelawan->isi ?? 0 }}
            </p>
        </div>

        <!-- Stok Darah -->
        <div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden border-l-4 border-red-500 group">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center text-red-600">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">
                        bloodtype
                    </span>
                </div>

                <span class="text-[10px] font-black text-white bg-red-600 px-2 py-1 rounded uppercase">
                    Kritis
                </span>
            </div>

            <p class="text-secondary text-xs font-bold uppercase tracking-widest mb-1">
                Stok Darah (O+)
            </p>

            <p class="text-3xl font-black text-on-surface font-headline">
                12 Unit
            </p>

            <p class="text-[10px] text-black-600 mt-2 font-medium">
                Butuh donor segera
            </p>
        </div>

        <!-- Diklat -->
        <div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden group">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center text-purple-600">
                    <span class="material-symbols-outlined">school</span>
                </div>
            </div>

            <p class="text-secondary text-xs font-bold uppercase tracking-widest mb-1">
                Siklus Diklat
            </p>

            <p class="text-3xl font-black text-on-surface font-headline">
                4 Aktif
            </p>

            <div class="w-full bg-surface-container-high h-1 mt-4 rounded-full overflow-hidden">
                <div class="bg-purple-600 h-full w-3/4"></div>
            </div>
        </div>

        <!-- Bencana -->
        <div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden group">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 rounded-lg bg-orange-50 flex items-center justify-center text-orange-600">
                    <span class="material-symbols-outlined">report_problem</span>
                </div>
            </div>

            <p class="text-secondary text-xs font-bold uppercase tracking-widest mb-1">
                Laporan Bencana
            </p>

            <p class="text-3xl font-black text-on-surface font-headline">
                2 Baru
            </p>

            <p class="text-[10px] text-orange-600 mt-2 font-medium">
                Tindakan diperlukan segera
            </p>
        </div>
    </div>

    <!-- Detail Stok Darah -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-8">

            <div class="bg-surface-container-lowest rounded-xl overflow-hidden">
                <div class="p-6 border-b border-surface-container flex justify-between items-center">
                    <h3 class="font-bold text-lg font-headline">
                        Status Stok Darah
                    </h3>
                    <button class="text-primary text-xs font-bold hover:underline">
                        Lihat Detail Inventaris
                    </button>
                </div>

                <div class="p-8 grid grid-cols-2 md:grid-cols-4 gap-8">

                    <!-- A+ -->
                    <div class="text-center">
                        <div class="text-4xl font-black text-black-600 font-headline mb-2">A+</div>
                        <p class="text-xs font-bold text-secondary uppercase">24 Unit</p>
                        <div class="mt-2 h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
                            <div class="bg-emerald-500 h-full w-[60%]"></div>
                        </div>
                    </div>

                    <!-- B+ -->
                    <div class="text-center">
                        <div class="text-4xl font-black text-black-600 font-headline mb-2">B+</div>
                        <p class="text-xs font-bold text-secondary uppercase">18 Unit</p>
                        <div class="mt-2 h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
                            <div class="bg-amber-500 h-full w-[40%]"></div>
                        </div>
                    </div>

                    <!-- AB+ -->
                    <div class="text-center">
                        <div class="text-4xl font-black text-black-600 font-headline mb-2">AB+</div>
                        <p class="text-xs font-bold text-secondary uppercase">8 Unit</p>
                        <div class="mt-2 h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
                            <div class="bg-red-500 h-full w-[15%]"></div>
                        </div>
                    </div>

                    <!-- O+ -->
                    <div class="text-center">
                        <div class="text-4xl font-black text-black-600 font-headline mb-2">O+</div>
                        <p class="text-xs font-bold text-secondary uppercase">12 Unit</p>
                        <div class="mt-2 h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
                            <div class="bg-red-500 h-full w-[25%]"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection