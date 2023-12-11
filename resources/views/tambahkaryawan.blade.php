@extends('master2')
@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Kertas HVS</h3>

    <a href="/karyawan"> Kembali</a>

    <br />
    <br />

    <form action="/karyawan/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class = "form-group">
            <label for = "kodepegawai" class = "col-sm-2 control-label">Kode Pegawai</label>
            <div class = "col-sm-10">
                <input required="required" name="kodepegawai" type = "text" class = "form-control" id = "kodepegawai"
                    placeholder = "Masukan Kode Pegawai...">
            </div>
        </div>
        <div class = "form-group">
            <label for = "nama" class = "col-sm-2 control-label">Nama Lengkap</label>
            <div class = "col-sm-10">
                <input required="required" name="nama" type = "text" class = "form-control" id = "nama"
                    placeholder = "Masukan Nama Lengkap...">
            </div>
        </div>
        <div class = "form-group">
            <label for = "divisi" class = "col-sm-2 control-label">Divisi</label>
            <div class = "col-sm-10">
                <input required="required" name="divisi" type = "text" class = "form-control" id = "divisi"
                    placeholder = "Masukan Divisi...">
            </div>
        </div>
        <div class = "form-group">
            <label for = "divisi" class = "col-sm-2 control-label">Departemen</label>
            <div class = "col-sm-10">
                <input required="required" name="departemen" type = "number" class = "form-control" id = "departemen"
                    placeholder = "Masukan Departemen...">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
