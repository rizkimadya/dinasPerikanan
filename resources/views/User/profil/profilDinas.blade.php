@extends('LayoutUser.app', ['title' => 'Profil Kami'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Profil <span> Kami</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#profil" class="btn-get-started scrollto">Lihat Profil</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="profil">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! optional($profil)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
