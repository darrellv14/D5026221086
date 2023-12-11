<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    public function index()
    {
    	$karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexkaryawan',['karyawan' => $karyawan]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

	// memanggil view tambah
	return view('tambahkaryawan');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');

    }

        // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
    }

    public function view($id){
        // mengambil data dari table pegawai sesuai id
        $karyawan = DB::table('karyawan')
        ->where('kodepegawai', $id)
        ->get();

        return view('viewkaryawan', ['karyawan' => $karyawan]);
    }

    public function edit($id)
    {
        // mengambil data kertashvs berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan')->where('kodepegawai',$id)->get();
        // passing data kertashvs yang didapat ke view edit.blade.php
        return view('editkaryawan',['karyawan' => $karyawan]);

    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('karyawan')->where('kodepegawai',$request->id)->update([
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
    }
}
