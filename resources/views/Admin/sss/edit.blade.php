@extends('LayoutAdmin.app', ['title' => 'Sedia Setiap Saat'])

@section('modal-add')
    <!-- Button trigger modal -->
    @if ($sss->file_sss === null)
        <a href="{{ asset('storage/fileInformasiSss/' . $sss->file_sss) }}" target="_blank"
            class="btn btn-primary btn-sm mb-3 disabled">
            File Lama
        </a>
    @else
        <a href="{{ asset('storage/fileInformasiSss/' . $sss->file_sss) }}" target="_blank"
            class="btn btn-primary btn-sm mb-3">
            File Lama
        </a>
    @endif
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-2">
                <form action="/admin/sss/update/{{ $sss->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="kategori_sss" class="form-label">Jenis Informasi<span
                                class="text-danger">*</span></label>
                        <select required name="kategori_sss" id="kategori_sss" class="form-select">
                            <option value="Undang-Undang" {{ $sss->kategori_sss === 'Undang-Undang' ? 'selected' : '' }}>
                                Undang-Undang
                            </option>
                            <option value="Peraturan Pemerintah"
                                {{ $sss->kategori_sss === 'Peraturan Pemerintah' ? 'selected' : '' }}>Peraturan
                                Pemerintah</option>
                            <option value="Peraturan Presiden"
                                {{ $sss->kategori_sss === 'Peraturan Presiden' ? 'selected' : '' }}>Peraturan
                                Presiden</option>
                            <option value="Peraturan Mentri"
                                {{ $sss->kategori_sss === 'Peraturan Mentri' ? 'selected' : '' }}>Peraturan
                                Mentri</option>
                            <option value="Keputusan Mentri"
                                {{ $sss->kategori_sss === 'Keputusan Mentri' ? 'selected' : '' }}>Keputusan
                                Mentri</option>
                            <option value="Peraturan Daerah"
                                {{ $sss->kategori_sss === 'Peraturan Daerah' ? 'selected' : '' }}>Peraturan
                                Daerah</option>
                            <option value="Peraturan Gubernur"
                                {{ $sss->kategori_sss === 'Peraturan Gubernur' ? 'selected' : '' }}>Peraturan
                                Gubernur</option>
                            <option value="Keputusan Gubernur"
                                {{ $sss->kategori_sss === 'Keputusan Gubernur' ? 'selected' : '' }}>Keputusan
                                Gubernur</option>
                            <option value="Instruktur Gubernur"
                                {{ $sss->kategori_sss === 'Instruktur Gubernur' ? 'selected' : '' }}>Instruktur
                                Gubernur</option>
                            <option value="Keputusan Sekretaris Daerah"
                                {{ $sss->kategori_sss === 'Keputusan Sekretaris Daerah' ? 'selected' : '' }}>
                                Keputusan Sekretaris Daerah</option>
                            <option value="Keputusan Kepala Dinas"
                                {{ $sss->kategori_sss === 'Keputusan Kepala Dinas' ? 'selected' : '' }}>
                                Keputusan Kepala Dinas</option>
                            <option value="Surat Edaran" {{ $sss->kategori_sss === 'Surat Edaran' ? 'selected' : '' }}>
                                Surat Edaran
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="judul_sss" class="form-label">Judul Informasi<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="judul_sss" id="judul_sss"
                            value="{{ $sss->judul_sss }}" placeholder="Masukkan Judul Informasi">
                    </div>
                    <div class="mb-3">
                        <label for="file_sss" class="form-label">File <span class="text-danger">format
                                pdf, jpg, png, jpeg</span></label>
                        <input type="file" class="form-control" name="file_sss" id="file_sss">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_sss" class="form-label">Keterangan Informasi
                        </label>
                        <textarea name="keterangan_sss" id="editor" style="height: 100px; color:#000;">{{ $sss->keterangan_sss }}</textarea>
                    </div>
                    <div class="mt-5 justify-content-center d-flex gap-2">
                        <a href="{{ url('/admin/sss') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
