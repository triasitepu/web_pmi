@extends('layouts.admin')

@section('title', 'Tambah Submenu Profil')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-5 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.profil-submenu.index') }}" class="text-black fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left-circle me-1"></i> Daftar Submenu Profil
          </a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page">
          Tambah Submenu Baru
        </li>
      </ol>
    </div>
  </div>

  {{-- Judul --}}
  <h2 class="text-dark fw-bold mb-4">
    Tambah Submenu Profil Baru
  </h2>

  {{-- Alert --}}
  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @elseif(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-circle me-2"></i>{{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  {{-- Form --}}
  <form action="{{ route('admin.profil-submenu.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">

      <!-- Kolom Kiri -->
      <div class="col-lg-8">

        {{-- Pilih Kategori --}}
        <div class="mb-4">
          <label for="profil_id" class="form-label fw-semibold">Pilih Kategori Profil</label>
          <select name="profil_id" id="profil_id" class="form-select" required>
            <option value="" disabled selected>-- Pilih Kategori --</option>
            @foreach($profils as $profil)
              <option value="{{ $profil->id }}" {{ old('profil_id') == $profil->id ? 'selected' : '' }}>
                {{ $profil->nama_menu ?? 'Kategori ' . $profil->id }}
              </option>
            @endforeach
          </select>
          @error('profil_id')
            <div class="text-danger small mt-1">{{ $message }}</div>
          @enderror
        </div>

        {{-- Nama Submenu --}}
        <div class="mb-4">
          <label for="nama_submenu" class="form-label fw-semibold">Nama Submenu</label>
          <input 
            type="text" 
            name="nama_submenu" 
            id="nama_submenu" 
            class="form-control" 
            placeholder="Contoh: Visi & Misi"
            value="{{ old('nama_submenu') }}"
            required
          >
          @error('nama_submenu')
            <div class="text-danger small mt-1">{{ $message }}</div>
          @enderror
        </div>

        {{-- Isi Konten --}}
        <div class="mb-4">
          <label for="isi" class="form-label fw-semibold">Isi Konten</label>
          <textarea 
            name="isi" 
            id="isi" 
            class="form-control" 
            rows="8" 
            placeholder="Masukkan isi submenu di sini..."
            required
          >{{ old('isi') }}</textarea>
          @error('isi')
            <div class="text-danger small mt-1">{{ $message }}</div>
          @enderror
        </div>

      </div>

      <!-- Kolom Kanan -->
      <div class="col-lg-4">

        {{-- Foto --}}
        <div class="mb-4">
          <label for="foto" class="form-label fw-semibold">Foto / Gambar</label>
          <input 
            type="file" 
            name="foto" 
            id="foto" 
            class="form-control" 
            accept="image/*"
          >
          <small class="text-muted">Format yang diizinkan: JPG, JPEG, PNG (maks. 2MB)</small>
          @error('foto')
            <div class="text-danger small mt-1">{{ $message }}</div>
          @enderror
        </div>

        {{-- Urutan --}}
        <div class="mb-4">
          <label for="urutan" class="form-label fw-semibold">Urutan Tampilan</label>
          <input 
            type="number" 
            name="urutan" 
            id="urutan" 
            class="form-control" 
            placeholder="0"
            value="{{ old('urutan', 0) }}"
            min="0"
          >
          <small class="text-muted">Semakin kecil angka, semakin atas</small>
        </div>

        {{-- Status (default aktif) --}}
        <div class="mb-4">
          <label class="form-label fw-semibold">Status</label>
          <div class="form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" checked>
            <label class="form-check-label" for="is_active">
              Aktif
            </label>
          </div>
        </div>

      </div>
    </div>

    {{-- Tombol Aksi --}}
    <div class="d-flex justify-content-end gap-2 mt-5">
      <a href="{{ route('admin.profil-submenu.index') }}" class="btn btn-secondary px-4">
        Batal
      </a>
      <button type="submit" class="btn btn-success px-5">
       Simpan Submenu
      </button>
    </div>

  </form>

</div>
@endsection