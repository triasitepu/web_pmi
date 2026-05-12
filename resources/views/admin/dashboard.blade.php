@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="p-8">

    <!-- Bento Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">

        <!-- Total Relawan -->
        <div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden border-l-4 border-red-500 group">
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


        <!-- Diklat -->
        <div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden border-l-4 border-red-500 group">
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

         
        </div>

        <!-- Bencana -->
        <div class="bg-surface-container-lowest p-6 rounded-xl relative overflow-hidden border-l-4 border-red-500 group">
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
        </div>
    </div>

<div class="bg-surface-container-lowest rounded-xl overflow-hidden mb-8">

    <!-- Header -->
    <div class="px-4 py-3 border-b border-surface-container">
        <h3 class="text-sm font-bold font-headline">
            Detail Stok Darah
        </h3>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <div class="max-w-3xl">

            <table class="w-full text-sm     text-left text-black">

                <thead class="bg-surface-container uppercase text-sm">
                    <tr>
                        <th class="px-4 py-2">Jenis</th>
                        <th class="px-4 py-2 text-center">A</th>
                        <th class="px-4 py-2 text-center">B</th>
                        <th class="px-4 py-2 text-center">O</th>
                        <th class="px-4 py-2 text-center">AB</th>
                    </tr>
                </thead>

            <tbody class="divide-y divide-surface-container-high">

            @php
            function getStatus($val) {
                if ($val == 0) return ['Kosong', 'text-error'];
                if ($val <= 5) return ['Kritis', 'text-error'];
                return ['Aman', 'text-on-surface'];
            }
            @endphp

            <!-- WB -->
            <tr class="hover:bg-surface-container transition">
                <td class="px-4 py-3">
                    <div class="font-bold text-sm">WB</div>
                    <div class="text-[10px] text-secondary">Whole Blood</div>
                </td>

                @foreach([$wba->isi ?? 0, $wbb->isi ?? 0, $wbo->isi ?? 0, $wbab->isi ?? 0] as $val)
                @php [$label, $color] = getStatus($val); @endphp
                <td class="px-4 py-3 text-center">
                    <div class="font-bold text-sm {{ $color }}">{{ $val }}</div>
                    <div class="text-[9px] {{ $color }}">{{ $label }}</div>
                </td>
                @endforeach
            </tr>

            <!-- PRC -->
            <tr class="hover:bg-surface-container transition">
                <td class="px-4 py-3">
                    <div class="font-bold text-sm">PRC</div>
                    <div class="text-[10px] text-secondary">Red Cell</div>
                </td>

                @foreach([$prca->isi ?? 0, $prcb->isi ?? 0, $prco->isi ?? 0, $prcab->isi ?? 0] as $val)
                @php [$label, $color] = getStatus($val); @endphp
                <td class="px-4 py-3 text-center">
                    <div class="font-bold text-sm {{ $color }}">{{ $val }}</div>
                    <div class="text-[9px] {{ $color }}">{{ $label }}</div>
                </td>
                @endforeach
            </tr>

            <!-- TC -->
            <tr class="hover:bg-surface-container transition">
                <td class="px-4 py-3">
                    <div class="font-bold text-sm">TC</div>
                    <div class="text-[10px] text-secondary">Trombocyte</div>
                </td>

                @foreach([$tca->isi ?? 0, $tcb->isi ?? 0, $tco->isi ?? 0, $tcab->isi ?? 0] as $val)
                @php [$label, $color] = getStatus($val); @endphp
                <td class="px-4 py-3 text-center">
                    <div class="font-bold text-sm {{ $color }}">{{ $val }}</div>
                    <div class="text-[9px] {{ $color }}">{{ $label }}</div>
                </td>
                @endforeach
            </tr>

            <!-- FFP -->
            <tr class="hover:bg-surface-container transition">
                <td class="px-4 py-3">
                    <div class="font-bold text-sm">FFP</div>
                    <div class="text-[10px] text-secondary">Plasma</div>
                </td>

                @foreach([$ffpa->isi ?? 0, $ffpb->isi ?? 0, $ffpo->isi ?? 0, $ffpab->isi ?? 0] as $val)
                @php [$label, $color] = getStatus($val); @endphp
                <td class="px-4 py-3 text-center">
                    <div class="font-bold text-sm {{ $color }}">{{ $val }}</div>
                    <div class="text-[9px] {{ $color }}">{{ $label }}</div>
                </td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

<div class="bg-surface-container-lowest rounded-xl overflow-hidden">

    <!-- Header -->
    <div class="px-4 py-3 border-b border-surface-container flex justify-between items-center">
        <h3 class="text-sm font-bold font-headline">
            Pengaduan Masyarakat
        </h3>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
    <table class="min-w-full text-sm text-left text-black">

        <thead class="bg-surface-container uppercase text-sm">
            <tr>
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Nama</th>
                <th class="px-4 py-3">Email</th>
                <th class="px-4 py-3">Kategori</th>
                <th class="px-4 py-3">Keluhan</th>
                <th class="px-4 py-3 text-center">Waktu</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-surface-container-high">

            @forelse ($pengaduan as $index => $item)
                <tr class="hover:bg-surface-container transition">
                    <td class="px-4 py-3">{{ $pengaduan->firstItem() + $index }}</td>

                    <td class="px-4 py-3">
                        {{ $item->nama ?? 'Guest' }}
                    </td>

                    <td class="px-4 py-3 text-secondary">
                        {{ $item->email ?? '-' }}
                    </td>

                    <td class="px-4 py-3">
                        <span class="text-[10px] font-bold bg-red-50 text-red-600 px-2 py-1 rounded">
                            {{ $item->kategori }}
                        </span>
                    </td>

                    <td class="px-4 py-3 text-secondary max-w-xs truncate">
                        {{ $item->isi }}
                    </td>

                    <td class="px-4 py-3 text-center text-[10px] text-secondary">
                        {{ $item->created_at->diffForHumans() }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-secondary">
                        Belum ada pengaduan
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>
     <div class="d-flex justify-content-between align-items-center mt-3">
    <div>
        Menampilkan {{ $pengaduan->firstItem() }} - {{ $pengaduan->lastItem() }} 
        dari {{ $pengaduan->total() }} data
    </div>
    <div>
        {{ $pengaduan->links() }}
    </div>
</div>
@endsection