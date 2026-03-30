@extends('layouts.admin')

@section('title', 'Kelola Submenu Relawan')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item active text-muted">
          <i class="bi bi-file-earmark-text me-1"></i> Detail Submenu Relawan
        </li>
      </ol>
    </div>
    <div>
      <a href="{{ route('admin.relawan-submenu.create') }}" class="btn btn-danger btn-sm">
        <i class="bi bi-plus-circle me-2"></i> Tambah Submenu
      </a>
    </div>
  </div>

  {{-- Judul Halaman --}}
  <div class="mb-4">
    <h2 class="text-danger text-2xl font-bold">
      <i class="bi bi-file-earmark-text me-2"></i>Detail Submenu Relawan
    </h2>
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

  {{-- Selector Submenu --}}
  <div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
      <label for="submenuSelect" class="form-label fw-bold mb-2">
        <i class="bi bi-list-ul me-1"></i>Pilih Submenu
      </label>
      <select class="form-select form-select-lg" id="submenuSelect" onchange="ubahSubmenu(this.value)">
        <option value="">-- Pilih Submenu --</option>
        @forelse($submenus as $submenu)
          <option value="{{ $submenu->id }}">
            {{ $submenu->relawan->nama ?? 'N/A' }} - {{ $submenu->nama_submenu }}
          </option>
        @empty
          <option disabled>Tidak ada data submenu</option>
        @endforelse
      </select>
    </div>
  </div>

  {{-- Detail Submenu --}}
  <div id="detailContainer">
    @if($submenus->count() > 0)
      @php $firstSubmenu = $submenus->first(); @endphp
      <div class="row" id="submenuDetail">
        {{-- Foto --}}
        <div class="col-md-4">
          <div class="card border-0 shadow-sm">
            @if($firstSubmenu->foto)
              <img src="{{ asset('storage/' . $firstSubmenu->foto) }}" 
                   alt="{{ $firstSubmenu->nama_submenu }}" 
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
                  <td><span class="badge bg-info">{{ $firstSubmenu->relawan->nama ?? 'N/A' }}</span></td>
                </tr>
                <tr>
                  <td class="text-muted">Urutan:</td>
                  <td><strong>{{ $firstSubmenu->urutan ?? '-' }}</strong></td>
                </tr>
                <tr>
                  <td class="text-muted">Status:</td>
                  <td>
                    @if($firstSubmenu->is_active)
                      <span class="badge bg-success">Aktif</span>
                    @else
                      <span class="badge bg-secondary">Tidak Aktif</span>
                    @endif
                  </td>
                </tr>
                <tr>
                  <td class="text-muted">Dibuat:</td>
                  <td>{{ $firstSubmenu->created_at?->format('d M Y H:i') ?? '-' }}</td>
                </tr>
                <tr>
                  <td class="text-muted">Diupdate:</td>
                  <td>{{ $firstSubmenu->updated_at?->format('d M Y H:i') ?? '-' }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        {{-- Konten --}}
        <div class="col-md-8">
          <div class="card border-0 shadow-sm">
            <div class="card-header bg-danger text-white">
              <h5 class="mb-0">{{ $firstSubmenu->nama_submenu }}</h5>
            </div>
            <div class="card-body">
              <h6 class="text-muted mb-3">Konten</h6>
              <div class="border p-4 rounded bg-light">
                {!! $firstSubmenu->isi !!}
              </div>
            </div>
          </div>

          {{-- Aksi --}}
          <div class="mt-4">
            <a href="{{ route('admin.relawan-submenu.edit', $firstSubmenu->id) }}" class="btn btn-warning">
              <i class="bi bi-pencil-square me-1"></i> Edit Submenu
            </a>
            <button type="button" class="btn btn-danger" onclick="deleteSubmenu({{ $firstSubmenu->id }})">
              <i class="bi bi-trash me-1"></i> Hapus Submenu
            </button>
          </div>
        </div>
      </div>
    @else
      <div class="alert alert-info text-center py-5">
        <i class="bi bi-info-circle me-2" style="font-size: 2rem;"></i>
        <p class="mt-2">Belum ada submenu. <a href="{{ route('admin.relawan-submenu.create') }}">Buat submenu baru</a></p>
      </div>
    @endif
  </div>

</div>

<script>
@php
  $showRouteTemplate = route('admin.relawan-submenu.show', ['id' => 'SUBMENU_ID']);
  $destroyRouteTemplate = route('admin.relawan-submenu.destroy', ['id' => 'SUBMENU_ID']);
@endphp

function ubahSubmenu(submenuId) {
  if (submenuId === '') {
    location.reload();
    return;
  }
  const url = "{{ $showRouteTemplate }}".replace('SUBMENU_ID', submenuId);
  window.location.href = url;
}

function deleteSubmenu(submenuId) {
  if (confirm('Yakin ingin menghapus submenu ini?')) {
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = "{{ $destroyRouteTemplate }}".replace('SUBMENU_ID', submenuId);
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
