@extends('master2')
@section('title', 'Database Kertas HVS')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Kertas HVS</h3>

    <br />
    <br />
@endsection

@section('konten')
    <table class="table table-striped table-hover">
        <tr style="text-align: center;">
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th></th>
        </tr>
        @foreach ($karyawan as $k)
            <tr style="text-align: center">
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>
                <td>
                    <a href="/karyawan/view/{{ $k->kodepegawai }}" class="btn btn-success">View</a>
                    |
                    <a href="/karyawan/edit/{{ $k->kodepegawai }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Data Karyawan Baru</a>
    {{ $karyawan->Links() }}

@endsection
