@extends('LayoutAdmin.app', ['title' => 'Profil Pejabat'])

@section('modal-add')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Profil Lama
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Profil Lama</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="height: 85vh;">
                    <iframe src="{{ asset('storage/profilPejabat/' . $pejabat->profil_pdf) }}" width="100%"
                        height="90%"></iframe>
                    <div class="mt-5 justify-content-center d-flex gap-2">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
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
                <form action="/admin/pejabat/update/{{ $pejabat->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="profil_pdf" class="form-label">Profil Pejabat PDF</label>
                        <input type="file" class="form-control" name="profil_pdf" id="profil_pdf"
                            accept=".pdf">
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                            value="{{ $pejabat->nama_lengkap }}" placeholder="Masukkan Nama Lengkap Pejabat">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" id="jabatan"
                            value="{{ $pejabat->jabatan }}" placeholder="Masukkan Jabatan Pejabat">
                    </div>
                    <div class="mt-5 justify-content-center d-flex gap-2">
                        <a href="{{ url('/admin/pejabat') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
