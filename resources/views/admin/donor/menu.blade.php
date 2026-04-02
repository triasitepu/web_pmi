@extends('layouts.admin')

@section('title', 'Kelola Donor Darah')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="text-danger text-2xl font-bold"> Daftar Submenu Donor
        </li>
      </ol>
    </div>
    <div>
      <a href="{{ route('admin.donor-submenu.create') }}" class="btn btn-danger btn-sm">
        <i class="bi bi-plus-circle me-2"></i> Tambah Submenu
      </a>
    </div>
  </div>


  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

   <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle table-hover">
      <thead class="text-center text-white" style="background-color: #d60100;">
        <tr>
          <th style="width:5%">No</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Foto</th>
          <th>Status</th>
          <th style="width:25%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($submenus as $key => $submenu)
        <tr>
          <td class="text-center">{{ $key + 1 }}</td>
          {{-- Judul --}}
          <td>{{ $submenu->nama_submenu }}</td>

          {{-- Isi dipotong agar tidak terlalu panjang --}}
          <td>
            {{ \Illuminate\Support\Str::limit(strip_tags($submenu->isi), 100) }}
          </td>

          {{-- Foto --}}
          <td class="text-center">
            @if($submenu->foto)
              <img src="{{ asset('storage/' . $submenu->foto) }}" 
                   alt="Foto" 
                   width="100" 
                   class="img-thumbnail">
            @else
              <span class="text-muted">Tidak ada foto</span>
            @endif
          </td>

          {{-- Status --}}
          <td class="text-center">
            @if($submenu->is_active)
              <span class="badge bg-success">Aktif</span>
            @else
              <span class="badge bg-secondary">Tidak Aktif</span>
            @endif
          </td>

          {{-- Aksi --}}
          <td class="text-center">
            <a href="#'
               class="btn btn-info btn-sm">
              <i class="bi bi-eye"></i> Detail
            </a>
            <a href="{{ route('admin.donor-submenu.edit', $submenu->id) }}" 
               class="btn btn-warning btn-sm">
              <i class="bi bi-pencil-square"></i> Edit
            </a>
            {{-- Hapus --}}
            <form action="{{ route('admin.donor-submenu.destroy', $submenu->id) }}" 
                  method="POST" 
                  class="d-inline"
                  onsubmit="return confirm('Yakin ingin menghapus submenu ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">
                <i class="bi bi-trash"></i> Hapus
              </button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="text-center py-4">
            <i class="bi bi-info-circle me-2"></i>Belum ada data submenu
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>

</div>
@endsection