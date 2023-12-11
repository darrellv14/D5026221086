@extends('master2')

@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Karyawan</h3>

    <a href="/karyawan">Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col">
            @foreach ($karyawan as $k)
                <fieldset disabled>
                    <form action="/karyawan/update" method="post" class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $k->kodepegawai }}">
                        <div class = "form-group">
                            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                            <div class = "col-sm-10">
                                <input type="text" required="required" name="nama" value="{{ $k->namalengkap }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "divisi" class = "col-sm-2 control-label">Divisi</label>
                            <div class = "col-sm-10">
                                <input type="text" required="required" name="divisi" value="{{ $k->divisi }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "departemen" class = "col-sm-2 control-label">Departemen</label>
                            <div class = "col-sm-10">
                                <input type="number" required="required" name="departemen" value="{{ $k->departemen }}"
                                    class="form-control">
                            </div>
                        </div>
                    </form>
                </fieldset>
            @endforeach
            <div class="row">
                <div class="col-10 text-center">
                    <a href="/karyawan" class="btn btn-primary w-25 p-2">Ok</a>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
@endsection
