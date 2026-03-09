@extends('layouts.admin')

@section('title', 'Kelola Submenu Donor')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.donor-submenu.index') }}" 
             class="text-danger fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left-circle me-1"></i> Daftar Submenu Donor Darah
          </a>
        </li>
        <li class="breadcrumb-item active text-muted">
          {{ $submenu->nama_submenu }}
        </li>
      </ol>
    </div>
  </div>

  {{-- Judul Halaman --}}
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-danger text-2xl font-bold">
      Konten Submenu: {{ $submenu->nama_submenu }}
    </h2>
  </div>

  {{-- Alert --}}
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @elseif(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
  @endif

  {{-- Table --}}
  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-danger text-center">
        <tr>
          <th style="width:5%">No</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Foto</th>
          <th style="width:20%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center">1</td>

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

          {{-- Aksi --}}
          <td class="text-center">
            <a href="{{ route('admin.donor-submenu.edit', $submenu->id) }}" 
               class="btn btn-warning btn-sm">
              <i class="bi bi-pencil-square"></i> Edit
            </a>
            {{-- Hapus --}}
            <form action="{{ route('admin.donor-submenu.destroy', $submenu->id) }}" 
                  method="POST" 
                  class="d-inline"
                  onsubmit="return confirm('Yakin ingin menghapus konten ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">
                <i class="bi bi-trash"></i> Hapus
              </button>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>
@endsection
