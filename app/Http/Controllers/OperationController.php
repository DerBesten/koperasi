<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
use App\Data;

class OperationController extends Controller
{
    //
    public function index()
    {
      # code...
      $kar = Data::all();

      return view('work.index', ['kar' => $kar]);
    }

    public function save(Request $r)
    {
      # code...
      $k = new Operation;
      $k->operations_caddy_id = $r->input('data_id');
      $k->nama_golfer = $r->input('nama');
      $k->tanggal = date('Y-m-d H:i:s');

      $k->save();
      return redirect('work');
    }
}
