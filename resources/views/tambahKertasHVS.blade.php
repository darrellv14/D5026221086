@extends('master2')
@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Kertas HVS</h3>

    <a href="/kertashvs"> Kembali</a>

    <br />
    <br />

    <form action="/kertashvs/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class = "form-group">
            <label for = "merk" class = "col-sm-2 control-label">Merk</label>
            <div class = "col-sm-10">
                <input required="required" name="merk" type = "text" class = "form-control" id = "merk"
                    placeholder = "Masukan Merk...">
            </div>
        </div>
        <div class = "form-group">
            <label for = "stock" class = "col-sm-2 control-label">Stock</label>
            <div class = "col-sm-10">
                <input required="required" name="stock" type = "text" class = "form-control" id = "stock"
                    placeholder = "Masukan Stock...">
            </div>
        </div>
        <div class = "form-group bg-danger text-white w-25 row p-1 ml-3">
            <input class="col-2"  name="aman" type = "checkbox" id = "tersedia" value="Ketersediaan barang">
            <label for = "tersedia" class = "control-label">Ketersedian barang</label>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
