@extends('layouts.main')

@section('content')

{{-- ----- SECTION BANNER ----- --}}
<section class="main-banner home-style-second">
    <div class="slides-wrap">
        <div class="owl-carousel owl-theme">
            <div class="owl-slide d-flex align-items-center cover"
                 style="background-image: url('{{ asset('images/bg.jpg') }}');">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-start no-gutters">
                        <div class="col-10 col-md-6 static">
                            <div class="owl-slide-text">
                                <h3 class="owl-slide-animated owl-slide-title">Selamat Datang</h3>
                                <h1 class="owl-slide-animated owl-slide-subtitle">
                                    Palang Merah Indonesia Magetan
                                </h1>
                                <div class="owl-slide-animated owl-slide-cta">
                                    <a class="btn btn-primary me-3" href="{{ route('about') }}" role="button">
                                        Selengkapnya
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ----- SECTION INFORMASI ----- --}}
<section class="bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 order-lg-last">

                <div class="home-second-donation-form">
                    <div class="funds-committed">
                        <div class="gift-icon">
                            <i class="icofont-people"></i>
                        </div>
                        <small>
                            <strong style="font-size: 24px;">Informasi</strong><br>
                        </small>
                    </div>

                    <div class="form-style">
                        <a class="mb-4 btn btn-block btn-danger text-left">
                            <i class="icofont-blood-drop"></i> Rincian Stock Darah
                        </a>
                        <a class="mb-4 btn btn-block btn-danger text-left">
                            <i class="icofont-blood"></i> Informasi Kebutuhan Darah
                        </a>
                        <a class="mb-4 btn btn-block btn-danger text-left">
                            <i class="icofont-clock-time"></i> Jadwal Donor Darah
                        </a>
                        <a class="mb-4 btn btn-block btn-danger text-left">
                            <i class="icofont-medical-sign"></i> Prosedur Permintaan Darah
                        </a>
                        <a class="mb-4 btn btn-block btn-danger text-left">
                            <i class="icofont-law-document"></i> Prosedur Donor Darah
                        </a>
                    </div>

                </div>

            </div>

            <div class="col-lg-7 col-md-12">
                <h1 class="heading-main">Profil PMI Magetan</h1>
                <p>
                   PMI Magetan tidak terlepas dari misi sosial dan kemanusiaan yang harus diembannya. Palang Merah Indonesia merupakan salah satu Perhimpunan sosial kemanusiaan, sejak tahun 1945. Pada saat itu, PMI Magetan berstatus PMI Cabang. Dalam menjalankan misi sosial kemanusiaannya, PMI Magetan telah melakukan bantuan penanggulangan bencana baik didalam kota maupun dikota-kota lainnya di Indonesia.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- ----- SECTION LAYANAN ----- --}}
<section class="wide-tb-100 pb-5 bg-green">
    <div class="container">
        <h1 class="heading-main" style="color: #fff;">Layanan Kami</h1>
    </div>
</section>

<section class="pt-4 pb-4 bg-light">
    <div class="container">
        <div class="row text-center">

            {{-- Ambulans --}}
            <div class="col-sm-6 col-lg-3 mb-4">
                <img src="{{ asset('images/-sxPkWOP45VIxLWC3Hw65epUphvUoVPvQ.jpg') }}"
                     class="img-fluid mb-2" alt="Ambulans">
                <h5>Ambulans</h5>
                <p>Pesan ambulan sekarang, pertolongan akan segera datang</p>
                <a class="btn btn-sm btn-primary">Panggil Ambulans</a>
            </div>

            {{-- Donor Darah --}}
            <div class="col-sm-6 col-lg-3 mb-4">
                <img src="{{ asset('images/-1Bm9mITIpIYTyKaxZDhnm0wdr0v8VKlb.jpg') }}"
                     class="img-fluid mb-2" alt="Donor Darah">
                <h5>Donor Darah</h5>
                <p>Sumbangkan sebagian darah kepada yang membutuhkan</p>
                <a class="btn btn-sm btn-primary">Ayo Donor Darah</a>
            </div>

            {{-- Diklat --}}
            <div class="col-sm-6 col-lg-3 mb-4">
                <img src="{{ asset('images/-MPCtabAhhBFbpw0tF1zHqk4h1K1J8xjG.jpg') }}"
                     class="img-fluid mb-2" alt="Diklat">
                <h5>Diklat</h5>
                <p>Pendidikan dan pelatihan PMI tersertifikasi</p>
                <a class="btn btn-sm btn-primary">Bergabung</a>
            </div>

            {{-- Relawan --}}
            <div class="col-sm-6 col-lg-3 mb-4">
                <img src="{{ asset('images/-AzARsp09rjsIhr2RqRBDqX39UtDG53C2.jpg') }}"
                     class="img-fluid mb-2" alt="Relawan">
                <h5>Relawan</h5>
                <p>Ayo jadi relawan PMI Magetan, bersama bantu sesama</p>
                <a class="btn btn-sm btn-primary">Selengkapnya</a>
            </div>

        </div>
    </div>
</section>

{{-- ----- SECTION TESTIMONI / QUOTE ----- --}}
<section class="wide-tb-100 bg-scroll bg-img-2 pos-rel callout-style-1">
    <div class="bg-overlay black opacity-50"></div>
    <div class="container">
        <h1 class="heading-main light-mode orange">
            <small>H. Rustam Efendi - Ketua PMI Provinsi Magetan</small>
            Mengabdi di PMI ada tiga hal...
        </h1>
    </div>
</section>

{{-- ----- SECTION MITRA ----- --}}
 <section class="wide-tb-100 pt-5 shadow">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <h1 class="heading-main"> Mitra Kami </h1>
      </div>

      <div class="col-sm-12">
        <div class="owl-carousel owl-theme" id="home-clients">

          <div class="item">
            <div class="clients-logo">
              <a>
                <img src="{{ asset('images/bmkg.png') }}" alt="Magetan">
              </a>
            </div>
          </div>

          <div class="item">
            <div class="clients-logo">
              <a>
               <img src="{{ asset('images/bmkg.png') }}" width="200">
              </a>
            </div>
          </div>

          <div class="item">
            <div class="clients-logo">
              <a>
                <img src="{{ asset('images/bpbd.png') }}" alt="BPBD">
              </a>
            </div>
          </div>

          <div class="item">
            <div class="clients-logo">
              <a>
                <img src="{{ asset('images/bnpb.png') }}" alt="BNPB">
              </a>
            </div>
          </div>

          <div class="item">
            <div class="clients-logo">
              <a>
                <img src="{{ asset('images/icrc.png') }}" alt="ICRC">
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


@endsection
