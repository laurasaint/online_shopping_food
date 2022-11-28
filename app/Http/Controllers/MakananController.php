<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;

class MakananController extends Controller
{
    public function buat()
    {
        return view ("makanan.form-input");
    }
    public function simpan( Request $request )
    {
        $makanan = new Makanan();
        $makanan -> id = $request ->get ("id");
        $makanan -> harga = $request ->get ("harga");
        $makanan -> banyak_persediaan = $request ->get ("banyak_persediaan");
        $makanan -> nama_makanan = $request ->get ("nama_makanan");
        $makanan -> diskon = $request ->get ("diskon");
        $makanan -> deskripsi = $request ->get ("deskripsi");
        $makanan -> count = $request ->get ("count");
        $makanan->save();
        return redirect(route("tampil_makanan",['id'=> $makanan -> id])) ;
    }
    public function tampil($id)
    {
        $makanan= Makanan::find($id);

        return view ("makanan.tampil")->with("makanan",$makanan);

    }
    public function semua()
    {
        $data= Makanan::all();

        return view ("makanan.semua")->with("data",$data);
        
    }
    public function ubah($id)
    {
        $kategori=  Makanan::find($id);

        return view ("makanan.form-edit")->with("id",$id);
        
    }
    public function update(Request $request, $id)
    {
        $makanan = Makanan::find($id);
        $makanan -> id = $request ->get ("id");
        $makanan -> harga = $request ->get ("harga");
        $makanan -> banyak_persediaan = $request ->get ("banyak_persediaan");
        $makanan -> nama_makanan = $request ->get ("nama_makanan");
        $makanan -> diskon = $request ->get ("diskon");
        $makanan -> deskripsi = $request ->get ("deskripsi");
        $makanan -> count = $request ->get ("count");
        $makanan->save();

        return redirect(route("tampil_makanan",['id'=> $makanan -> id])) ;
    }
    public function hapus($id)
    {
        Makanan::destroy($id);

        return redirect(route('semua_makanan'));
        
    }
}
