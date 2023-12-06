<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KertasHVSController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kertashvs
    	$kertashvs = DB::table('kertashvs')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexKertasHVS',['kertashvs' => $kertashvs]);

    }

    // method untuk menampilkan view form tambah kertashvs
    public function tambah(){

        // memanggil view tambah
        return view('tambahKertasHVS');
    }

    // method untuk insert data ke table kertashvs
    public function store(Request $request)
    {
        // insert data ke table kertashvs
        DB::table('kertashvs')->insert([
            'merkkertashvs' => $request->merk,
            'stockkertashvs' => $request->stock,
            'tersedia' => $request->has('aman') ? 'y' : 'n'
        ]);
        // alihkan halaman ke halaman kertashvs
        return redirect('/kertashvs');
        // kenapa kok tidak return view index
        // redirect melempar ke suatu url route kertashvs, maka query akan query all record

    }

    // method untuk edit data kertashvs
    public function edit($id)
    {
        // mengambil data kertashvs berdasarkan id yang dipilih
        $kertashvs = DB::table('kertashvs')->where('kodekertashvs',$id)->get();
        // passing data kertashvs yang didapat ke view edit.blade.php
        return view('editKertasHVS',['kertashvs' => $kertashvs]);

    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('kertashvs')->where('kodekertashvs',$request->id)->update([
            'merkkertashvs' => $request->merk,
            'stockkertashvs' => $request->stock,
            'tersedia' => $request->has('aman') ? 'y' : 'n'
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/kertashvs');
    }

        // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('kertashvs')->where('kodekertashvs',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/kertashvs');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kertashvs = DB::table('kertashvs')
		->where('merkkertashvs','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexKertasHVS', ['kertashvs' => $kertashvs]);

	}

    public function view($id){
        // mengambil data dari table kertashvs sesuai id
        $kertashvs = DB::table('kertashvs')
        ->where('kodekertashvs', $id)
        ->get();

        return view('viewKertasHVS', ['kertashvs' => $kertashvs]);
    }

}
