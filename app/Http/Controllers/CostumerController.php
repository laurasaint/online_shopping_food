<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumer;
use App\Models\User;

class CostumerController extends Controller
{
    public function buat()
    {
        return view ("costumer.form-input");
    }
    public function simpan( Request $request )
    {
        $user = new User();
        $user->name = $request ->get ("nama");
        $user->username = $request ->get ("username");
        $user->email = $request ->get ("email");
        $user->password = $request ->get ("password");
        $user->level = 2;
        $user->save();

        $costumer = new Costumer();

        $costumer -> id_user = $user->id;
        $costumer -> no_hp = $request ->get ("no_hp");
        $costumer -> email = $request ->get ("email");

        $costumer->save();
        return redirect(route("semua_costumer")) ;
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
