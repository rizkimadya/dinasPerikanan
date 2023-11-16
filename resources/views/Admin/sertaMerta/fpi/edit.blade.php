@extends('LayoutAdmin.app', ['title' => 'Formulir Permohonan Informasi'])

@section('modal-add')
    <!-- Button trigger modal -->
    @if ($fpi->file_serta_merta === null)
        <a href="{{ asset('storage/fileInformasiSertaMerta/' . $fpi->file_serta_merta) }}" target="_blank"
            class="btn btn-primary btn-sm mb-3 disabled">
            File Lama
        </a>
    @else
        <a href="{{ asset('storage/fileInformasiSertaMerta/' . $fpi->file_serta_merta) }}" target="_blank"
            class="btn btn-primary btn-sm mb-3">
            File Lama
        </a>
    @endif
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <form action="/admin/fpi/update/{{ $fpi->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul_serta_merta" class="form-label">Judul Formulir Permohonan Informasi <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="judul_serta_merta" id="judul_serta_merta"
                            value="{{ $fpi->judul_serta_merta }}"
                            placeholder="Masukkan Judul Formulir Permohonan Informasi">
                    </div>
                    <div class="mb-3">
                        <label for="file_serta_merta" class="form-label">File <span class="text-danger">format
                                pdf, jpg, png, jpeg</span></label>
                        <input type="file" class="form-control" name="file_serta_merta" id="file_serta_merta">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_serta_merta" class="form-label">Keterangan Formulir Permohonan Informasi
                        </label>
                        <textarea name="keterangan_serta_merta" id="editor" style="height: 100px; color:#000;">{{ $fpi->keterangan_serta_merta }}</textarea>
                    </div>
                    <div class="mt-5 justify-content-center d-flex gap-2">
                        <a href="{{ url('/admin/fpi') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
