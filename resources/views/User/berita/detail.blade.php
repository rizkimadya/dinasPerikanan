@extends('LayoutUser.app', ['title' => 'Berita'])

@section('content')
    <section id="heroDetail" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">Berita Tentang</p>
                    <h1 style="color: #276ccb;">{{ $berita->judul }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('storage/fileBerita/' . $berita->gambar) }}" width="100%%"
                        alt="{{ $berita->judul }}">
                </div>
                <div class="col-md-9">
                    <p>{!! $berita->deskripsi !!}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="berita" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Berita</h2>
                <h3>Daftar <span>Berita Lainnya</span></h3>
            </div>

            <div class="row">
                @foreach ($beritaLainnya as $item)
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
