@extends('LayoutUser.app', ['title' => 'Berita'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Berita <span> Seputar</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#berita" class="btn-get-started scrollto">Lihat Berita</a>
            </div>
        </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="berita" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Berita</h2>
                <h3>Daftar <span>Berita</span></h3>
                <p>Informasi Seputan Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</p>
            </div>

            <div class="row">
                @foreach ($berita as $item)
                    <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <a href="/berita/detail/{{ $item->id }}" class="member">
                            <div class="member-img">
                                <img src="{{ asset('storage/fileBerita/' . $item->gambar) }}" class="img-fluid"
                                    alt="{{ $item->judul }}">
                            </div>
                            <div class="member-info">
                                <h4>{{ $item->judul }}</h4>
                                <span>{!! Str::limit($item->deskripsi, 64) !!}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Team Section -->
@endsection
