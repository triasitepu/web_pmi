@extends('layouts.admin')

@section('title', 'Kelola Relawan')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold fs-3 mb-0" style="color: #0d6efd;">
      Kelola Submenu Relawan
    </h2>

    <a href="{{ route('admin.relawan-submenu.create') }}"
       class="btn btn-primary shadow-sm px-4 py-2 fw-semibold">
      <i class="bi bi-plus-circle me-2"></i> Tambah Submenu
    </a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle table-hover">
      <thead class="text-center text-white" style="background-color: #0d6efd;">
        <tr>
          <th style="width:5%">No</th>
          <th>Nama Submenu</th>
          <th style="width:15%">Urutan</th>
          <th style="width:15%">Status</th>
          <th style="width:25%">Aksi</th>
        </tr>
      </thead>

      <tbody>
        @forelse($relawanSubmenus as $index => $submenu)
          <tr>
            <td class="text-center">{{ $index + 1 }}</td>
            <td>{{ $submenu->nama_submenu }}</td>
            <td class="text-center">{{ $submenu->urutan }}</td>
            <td class="text-center">
              @if($submenu->is_active)
                <span class="badge bg-success">Aktif</span>
              @else
                <span class="badge bg-secondary">Nonaktif</span>
              @endif
            </td>
            <td class="text-center">

              <a href="{{ route('admin.relawan-submenu.edit', $submenu->id) }}"
                 class="btn btn-warning btn-sm me-2">
                 Edit
              </a>

              <form action="{{ route('admin.relawan-submenu.destroy', $submenu->id) }}"
                    method="POST"
                    class="d-inline"
                    onsubmit="return confirm('Yakin ingin menghapus {{ $submenu->nama_submenu }}?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                  Hapus
                </button>
              </form>

            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="text-center text-muted">
              Belum ada submenu relawan.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

</div>
@endsection
