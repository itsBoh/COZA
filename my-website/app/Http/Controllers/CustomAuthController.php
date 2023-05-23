<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    //
    public function login(){
        return view("login");
    }
    public function registration(){
        return view("Registrasi");
    }
    public function registerUser(Request $request){
        $data = $request->only(['CUST_NAME','CUST_PASSWORD','CUST_EMAIL','CUST_USERNAME','cust_phone','CUST_ADDRESS','CUST_GENDER']);
        customer::create($data);
        return view('index');
    }
}