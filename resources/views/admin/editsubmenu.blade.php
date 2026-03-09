@extends('layouts.admin')

@section('title', 'Edit Konten Profil PMI')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.profil-pmi.index', $menu->id) }}" class="text-danger fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left-circle me-1"></i> Kembali ke Daftar Konten
          </a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page">
          Edit Konten
        </li>
      </ol>
    </div>
  </div>

  {{-- Judul --}}
  <h2 class="text-danger text-center text-2xl font-bold mb-4">
    Edit Konten Profil PMI
  </h2>

  {{-- Pesan Sukses/Error --}}
  @if(session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
  @elseif(session('error'))
    <div class="alert alert-danger text-center">{{ session('error') }}</div>
  @endif

  {{-- Form Edit --}}
  <form action="{{ route('admin.submenu.update', [$menu->id, $submenu->id_submenu]) }}" method="POST">
    @csrf
    @method('PUT')

    {{-- Judul --}}
    <div class="mb-3">
      <label for="judul" class="form-label fw-semibold">Judul Konten</label>
      <input
        type="text"
        name="judul"
        id="judul"
        class="form-control w-100"
        value="{{ old('judul', $submenu->judul) }}"
        required
      >
      @error('judul')
        <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

    {{-- Isi Konten --}}
    <div class="mb-3">
      <label for="isi" class="form-label fw-semibold">Isi Konten</label>
      <textarea
        name="isi"
        id="isi"
        rows="6"
        class="form-control w-100"
      >{{ old('isi', $submenu->isi) }}</textarea>
      @error('isi')
        <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

    {{-- Foto --}}
        <div class="mb-3">
            <label class="form-label fw-semibold">Foto / Gambar</label>

            @if($submenu->foto)
                <div class="mb-3">
                    <img src="{{ asset('storage/' . $submenu->foto) }}"
                         alt="Foto Submenu"
                         width="200"
                         class="img-thumbnail shadow-sm">
                </div>
            @endif

            <input type="file"
                   name="foto"
                   class="form-control @error('foto') is-invalid @enderror">

            <small class="text-muted">
                Kosongkan jika tidak ingin mengganti gambar.
            </small>

            @error('foto')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

      </div>
      @error('foto')
        <div class="text-danger small mt-1">{{ $message }}</div>
      @enderror
    </div>

     {{-- Status --}}
        <div class="mb-4">
            <label class="form-label fw-semibold d-block">Status</label>
            <div class="form-check form-switch">
                <input class="form-check-input"
                       type="checkbox"
                       name="is_active"
                       value="1"
                       {{ old('is_active', $submenu->is_active) ? 'checked' : '' }}>
                <label class="form-check-label">Aktif</label>
            </div>
        </div>

    {{-- Tombol --}}
    <div class="text-end mt-4">
      <button type="submit" class="btn btn-danger px-4">
        <i class="bi bi-save me-1"></i> Simpan Perubahan
      </button>
    </div>
  </form>

</div>
@endsection