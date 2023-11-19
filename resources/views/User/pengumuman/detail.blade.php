@extends('LayoutUser.app', ['title' => 'Pengumuman'])

@section('content')
    <section id="heroDetail" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="text-center">
                <a target="_blank" href="{{ asset('storage/filePengumuman/' . $pengumuman->file) }}"
                    class="btn
                    btn-light">Download
                    File Pengumuman</a>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h1>{{ $pengumuman->judul_pengumuman }}</h1>
                    <p>{!! $pengumuman->keterangan !!}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Pengumuman Section ======= -->
    <section class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pengumuman</h2>
                <h3>Pengumuman<span> Lainya</span></h3>
            </div>

            <div class="row">
                @foreach ($pengumumanLain as $item)
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
