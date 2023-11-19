@extends('LayoutUser.app', ['title' => 'Tugas & Fungsi'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Tugas & <span> Fungsi</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#tugasFungsi" class="btn-get-started scrollto">Lihat Tugas & Fungsi</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="tugasFungsi">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! optional($tugasFungsi)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
