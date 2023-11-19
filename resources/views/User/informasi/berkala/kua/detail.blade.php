@extends('LayoutUser.app', ['title' => 'Kebijakan Umum'])

@section('content')
    <section id="heroDetail" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="text-center">
                @if ($kua->file_informasi_berkala === null)
                    <p></p>
                @else
                    <a href="{{ asset('storage/fileInformasiBerkala/' . $kua->file_informasi_berkala) }}" target="_blank"
                        class="btn btn-light">Lihat
                        File Informasi
                    </a>
                @endif
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h1>{{ $kua->judul_informasi_berkala }}</h1>
                    <p>{!! $kua->keterangan_informasi_berkala !!}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Pengumuman Section ======= -->
    <section class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Informasi</h2>
                <h3>Kebijakan Umum <span>APBD Lainya</span></h3>
            </div>

            <div class="row">
                @foreach ($kuaLain as $item)
                    <div class="col-md-3 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card p-md-4 p-3 text-center">
                            <h4>{{ $item->judul_informasi_berkala }}</h4>
                            <p>{!! Str::limit($item->keterangan_informasi_berkala, 100) !!}</p>
                            <a href="/kebijakan-umum/detail/{{ $item->id }}" class="btn text-light"
                                style="background: #276ccb; font-size: 14px; padding: 6px 18px">Detail
                                Informasi
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->
@endsection
