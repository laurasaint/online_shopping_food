<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;//import data user
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
public function tampil(){
    $data_user = User::all();
    return view ("tampil-user")
    ->with("data_user",$data_user);
}
public function formInput() // Hanya Tampilan Form
{ 
    return view( view:"user.form");
}

public function simpan(UserRequest $request )
{
    $user = new User();

    $user->name = $request->get("name");
    $user->username = $request->get("username");
    $user->email = $request->get("email");
    $user->password = $request->get("password");
    $user->save();

    return redirect(route("user_all"));
}
public function formEdit($id)
{
    return view ("user.update")->with("id", $id);
    
}
public function update(UserRequest $request, $id )
{
    $user = User::find($id);
    $user->username = $request->get("username");
    $user->email = $request->get("email");
    $user->password = $request->get("password");
    $user->save();

    return redirect(route("user_all"));
}
public function hapus ($id) {
    User::destroy($id);
    return redirect(route("user_all"));
}
public function show($id){
    $data_user = User::find($id);
    return view ("user.show")
    ->with("data_user",$data_user);
}

// public function edit ($id)
// {
//    $user = User::select("*")
//              ->where("id", $id)
//              ->get();

//    return view("edit", ["id" => $id]);
// }

// public function update (Request $request)
// {
//    $user = User::where("id", $request->id)
//              ->update([
//                     "name" => $request->name,
//                     "email" => $request->email,
//                     "password" => $request->password,
//                     "level" => $request->level,
//              ]);

//    return redirect()->route("user");
// }
}