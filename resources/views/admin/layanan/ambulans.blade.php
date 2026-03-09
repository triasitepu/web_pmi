@extends('layouts.main')

@section('content')
    <title>Layanan Ambulans - Palang Merah Indonesia Kabupaten Magetan</title>

    <!-- Breadcrumbs -->
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page"
             style="background-image: url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-position: center;">
            <div class="container text-center text-white py-5">
                <h1 class="display-4 fw-bold">Layanan Ambulans</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap justify-content-center">
                    <ol class="breadcrumb bg-transparent p-0">
                        <li class="breadcrumb-item">
                            <a href="/" class="text-white text-decoration-none">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Layanan Ambulans</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <main id="body-content">
        <section class="wide-tb-50 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <!-- Deskripsi Umum -->
                        <div class="text-center mb-5">
                            <h2 class="mb-4 fw-bold text-danger">Pelayanan Ambulans PMI Magetan</h2>
                            <p class="lead text-muted">
                                Sebagai organisasi kemanusiaan, PMI Kabupaten Magetan berkomitmen memberikan pelayanan darurat kesehatan 24 jam, termasuk pertolongan pertama dan evakuasi korban kecelakaan atau darurat medis ke fasilitas kesehatan terdekat.
                            </p>
                        </div>

                        <div class="mb-5">
                            <p>
                                PMI bekerja sama dengan puskesmas, rumah sakit, dan penyedia layanan ambulans lainnya. Tim ambulans PMI terdiri dari relawan terlatih dengan sertifikat Pertolongan Pertama minimal 40 jam, berlatar belakang medis, dan telah bergabung minimal satu tahun.
                            </p>
                            <p>
                                Tujuan utama: Menekan risiko cedera parah dan angka kematian melalui respons cepat, pertolongan pertama, serta transportasi aman ke fasilitas kesehatan.
                            </p>
                            <p class="text-center fw-bold text-danger mt-4 fs-5">
                                Layanan ambulans PMI Magetan <span class="badge bg-success">GRATIS</span> untuk masyarakat yang membutuhkan!
                            </p>
                        </div>

                        <!-- Dua Opsi Dinamis -->
                        <div class="row g-4">
                            <!-- Opsi 1: Panggil Langsung -->
                            <div class="col-md-6">
                                <div class="card shadow-lg border-0 h-100 text-center p-4 bg-white rounded-4 hover-shadow">
                                    <div class="mb-3">
                                        <i class="bi bi-telephone-fill display-2 text-danger"></i>
                                    </div>
                                    <h4 class="fw-bold mb-3">Panggil Ambulans Sekarang</h4>
                                    <p class="text-muted mb-4">
                                        Hubungi langsung untuk keadaan darurat. Siap 24 jam!
                                    </p>
                                    <a href="tel:+6282278772257" 
                                       class="btn btn-danger btn-lg w-100 py-3 fw-bold">
                                        <i class="bi bi-telephone me-2"></i> Telepon: 0822-7877-2257
                                    </a>
                                </div>
                            </div>

                            <!-- Opsi 2: WhatsApp -->
                            <div class="col-md-6">
                                <div class="card shadow-lg border-0 h-100 text-center p-4 bg-white rounded-4 hover-shadow">
                                    <div class="mb-3">
                                        <i class="bi bi-whatsapp display-2 text-success"></i>
                                    </div>
                                    <h4 class="fw-bold mb-3">Kirim Permintaan via WhatsApp</h4>
                                    <p class="text-muted mb-4">
                                        Kirim pesan detail lokasi & kondisi pasien. Petugas akan segera merespons.
                                    </p>
                                    <a href="https://wa.me/6282278772257?text=Halo%20Petugas%20PMI%20Magetan,%20saya%20membutuhkan%20ambulans%20darurat.%20Lokasi:%20[isi%20lokasi%20Anda].%20Kondisi:%20[jelaskan%20singkat].%20Terima%20kasih!" 
                                       target="_blank" 
                                       class="btn btn-success btn-lg w-100 py-3 fw-bold">
                                        <i class="bi bi-whatsapp me-2"></i> Kirim ke WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Tambahkan CSS tambahan untuk animasi card -->
    <style>
        .hover-shadow:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease-in-out;
            box-shadow: 0 1rem 2rem rgba(0,0,0,0.25);
        }
    </style>
@endsection
@extends('layouts.main')