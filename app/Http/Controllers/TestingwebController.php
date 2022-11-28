<?php
namespace App\Http\Controllers;

class TestingwebController extends Controller

{
    function myskincare($nama){
        return view ("myskincare")
        ->with("nama",$nama)
        ->with("face", $face = "test");
    
    }
    function menu(){
        return view ("menu");
    }
    function utama(){
        return view ("utama");
    }
    function skincare(){
        return view ("skincare");
    }
    function chat(){
        return view ("chat");
    }
} 