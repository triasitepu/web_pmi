@extends('layouts.admin')

@section('title', 'Kelola Konten Profil PMI')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  {{-- Breadcrumb --}}
  <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
    <div>
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
          <a href="{{ route('admin.profil-pmi.index', $menu->id) }}" class="text-danger fw-semibold text-decoration-none">
            <i class="bi bi-arrow-left-circle me-1"></i> Daftar Konten Profil PMI
          </a>
        </li>
        <li class="breadcrumb-item active text-muted" aria-current="page">
          Kelola Konten Profil PMI
        </li>
      </ol>
    </div>
  </div>

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-danger text-2xl font-bold">
      Kelola Konten Profil PMI
    </h2>
  </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @elseif(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
  @endif

  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-danger text-center">
        <tr>
          <th style="width:5%">No</th>
          <th>Judul</th>
          <th style="width:30%">Isi</th>
          <th>Foto</th>
          <th style="width:25%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center">1</td>
          <td>{{ $submenu->judul }}</td>
          <td>
            {{ \Illuminate\Support\Str::limit(strip_tags($submenu->isi), 200, '...') }}
          </td>
          <td class="text-center">
            @if($submenu->foto)
              <img src="{{ asset('storage/' . $submenu->foto) }}" 
                   alt="Foto" 
                   class="img-fluid rounded" 
                   style="max-height:80px;">
            @else
              <span class="text-muted">-</span>
            @endif
          </td>
          <td class="text-center">
            <a href="{{ route('admin.submenu.edit', [$menu->id, $submenu->id_submenu]) }}" 
               class="btn btn-warning btn-sm me-1">
              <i class="bi bi-pencil-square"></i> Edit
            </a>

            <form action="{{ route('admin.submenu.destroy', [$menu->id, $submenu->id_submenu]) }}" 
                  method="POST" 
                  class="d-inline"
                  onsubmit="return confirm('Yakin ingin menghapus konten ini?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">
                <i class="bi bi-trash"></i> Hapus
              </button>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>
@endsection
