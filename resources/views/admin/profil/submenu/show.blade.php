@extends('layouts.admin')

@section('title', 'Detail Submenu Relawan')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.profil-submenu.index') }}" 
             class="text-danger fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left-circle me-1"></i> Daftar Submenu
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
      <i class="bi bi-file-earmark-text me-2"></i>{{ $submenu->nama_submenu }}
    </h2>
    <div>
      <a href="{{ route('admin.profil-submenu.edit', $submenu->id) }}" 
         class="btn btn-warning btn-sm">
        <i class="bi bi-pencil-square me-1"></i> Edit
      </a>
      <form action="{{ route('admin.profil-submenu.destroy', $submenu->id) }}" 
            method="POST" 
            class="d-inline"
            onsubmit="return confirm('Yakin ingin menghapus submenu ini?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">
          <i class="bi bi-trash me-1"></i> Hapus
        </button>
      </form>
    </div>
  </div>

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

  {{-- Detail Submenu --}}
  <div class="row">
    {{-- Foto --}}
    <div class="col-md-4">
      <div class="card border-0 shadow-sm">
        @if($submenu->foto)
          <<img src="{{ url('storage/' . $submenu->foto) }}"
               alt="{{ $submenu->nama_submenu }}" 
               class="card-img-top" 
               style="height: 300px; object-fit: cover;">
        @else
          <div class="card-img-top bg-light d-flex align-items-center justify-content-center" 
               style="height: 300px;">
            <div class="text-center text-muted">
              <i class="bi bi-image" style="font-size: 3rem;"></i>
              <p class="mt-2">Tidak ada foto</p>
            </div>
          </div>
        @endif
        <div class="card-body">
          <h6 class="text-muted mb-2">Informasi</h6>
          <table class="table table-sm table-borderless">
            <tr>
              <td class="text-muted" style="width: 40%;">Relawan:</td>
              <td><span class="badge bg-info">{{ $submenu->relawan->nama ?? 'N/A' }}</span></td>
            </tr>
            <tr>
              <td class="text-muted">Urutan:</td>
              <td><strong>{{ $submenu->urutan ?? '-' }}</strong></td>
            </tr>
            <tr>
              <td class="text-muted">Status:</td>
              <td>
                @if($submenu->is_active)
                  <span class="badge bg-success">Aktif</span>
                @else
                  <span class="badge bg-secondary">Tidak Aktif</span>
                @endif
              </td>
            </tr>
            <tr>
              <td class="text-muted">Dibuat:</td>
              <td>{{ $submenu->created_at->format('d M Y H:i') ?? '-' }}</td>
            </tr>
            <tr>
              <td class="text-muted">Diupdate:</td>
              <td>{{ $submenu->updated_at->format('d M Y H:i') ?? '-' }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    {{-- Konten --}}
    <div class="col-md-8">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h6 class="text-muted mb-3">Konten</h6>
          <div class="border p-4 rounded bg-light">
            {!! $submenu->isi !!}
          </div>
        </div>
      </div>

      
</div>

<script>
function editSubmenu() {
  window.location.href = "{{ route('admin.profil-submenu.edit', $submenu->id) }}";
}

function deleteSubmenu() {
  if (confirm('Yakin ingin menghapus submenu ini?')) {
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = "{{ route('admin.profil-submenu.destroy', $submenu->id) }}";
    form.innerHTML = `
      @csrf
      @method('DELETE')
    `;
    document.body.appendChild(form);
    form.submit();
  }
}
</script>
@endsection
