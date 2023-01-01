<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;
use App\Models\Kategori;
class MakananController extends Controller
{
    public function buat()
    {
        $kategori = Kategori::all();
        return view ("makanan.form-input")->with(["data"=>$kategori]);
    }
    public function simpan( Request $request )
    {
        $makanan = new Makanan();
        $makanan -> id_user = auth()->user()->id;
        $makanan -> harga = $request ->get ("harga");
        $makanan -> banyak_persediaan = $request ->get ("banyak_persediaan");
        $makanan -> nama_makanan = $request ->get ("nama_makanan");
        $makanan -> diskon = $request ->get ("diskon");
        $makanan -> deskripsi = $request ->get ("deskripsi");
        $makanan -> id_kategori = $request ->get ("kategori");
        $makanan -> count = $request ->get ("count");
        $makanan->save();
        return redirect(route("semua_makanan")) ;
    }
    public function tampil($id)
    {
        $makanan= Makanan::join("kategori", "makanan.id_kategori", "=", "kategori.id")->where("makanan.id", $id)->get(["makanan.*", "kategori.kategori"])->first();
        #dd($makanan);
        return view ("makanan.tampil")->with("makanan",$makanan);

    }
    public function semua()
    {
        $data= Makanan::join("kategori", "makanan.id_kategori", "=", "kategori.id")->get(["makanan.*", "kategori.kategori"]);

        return view ("makanan.semua")->with("data",$data);
        
    }
    public function ubah($id)
    {
        $kategori = Kategori::all();
        return view ("makanan.form-edit")->with(["id"=>$id, "kategori"=>$kategori]);
        
    }
    public function update(Request $request, $id)
    {
        $makanan = Makanan::find($id);
        $makanan -> harga = $request ->get ("harga");
        $makanan -> banyak_persediaan = $request ->get ("banyak_persediaan");
        $makanan -> nama_makanan = $request ->get ("nama_makanan");
        $makanan -> diskon = $request ->get ("diskon");
        $makanan -> deskripsi = $request ->get ("deskripsi");
        $makanan -> id_kategori = $request ->get ("kategori");
        $makanan -> count = $request ->get ("count");
        $makanan->save();

        return redirect(route("semua_makanan")) ;
    }
    public function hapus($id)
    {
        Makanan::destroy($id);

        return redirect(route('semua_makanan'));
        
    }
}
