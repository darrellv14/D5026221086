@extends('master2')

@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Kertas HVS</h3>

    <a href="/kertashvs">Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-12">
            @foreach ($kertashvs as $k)
                <fieldset disabled>
                    <form action="/kertashvs/update" method="post" class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $k->kodekertashvs }}">
                        <div class = "form-group">
                            <label for = "nama" class = "col-sm-2 control-label">Merk</label>
                            <div class = "col-sm-10">
                                <input type="text" required="required" name="nama" value="{{ $k->merkkertashvs }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "stockkertashvs" class = "col-sm-2 control-label">Stock</label>
                            <div class = "col-sm-10">
                                <input type="number" required="required" name="stockkertashvs" value="{{ $k->stockkertashvs }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "nama" class = "col-sm-2 control-label">Tersedia</label>
                            <div class = "col-sm-10 d-flex flex-row">
                                <div style="padding: 10px; font-size: 25px; border: 2px solid {{ $k->tersedia == 'y' ? 'blue' : 'red' }}; border-radius: 10px; margin-top: 3px;">
                                    {{ $k->tersedia == 'y' ? 'Ya' : 'Tidak' }}
                                </div>
                            </div>
                        </div>
                    </form>
                </fieldset>
            @endforeach
            <div class="row">
                <div class="col-10 text-center">
                    <a href="/kertashvs" class="btn btn-primary w-25 p-2">Ok</a>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
@endsection
