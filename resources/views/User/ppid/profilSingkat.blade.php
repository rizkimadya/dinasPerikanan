@extends('LayoutUser.app', ['title' => 'Profil Singkat'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Profil<span> Singkat</span></h1>
            <h2>PPID</h2>
            <div class="d-flex">
                <a href="#profilSingkat" class="btn-get-started scrollto">Lihat Profil Singkat</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="profilSingkat">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! optional($profilSingkat)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
