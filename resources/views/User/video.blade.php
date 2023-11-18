@extends('LayoutUser.app', ['title' => 'Video Kegiatan'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Video <span> Kegiatan</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#video" class="btn-get-started scrollto">Lihat Video</a>
            </div>
        </div>
    </section>

    <!-- ======= Team Section ======= -->
    <section id="video" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Video</h2>
                <h3>Semua Video <span>Kegiatan</span></h3>
                <p>Dinas Kelautan & Perikanan Sulawesi Selatan</p>
            </div>

            <div class="row">
                @foreach ($video as $item)
                    <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ $item->link_video }}" target="_blank" class="member">
                            <div class="member-img">
                                <iframe width="100%" src="{{ $item->link_video }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="member-info">
                                <h4>{{ $item->nama_kegiatan }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Team Section -->
@endsection
