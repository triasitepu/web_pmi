@extends('layouts.admin')

@section('title', 'Edit Profil PMI')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.profil-pmi.index') }}" class="text-danger fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left-circle me-1"></i> Kelola Profil PMI
          </a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page">
          Edit Profil PMI
        </li>
      </ol>
    </div>
  </div>

  {{-- Judul --}}
  <h2 class="text-danger text-center text-2xl font-bold mb-4">
    Edit Profil PMI
  </h2>

  {{-- Pesan sukses/error --}}
  @if(session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
  @elseif(session('error'))
    <div class="alert alert-danger text-center">{{ session('error') }}</div>
  @endif

  <form action="{{ route('admin.profil-pmi.update', $profil->id) }}" method="POST" class="w-100">
    @csrf
    @method('PUT')

    {{-- Nama Profil --}}
    <div class="mb-3">
      <label for="nama_profil" class="form-label fw-semibold">Nama Profil PMI</label>
      <input
        type="text"
        name="nama_profil"
        id="nama_profil"
        class="form-control w-100"
        placeholder="Masukkan nama profil PMI"
        value="{{ old('nama_profil', $profil->nama_profil) }}"
        required
      >
    </div>

    {{-- Kategori --}}
    <div class="mb-3">
      <label for="kategori" class="form-label fw-semibold">Kategori</label>
      <select name="kategori" id="kategori" class="form-select w-100" required>
        <option value="" disabled>-- Pilih Kategori --</option>
        <option value="profil_pmi" {{ $profil->kategori == 'profil_pmi' ? 'selected' : '' }}>
          Profil PMI
        </option>
      </select>
    </div>

    {{-- Tombol --}}
    <div class="text-end mt-4">
      <button type="submit" class="btn btn-danger px-4">
        <i class="bi bi-save me-1"></i> Simpan
      </button>
    </div>
  </form>

</div>
@endsection
