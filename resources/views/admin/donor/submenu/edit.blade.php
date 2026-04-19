@extends('layouts.admin')

@section('title', 'Edit Submenu Donor')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

    {{-- Breadcrumb --}}
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.donor-submenu.index') }}"
                       class="text-black fw-semibold text-decoration-none">
                        <i class="bi bi-arrow-left-circle me-1"></i>
                        Kembali ke Daftar Submenu
                    </a>
                </li>
                <li class="breadcrumb-item active text-muted">
                    Edit Submenu
                </li>
            </ol>
        </div>
    </div>

    <h2 class="text-black text-center fw-bold mb-4">
        Edit Submenu {{ $submenu->nama_submenu }}
    </h2>

    {{-- Alert --}}
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error Global --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.donor-submenu.update', $submenu->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        {{-- Pilih Donor Darah --}}
        <div class="mb-3">
            <label for="donor_darah_id" class="form-label fw-semibold">Pilih Donor Darah</label>
            <select name="donor_darah_id" id="donor_darah_id" class="form-select @error('donor_darah_id') is-invalid @enderror" required>
                <option value="" disabled>-- Pilih Donor Darah --</option>
                @foreach($donorMenus as $donor)
                    <option value="{{ $donor->id }}" {{ old('donor_darah_id', $submenu->donor_darah_id) == $donor->id ? 'selected' : '' }}>
                        {{ $donor->nama_menu ?? 'Donor ' . $donor->id }}
                    </option>
                @endforeach
            </select>
            @error('donor_darah_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Nama Submenu --}}
        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Submenu</label>
            <input type="text"
                   name="nama_submenu"
                   class="form-control @error('nama_submenu') is-invalid @enderror"
                   value="{{ old('nama_submenu', $submenu->nama_submenu) }}"
                   required>

            @error('nama_submenu')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Isi Konten --}}
        <div class="mb-3">
            <label class="form-label fw-semibold">Isi Konten</label>
            <textarea name="isi"
                      rows="6"
                      class="form-control @error('isi') is-invalid @enderror"
                      required>{{ old('isi', $submenu->isi) }}</textarea>

            @error('isi')
                <div class="invalid-feedback">{{ $message }}</div>
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

        {{-- Urutan --}}
        <div class="mb-3">
            <label class="form-label fw-semibold">Urutan</label>
            <input type="number"
                   name="urutan"
                   class="form-control @error('urutan') is-invalid @enderror"
                   value="{{ old('urutan', $submenu->urutan) }}">

            @error('urutan')
                <div class="invalid-feedback">{{ $message }}</div>
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
            <button type="submit" class="btn btn-secondary px-4">
                Simpan Perubahan
            </button>
        </div>

    </form>
</div>
@endsection
