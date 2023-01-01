<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingwebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\SecurityController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", [SecurityController::class,"formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class,"prosesLogin"])->name("proses_login");

Route::middleware("auth")->group(function() {
    
    Route::get("/logout", [SecurityController::class,"logout"])->name("logout");

    Route::get("/tampil-semua-user", [UserController::class,"tampil"])->name("user_all");
    Route::get("/input-user", [UserController::class,"formInput"])->name("user_input");
    Route::post("/simpan-user", [UserController::class,"simpan"])->name("user_simpan");
    Route::get("/edit-user/{id}", [UserController::class,"formEdit"])->name("user_edit");
    Route::put("/update-user/{id}", [UserController::class,"update"])->name("user_update");
    Route::delete("/hapus-user/{id}",[UserController::class,"hapus"] )->name("user_hapus");
    Route::get("/show-user/{id}",[UserController::class,"show"])->name("user_show");

    Route::get("kategori/buat",[KategoriController::class,'buat'])->name("buat_kategori");
    Route::post("kategori/simpan",[KategoriController::class,'simpan'])->name("simpan_kategori");
    Route::get("kategori/tampil/{id}",[KategoriController::class,'tampil'])->name("tampil_kategori");
    Route::get("kategori/semua",[KategoriController::class,'semua'])->name("semua_kategori");
    Route::get("kategori/semua/{id}",[KategoriController::class,'filter'])->name("filter_kategori");
    Route::get("kategori/ubah/{id}",[KategoriController::class,'ubah'])->name("ubah_kategori");
    Route::put("kategori/update{id}",[KategoriController::class,'buat'])->name("update_kategori");
    Route::delete("kategori/hapus/{id}",[KategoriController::class,'hapus'])->name("hapus_kategori");

    Route::get("costumer/buat",[CostumerController::class,'buat'])->name("buat_costumer");
    Route::post("costumer/simpan",[CostumerController::class,'simpan'])->name("simpan_costumer");
    Route::get("costumer/tampil/{id}",[CostumerController::class,'tampil'])->name("tampil_costumer");
    Route::get("costumer/semua",[CostumerController::class,'semua'])->name("semua_costumer");
    Route::get("costumer/ubah/{id}",[CostumerController::class,'ubah'])->name("ubah_costumer");
    Route::put("costumer/update{id}",[CostumeriController::class,'buat'])->name("update_costumer");
    Route::delete("costumer/hapus/{id}",[CostumerController::class,'hapus'])->name("hapus_costumer");

    Route::get("keranjangbelanja/simpan/{id}",[KeranjangBelanjaController::class,'simpan'])->name("simpan_keranjangbelanja");
    Route::get("keranjangbelanja/tampil/{id}",[KeranjangBelanjaController::class,'tampil'])->name("tampil_keranjangbelanja");
    Route::get("keranjangbelanja/semua",[KeranjangBelanjaController::class,'semua'])->name("semua_keranjangbelanja");
    Route::get("keranjangbelanja/ubah/{id}",[KeranjangBelanjaController::class,'ubah'])->name("ubah_keranjangbelanja");
    Route::put("keranjangbelanja/update{id}",[KeranjangBelanjaiController::class,'buat'])->name("update_keranjangbelanja");
    Route::delete("keranjangbelanja/hapus/{id}",[KeranjangBelanjaController::class,'hapus'])->name("hapus_keranjangbelanja");

    Route::get("makanan/buat",[MakananController::class,'buat'])->name("buat_makanan");
    Route::post("makanan/simpan",[MakananController::class,'simpan'])->name("simpan_makanan");
    Route::get("makanan/tampil/{id}",[MakananController::class,'tampil'])->name("tampil_makanan");
    Route::get("makanan/semua",[MakananController::class,'semua'])->name("semua_makanan");
    Route::get("makanan/ubah/{id}",[MakananController::class,'ubah'])->name("ubah_makanan");
    Route::put("makanan/update{id}",[MakananController::class,'buat'])->name("update_makanan");
    Route::delete("makanan/hapus/{id}",[MakananController::class,'hapus'])->name("hapus_makanan");

    Route::get("penjual/buat",[PenjualController::class,'buat'])->name("buat_penjual");
    Route::post("penjual/simpan",[PenjualController::class,'simpan'])->name("simpan_penjual");
    Route::get("penjual/tampil/{id}",[PenjualController::class,'tampil'])->name("tampil_penjual");
    Route::get("penjual/semua",[PenjualController::class,'semua'])->name("semua_penjual");
    Route::get("penjual/ubah/{id}",[PenjualController::class,'ubah'])->name("ubah_penjual");
    Route::delete("penjual/hapus/{id}",[PenjualController::class,'hapus'])->name("hapus_penjual");
});