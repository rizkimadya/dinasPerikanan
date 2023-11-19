@extends('LayoutUser.app', ['title' => 'Visi & Misi'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Visi & <span> Misi</span></h1>
            <h2>PPID</h2>
            <div class="d-flex">
                <a href="#visiMisi" class="btn-get-started scrollto">Lihat Visi & Misi</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="visiMisi">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! optional($visiMisi)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
