<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Komputer;
use App\Models\Componen;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('create.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $req->validate([
            'komputer.user' => 'required',
            'komputer.nama_pc' => 'required',
            'komputer.pengecekan' => 'nullable',
            'komputer.tanggal' => 'required',
            'komputer.jam' => 'required',
            'componen.*.komponen'=> 'required',
            'kegiatan.*.uraian_kegiatan'=> 'required',
            'kegiatan.*.cek'=> 'required',
            'kegiatan.*.status'=> 'required',
            'kegiatan.*.catatan'=> 'required',
            'kegiatan.*.hasil'=> 'required',
        ]);

        // membuat data komputer
        $komputer = Komputer::create($req['komputer']);
        $results = []; 
        $componens = [];

        // membuat multiple input
        foreach($req->componen as $key => $value) {
            $value['komputer_id'] = $komputer->id;
            $resultComp = Componen::create($value);
            $componens[] = $resultComp;
        }

        foreach($req->kegiatan as $key => $value) {
            $value['komputer_id'] = $komputer->id;
            $result = Kegiatan::create($value);
            $results[] = $result;
        }


        return redirect('/daftar_pc')->with('results', $results)->withToastSuccess('Data Berhasil disave!');

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
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
         $id = $request->id;
       DB::transaction(function () use ($id) {
        // Menghapus data dari tabel 'componens' yang berhubungan dengan 'komputers'
        DB::table('componens')
            ->where('komputer_id', $id)
            ->delete();

        // Menghapus data dari tabel 'kegiatans' yang berhubungan dengan 'komputers'
        DB::table('kegiatans')
            ->where('komputer_id', $id)
            ->delete();

        // Menghapus data dari tabel 'komputers'
        DB::table('komputers')
            ->where('id', $id)
            ->delete();
    });
       
       
        // $title = 'Hapus PC';
        // $text = "Apakah yakin akan menghapus?";
        // confirmDelete($title, $text);

        return redirect('/daftar_pc')->withToastSuccess('Data Berhasil dihapus!');
    }
}
