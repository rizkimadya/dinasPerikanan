@extends('LayoutAdmin.app', ['title' => 'Tata Cara Permohonan Informasi'])

@section('modal-add')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <span class="svg-icon svg-icon-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                    transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
            </svg>
        </span>
        Tambah Tata Cara
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Tata Cara Permohonan Informasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/admin/tcpi') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="max-height: 66vh; overflow: auto">
                            <div class="mb-3">
                                <label for="judul_serta_merta" class="form-label">Judul Tata Cara Permohonan Informasi <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="judul_serta_merta" id="judul_serta_merta"
                                    required placeholder="Masukkan Judul Tata Cara Permohonan Informasi">
                            </div>
                            <div class="mb-3">
                                <label for="file_serta_merta" class="form-label">File <span class="text-danger">format
                                        pdf, jpg, png, jpeg</span></label>
                                <input type="file" class="form-control" name="file_serta_merta" id="file_serta_merta">
                            </div>
                            <div class="mb-3">
                                <label for="keterangan_serta_merta" class="form-label">Keterangan Standar Operasional
                                    Prosedur
                                </label>
                                <textarea name="keterangan_serta_merta" id="editor" style="height: 100px; color:#000;"></textarea>
                            </div>
                        </div>
                        <div class="mt-5 justify-content-center d-flex gap-2">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>File</th>
                            <th>Keterangan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tcpi as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->judul_serta_merta }}</td>
                                <td>
                                    @if ($item->file_serta_merta === null)
                                        <p>Tidak ada file</p>
                                    @else
                                        <a href="{{ asset('storage/fileInformasiSertaMerta/' . $item->file_serta_merta) }}"
                                            target="_blank">Lihat
                                            File Tata Cara
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->keterangan_serta_merta === null)
                                        <p>Tidak ada keterangan</p>
                                    @else
                                        {!! Str::limit($item->keterangan_serta_merta, 50) !!}
                                    @endif
                                </td>
                                <td class="text-end pe-3">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                        <span class="svg-icon svg-icon-5 m-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/admin/tcpi/edit/{{ $item->id }}" class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="/admin/tcpi/delete/{{ $item->id }}" class="menu-link px-3"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">
                                                Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
