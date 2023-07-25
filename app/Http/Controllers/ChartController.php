<?php

namespace App\Http\Controllers;
use App\Models\Courrierarr;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    //
    public function loadChartData()
    {
      $courrierarrs = Courrierarr::select('numCr as courrier')->pluck('courrier');

      return view('chart', ['courrierarrs'=>$courrierarrs]);

    }
}
