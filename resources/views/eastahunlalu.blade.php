@extends('master10')
@section('title')

@section('judul_halaman')
@endsection

@section('konten')
<div class="col p-3 mb-2 bg-success">
    <div class="row-4">Anda pengunjung ke : {{ $counter }}</div>
    <div class="row-4"></div>
    <div class="row-4"></div>
</div>

@endsection
