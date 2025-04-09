<?php

namespace App\Http\Controllers;

use App\Models\lapor_ptpp;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PtppPdfController extends Controller
{
    public function show($id)
    {
        $ptpp = lapor_ptpp::findOrFail($id);
        return view('pdf.ptpp-view', compact('ptpp'));
    }

    public function download($id)
    {
        // Ambil data dari database
        $ptpp = lapor_ptpp::findOrFail($id);

        // Siapkan view dengan data
        $html = view('pdf.ptpp-template', compact('ptpp'))->render();

        // Buat PDF dengan cara alternatif
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML($html);
        $pdf->setPaper('a4', 'portrait');

        // Konfigurasi tambahan
        $pdf->getDomPDF()->getOptions()->setIsPhpEnabled(false);
        $pdf->getDomPDF()->getOptions()->setIsHtml5ParserEnabled(true);
        $pdf->getDomPDF()->getOptions()->setIsFontSubsettingEnabled(true);

        // Download file
        return $pdf->download('PTPP-' . $ptpp->id . '.pdf');
    }

    public function stream($id)
    {
        $ptpp = lapor_ptpp::findOrFail($id);
        $html = view('pdf.ptpp-template', compact('ptpp'))->render();

        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML($html);
        $pdf->setPaper('a4', 'portrait');

        $pdf->getDomPDF()->getOptions()->setIsPhpEnabled(false);
        $pdf->getDomPDF()->getOptions()->setIsHtml5ParserEnabled(true);
        $pdf->getDomPDF()->getOptions()->setIsFontSubsettingEnabled(true);

        return $pdf->stream('PTPP-' . $ptpp->id . '.pdf');
    }
}
