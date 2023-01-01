<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeranjangBelanja;
use App\Models\Makanan;

class KeranjangBelanjaController extends Controller
{
    public function simpan($id)
    {
        $makanan = Makanan::find($id);
        $keranjangbelanja = new KeranjangBelanja();
        $keranjangbelanja -> total_belanja = $makanan->harga;
        $keranjangbelanja -> jumlah_pembelian = 1;
        $keranjangbelanja -> makanan = $makanan->nama_makanan;
        $keranjangbelanja->save();

        return redirect(route("semua_keranjangbelanja")) ;
        

        #return view ("keranjangbelanja.form-input",['id'=> $id]));
    }
    public function simpan_bak( Request $request )
    {
        $keranjangbelanja = new KeranjangBelanja();
        $keranjangbelanja -> id = $request ->get ("keranjangbelanja");
        $keranjangbelanja -> total_belanja = $request ->get ("keranjangbelanja");
        $keranjangbelanja -> jumlah_pembelian = $request ->get ("keranjangbelanja");
        $keranjangbelanja -> makanan = $request ->get ("keranjangbelanja");
        $keranjangbelanja->save();
        return redirect(route("tampil_keranjangbelanja",['id'=> $keranjangbelanja -> id])) ;
    }
    public function tampil($id)
    {
        $keranjangbelanja= KeranjangBelanja::find($id);

        return view ("keranjangbelanja.tampil")->with("keranjangbelanja",$keranjangbelanja);

    }
    public function semua()
    {
        $data= KeranjangBelanja ::all();

        return view ("keranjangbelanja.semua")->with("data",$data);
        
    }
    public function ubah($id)
    {
        $keranjangbelanja= KeranjangBelanja::find($id);

        return view ("keranjangbelanja.form-edit")->with("id",$id);
        
    }
    public function update(Request $request, $id)
    {
        $keranjangbelanja = KeranjangBelanja::find($id);
        $keranjangbelanja ->keranjangbelanja = $request->get ("keranjangbelanja");
        $keranjangbelanja->save();

        return redirect(route("tampil_keranjangbelanja",['id'=> $keranjangbelanja -> id])) ;
    }
    public function hapus($id)
    {
        KeranjangBelanja::destroy($id);

        return redirect(route('semua_keranjangbelanja'));
        
    }
}
