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
      $nama_caddy = Data::where('status', 3)->where('nama', $req->nama)->first();

      return $nama_caddy;
    }

    public function save(Request $r)
    {
      # code...
      date_default_timezone_set('Asia/Jakarta');
      $tahun = date('Y');
      $bulan = date('m');
      $hari = cal_days_in_month(CAL_GREGORIAN, $bulan,$tahun);
      $tglr_awal = $tahun.'-'.$bulan.'-'.'01'; $tglr_akhir = $tahun.'-'.$bulan.'-'.'31';

      $comment = new Komentar;
      $id = $r->input('data_id');
      $d = Data::find($id);

      $d->status = 2;
      $c = round(($d->rating + $r->input('rating')) / 2, 1);
      $d->rating = $c;

      $comment->komentar_caddy_id = $r->input('data_id');
      $comment->komentar_nama = $r->input('nama');
      $comment->komentar_isi = $r->input('isi');
      $comment->komentar_status = $r->input('status');
      $comment->komentar_tglinput = date('Y-m-d H:i:s');

      $comment->save() && $d->save();

      return redirect('comment');
    }

    public function delete($id)
    {
      Komentar::find($id)->delete();

      return redirect(url('comments'));
    }


}
