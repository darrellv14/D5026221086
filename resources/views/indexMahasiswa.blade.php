@extends('master2')
@section('title', 'Database Mahasiswa')

@section('judul_halaman')
    <h2>EAS Darrell Valentino - 5026221086</h2>
    <h3>Data Mahasiswa</h3>

    <br />
    <br />
@endsection

@section('konten')
    <table class="table table-striped table-hover">
        <tr style="text-align: center;">
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>IPK</th>
            <th></th>
        </tr>
        @foreach ($mahasiswa as $m)
            <tr style="text-align: center">
                <td>{{ $m->NRP }}</td>
                <td>{{ $m->Nama }}</td>
                <td>{{ $m->Jurusan }}</td>
                <td>{{ $m->IPK }}</td>
                <td>
                    <a href="/mahasiswa/view/{{ $m->NRP }}" class="btn btn-success">View</a>
                    |
                    <a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $mahasiswa->Links() }}

@endsection
