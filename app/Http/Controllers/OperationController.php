<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
use App\Data;

class OperationController extends Controller
{
    //
    public function index($id)
    {
      # code...
      $kar = Data::findOrFail($id);

      return view('work.index', ['kar' => $kar]);
    }

    public function save(Request $r )
    {
      # code...
      date_default_timezone_set('Asia/Jakarta');
      $k = new Operation;
      $id = $r->input('data_id');
      $d = Data::find($id);

      $d->status = 3;

      $k->operations_caddy_id = $r->input('data_id');
      $k->nama_golfer = $r->input('nama');
      $k->tanggal = date('Y-m-d');

      $d->save() && $k->save();

      return redirect('/');
    }
}
