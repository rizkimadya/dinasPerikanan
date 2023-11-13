@extends('LayoutAdmin.app', ['title' => 'Maklumat PPID'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card table-responsive p-md-4 p-3">
                <form action="{{ url('/admin/maklumat') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="isi" class="form-label mb-2">Masukkan Isi Data Maklumat PPID</label>
                        <textarea name="isi" id="editor" style="height: 100%; color:#000;">{{ optional($maklumat)->isi ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mx-auto d-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
