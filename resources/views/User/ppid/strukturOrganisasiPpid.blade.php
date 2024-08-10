@extends('LayoutUser.app', ['title' => 'Struktur Organisasi PPID'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Struktur Organisasi <span> PPID</span></h1>
            <h2>PPID</h2>
            <div class="d-flex">
                <a href="#strukturOrganisasiPpid" class="btn-get-started scrollto">Lihat Struktur Organisasi PPID</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="strukturOrganisasiPpid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! optional($strukturOrganisasiPpid)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
