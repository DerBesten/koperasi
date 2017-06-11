<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use App\Data;

class KomentarController extends Controller
{
    public function index()
    {
      # code...
      $karyawan = Data::all();
      return view('comment.index', ['data' => $karyawan]);
    }

    public function ajaxKode(Request $req)
    {
      # code...
      $nama_caddy = Data::where('nama', $req->nama)->first();

      return $nama_caddy;
    }

    public function save(Request $r)
    {
      # code...
      $comment = new Komentar;
      $comment->komentar_caddy_id = $r->input('data_id');
      $comment->komentar_nama = $r->input('nama');
      $comment->komentar_isi = $r->input('isi');
      $comment->komentar_status = $r->input('status');
      $comment->komentar_tglinput = date('Y-m-d H:i:s');
      $comment->save();

      return redirect('comment');
    }

    public function delete($id)
    {
      Komentar::find($id)->delete();

      return redirect(url('comments'));
    }
}
