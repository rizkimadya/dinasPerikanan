@extends('LayoutUser.app', ['title' => 'Pengumuman'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Pengumuman <span> Tentang</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#pengumuman" class="btn-get-started scrollto">Lihat Pengumuman</a>
            </div>
        </div>
    </section>

    <!-- ======= Pengumuman Section ======= -->
    <section id="pengumuman" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pengumuman</h2>
                <h3>Daftar <span>Pengumuman</span></h3>
                <p> Seputan Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</p>
            </div>

            <div class="row">
                @foreach ($pengumuman as $item)
                    <div class="col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <a href="/pengumuman/detail/{{ $item->id }}">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4><a href="/pengumuman/detail/{{ $item->id }}">{{ $item->judul_pengumuman }}</a></h4>
                                <p>{!! Str::limit($item->keterangan, 200) !!}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->
@endsection
