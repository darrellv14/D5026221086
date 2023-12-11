<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{
    public function index(){
        $shoppingcart = DB::table('shoppingcart')->get();
        return view('indexshoppingcart', ['shoppingcart' => $shoppingcart]);
    }

    public function tambah(){

        // memanggil view tambah
        return view('tambahshoppingcart');
    }

    public function store(Request $request){
        // insert data ke table pegawai
        DB::table('shoppingcart')-> insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
        ]);
        return redirect('/shoppingcart');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('shoppingcart')->where('id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/shoppingcart');
    }
}
