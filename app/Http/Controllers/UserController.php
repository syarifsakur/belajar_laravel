<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\list_buku;

class UserController extends Controller
{
    function index(){
     return view('login');
    }
    function showregister(){
        return view('register');
    }
    
    
    function register(Request $request){
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
        ],[
            'username.required'=>'username wajib di isi',
            'password.required'=>'password wajib di isi',
            'username.unique'=>'username sudah terdaftar'
        ]);

        $users = User::create([
            'username' => $request->input('username'),
            'password' => hash::make($request->input('password')),
            'role' => 'user',
        ]);
        return redirect('/')->with('success', 'Registrasi berhasil. Silakan login dengan akun yang telah dibuat.');
    }

    function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password'=>'required',
        ],[
            'username.required'=>'username wajib di isi',
            'password.required'=>'password wajib di isi',
        ]);
        
        $infologin = [
            'username' =>$request->username,
            'password' => $request->password,
        ];
        
        if(Auth::attempt($infologin)){
            if(auth::user()->role === 'admin'){
                return redirect('/admindashboard');
            }else{
                return redirect('/userdashboard');
            }
        }
        else {
            if (!User::where('username', $request->username)->exists()) {
                return redirect()->back()->withInput()->withErrors(['username' => 'Username tidak terdaftar']);
            } else {
                return redirect()->back()->withInput()->withErrors(['password' => 'Password salah!']);
            }
        }

    }

    // function dashboard(){
    //     return view('userdashboard',[
    //         "title"=>"listbuku",
    //         "userdashboard"=>ListBuku::all()
    //     ]);
    // }

}
