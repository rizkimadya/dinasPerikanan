@extends('LayoutUser.app', ['title' => 'Struktur Organisasi'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Struktur <span> Organisasi</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#strukturOrganisasi" class="btn-get-started scrollto">Lihat Struktur Organisasi</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="strukturOrganisasi">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img width="100%" loading="lazy" src="https://dkpsulsel.my.id/storage/fileCkeditor/STRUKTUR%20ORGANISASI_1724251420%201_1724610753.png" alt="">
                </div>
                <div class="col-12">
                    <p>{!! optional($strukturOrganisasi)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
