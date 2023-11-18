@extends('LayoutUser.app', ['title' => 'Album Kegiatan'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Album <span> Kegiatan</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#album" class="btn-get-started scrollto">Lihat Album</a>
            </div>
        </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="album" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Album</h2>
                <h3>Semua Album <span>Kegiatan</span></h3>
                <p>Dinas Kelautan & Perikanan Sulawesi Selatan</p>
            </div>


            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($album as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        @php
                            $images = json_decode($item->gambar);
                            if (is_array($images) && count($images) > 0) {
                                $firstImage = $images[0];
                            }
                        @endphp
                        <img src="/{{ $firstImage }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $item->nama_kegiatan }}</h4>
                            <a href="/{{ $firstImage }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="{{ $item->nama_kegiatan }}"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
