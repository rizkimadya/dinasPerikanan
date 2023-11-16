<!--begin::sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="{{ url('/dashboard-admin') }}" class="text-white">
            Content Management System <br> <span class="text-gray-600">Dinas Kelautan & Perikanan</span>
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-2 rotate-180">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor" />
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ $title == 'Dashboard' ? 'active' : '' }}"
                            href="{{ url('/dashboard-admin') }}">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2" y="2" width="9" height="9" rx="2"
                                            fill="currentColor" />
                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                            fill="currentColor" />
                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                            fill="currentColor" />
                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                        <span class="menu-link mt-5">
                            <span class="menu-title">MENU</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ $title == 'Berita' ? 'here show' : '' }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M20 21H11C10.4 21 10 20.6 10 20V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Beranda</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Berita' ? 'active' : '' }}"
                                        href="{{ url('/admin/berita') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Berita</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion  {{ $title == 'Profil Pejabat' ? 'here show' : '' }} {{ $title == 'Profil Kami' ? 'here show' : '' }} {{ $title == 'Maksud & Tujuan' ? 'here show' : '' }} {{ $title == 'Tugas & Fungsi' ? 'here show' : '' }} {{ $title == 'Maklumat Pelayanan' ? 'here show' : '' }} {{ $title == 'Tentang Kami' ? 'here show' : '' }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
                                                fill="currentColor" />
                                            <rect opacity="0.3" x="8" y="3" width="8" height="8"
                                                rx="4" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Profil</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Profil Pejabat' ? 'active' : '' }}"
                                        href="{{ url('/admin/pejabat') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Profil Pejabat</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Profil Kami' ? 'active' : '' }}"
                                        href="{{ url('/admin/profilKami') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Profil Kami</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Maksud & Tujuan' ? 'active' : '' }}"
                                        href="{{ url('/admin/maksudTujuan') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Maksud & Tujuan</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Tugas & Fungsi' ? 'active' : '' }}"
                                        href="{{ url('/admin/tugasFungsi') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tugas & Fungsi</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Maklumat Pelayanan' ? 'active' : '' }}"
                                        href="{{ url('/admin/maklumatPelayanan') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Maklumat Pelayanan</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Tentang Kami' ? 'active' : '' }}"
                                        href="{{ url('/admin/tentangKami') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tentang Kami</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ $title == 'Visi Misi PPID' ? 'here show' : '' }} {{ $title == 'Tugas & Fungsi PPID' ? 'here show' : '' }} {{ $title == 'Maklumat PPID' ? 'here show' : '' }} {{ $title == 'Hak & Kewajiban' ? 'here show' : '' }} {{ $title == 'Tentang PPID' ? 'here show' : '' }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z"
                                                fill="currentColor" />
                                            <path d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">PPID</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Visi Misi PPID' ? 'active' : '' }}"
                                        href="{{ url('/admin/visiMisi') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Visi Misi</span>
                                    </a>
                                    <a class="menu-link {{ $title == 'Tugas & Fungsi PPID' ? 'active' : '' }} "
                                        href="{{ url('/admin/tugasFungsiPpid') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tugas & Fungsi</span>
                                    </a>
                                    <a class="menu-link {{ $title == 'Maklumat PPID' ? 'active' : '' }}"
                                        href="{{ url('/admin/maklumat') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Maklumat</span>
                                    </a>
                                    <a class="menu-link {{ $title == 'Hak & Kewajiban' ? 'active' : '' }}"
                                        href="{{ url('/admin/hakKewajiban') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Hak & Kewajiban</span>
                                    </a>
                                    <a class="menu-link {{ $title == 'Tentang PPID' ? 'active' : '' }}"
                                        href="{{ url('/admin/tentang') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tentang PPID</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ $title == 'Album Kegiatan' ? 'here show' : '' }} {{ $title == 'Video Kegiatan' ? 'here show' : '' }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.7 8L7.49998 15.3L4.59999 20.3C3.49999 18.4 3.1 17.7 2.3 16.3C1.9 15.7 1.9 14.9 2.3 14.3L8.8 3L11.7 8Z"
                                                fill="currentColor" />
                                            <path opacity="0.3"
                                                d="M11.7 8L8.79999 3H13.4C14.1 3 14.8 3.4 15.2 4L20.6 13.3H14.8L11.7 8ZM7.49997 15.2L4.59998 20.2H17.6C18.3 20.2 19 19.8 19.4 19.2C20.2 17.7 20.6 17 21.7 15.2H7.49997Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Dokumentasi</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Album Kegiatan' ? 'active' : '' }}"
                                        href="{{ url('/admin/album') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Album Kegiatan</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Video Kegiatan' ? 'active' : '' }}"
                                        href="{{ url('/admin/video') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Video</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <a class="menu-link {{ $title == 'Pengumuman' ? 'active' : '' }}"
                            href="{{ url('/admin/pengumuman') }}">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Pengumuman</span>
                        </a>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ $title == 'Pengaduan' ? 'here show' : '' }} {{ $title == 'Survei Kepuasan' ? 'here show' : '' }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                fill="currentColor" />
                                            <rect x="6" y="12" width="7" height="2" rx="1"
                                                fill="currentColor" />
                                            <rect x="6" y="7" width="12" height="2" rx="1"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Layanan</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Pengaduan' ? 'active' : '' }}"
                                        href="{{ url('/admin/pengaduan') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Data Pengaduan</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Survei Kepuasan' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Survei Kepuasan</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu link-->

                        <span class="menu-link mt-5">
                            <span class="menu-title">INFORMASI PUBLIC</span>
                            <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ $title == 'RPJMD' ? 'here show' : '' }} {{ $title == 'Renstra (Rencana Strategis)' ? 'here show' : '' }} {{ $title == 'Renja (Rencana Kerja)' ? 'here show' : '' }} {{ $title == 'KUA (Kebijakan Umum APBD)' ? 'here show' : '' }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                fill="currentColor" />
                                            <rect x="6" y="12" width="7" height="2" rx="1"
                                                fill="currentColor" />
                                            <rect x="6" y="7" width="12" height="2" rx="1"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title"> Berkala</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'RPJMD' ? 'active' : '' }}"
                                        href="{{ url('/admin/rpjmd') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">RPJMD (Rencana Pembangunan Jangka
                                            Menengah Daerah)</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Renstra (Rencana Strategis)' ? 'active' : '' }}"
                                        href="{{ url('/admin/renstra') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Renstra (Rencana Strategis)</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Renja (Rencana Kerja)' ? 'active' : '' }}"
                                        href="{{ url('/admin/renja') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Renja (Rencana Kerja)</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'KUA (Kebijakan Umum APBD)' ? 'active' : '' }}"
                                        href="{{ url('/admin/kua') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">KUA (Kebijakan Umum APBD)</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ $title == 'Standar Operasional Prosedur' ? 'here show' : '' }} {{ $title == 'Tata Cara Permohonan Informasi' ? 'here show' : '' }} {{ $title == 'Formulir Permohonan Informasi' ? 'here show' : '' }} {{ $title == 'Daftar Informasi' ? 'here show' : '' }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                fill="currentColor" />
                                            <rect x="6" y="12" width="7" height="2" rx="1"
                                                fill="currentColor" />
                                            <rect x="6" y="7" width="12" height="2" rx="1"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title"> Serta Merta</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Standar Operasional Prosedur' ? 'active' : '' }}"
                                        href="{{ url('/admin/pengaduan') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Standar Operasional Prosedur</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Tata Cara Permohonan Informasi' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tata Cara Permohonan Informasi</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Formulir Permohonan Informasi' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Formulir Permohonan Informasi</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Daftar Informasi' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Daftar Informasi</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ $title == 'Undang-Undang' ? 'here show' : '' }} {{ $title == 'Peraturan Pemerintah' ? 'here show' : '' }} {{ $title == 'Peraturan Presiden' ? 'here show' : '' }} {{ $title == 'Peraturan Mentri' ? 'here show' : '' }} {{ $title == 'Keputusan Mentri' ? 'here show' : '' }} {{ $title == 'Peraturan Daerah' ? 'here show' : '' }} {{ $title == 'Peraturan Gubernur' ? 'here show' : '' }} {{ $title == 'Keputusan Gubernur' ? 'here show' : '' }} {{ $title == 'Instruktur Gubernur' ? 'here show' : '' }} {{ $title == 'Keputusan Sekretaris Daerah' ? 'here show' : '' }} {{ $title == 'Keputusan Kepala Dinas' ? 'here show' : '' }} {{ $title == 'Surat Edaran' ? 'here show' : '' }}">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs029.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3"
                                                d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                fill="currentColor" />
                                            <rect x="6" y="12" width="7" height="2" rx="1"
                                                fill="currentColor" />
                                            <rect x="6" y="7" width="12" height="2" rx="1"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title"> Sedia Setiap Saat</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <div class="menu-sub menu-sub-accordion">
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Undang-Undang' ? 'active' : '' }}"
                                        href="{{ url('/admin/pengaduan') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Undang-Undang</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Peraturan Pemerintah' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Peraturan Pemerintah</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Peraturan Presiden' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Peraturan Presiden</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Peraturan Mentri' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Peraturan Mentri</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Keputusan Mentri' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Keputusan Mentri</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Peraturan Daerah' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Peraturan Daerah</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Peraturan Gubernur' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Peraturan Gubernur</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Keputusan Gubernur' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Keputusan Gubernur</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Instruktur Gubernur' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Instruktur Gubernur</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Keputusan Sekretaris Daerah' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Keputusan Sekretaris Daerah</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Keputusan Kepala Dinas' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Keputusan Kepala Dinas</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--end:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link {{ $title == 'Surat Edaran' ? 'active' : '' }}"
                                        href="{{ url('/admin/survei') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Surat Edaran</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end:Menu sub-->
                        </div>
                    </div>
                </div>

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
</div>
<!--end::sidebar-->
