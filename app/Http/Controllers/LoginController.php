<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;


class LoginController extends Controller
{
    //
    public function index() {
        return view('authenticate.login');
    }
    public function landingpage() {
        return view('welcome');
    }

    public function login(Request $req) {
        $login = $req->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($login)){
            return redirect('/')->with('success','Berhasil Login!');
        }else {
            return redirect()->back()->withErrors(['User tidak ditemukan']);
            // return redirect('/akowkoaawoko');
        }
    }

    public function logout(Request $req) {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/landingpage');
    }

    public function register() {
        $role = Role::all();
        return view('authenticate.register', compact('role'));
    }

    public function addUser(Request $req) {
        $user = new User;
        $user->name = $req->input('name');
        $user->password = Hash::make(1234567890);
        $user->role_id = $req->input('role');
        $user->save();

        return redirect('/')->with('success', 'Berhasil menambahkan User!');
    }
}
