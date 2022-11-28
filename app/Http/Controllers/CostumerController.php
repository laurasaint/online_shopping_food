<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumer;

class CostumerController extends Controller
{
    public function buat()
    {
        return view ("costumer.form-input");
    }
    public function simpan( Request $request )
    {
        $costumer = new Costumer();
        $costumer -> id_user = $request ->get ("id_user");
        $costumer -> id = $request ->get ("id");
        $costumer -> no_hp = $request ->get ("no_hp");
        $costumer -> email = $request ->get ("email");

        $costumer->save();
        return redirect(route("tampil_costumer",['id'=> $costumer -> id])) ;
    }
    public function tampil($id)
    {
        $costumer= Costumer::find($id);

        return view ("costumer.tampil")->with("costumer",$costumer);

    }
    public function semua()
    {
        $data= Costumer::all();

        return view ("costumer.semua")->with("data",$data);
        
    }
    public function ubah($id)
    {
        $kategori= Costumer::find($id);

        return view ("costumer.form-edit")->with("id",$id);
        
    }
    public function update(Request $request, $id)
    {
        $costumer = Costumer::find($id);
        $costumer -> id_user = $request ->get ("id_user");
        $costumer -> id = $request ->get ("id");
        $costumer -> no_hp = $request ->get ("no_hp");
        $costumer -> email = $request ->get ("email");
        $costumer->save();

        return redirect(route("tampil_costumer",['id'=> $costumer -> id])) ;
    }
    public function hapus($id)
    {
        Costumer::destroy($id);

        return redirect(route('semua_costumer'));
        
    }
}
