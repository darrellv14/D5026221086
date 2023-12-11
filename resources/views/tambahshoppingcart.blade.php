@extends('master2')
@section('konten')
    <h3>Data Nilai Kuliah</h3>

    <a href="/shoppingcart"> Kembali</a>

    <br />
    <br />

    <form action="/shoppingcart/store" method="post" class="form-horizontal" role="form">
        {{ csrf_field() }}
        <div class = "form-group">
            <label for = "kodebarang" class = "col-sm-2 control-label">Kode Barang</label>
            <div class = "col-sm-10">
                <input required="required" name="kodebarang" type = "text" class = "form-control" id = "kodebarang"
                    placeholder = "Masukan Kode Barang ..">
            </div>
        </div>
        <div class = "form-group">
            <label for = "jumlah" class = "col-sm-2 control-label">Jumlah</label>
            <div class = "col-sm-10">
                <input required="required" name="jumlah" type = "number" class = "form-control" id = "jumlah"
                    placeholder = "Masukan Jumlah Barang ..">
            </div>
        </div>
        <div class = "form-group">
            <label for = "harga" class = "col-sm-2 control-label">Harga</label>
            <div class = "col-sm-10">
                <input required="required" name="harga" type = "number" class = "form-control" id = "harga"
                    placeholder = "Masukan Harga Barang ..">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
