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
                          <li><a href="#">Profil Pejabat</a></li>
                          <li><a href="#">Profil Dinas</a></li>
                          <li><a href="#">Maksud & Tujuan</a></li>
                          <li><a href="#">Tugas & Fungsi</a></li>
                          <li><a href="#">Maklumat Pelayanan</a></li>
                          <li><a href="#">Tentang Kami</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>PPID</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="#">Visi Misi</a></li>
                          <li><a href="#">Tugas & Fungsi</a></li>
                          <li><a href="#">Maklumat</a></li>
                          <li><a href="#">Hak & Kewajiban </a></li>
                          <li><a href="#">Tentang PPID</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Dokumentasi</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="#">Album Kegiatan</a></li>
                          <li><a href="#">Videp</a></li>
                      </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li class="dropdown"><a href="#"><span>Informasi Berkala</span> <i
                                      class="bi bi-chevron-right"></i></a>
                              <ul>
                                  <li><a href="#">Rencana Pembangunan <br> Jangka Menengah Daerah</a></li>
                                  <li><a href="#">Rencana Strategis</a></li>
                                  <li><a href="#">Rencana Kerja</a></li>
                                  <li><a href="#">Kebijakan Umum APBD</a></li>
                              </ul>
                          </li>
                          <li class="dropdown"><a href="#"><span>Informasi Serta Merta</span> <i
                                      class="bi bi-chevron-right"></i></a>
                              <ul>
                                  <li><a href="#">Standar Operasional Prosedur</a></li>
                                  <li><a href="#">Tata Cara Permohonan Informasi</a></li>
                                  <li><a href="#">Formulir Permohonan Informasi</a></li>
                                  <li><a href="#">Daftar Informasi</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Informasi Sedia Setiap Saat</a></li>
                      </ul>
                  </li>
                  <li><a class="nav-link scrollto {{ $title == 'Kontak' ? 'active' : '' }}"
                          href="{{ url('/kontak') }}">Kontak</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
