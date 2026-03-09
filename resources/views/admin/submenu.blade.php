@extends('layouts.admin')

@section('title', 'Tambah Konten Profil PMI')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.submenu.index', $menu->id) }}" 
             class="text-danger fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left-circle me-1"></i> Kelola Konten Profil PMI
          </a>
        </li>
        <li class="breadcrumb-item active text-muted">
          Tambah Konten
        </li>
      </ol>
    </div>
  </div>

  {{-- Judul --}}
  <h2 class="text-danger text-center fw-bold mb-4">
    Tambah Konten Profil PMI
  </h2>

  {{-- Alert --}}
  @if(session('success'))
    <div class="alert alert-success text-center">
      {{ session('success') }}
    </div>
  @endif

  {{-- Form --}}
  <form action="{{ route('admin.submenu.store', $menu->id) }}" 
        method="POST" 
        enctype="multipart/form-data">
    @csrf

    {{-- Judul --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Judul</label>
      <input type="text"
             name="judul"
             class="form-control"
             placeholder="Masukkan judul konten"
             value="{{ old('judul') }}"
             required>
    </div>

    {{-- Isi --}}
    <div class="mb-3">
      <label class="form-label fw-semibold">Isi</label>
      <textarea name="isi"
                rows="5"
                class="form-control"
                placeholder="Tulis isi konten...">{{ old('isi') }}</textarea>
    </div>

    {{-- Upload Gambar --}}
<div class="mb-4">
  <label class="form-label fw-semibold d-block mb-2">Upload Gambar</label>

  <div class="border rounded p-4 text-center bg-light position-relative"
       style="cursor:pointer;"
       onclick="document.getElementById('foto').click();">

      <i class="bi bi-cloud-upload fs-2 text-danger"></i>
      <p class="mb-0 mt-2 text-muted">Klik untuk pilih gambar</p>

      <input type="file"
             name="foto"
             id="foto"
             accept="image/*"
             onchange="previewImage(event)"
             style="display:none;">
  </div>

  <div class="mt-3 text-center">
      <img id="previewImage"
           class="img-fluid rounded shadow"
           style="max-height:250px; display:none;">
  </div>
</div>

<div style="background:red; height:50px; margin-top:10px;">
TEST AREA
</div>

    {{-- Tombol --}}
    <div class="text-end">
      <button type="submit" class="btn btn-danger px-4">
        <i class="bi bi-save me-1"></i> Simpan
      </button>
    </div>

  </form>
</div>

{{-- Preview Script --}}
<script>
function previewImage(event) {
    const reader = new FileReader();

    reader.onload = function(){
        const output = document.getElementById('previewImage');
        output.src = reader.result;
        output.style.display = 'block';
    };

    reader.readAsDataURL(event.target.files[0]);
}
</script>

@endsection
