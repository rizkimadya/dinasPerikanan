@extends('LayoutUser.app', ['title' => 'Tentang'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Tentang<span> </span></h1>
            <h2>PPID</h2>
            <div class="d-flex">
                <a href="#tentang" class="btn-get-started scrollto">Lihat </a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! optional($tentang)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
