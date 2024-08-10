@extends('LayoutAdmin.app', ['title' => 'Dashboard'])

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-md-5 p-4 mb-md-5 mb-3">
                <div class="d-flex align-items-center">
                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ $berita }}</span>
                    <span class="menu-icon ms-auto">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                        <span class="svg-icon svg-icon-3 text-white">
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
                </div>
                <span class="text-gray-400 pt-1 fw-semibold fs-6">Jumlah Berita</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-md-5 p-4 mb-md-5 mb-3">
                <div class="d-flex align-items-center">
                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ $album }}</span>
                    <span class="menu-icon ms-auto">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                        <span class="svg-icon svg-icon-3 text-white">
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
                </div>
                <span class="text-gray-400 pt-1 fw-semibold fs-6">Jumlah Album Kegiatan</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-md-5 p-4 mb-md-5 mb-3">
                <div class="d-flex align-items-center">
                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ $video }}</span>
                    <span class="menu-icon ms-auto">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                        <span class="svg-icon svg-icon-3 text-white">
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
                </div>
                <span class="text-gray-400 pt-1 fw-semibold fs-6">Jumlah Video</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-md-5 p-4 mb-md-5 mb-3">
                <div class="d-flex align-items-center">
                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ $pengaduan }}</span>
                    <span class="menu-icon ms-auto">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                        <span class="svg-icon svg-icon-3 text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                    fill="currentColor" />
                                <rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
                                <rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </div>
                <span class="text-gray-400 pt-1 fw-semibold fs-6">Jumlah Pengaduan</span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-md-5 p-4 mb-md-5 mb-3">
                <div class="d-flex align-items-center">
                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ $survei }}</span>
                    <span class="menu-icon ms-auto">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                        <span class="svg-icon svg-icon-3 text-white">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                    fill="currentColor" />
                                <rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
                                <rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                </div>
                <span class="text-gray-400 pt-1 fw-semibold fs-6">Jumlah Survei Kepuasan</span>
            </div>
        </div>
    </div>
@endsection
