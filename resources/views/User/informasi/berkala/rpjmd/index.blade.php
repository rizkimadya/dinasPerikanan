@extends('LayoutUser.app', ['title' => 'Rencana Pembangunan Jangka Menengah Daerah'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Rencana Pembangunan <span>Jangka Menengah Daerah </span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#rpjmd" class="btn-get-started scrollto">Lihat Informasi</a>
            </div>
        </div>
    </section>

    <!-- ======= Pengumuman Section ======= -->
    <section id="rpjmd" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Informasi</h2>
                <h3>Rencana <span>Pembangunan Lainnya</span></h3>
                <p> Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</p>
            </div>

            <div class="row">
                @foreach ($rpjmd as $item)
                    <div class="col-md-3 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card p-md-4 p-3 text-center">
                            <h4>{{ $item->judul_informasi_berkala }}</h4>
                            <p>{!! Str::limit($item->keterangan_informasi_berkala, 100) !!}</p>
                            <a href="/rencana-pembangunan/detail/{{ $item->id }}" class="btn text-light"
                                style="background: #276ccb; font-size: 14px; padding: 6px 18px">Detail
                                Informasi
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->
@endsection
