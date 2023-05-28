<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function Checkout($id){
        $phone = DB::table('phone')
        ->where('id','=',$id)
        ->first();
        return view('checkout', ['phone' => $phone]);
    }

    public function PhoneType(){
        $phone = DB::table('phone')->get();
        return view('phone', ['phone' => $phone]);
    }
}
