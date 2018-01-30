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
      $k->nama_caddy = $r->input('nama_caddy');
      $k->nama_golfer = $r->input('nama');
      $k->no_bagtag = $r->input('nb');
      $k->clubs = $r->input('clubs');
      $k->tanggal = date('Y-m-d');

      $d->save() && $k->save();

      return redirect('/');
    }

    public function halamanedit()
    {
      # code...
      date_default_timezone_set('Asia/Jakarta');
      $tahun = date('Y');
      $bulan = date('m');
      $har = date('d');
      $harian = $tahun.'-'.$bulan.'-'.$har;

      // $jan = Operation::where('tanggal','=',$harian)->get();
      $jan = operation::all();

      return view('work.haledit', ['jan' => $jan]);

    }

    public function edit(Request $req, $id)
    {
      # code...
      $kar = Data::where('status', 1)->get();
      $operation = Operation::findOrFail($id);

      return view('work.edit', ['operation' => $operation, 'kar' => $kar]);
    }

    public function ajaxKode(Request $req)
    {
      # code...
      $nama_cad = Data::where('nama', $req->nama)->first();

      return $nama_cad;
    }

    public function update(Request $r)
    {
      # code...
      date_default_timezone_set('Asia/Jakarta');
      $id3 = $r->input('this_id');
      $k = Operation::findOrFail($id3);
      $id = $r->input('data_id');
      $id2 = $r->input('before_id');
      $d = Data::find($id);
      $d2 = Data::find($id2);

      $d2->status = 1;
      $d->status = 3;

      $k->operations_caddy_id = $r->input('data_id');
      $k->nama_caddy = $r->input('nama_caddy');
      $k->nama_golfer = $r->input('nama');
      $k->no_bagtag = $r->input('nb');
      $k->clubs = $r->input('clubs');
      $k->tanggal = date('Y-m-d');

      $d->save() && $d2->save() && $k->save();

      return redirect('work/haledit');
    }

    public function delete($id)
    {
      date_default_timezone_set('Asia/Jakarta');
      $k = Operation::findOrFail($id);

      $k->delete();

      return redirect('work/haledit');
    }
}
