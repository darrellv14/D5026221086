@extends('master2')
@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Kertas HVS</h3>

    <a href="/kertashvs"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    @foreach ($kertashvs as $k)
        <form action="/kertashvs/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $k->kodekertashvs }}">
            <div class = "form-group">
                <label for = "merk" class = "col-sm-2 control-label">Merk</label>
                <div class = "col-sm-10">
                    <input type="text" required="required" name="merk" value="{{ $k->merkkertashvs }}"
                        class="form-control">
                </div>
            </div>
            <div class = "form-group">
                <label for = "stock" class = "col-sm-2 control-label">Stock</label>
                <div class = "col-sm-10">
                    <input type="number" required="required" name="stock" value="{{ $k->stockkertashvs }}"
                        class="form-control">
                </div>
            </div>
            <div class = "form-group bg-danger text-white w-25 row p-1 ml-3">
                <input class="col-2"  name="aman" type = "checkbox" id = "tersedia" value="Ketersediaan barang">
                <label for = "tersedia" class = "control-label">Ketersedian barang</label>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection
