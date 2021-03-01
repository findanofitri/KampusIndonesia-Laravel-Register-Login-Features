<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('user');
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){

        if($validation->fails()) {
            $errors = $validator->errors();
            $errors = json_decode($errors); 
            return response()->json([
                'success' => false,
                'message' => $errors
            ], 422);
        } 

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            // return redirect()->intended('/');

            return response()->json([
                'success' => true,
                'message' => 'berhasil'
            ], 200);
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            // 'nama' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new User();
        // $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}