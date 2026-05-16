@extends('layouts.admin')

@section('title', 'Edit Submenu Kebencanaan')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

    {{-- Breadcrumb --}}
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.kebencanaan-submenu.index') }}"
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
        Edit Submenu Kebencanaan
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

    <form action="{{ route('admin.kebencanaan-submenu.update', $submenu->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

    
        <div class="row">

            <!-- Kolom Kiri -->
            <div class="col-lg-8">

                {{-- Pilih Kategori Donor --}}
                <div class="mb-4">
                    <label for="kebencanaan_id" class="form-label fw-semibold">Pilih Kategori Submenu</label>
                    <select name="kebencanaan_id" id="kebencanaan_id" class="form-select" required>
                        <option value="" disabled>-- Pilih Kategori --</option>
                @foreach($kebencanaan as $kebencanaan)
                    <option value="{{ $kebencanaan->id }}" {{ old('kebencanaan_id', $submenu->kebencanaan_id) == $kebencanaan->id ? 'selected' : '' }}>
                        {{ $kebencanaan->nama_menu ?? 'Kebencanaan ' . $kebencanaan->id }}
                    </option>
                @endforeach
            </select>
            @error('kebencanaan_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

                {{-- Nama Submenu --}}
                <div class="mb-4">
                    <label for="nama_submenu" class="form-label fw-semibold">Nama Submenu</label>
                    <input type="text" 
                           name="nama_submenu" 
                           id="nama_submenu"
                           class="form-control" 
                           value="{{ old('nama_submenu', $submenu->nama_submenu) }}"
                           required>
                    @error('nama_submenu')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Isi Konten --}}
                <div class="mb-4">
                    <label for="isi" class="form-label fw-semibold">Isi Konten</label>
                    <textarea name="isi" 
                              id="isi"
                              rows="10" 
                              class="form-control"
                              required>{{ old('isi', $submenu->isi) }}</textarea>
                    @error('isi')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <!-- Kolom Kanan -->
            <div class="col-lg-4">

                {{-- Foto Saat Ini --}}
                @if($submenu->foto)
                <div class="mb-4">
                    <label class="form-label fw-semibold">Foto Saat Ini</label>
                    <div class="border rounded p-2 bg-light">
                        <img src="{{ asset('storage/' . $submenu->foto) }}" 
                             alt="Foto Saat Ini" 
                             class="img-fluid rounded shadow-sm"
                             style="max-height: 180px; object-fit: cover; width: 100%;">
                    </div>
                </div>
                @endif

                {{-- Upload Foto Baru --}}
                <div class="mb-4">
                    <label for="foto" class="form-label fw-semibold">Ganti Foto (Opsional)</label>
                    <input type="file" 
                           name="foto" 
                           id="foto" 
                           class="form-control"
                           accept="image/*">
                    <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
                    @error('foto')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Urutan --}}
                <div class="mb-4">
                    <label for="urutan" class="form-label fw-semibold">Urutan Tampilan</label>
                    <input type="number" 
                           name="urutan" 
                           id="urutan"
                           class="form-control"
                           value="{{ old('urutan', $submenu->urutan ?? 0) }}"
                           min="0">
                    <small class="text-muted">Semakin kecil angkanya, semakin atas posisinya.</small>
                </div>

                {{-- Status --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">Status</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" 
                               type="checkbox" 
                               name="is_active" 
                               value="1"
                               {{ old('is_active', $submenu->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label fw-medium">Aktif & Ditampilkan di Website</label>
                    </div>
                </div>

            </div>
        </div>

        {{-- Tombol Aksi --}}
        <div class="d-flex justify-content-end gap-3 mt-5">
            <a href="{{ route('admin.donor-submenu.index') }}" 
               class="btn btn-secondary px-4">
               Batal
            </a>
            <button type="submit" class="btn btn-success">
              Simpan Perubahan
            </button>
        </div>

    </form>

</div>
@endsection