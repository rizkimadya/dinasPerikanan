@extends('LayoutUser.app', ['title' => 'Hak & Kewajiban'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Hak & <span> Kewajiban</span></h1>
            <h2>PPID</h2>
            <div class="d-flex">
                <a href="#hakKewajiban" class="btn-get-started scrollto">Lihat Hak & Kewajiban</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="hakKewajiban">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! optional($hakKewajiban)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
