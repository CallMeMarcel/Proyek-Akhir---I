<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
        return view ('admin.dashboard');
    }

    public function Login(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $required = [
                'email' => 'required',
                'password' => 'required|min:6',
            ];
            $message = [
                'email.required' => 'Email harus diisi',
                'password.required' => 'Password harus diisi',
                'password.min' => 'Password minimal 6 karakter',
            ];
            $this->validate($request, $required, $message);
            
            if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']]))
            {
                return redirect('admin/dashboard')->with('success_message', 'Login Berhasil!');
            }
            else
            {
                return redirect()->back()->with('message', 'Invalid Login');
            }
        }
        return view ('login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $required = [
                'nama' => 'required|regex:/^[\pL\s\-]+$/u',
                'username' => 'required|max:20|unique:admins',
                'password' => 'required|min:8',
            ];

            $message = [
                'nama.required' => 'Nama tidak boleh kosong',
                'nama.regex' => 'Nama tidak boleh menggunakan simbol',
                'username.required' => 'Username tidak boleh kosong',
                'username.max' => 'Username tidak boleh melebihi 20 karakter',
                'username.unique' => 'Username sudah terdaftar',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password harus lebih dari 8 karakter',
            ];

            $this->validate($request, $required, $message);
            Admin::insert([
                'nama' => $request->input('nama'),
                'username' => $request->input('username'),
                'password' => Hash::make($request->input('password')),
            ]);
            return redirect('/admin/login')->with('success_message', 'Admin berhasil didaftarkan ');
        }
        return view('register');
    }

    public function Dashboard() {
        return view('dashboard');
    }

}