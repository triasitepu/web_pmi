@extends('layouts.main')

@section('content')
<title>Profil - Palang Merah Indonesia Magetan</title>

<section class="breadcrumbs-page-wrap">
  <div class="bg-fixed pos-rel breadcrumbs-page"
       style="background-image: url('{{ asset('images/bg.jpg') }}');">
    <div class="container text-center text-white">
      <h1 class="fw-bold">Tentang Kami</h1>
      <nav aria-label="breadcrumb" class="breadcrumb-wrap d-flex justify-content-center">
        <ol class="breadcrumb bg-transparent mb-0">
          <li class="breadcrumb-item">
            <a href="{{ route('home') }}" class="text-white">Home</a>
          </li>
          <li class="breadcrumb-item active text-light">Profil</li>
        </ol>
      </nav>
    </div>
  </div>
</section>

<main id="body-content">
  <section class="wide-tb-80 bg-light">
    <div class="container">

@forelse($submenus as $index => $submenu)

<div class="row align-items-center g-5 mb-5">

    @if($index % 2 == 0)
        {{-- IMAGE KIRI --}}
        <div class="col-lg-6">
            <div class="overflow-hidden rounded-4 shadow-lg">
                <img src="{{ asset('storage/' . $submenu->foto) }}"
                     class="img-fluid w-100"
                     style="object-fit:cover;">
            </div>
        </div>

        {{-- TEXT KANAN --}}
        <div class="col-lg-6">
            <h3 class="fw-bold text-danger mb-3">
                {{ $submenu->judul }}
            </h3>
            <div class="text-secondary fs-5 lh-lg">
                {!! $submenu->isi !!}
            </div>
        </div>

    @else
        {{-- TEXT KIRI --}}
        <div class="col-lg-6 order-lg-1 order-2">
            <h3 class="fw-bold text-danger mb-3">
                {{ $submenu->judul }}
            </h3>
            <div class="text-secondary fs-5 lh-lg">
                {!! $submenu->isi !!}
            </div>
        </div>

        {{-- IMAGE KANAN --}}
        <div class="col-lg-6 order-lg-2 order-1">
            <div class="overflow-hidden rounded-4 shadow-lg">
                <img src="{{ asset('storage/' . $submenu->foto) }}"
                     class="img-fluid w-100"
                     style="object-fit:cover;">
            </div>
        </div>
    @endif

</div>

@empty

        <div class="text-center text-muted py-5">
          Konten profil belum tersedia.
        </div>
      @endforelse

    </div>
  </section>
</main>
@endsection
