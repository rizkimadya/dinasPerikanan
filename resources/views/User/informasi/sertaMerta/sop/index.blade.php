@extends('LayoutUser.app', ['title' => 'Standar Operasional Prosedur'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Standar Operasional <span>Prosedur</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#sop" class="btn-get-started scrollto">Lihat Informasi</a>
            </div>
        </div>
    </section>

    <!-- ======= Pengumuman Section ======= -->
    <section id="sop" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Informasi</h2>
                <h3>Standar Operasional <span>Prosedur</span></h3>
                <p>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</p>
            </div>

            <!-- Search Form -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <form action="{{ url('/standar-operasional-prosedur') }}/#sop" method="GET">
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
                @foreach ($sop as $item)
                    <div class="col-md-3 mb-3 mb-md-4 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card p-md-4 p-3 text-center w-100">
                            <h4>{{ $item->judul_serta_merta }}</h4>
                            <p>{!! Str::limit($item->keterangan_serta_merta, 100) !!}</p>
                            <a href="/standar-operasional-prosedur/detail/{{ $item->id }}" class="btn text-light"
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
