@extends('LayoutUser.app', ['title' => 'Daftar Informasi'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Daftar <span>Informasi</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#di" class="btn-get-started scrollto">Lihat Informasi</a>
            </div>
        </div>
    </section>

    <!-- ======= Pengumuman Section ======= -->
    <section id="di" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Informasi</h2>
                <h3>Daftar <span>Informasi</span></h3>
                <p>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</p>
            </div>

              <!-- Search Form -->
              <div class="row mb-4">
                <div class="col-md-12">
                    <form action="{{ url('/daftar-informasi') }}/#di" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari Judul ..."
                                value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                @foreach ($di as $item)
                    <div class="col-md-3 mb-3 mb-md-4 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card p-md-4 p-3 text-center w-100">
                            <h4>{{ $item->judul_serta_merta }}</h4>
                            <p>{!! Str::limit($item->keterangan_serta_merta, 100) !!}</p>
                            <a href="/daftar-informasi/detail/{{ $item->id }}" class="btn text-light"
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
