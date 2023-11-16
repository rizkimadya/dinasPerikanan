@extends('LayoutAdmin.app', ['title' => 'Renstra (Rencana Strategis)'])

@section('modal-add')
    @if ($renstra->file_informasi_berkala === null)
        <a href="{{ asset('storage/fileInformasiBerkala/' . $renstra->file_informasi_berkala) }}" target="_blank"
            class="btn btn-primary btn-sm mb-3 disabled">
            File Lama
        </a>
    @else
        <a href="{{ asset('storage/fileInformasiBerkala/' . $renstra->file_informasi_berkala) }}" target="_blank"
            class="btn btn-primary btn-sm mb-3">
            File Lama
        </a>
    @endif
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <form action="/admin/renstra/update/{{ $renstra->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="judul_informasi_berkala" class="form-label">Judul RPJMD <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="judul_informasi_berkala"
                            id="judul_informasi_berkala" value="{{ $renstra->judul_informasi_berkala }}"
                            placeholder="Masukkan Judul Rencana Pembangunan Jangka Menengah Daerah">
                    </div>
                    <div class="mb-3">
                        <label for="file_informasi_berkala" class="form-label">File <span class="text-danger">format
                                pdf, jpg, png, jpeg</span></label>
                        <input type="file" class="form-control" name="file_informasi_berkala"
                            id="file_informasi_berkala">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_informasi_berkala" class="form-label">Keterangan Rencana Pembangunan
                            Jangka Menengah Daerah</label>
                        <textarea name="keterangan_informasi_berkala" id="editor" style="height: 100px; color:#000;">{{ $renstra->keterangan_informasi_berkala }}</textarea>
                    </div>
                    <div class="mt-5 justify-content-center d-flex gap-2">
                        <a href="{{ url('/admin/renstra') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
