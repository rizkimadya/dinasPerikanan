@extends('LayoutUser.app', ['title' => 'Profil Pejabat'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Profil <span> Pejabat</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#pejabat" class="btn-get-started scrollto">Lihat Profil</a>
            </div>
        </div>
    </section>

    <!-- ======= Profil Section ======= -->
    <section id="pejabat" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Profil</h2>
                <h3>Profil <span>Pejabat</span></h3>
                <p> Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</p>
            </div>

            <div class="row">
                @foreach ($pejabat as $item)
                    <div class="col-md-3 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-user"></i></div>
                            <h4><a
                                    href="{{ asset('storage/profilPejabat/' . $item->profil_pdf) }}">{{ $item->nama_lengkap }}</a>
                            </h4>
                            <p class="mb-2">{{ $item->jabatan }}</p>
                            <a href="{{ asset('storage/profilPejabat/' . $item->profil_pdf) }}" target="_blank"
                                class="btn text-light" style="background: #276ccb; font-size: 13px; padding: 6px 18px">Lihat
                                Profil Pdf
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->
@endsection
