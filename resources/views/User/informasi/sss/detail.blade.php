@extends('LayoutUser.app', ['title' => 'Sedia Setiap Saat'])

@section('content')
    <section id="heroDetail" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="text-center">
                @if ($sss->file_sss === null)
                    <p></p>
                @else
                    <a href="{{ asset('storage/fileInformasiSss/' . $sss->file_sss) }}" target="_blank"
                        class="btn btn-light">Lihat
                        File
                    </a>
                @endif
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h1>{{ $sss->judul_sss }}</h1>
                    <h5>{{ $sss->kategori_sss }}</h5>
                    <p>{!! $sss->keterangan_sss !!}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Pengumuman Section ======= -->
    <section class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Informasi</h2>
                <h3>Sedia Setiap Saat<span> Lainya</span></h3>
            </div>

            <div class="row">
                @foreach ($sssLain as $item)
                    <div class="col-md-3 mb-3 mb-md-4 d-flex" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card p-md-4 p-3 text-center w-100">
                            <h4>{{ $item->judul_sss }}</h4>
                            <p>{{ $item->kategori_sss }}</p>
                            <a href="/sedia-setiap-saat/detail/{{ $item->id }}" class="btn text-light"
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
