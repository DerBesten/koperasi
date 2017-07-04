<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use App\Data;
use App\Operation;

class KomentarController extends Controller
{
    public function index()
    {
      # code...
      $karyawan = Data::where('status', '3')->get();
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
      $id = $r->input('data_id');
      $comment = new Komentar;
      $rating = Data::find($id);
      $comment->komentar_caddy_id = $r->input('data_id');
      $comment->komentar_nama = $r->input('nama');
      $comment->komentar_isi = $r->input('isi');
      $comment->komentar_status = $r->input('status');
      $rating->rating = $rating->rating + $r->input('rating') /
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
