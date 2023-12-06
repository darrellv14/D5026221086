@extends('master2')
@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class = "form-group">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-10">
                <input required="required" name="nama" type = "text" class = "form-control" id = "nama"
                    placeholder = "Masukan nama ..">
            </div>
        </div>
        <div class = "form-group">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-10">
                <input required="required" name="jabatan" type = "text" class = "form-control" id = "jabatan"
                    placeholder = "Masukan jabatan ..">
            </div>
        </div>
        <div class = "form-group">
            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-10">
                <input required="required" name="umur" type = "number" class = "form-control" id = "umur"
                    placeholder = "Masukan umur ..">
            </div>
        </div>
        <div class = "form-group">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-10">
                <textarea required="required" name="alamat" type = "text" class = "form-control" id = "alamat" placeholder = "Masukan alamat .. "></textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
