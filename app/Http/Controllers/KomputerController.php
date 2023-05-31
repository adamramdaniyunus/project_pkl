<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use Illuminate\Http\Request;

class KomputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $komputers = Komputer::all();
        // $title = 'Hapus PC!';
        // $text = "Apakah kamu yakin mau menghapus?";
        // confirmDelete($title, $text);

        return view('hardware', compact('komputers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        //
       // $komputer = new Komputer;
       //  $komputer->user = $req->input('user');
       //  $komputer->nama_pc = $req->input('nama_pc');
       //  $komputer->pengecekan = $req->input('pengecekan');
       //  $komputer->tanggal = $req->input('tanggal');
       //  $komputer->jam = $req->input('jam');
       //  $komputer->save();

       //  return redirect('/');
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
    public function show(Komputer $komputer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $req, $id)
    {
        //
        $komputer = Komputer::find($id);
        if (!$komputer) {
           return redirect('/hardware')->with('error', 'Data komputer tidak ditemukan.');
        }

        return view('update.update_komputer', compact('komputer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'user'=>'nullable',
            'nama_pc'=>'nullable',
            'pengecekan'=>'nullable',
            'tanggal'=>'nullable',
            'jam'=>'nullable',
        ]);

        $komputer = Komputer::find($id);

        $komputer->user = $request->input('user');
        $komputer->nama_pc = $request->input('nama_pc');
        $komputer->pengecekan = $request->input('pengecekan');
        $komputer->tanggal = $request->input('tanggal');
        $komputer->jam = $request->input('jam');

        $komputer->save();

        return redirect('/daftar_pc')->with('success', 'Data komputer berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Komputer $komputer)
    {
        //
    }
}
