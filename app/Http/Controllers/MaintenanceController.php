<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Componen;
use App\Models\Komputer;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;


class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        $komputers = Komputer::with('componen', 'kegiatan')->find($id);
        // dd($komputers);

        return view('read.index', compact('komputers'));
    }

    public function exportPDF($id)
    {   
        $komputers = Komputer::with('componen', 'kegiatan')->find($id);
         if (!$komputers) {
            // Handle jika Komputer dengan ID yang diberikan tidak ditemukan
            abort(404);
         }
        $pdf = Pdf::loadView('pdf.export_pdf', ['komputers'=>$komputers]);
        
        $fileName = 'Maintenance PC'. $komputers->id . '.pdf';
        return $pdf->stream($fileName);
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
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cr $cr)
    {
        //
    }
}
