<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Komentar;
use App\Operation;
use App\Group;
use Excel;
use PDF;
use Charts;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ReportController extends Controller
{
    //
    public function inputharian()
    {
      # code...
      return view('report.irh');
    }

    public function harianpdf(Request $r)
    {
      # code...
      date_default_timezone_set('Asia/Jakarta');
      $tahun = date('Y');
      $bulan = date('m');
      $har = date('d');
      $hari = date('l');
      $harian = $hari.','.$har.'-'.$bulan.'-'.$tahun;

      $am_start = time('05:00:00');
      $am_end = time('11:00:00');
      $totalam = Operation::where('jam','>=',$am_start)->where('jam','<=',$am_end)->count();
      $data_am = Operation::where('jam','>=',$am_start)->where('jam','<=',$am_end)->get();

      $pm_start = time('11:01:00');
      $pm_end = time('17:00:00');
      $totalpm = Operation::where('jam','>=',$pm_start)->where('jam','<=',$pm_end)->count();
      $data_pm = Operation::where('jam','>=',$pm_start)->where('jam','<=',$pm_end)->get();

      $first = $r->input('tgl');
      $cus = Operation::where('tanggal','=',$r->input('tgl'))->get();
      $customer = Operation::orderBy('no_bagtag', 'asc')->paginate(999);

      $pdf = PDF::loadView('report.harian',compact('cus', 'harian', 'totalam', 'totalpm', 'data_am', 'data_pm'))->setPaper('a4', 'potrait');

      return $pdf->stream();
    }

}
