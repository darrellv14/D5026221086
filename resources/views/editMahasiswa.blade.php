@extends('master2')
@section('judul_halaman')
    <h2>EAS Darrell Valentino - 5026221086</h2>
    <h3>Data Mahasiswa</h3>

    <br />
    <br />
    <a href="/mahasiswa" class="btn btn-success">Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            @foreach ($mahasiswa as $m)
                <form action="/mahasiswa/update" method="post" class="form-horizontal" role="form">
                    {{ csrf_field() }}
                    <input type="hidden" name="NRP" value="{{ $m->NRP }}">
                    <div class = "form-group">
                        <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
                        <div class = "col-sm-12">
                            <input type="text" required="required" name="NRP" value="{{ $m->NRP }}"
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class = "form-group">
                        <label for = "Nama" class = "col-sm-2 control-label">Nama</label>
                        <div class = "col-sm-12">
                            <input type="text" required="required" name="Nama" value="{{ $m->Nama }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class = "form-group">
                        <label for = "Jurusan" class = "col-sm-2 control-label">Jurusan</label>
                        <div class = "col-sm-12">
                            <input type="text" required="required" name="Jurusan" value="{{ $m->Jurusan }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class = "form-group">
                        <label for = "IPK" class = "col-sm-2 control-label">IPK</label>
                        <div class = "col-sm-12">
                            <input type="text" required="required" name="IPK" value="{{ $m->IPK }}"
                                class="form-control">
                        </div>
                    </div>
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </form>
            @endforeach
        </div>
    </div>
@endsection
