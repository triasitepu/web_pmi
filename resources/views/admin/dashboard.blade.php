@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="p-6 md:p-8">

    <!-- Bento Grid Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

        <!-- Total Relawan -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <div class="w-11 h-11 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center">
                    <i class="bi bi-people-fill text-2xl"></i>
                </div>
            </div>
            
            <p class="text-gray-500 text-sm font-medium mt-6">Total Relawan</p>
            <p class="text-4xl font-bold text-gray-800 mt-1">
                {{ $totalrelawan->isi ?? 0 }}
            </p>
        </div>

        <!-- Siklus Diklat -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <div class="w-11 h-11 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center">
                    <i class="bi bi-mortarboard-fill text-2xl"></i>
                </div>
            </div>
            
            <p class="text-gray-500 text-sm font-medium mt-6">Siklus Diklat</p>
            <p class="text-4xl font-bold text-gray-800 mt-1">4 <span class="text-sm font-normal text-gray-500">Aktif</span></p>
        </div>

        <!-- Laporan Bencana -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <div class="w-11 h-11 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center">
                    <i class="bi bi-exclamation-triangle-fill text-2xl"></i>
                </div>
            </div>
            
            <p class="text-gray-500 text-sm font-medium mt-6">Laporan Bencana</p>
            <p class="text-4xl font-bold text-gray-800 mt-1">  {{ $totalBencana }}
                <span class="text-sm font-normal text-gray-500">Baru</span></p>
        </div>

        <!-- Card ke-4 (bisa ditambahkan nanti) -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition-all">
            <div class="flex items-center justify-between">
                <div class="w-11 h-11 bg-red-50 text-red-600 rounded-xl flex items-center justify-center">
                    <i class="bi bi-droplet-fill text-2xl"></i>
                </div>
            </div>
            
            <p class="text-gray-500 text-sm font-medium mt-6">Total Stok Darah Hari Ini</p>
            <p class="text-4xl font-bold text-gray-800 mt-1">    {{ $totalstokdarah ?? 0 }}
</p>
        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">

        <!-- Stok Darah -->
        <div class="lg:col-span-3 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b bg-gray-50">
                <h3 class="font-semibold text-lg">Detail Stok Darah</h3>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-surface-container uppercase text-sm">
                        <tr>
                            <th class="px-6 py-4 text-left font-medium">Jenis Darah</th>
                            <th class="px-6 py-4 text-center font-medium">A</th>
                            <th class="px-6 py-4 text-center font-medium">B</th>
                            <th class="px-6 py-4 text-center font-medium">O</th>
                            <th class="px-6 py-4 text-center font-medium">AB</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">

                        @php
                        function getStatus($val) {
                            if ($val == 0) return ['Kosong', 'text-red-600 font-bold'];
                            if ($val <= 5) return ['Kritis', 'text-red-600'];
                            return ['Aman', 'text-emerald-600'];
                        }
                        @endphp

                        @php
                        $map = [
                            'WB' => [
                                'a' => $whole_blood_a ?? null,
                                'b' => $whole_blood_b ?? null,
                                'o' => $whole_blood_o ?? null,
                                'ab' => $whole_blood_ab ?? null,
                            ],
                            'PRC' => [
                                'a' => $packed_red_cell_a ?? null,
                                'b' => $packed_red_cell_b ?? null,
                                'o' => $packed_red_cell_o ?? null,
                                'ab' => $packed_red_cell_ab ?? null,
                            ],
                            'TC' => [
                                'a' => $trombocyte_concentrate_a ?? null,
                                'b' => $trombocyte_concentrate_b ?? null,
                                'o' => $trombocyte_concentrate_o ?? null,
                                'ab' => $trombocyte_concentrate_ab ?? null,
                            ],
                            'FFP' => [
                                'a' => $fresh_frozen_plasma_a ?? null,
                                'b' => $fresh_frozen_plasma_b ?? null,
                                'o' => $fresh_frozen_plasma_o ?? null,
                                'ab' => $fresh_frozen_plasma_ab ?? null,
                            ],
                        ];
                        @endphp
                       @foreach($map as $jenis => $items)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <div class="font-semibold">{{ $jenis }}</div>
                                    <div class="text-xs text-gray-500">
                                        @switch($jenis)
                                            @case('WB') Whole Blood @break
                                            @case('PRC') Packed Red Cell @break
                                            @case('TC') Thrombocyte @break
                                            @case('FFP') Fresh Frozen Plasma @break
                                        @endswitch
                                    </div>
                                </td>

                                @foreach($items as $item)
                                    @php 
                                        $val = $item->isi ?? 0;
                                        [$label, $color] = getStatus($val);
                                    @endphp
                                    <td class="px-6 py-4 text-center">
                                        <div class="font-bold {{ $color }}">{{ $val }}</div>
                                        <div class="text-xs {{ $color }}">{{ $label }}</div>
                                    </td>
                                @endforeach
                            </tr>
                            @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pengaduan Masyarakat -->
        <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col">
            <div class="px-6 py-4 border-b bg-gray-50 flex justify-between items-center">
                <h3 class="font-semibold text-lg">Pengaduan Masyarakat</h3>
            </div>
            
            <div class="overflow-auto flex-1">
                <table class="w-full text-sm">
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

                    <td class="px-4 py-3 text-secondary max-w-xs">
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
            </div>

            @if($pengaduan->hasPages())
            <div class="px-6 py-4 border-t bg-gray-50 text-sm">
                <div class="flex justify-between items-center text-gray-600">
                    <span>Menampilkan {{ $pengaduan->firstItem() }} - {{ $pengaduan->lastItem() }} dari {{ $pengaduan->total() }}</span>
                    {{ $pengaduan->links() }}
                </div>
            </div>
            @endif
        </div>

    </div>

</div>
@endsection