<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jumlahData = DB::table('komputers')->count();
        $userId = Auth::user()->id;
        $user = User::where('id', $userId)->first();
        return view('user.index', compact('jumlahData', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('user.edit_password', compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'password'=>'required',
        ]);
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/profile')->with('success', 'Berhasil Memperbarui User');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cr $cr)
    {
        //
    }
}
