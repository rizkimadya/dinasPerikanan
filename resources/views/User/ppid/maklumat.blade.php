@extends('LayoutUser.app', ['title' => 'Maklumat'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Maklumat<span> </span></h1>
            <h2>PPID</h2>
            <div class="d-flex">
                <a href="#maklumat" class="btn-get-started scrollto">Lihat Maklumat</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="maklumat">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! $maklumat->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
