@extends('layouts.admin')

@section('title', 'Tambah Submenu Donor Darah')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.donor.index') }}" class="text-danger fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left-circle me-1"></i> Daftar Donor Darah
          </a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page">
          Tambah Submenu Donor Darah
        </li>
      </ol>
    </div>
  </div>

  {{-- Judul --}}
  <h2 class="text-danger text-center text-2xl font-bold mb-4">
    Tambah Submenu Donor Darah Baru
  </h2>

  {{-- Pesan sukses/error --}}
  @if(session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
  @elseif(session('error'))
    <div class="alert alert-danger text-center">{{ session('error') }}</div>
  @endif

  {{-- Form Tambah --}}
  <form action="{{ route('admin.donor-submenu.store') }}" method="POST">
    @csrf

    {{-- Pilih Donor Darah --}}
    <div class="mb-3">
      <label for="donor_darah_id" class="form-label fw-semibold">Pilih Donor Darah</label>
      <select name="donor_darah_id" id="donor_darah_id" class="form-select w-100" required>
        <option value="" disabled selected>-- Pilih Kategori --</option>
        @foreach($donorMenus as $donor)
          <option value="{{ $donor->id }}">{{ $donor->nama ?? 'Donor ' . $donor->id }}</option>
        @endforeach
      </select>
      @error('donor_darah_id')
        <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

    {{-- Input Nama Submenu --}}
    <div class="mb-3">
      <label for="nama_submenu" class="form-label fw-semibold">Nama Submenu</label>
      <input
        type="text"
        name="nama_submenu"
        id="nama_submenu"
        class="form-control w-100"
        placeholder="Masukkan nama submenu donor darah"
        value="{{ old('nama_submenu') }}"
        required
      >
      @error('nama_submenu')
        <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

    {{-- Urutan --}}
    <div class="mb-3">
      <label for="urutan" class="form-label fw-semibold">Urutan</label>
      <input
        type="number"
        name="urutan"
        id="urutan"
        class="form-control w-100"
        placeholder="Masukkan urutan (opsional)"
        value="{{ old('urutan', 0) }}"
        min="0"
      >
    </div>

    {{-- Tombol Simpan --}}
    <div class="text-end mt-4">
      <button type="submit" class="btn btn-danger px-4">
        <i class="bi bi-save me-1"></i> Simpan
      </button>
    </div>
  </form>

</div>
@endsection