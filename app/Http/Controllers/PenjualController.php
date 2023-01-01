<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjual;

class PenjualController extends Controller
{
    public function buat()
    {
        return view ("penjual.form-input");
    }
    public function simpan( Request $request )
    {

        $user = new User();
        $user->name = $request ->get ("nama");
        $user->username = $request ->get ("username");
        $user->email = $request ->get ("email");
        $user->password = $request ->get ("password");
        $user->level = 1;
        $user->save();

        $penjual = new Costumer();

        $penjual -> id_user = $user->id;
        $penjual -> no_hp = $request ->get ("no_hp");
        $penjual -> email = $request ->get ("email");

        $penjual->save();
        
        return redirect(route("tampil_penjual",['id'=> $penjual -> id])) ;

    }
    public function tampil($id)
    {
        $penjual = Penjual::find($id);

        return view ("penjual.tampil")->with("penjual",$penjual);

    }
    public function semua()
    {
        $data= Penjual::all();

        return view ("penjual.semua")->with("data",$data);
        
    }
    public function ubah($id)
    {
        $kategori= Penjual::find($id);

        return view ("penjual.form-edit")->with("id",$id);
        
    }
    public function update(Request $request, $id)
    {
        $penjual = Penjual::find($id);
        $penjual -> no_hp = $request ->get ("no_hp");
        $penjual -> email = $request ->get ("email");
        $penjual->save();

        return redirect(route("tampil_penjual",['id'=> $penjual -> id])) ;
    }
    public function hapus($id)
    {
        Penjual::destroy($id);

        return redirect(route('semua_penjual'));
        
    }
}
