<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function tampil(){
        return view('login');
    }
    public function tambah(){
        return view('register');
    }
    public function save(Request $request){
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = 0;

        // 0 = member
        // 1 = admin
        
        $data->save();

        return redirect('/login')->with('success','Registration successfull! Please login');
    }
}