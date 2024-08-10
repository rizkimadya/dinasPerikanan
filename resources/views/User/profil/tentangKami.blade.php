@extends('LayoutUser.app', ['title' => 'Tentang Kami'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Tentang <span> Kami</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#tentangKami" class="btn-get-started scrollto">Lihat Tentang Kami</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="tentangKami">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! optional($tentangKami)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
    <style>
        #tentangKami img {
            width: 100%;
        }
    </style>
@endsection
