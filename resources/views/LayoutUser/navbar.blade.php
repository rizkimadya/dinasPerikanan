  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">

          <div class="logo">
              <a href="{{ url('/') }}" class="d-flex">
                  <img src="{{ asset('assets2/img/logo_sulsel.png') }}" alt="">
                  <p class="mb-0 ms-2 align-self-center" style="font-size: 14px">Dinas Kelautan & Perikanan <br>
                      <span>Provinsi Sulawesi Selatan</span>
                  </p>
              </a>
          </div>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto {{ $title == 'Beranda' ? 'active' : '' }}"
                          href="{{ url('/') }}">Beranda</a></li>
                  <li><a class="nav-link scrollto {{ $title == 'Pengumuman' ? 'active' : '' }}"
                          href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                  <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="{{ url('/profil-pejabat') }}">Profil Pejabat</a></li>
                          <li><a href="{{ url('/profil-dinas') }}">Profil Dinas</a></li>
                          <li><a href="{{ url('/maksud-tujuan') }}">Maksud & Tujuan</a></li>
                          <li><a href="{{ url('/tugas-fungsi') }}">Tugas & Fungsi</a></li>
                          <li><a href="{{ url('/maklumat-pelayanan') }}">Maklumat Pelayanan</a></li>
                          <li><a href="{{ url('/tentang-kami') }}">Tentang Kami</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>PPID</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="{{ url('/visi-misi') }}">Visi Misi</a></li>
                          <li><a href="{{ url('/tugas-fungsi-ppid') }}">Tugas & Fungsi</a></li>
                          {{-- <li><a href="{{ url('/maksud-tujuan-ppid') }}">Maksud & Tujuan</a></li> --}}
                          <li><a href="{{ url('/maklumat') }}">Maklumat</a></li>
                          <li><a href="{{ url('/hak-kewajiban') }}">Hak & Kewajiban </a></li>
                          <li><a href="{{ url('/tentang-ppid') }}">Tentang PPID</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Dokumentasi</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="{{ url('/album') }}">Album Kegiatan</a></li>
                          <li><a href="{{ url('/video') }}">Video</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li class="dropdown"><a href="#"><span>Informasi Berkala</span> <i
                                      class="bi bi-chevron-right"></i></a>
                              <ul>
                                  <li><a href="{{ url('/rencana-pembangunan') }}">Rencana Pembangunan <br> Jangka Menengah Daerah</a></li>
                                  <li><a href="{{ url('/rencana-strategis') }}">Rencana Strategis</a></li>
                                  <li><a href="{{ url('/rencana-kerja') }}">Rencana Kerja</a></li>
                                  <li><a href="{{ url('/kebijakan-umum') }}">Kebijakan Umum APBD</a></li>
                              </ul>
                          </li>
                          <li class="dropdown"><a href="#"><span>Informasi Serta Merta</span> <i
                                      class="bi bi-chevron-right"></i></a>
                              <ul>
                                  <li><a href="{{ url('/standar-operasional-prosedur') }}">Standar Operasional Prosedur</a></li>
                                  <li><a href="{{ url('/tata-cara-permohonan-informasi') }}">Tata Cara Permohonan Informasi</a></li>
                                  <li><a href="{{ url('/formulir-permohonan-informasi') }}">Formulir Permohonan Informasi</a></li>
                                  <li><a href="{{ url('/daftar-informasi') }}">Daftar Informasi</a></li>
                              </ul>
                          </li>
                          <li><a href="{{ url('/sedia-setiap-saat') }}">Informasi Sedia Setiap Saat</a></li>
                      </ul>
                  </li>
                  <li><a class="nav-link scrollto {{ $title == 'Kontak' ? 'active' : '' }}"
                          href="{{ url('/kontak') }}">Kontak</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
