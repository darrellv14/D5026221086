@extends('master2')
@section('title', 'Database Nilai Kuliah')

@section('judul_halaman')
    <h2>Data Shopping Cart</h2>

    <a href="/shoppingcart/tambah" class="btn btn-primary"> + Tambah Barang Baru</a>
    <br>
@endsection

@section('konten')
    <br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Per Item</th>
            <th>Total Jumlah x Harga</th>
            <th>Action</th>
        </tr>
        @foreach ($shoppingcart as $sc)
            <tr>
                <td>{{ $sc->id }}</td>
                <td>{{ $sc->KodeBarang }}</td>
                <td>{{ $sc->Jumlah }}</td>
                <td>Rp. {{ number_format($sc->Harga, 0, '.', '.') }}</td>
                <td>Rp. {{ number_format($sc->Jumlah * $sc->Harga, 0, '.', '.') }}</td>
                <td>
                    <a href="/shoppingcart/hapus/{{ $sc->id }}" class="btn btn-success">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
