@extends('LayoutUser.app', ['title' => 'Beranda'])

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Beranda <span> Website</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#featured-services" class="btn-get-started scrollto">Layanan</a>
            </div>
        </div>
    </section><!-- End Hero -->
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Layanan</h2>

            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 d-flex align-items-stretch mb-5 mb-lg-0" style="cursor: pointer;">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-center">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title text-center"><a>Pengaduan</a></h4>
                            <p class="description text-center">Fitur Layanan Pengaduan kepada Dinas Kelautan & Perikanan</p>
                        </div>
                    </div>
                </div>
                <!-- Modal Pengaduan -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pengaduan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/pengaduan') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row" style="max-height: 62vh; overflow: auto">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="file_pengaduan" class="form-label">File Pengaduan
                                                    <span class="text-danger">PDF</span></label>
                                                <input type="file" class="form-control" name="file_pengaduan"
                                                    id="file_pengaduan" accept=".pdf">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
                                                <input type="text" class="form-control" name="nama_pelapor"
                                                    id="nama_pelapor" placeholder="Masukkan Nama Pelapor">
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat Pelapor</label>
                                                <input type="text" class="form-control" name="alamat" id="alamat"
                                                    placeholder="Masukkan Alamat Pelapor">
                                            </div>
                                            <div class="mb-3">
                                                <label for="no_telp" class="form-label">Nomor Telpon Pelapor</label>
                                                <input type="number" class="form-control" name="no_telp" id="no_telp"
                                                    placeholder="Masukkan Nomor Telpon Pelapor">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="tgl_kejadian" class="form-label">Tanggal Kejadian</label>
                                                <input type="date" class="form-control" name="tgl_kejadian"
                                                    id="tgl_kejadian" placeholder="Masukkan Tanggal Kejadian">
                                            </div>
                                            <div class="mb-3">
                                                <label for="lokasi_kejadian" class="form-label">Lokasi Kejadian</label>
                                                <input type="text" class="form-control" name="lokasi_kejadian"
                                                    id="lokasi_kejadian" placeholder="Masukkan Lokasi Kejadian">
                                            </div>
                                            <div class="mb-3">
                                                <label for="jenis_keluhan" class="form-label">Jenis Keluhan</label>
                                                <input type="text" class="form-control" name="jenis_keluhan"
                                                    id="jenis_keluhan" placeholder="Masukkan Jenis Keluhan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="detail_keluhan" class="form-label">Detail Keluhan</label>
                                                <input type="text" class="form-control" name="detail_keluhan"
                                                    id="detail_keluhan" placeholder="Masukkan Detail Keluhan">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="deskripsi_kejadian" class="form-label">Deskripsi </label>
                                            <textarea name="deskripsi_kejadian" id="editor" style="height: 100px; color:#000;"></textarea>
                                        </div>

                                    </div>
                                    <div class="mt-5 justify-content-center d-flex gap-2">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-stretch mb-5 mb-lg-0" style="cursor: pointer;">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div data-bs-toggle="modal" data-bs-target="#exampleModal2" class="text-center">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title text-center"><a href="#">Survei</a></h4>
                            <p class="description text-center">Fitur Layanan Survei Kepuasan kepada Dinas Kelautan &
                                Perikanan</p>
                        </div>
                    </div>
                </div>
                <!-- Modal Suevei Kepuasan -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Survei Kepuasan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/survei') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row" style="max-height: 62vh; overflow: auto">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="nama_responden" class="form-label">Nama
                                                </label>
                                                <input type="text" class="form-control" name="nama_responden"
                                                    id="nama" placeholder="Masukkan Nama ">
                                            </div>
                                            <div class="mb-3">
                                                <label for="no_telp" class="form-label">No
                                                    Telp/Wa</label>
                                                <input type="number" class="form-control" name="no_telp" id="no_telp"
                                                    placeholder="Masukkan No Telp/Wa">
                                            </div>
                                            <div class="mb-3">
                                                <label for="penilaian_kepuasan" class="form-label">Penilaian 1-100</label>
                                                <input type="range" class="form-range" name="penilaian_kepuasan"
                                                    id="penilaian_kepuasan" placeholder="Masukkan Penilaian 1-100"
                                                    min="1" max="100">
                                                <output for="penilaian_kepuasan"
                                                    id="output_penilaian_kepuasan">50</output>
                                            </div>

                                            <script>
                                                var slider = document.getElementById("penilaian_kepuasan");
                                                var output = document.getElementById("output_penilaian_kepuasan");
                                                output.innerHTML = slider.value;

                                                slider.oninput = function() {
                                                    output.innerHTML = this.value;
                                                }
                                            </script>

                                        </div>

                                        <div class="mb-3">
                                            <label for="keterangan" class="form-label">Keterangan </label>
                                            <textarea name="keterangan" id="editor2" style="height: 100px; color:#000;"></textarea>
                                        </div>

                                    </div>
                                    <div class="mt-5 justify-content-center d-flex gap-2">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Kirim Suvei</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Berita</h2>
                <h3>Berita <span>Terbaru</span></h3>
                <p>Informasi Seputan Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</p>
            </div>

            <div class="row">
                @foreach ($berita as $item)
                    <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <a href="/berita/detail/{{ $item->id }}" class="member">
                            <div class="member-img">
                                <img src="{{ asset('storage/fileBerita/' . $item->gambar) }}" class="img-fluid"
                                    alt="{{ $item->judul }}">
                            </div>
                            <div class="member-info">
                                <h4>{{ $item->judul }}</h4>
                                <span>{!! Str::limit($item->deskripsi, 64) !!}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-3">
                <a href="{{ url('/berita') }}" class="btn shadow px-4 fw-semibold"
                    style="background: #fff; color:#276ccb;">Lihat
                    Semua</a>
            </div>
        </div>
    </section><!-- End Team Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $jumpengaduan }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Pengaduan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $jumsurvei }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Survei Kepuasan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-book"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $jumberita }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Berita</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{ $jumpengumuman }}"
                            data-purecounter-duration="1" class="purecounter"></span>
                        <p>Jumlah Pengumuman</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->


    <!-- ======= Pengumuman Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pengumuman</h2>
                <h3>Daftar Pengumuman <span>Terbaru</span></h3>
                <p>Pengumuman Seputan Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</p>
            </div>

            <div class="row">
                @foreach ($pengumuman as $item)
                    <div class="col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <a href="/pengumuman/detail/{{ $item->id }}">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4><a href="/pengumuman/detail/{{ $item->id }}">{{ $item->judul_pengumuman }}</a>
                                </h4>
                                <p>{!! Str::limit($item->keterangan, 200) !!}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-3">
                <a href="{{ url('/pengumuman') }}" class="btn shadow px-4 fw-semibold"
                    style="background: #276ccb; color:#fff;">Lihat
                    Semua</a>
            </div>
        </div>
    </section><!-- End Services Section -->
@endsection
