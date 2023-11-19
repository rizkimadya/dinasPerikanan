@extends('LayoutUser.app', ['title' => 'Maklumat & Pelayanan'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Maklumat & <span> Pelayanan</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#maklumatPelayanan" class="btn-get-started scrollto">Lihat Maklumat & Pelayanan</a>
            </div>
        </div>
    </section>

    <section class="section-bg" id="maklumatPelayanan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{!! optional($maklumatPelayanan)->isi !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
