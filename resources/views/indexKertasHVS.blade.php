@extends('master2')
@section('title', 'Database Kertas HVS')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Kertas HVS</h3>

    <a href="/kertashvs/tambah" class="btn btn-primary"> + Tambah Data Kertas Baru</a>

    <br />
    <br />
@endsection

@section('konten')
    <p>Cari Data Kertas :</p>
    <form action="/kertashvs/cari" method="GET" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Cari Kertas HVS berdasarkan nama .."
            value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary ml-3">
    </form>

    <br />

    <table class="table table-striped table-hover">
        <tr style="text-align: center;">
            <th>No.</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($kertashvs as $k)
        <tr style="text-align: center;">
            <td>{{ $k->kodekertashvs }}</td>
            <td>{{ $k->merkkertashvs }}</td>
            <td>{{ $k->stockkertashvs }}</td>
            <td style="text-align: center;">
                <div style="border: 2px solid {{ $k->tersedia == 'y' ? 'blue' : 'red' }}; border-radius: 10px; margin-top: 3px;">
                    {{ $k->tersedia == 'y' ? 'Y' : 'N' }}
                    <input type="checkbox" {{ $k->tersedia == 'y' ? 'checked' : '' }} disabled style="outline: 2px solid {{ $k->tersedia == 'y' ? 'blue' : 'red' }};">
                </div>
            </td>
            <td>
                <a href="/kertashvs/view/{{ $k->kodekertashvs }}" class="btn btn-success">View</a>
                |
                <a href="/kertashvs/edit/{{ $k->kodekertashvs }}" class="btn btn-warning">Edit</a>
                |
                <a href="/kertashvs/hapus/{{ $k->kodekertashvs }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $kertashvs->Links() }}

@endsection
