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
                <div class="col-md-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-center">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title text-center"><a href="#">Pengaduan</a></h4>
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
                <div class="col-md-4 d-flex align-items-stretch mb-5 mb-lg-0">
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
                        <a href="#" class="member">
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
                <a href="" class="btn shadow px-4 fw-semibold" style="background: #fff; color:#276ccb;">Lihat
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
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->


    <!-- ======= Pengumuman Section ======= -->
    <section id="services" class="services">
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
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">{{ $item->judul_pengumuman }}</a></h4>
                            <p>{!! Str::limit($item->keterangan, 200) !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-3">
                <a href="" class="btn shadow px-4 fw-semibold" style="background: #276ccb; color:#fff;">Lihat
                    Semua</a>
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                dolore labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

@endsection
