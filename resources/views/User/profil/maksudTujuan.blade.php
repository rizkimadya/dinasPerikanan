@extends('LayoutUser.app', ['title' => 'Maksud & Tujuan'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Maksud & <span> Tujuan</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#maksudTujuan" class="btn-get-started scrollto">Lihat Maksud & Tujuan</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="maksudTujuan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! optional($maksudTujuan)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
