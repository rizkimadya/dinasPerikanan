@extends('LayoutUser.app', ['title' => 'Kontak'])

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1> Kontak <span> Website</span></h1>
            <h2>Dinas Kelautan & Perikanan Provinsi Sulawesi Selatan</h2>
            <div class="d-flex">
                <a href="#contact" class="btn-get-started scrollto">Kontak</a>
            </div>
        </div>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontak</h2>
                <h3><span>Kontak Kami</span></h3>
                <p></p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Alamat Kami</h3>
                        <p>JL. Bajiminasa No. 12 Makassar Sulawesi Selatan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Kami</h3>
                        <p>Sulseldkp@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Telpon Kami</h3>
                        <p>0411873680</p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.61617235714!2d119.40704167447306!3d-5.1652868521681485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbf1d6688fc0995%3A0x384ab4dece88cb5a!2sDinas%20Kelautan%20dan%20Perikanan%20Provinsi%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1700192586870!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 382px;" allowfullscreen loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="{{ url('/kontak') }}" method="POST" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="nama" class="form-control" id="nama"
                                    placeholder="Nama Anda" required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email Anda" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit">Kirim Pesan</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Lokasi</h2>
                <h3>Lokasi <span>Dinas</span></h3>
                <p>List Lokasi Dinas Kelautan & Perikanan Di Provinsi Sulawesi Selatan</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12">
                    <ul class="faq-list">
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Lokasi Dinas Kelautan &
                                Perikanan Kabupaten Bantaeng <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.141308232267!2d119.94260097447767!3d-5.5460570551179025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbeb2c7b5fdb0d9%3A0xa5955803cb901862!2sDinas%20Perikanan%2C%20dan%20Kelautan!5e0!3m2!1sid!2sid!4v1700207591468!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq2">Lokasi Dinas Kelautan &
                                Perikanan Kabupaten Barru <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.008034541072!2d119.61605277446435!3d-4.409592547015647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe27f1c8f9ddcb%3A0xb6d61ee8b018db4d!2sKantor%20Dinas%20kelautan%20dan%20perikanan!5e0!3m2!1sid!2sid!4v1700207786851!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq3">Lokasi Dinas
                                Kelautan &
                                Perikanan Kabupaten Bone <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509139.47037495475!2d119.64320303203486!3d-4.47557778480999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbde571917e9da9%3A0xe829b49210a89ad0!2sDinas%20Kelautan%20Dan%20Perikanan%20Bone!5e0!3m2!1sid!2sid!4v1700207858807!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq4">Lokasi Dinas
                                Kelautan &
                                Perikanan Kabupaten Bulukumba <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127080.10819805153!2d120.11191013932066!3d-5.529379265224636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbbff9854cdf26b%3A0x5888ccda65bad25a!2sKantor%20Dinas%20Perikanan%20Bulukumba!5e0!3m2!1sid!2sid!4v1700208097751!5m2!1sid!2sid"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq5">Lokasi Dinas
                                Peternakan &
                                Perikanan Kabupaten Enrekang <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1019109.9877459231!2d119.03403294488982!3d-3.8319757800620535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d944062a3f8f399%3A0x679efe73c8dd747c!2sDinas%20Peternakan%20dan%20Perikanan%20Kab.%20Enrekang!5e0!3m2!1sid!2sid!4v1700208544978!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq6">Lokasi Dinas
                                Perikanan Kabupaten Gowa <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63574.10493016718!2d119.41054860072302!3d-5.202575783236448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee225ed86a92f%3A0x66691858c0ccde97!2sDinas%20Perikanan%20Gowa!5e0!3m2!1sid!2sid!4v1700208706554!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq7">Lokasi Dinas
                                Kelautan & Perikanan Kabupaten Jeneponto <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15880.33274409767!2d119.69851016516952!3d-5.701121429633709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db9374872fed201%3A0x125419f44df26128!2sDinas%20Kelautan%20dan%20Perikanan%20Kabupaten%20Jeneponto!5e0!3m2!1sid!2sid!4v1700208837098!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq8">Lokasi Dinas
                                Kelautan & Perikanan Kabupaten Selayar <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq8" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507879.9200008434!2d119.90630168217807!3d-6.020545446789258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dba3589714dd379%3A0x782e3a687f412aad!2sDinas%20Perikanan%20Selayar!5e0!3m2!1sid!2sid!4v1700208935257!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq9">Lokasi Dinas
                                Perikanan Kabupaten Luwu<i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq9" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4075431.350502138!2d118.26338960367929!3d-4.0380884931133885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d96bbf274c38123%3A0x304e629128bf420c!2sDinas%20Perikanan%20Kab.%20Luwu!5e0!3m2!1sid!2sid!4v1700209059820!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq10">Lokasi Dinas
                                Perikanan Kabupaten Luwu Utara<i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq10" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.865795698843!2d120.33804167444688!3d-2.5505522383137853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d91854ba9c315b5%3A0x48f3d2ec2e89bcbd!2sDinas%20Perikanan%20Kab.luwu%20Utara!5e0!3m2!1sid!2sid!4v1700216873184!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq11">Lokasi Dinas
                                kelautan, Perikanan Dan Pangan
                                Kabupaten Luwu Timur<i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq11" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.585453983586!2d121.08317797227969!3d-2.639470132696125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9058196d4a35f3%3A0xb98f6de58eccfc2f!2sDinas%20kelautan%2C%20Perikanan%20Dan%20pangan%20Kab.%20Luwu%20Timur!5e0!3m2!1sid!2sid!4v1700217001322!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq12">Lokasi Dinas
                                Perikanan
                                Kabupaten Maros<i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq12" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63595.85176002198!2d119.5336953182462!3d-4.982689559342298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbef848b77f14eb%3A0x3a0c88a6e57fa6b8!2sKantor%20Dinas%20Perikanan%20Maros!5e0!3m2!1sid!2sid!4v1700217221815!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq13">Lokasi Dinas
                                Perikanan
                                Kabupaten Pangkajene & Kepulauan<i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq13" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.620081699554!2d119.54269627446917!3d-4.835119149802186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbe4e257eb8b933%3A0xe59bcc480b9181f!2sDinas%20Perikanan%20Kab.%20Pangkep!5e0!3m2!1sid!2sid!4v1700217376437!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq14">Lokasi Dinas
                                Perikanan
                                Kabupaten Pinrang<i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq14" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1018494.3877953357!2d118.93801396806012!3d-4.317930313695595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d944d1fd0bbc3d3%3A0xef234e49e1162ebb!2sDinas%20Perikanan%20Kabupaten%20Pinrang!5e0!3m2!1sid!2sid!4v1700217456637!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq15">Lokasi Dinas
                                Peternakan & Perikanan Kabupaten Sidenreng Rappang
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq15" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1018647.86303943!2d119.16421973051628!3d-4.202030377673252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95b78d100a7f4b%3A0x6bdfb976c54196e5!2sDinas%20Peternakan%20dan%20Perikanan!5e0!3m2!1sid!2sid!4v1700217644626!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq16">Lokasi Dinas
                                Perikanan Kabupaten Sinjai
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq16" class="collapse" data-bs-parent=".faq-list">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.881348379043!2d120.25225277447242!3d-5.122814651853836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbc25d92ce6c90b%3A0xd130e62aea32373f!2sDinas%20Perikanan!5e0!3m2!1sid!2sid!4v1700217760791!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq17">Lokasi Dinas
                                Peternakan & Perikanan Kabupaten Soppeng
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq17" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509216.3164003308!2d119.32259559631346!3d-4.363699013639304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95f668c99765f3%3A0x95d182bbc61291c6!2sDinas%20Peternakan%20Dan%20Perikanan%20Kab.%20Soppeng!5e0!3m2!1sid!2sid!4v1700217905401!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq18">Lokasi Dinas
                                Kelautan & Perikanan Kabupaten Takalar
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq18" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508381.3212107976!2d118.90906333923334!3d-5.458025411939965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbed715df6d425d%3A0x4107e63eaf668aae!2sDinas%20Kelautan%20%26%20Perikanan%20Kabupaten%20Takalar!5e0!3m2!1sid!2sid!4v1700218104656!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq18">Lokasi Dinas
                                Kelautan & Perikanan Kabupaten Takalar
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq18" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508381.3212107976!2d118.90906333923334!3d-5.458025411939965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbed715df6d425d%3A0x4107e63eaf668aae!2sDinas%20Kelautan%20%26%20Perikanan%20Kabupaten%20Takalar!5e0!3m2!1sid!2sid!4v1700218104656!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq19">Lokasi Dinas
                                Perikanan Kabupaten Wajo
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq19" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509621.4939603245!2d119.64675161618234!3d-3.718666661117109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95e79bfe1cd6bd%3A0x11f8a57bda20e0cd!2sDinas%20Perikanan%20Kab.%20Wajo!5e0!3m2!1sid!2sid!4v1700218274271!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq20">Lokasi Dinas
                                Perikanan & Pertanian Kota Makassar
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq20" class="collapse" data-bs-parent=".faq-list">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508646.64866148826!2d118.85190010070804!3d-5.135569495960249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefd0f8ea8c285%3A0x749029a40d5f8e9a!2sDinas%20Perikanan%20dan%20Pertanian%20Kota%20Makassar!5e0!3m2!1sid!2sid!4v1700218350592!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq21">Lokasi Dinas
                                Perikanan Kota Palopo
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq21" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509895.33573404176!2d119.90979704607797!3d-3.210259023755675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d915faaa6eba125%3A0x879bbd08e531c98b!2sDinas%20Perikanan%20Kota%20Palopo!5e0!3m2!1sid!2sid!4v1700218436713!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                        <li class="bg-white p-3">
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq22">Lokasi Dinas
                                Pertanian, Kelautan dan Perikanan Kota Parepare
                                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq22" class="collapse" data-bs-parent=".faq-list">
                                <iframe class="mt-4"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509436.11717670306!2d119.07076835632326!3d-4.026603870284765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bb2b7d82c785%3A0xa3a5d3dcefe6525b!2sDinas%20Pertanian%2C%20Kelautan%20dan%20Perikanan%20Kota%20Parepare!5e0!3m2!1sid!2sid!4v1700218531724!5m2!1sid!2sid"
                                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
@endsection
