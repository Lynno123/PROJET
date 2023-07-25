<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courrierarr;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $courrierarrs = Courrierarr::get();

        $data = [
            'title' => 'Liste des branches',
            'date' => date('m/d/Y'),
            'courrierarrs' => $courrierarrs
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('laraveltuts.pdf');
    }
}
