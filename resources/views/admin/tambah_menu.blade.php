@extends('layouts.admin')

@section('title', 'Tambah Profil PMI')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.profil-pmi.index') }}" class="text-danger fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left-circle me-1"></i> Daftar Profil PMI
          </a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page">
          Tambah Profil PMI
        </li>
      </ol>
    </div>
  </div>

  {{-- Judul --}}
  <h2 class="text-danger text-center text-2xl font-bold mb-4">
    Tambah Profil PMI Baru
  </h2>

  {{-- Pesan sukses/error --}}
  @if(session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
  @elseif(session('error'))
    <div class="alert alert-danger text-center">{{ session('error') }}</div>
  @endif

  {{-- Form Tambah Konten --}}
<form action="{{ route('admin.submenu.store', $menu->id) }}" method="POST">
    @csrf

    {{-- Input Nama Konten --}}
    <div class="mb-3">
      <label for="nama_menu" class="form-label fw-semibold">Nama Profil PMI</label>
      <input
        type="text"
        name="judul"
        id="nama_menu"
        class="form-control w-100"
        placeholder="Masukkan nama konten baru"
        value="{{ old('judul') }}"
        required
      >
      @error('judul')
        <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

    {{-- Input Kategori --}}
    <div class="mb-3">
      <label for="url" class="form-label fw-semibold">Pilih Kategori</label>
      <select name="url" id="url" class="form-select w-100" required>
        <option value="" disabled selected>-- Pilih Kategori --</option>
        <option value="profil_pmi">Profil PMI</option>
      </select>
      @error('url')
        <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

    {{-- Tombol --}}
    <div class="text-end mt-4">
      <button type="submit" class="btn btn-danger px-4">
        <i class="bi bi-save me-1"></i>Simpan
      </button>
    </div>
  </form>

</div>
@endsection
