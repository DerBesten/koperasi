<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Komentar;
use App\Operation;
use App\Group;
use Excel;
use Charts;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class DataController extends Controller
{
    //
    public function index()
    {
      # code...
      $karyawan = Data::orderBy('nama', 'asc')->paginate(999);

      return view('karyawan.index', ['karyawan' => $karyawan]);
    }

    public function detail($id)
    {
      # code...
      // $harian = Carbon::today('Asia/Jakarta');
      date_default_timezone_set('Asia/Jakarta');
      $tahun = date('Y');
      $bulan = date('m');
      $hari = cal_days_in_month(CAL_GREGORIAN, $bulan,$tahun);
      $harian = $tahun.'-'.$bulan.'-'.$hari;

      $jan_awal = $tahun.'-'.'01'.'-'.'01'; $jan_akhir = $tahun.'-'.'01'.'-'.$hari;
      $feb_awal = $tahun.'-'.'02'.'-'.'01'; $feb_akhir = $tahun.'-'.'02'.'-'.$hari;
      $mar_awal = $tahun.'-'.'03'.'-'.'01'; $mar_akhir = $tahun.'-'.'03'.'-'.$hari;
      $apr_awal = $tahun.'-'.'04'.'-'.'01'; $apr_akhir = $tahun.'-'.'04'.'-'.$hari;
      $mei_awal = $tahun.'-'.'05'.'-'.'01'; $mei_akhir = $tahun.'-'.'05'.'-'.$hari;
      $jun_awal = $tahun.'-'.'06'.'-'.'01'; $jun_akhir = $tahun.'-'.'06'.'-'.$hari;
      $jul_awal = $tahun.'-'.'07'.'-'.'01'; $jul_akhir = $tahun.'-'.'07'.'-'.$hari;
      $agu_awal = $tahun.'-'.'08'.'-'.'01'; $agu_akhir = $tahun.'-'.'08'.'-'.$hari;
      $sep_awal = $tahun.'-'.'09'.'-'.'01'; $sep_akhir = $tahun.'-'.'09'.'-'.$hari;
      $okt_awal = $tahun.'-'.'10'.'-'.'01'; $okt_akhir = $tahun.'-'.'10'.'-'.$hari;
      $nov_awal = $tahun.'-'.'11'.'-'.'01'; $nov_akhir = $tahun.'-'.'11'.'-'.$hari;
      $des_awal = $tahun.'-'.'12'.'-'.'01'; $des_akhir = $tahun.'-'.'12'.'-'.$hari;

      $kar = Data::findOrFail($id);

      $comment = Komentar::whereKomentarCaddyId($kar->caddy_id)->get();

      $golfer = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal',$harian)->get();

      $jan = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$jan_awal)->where('tanggal','<=',$jan_akhir)->count();
      $feb = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$feb_awal)->where('tanggal','<=',$feb_akhir)->count();
      $mar = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$mar_awal)->where('tanggal','<=',$mar_akhir)->count();
      $apr = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$apr_awal)->where('tanggal','<=',$apr_akhir)->count();
      $mei = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$mei_awal)->where('tanggal','<=',$mei_akhir)->count();
      $jun = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$jun_awal)->where('tanggal','<=',$jun_akhir)->count();
      $jul = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$jul_awal)->where('tanggal','<=',$jul_akhir)->count();
      $agu = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$agu_awal)->where('tanggal','<=',$agu_akhir)->count();
      $sep = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$sep_awal)->where('tanggal','<=',$sep_akhir)->count();
      $okt = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$okt_awal)->where('tanggal','<=',$okt_akhir)->count();
      $nov = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$nov_awal)->where('tanggal','<=',$nov_akhir)->count();
      $des = Operation::whereOperationsCaddyId($kar->caddy_id)->where('tanggal','>=',$des_awal)->where('tanggal','<=',$des_akhir)->count();
      // $comment->whereDay('created_at', '=', date('d'));
      // $chart = Charts::database(Data::findOrFail($id), 'line', 'highcharts')
      //   ->elementLabel("Performance")
      //   ->labels($kar->pluck('nama'))
      //   ->values($kar->pluck('performance'))
      //   ->responsive(false);

      return view('karyawan.detail', ['kar' => $kar, 'komentar' => $comment,'golf' => $golfer,'jan' => $jan,
                  'feb' => $feb, 'mar' => $mar, 'apr' => $apr, 'mei' => $mei, 'jun' => $jun, 'jul' => $jul, 'agu' => $agu,
                  'sep' => $sep, 'okt' => $okt, 'nov' => $nov, 'des' => $des]);
    }

    public function create()
    {
      # code...
      $group = Group::all();
      return view('karyawan.create', ['group' =>$group]);
    }
    public function save(Request $req)
    {
        $gambar = $req->file('photo')->getClientOriginalName();
        $filename = $req->file('photo')->move('portraits', $gambar);
        # code...
        $d = new Data;
        $d->nama = $req->nama;
        $d->email = $req->email;
        $d->tanggal_lahir = $req->tgll;
        $d->tempat_lahir = $req->tmpt;
        $d->kelamin = $req->kelamin;
        $d->alamat = $req->alamat;
        $d->pekerjaan = $req->pekerjaan;
        $d->perusahaan = $req->perusahaan;
        $d->bio = $req->bio;
        $d->tlp = $req->tlp;
        $d->group = $req->group;
        $d->status_perkawinan = $req->statusp;
        $d->status = $req->status;
        // $this->validate($req, [
        //     'photo' => 'required|image', 'mimes:jpg,jpeg,JPEG,png,gif,bmp', 'max:2024',
        //     ]);
        // $gambar = $req->file('photo');
        // $namaFile = $gambar->getClientOriginalName();
        // $req->file('photo')->move('portraits', $namaFile);
        $d->photo = $filename;

        $d->save();

      return redirect('karyawan');
    }

    public function edit($id)
    {
      # code...
      $kar = Data::findOrFail($id);
      $group = Group::all();

      return view('karyawan.edit', ['kar' => $kar, 'group' => $group]);
    }

    public function update(Request $r)
    {
      # code...
      $id = $r->input('id');
      $k = Data::findOrFail($id);
      $k->nama = $r->nama;
      $k->email = $r->email;
      $k->tanggal_lahir = $r->tgll;
      $k->tempat_lahir = $r->tmpt;
      $k->agama =  $r->agama;
      $k->kelamin = $r->kelamin;
      $k->alamat = $r->alamat;
      $k->pekerjaan = $r->pekerjaan;
      $k->perusahaan = $r->perusahaan;
      $k->bio = $r->bio;
      $k->tlp = $r->tlp;
      $k->group = $r->group;
      $k->status_perkawinan = $r->statusp;
      $k->status = $r->status;
      if($r->file('photo') == "")
      {
        $k->photo = $k->photo;
      }
      else {
        $gambar = $r->file('photo')->getClientOriginalName();
        $filename = $r->file('photo')->move('portraits', $gambar);
        // $this->validate($req, [
        //     'photo' => 'required|image', 'mimes:jpg,jpeg,JPEG,png,gif,bmp', 'max:2024',
        //     ]);
        // $gambar = $req->file('photo');
        // $namaFile = $gambar->getClientOriginalName();
        // $req->file('photo')->move('public/portraits', $namaFile);
        $k->photo = $filename;
      }

      $k->save();

      return redirect('karyawan');
    }

    public function delete($id)
    {
      # code...
      $k = Data::findOrFail($id);

      $k->delete();

      return redirect('karyawan');
    }

    public function upload()
    {
      # code...
      return view('karyawan.import');
    }

    public function import()
    {
      if(Input::hasFile('datab'))
      {
        $path = Input::file('datab')->getRealPath();
        $data = \Excel::load($path, function($reader){
        })->get();
        if(!empty($data) && $data->count())
        {
          foreach ($data as $key => $value)
          {
            $insert[] = ['nama' => $value->nama,
                        'email' => $value->email,
                        'tanggal_lahir' => $value->tanggal_lahir,
                        'tempat_lahir' => $value->tempat_lahir,
                        'agama' =>  $value->agama,
                        'alamat' => $value->alamat,
                        'alamat_ktp' => $value->alamat_ktp,
                        'pekerjaan' => $value->jabatan,
                        'tlp' => $value->tlp,
                        'status_perkawinan' => $value->status_perkawinan,
                        'status' => $value->keterangan,
                        'group' => $value->group,
                        'kelamin' => $value->kelamin,
                        ];
          }
          if(!empty($insert))
          {
            \DB::table('data')->insert($insert);

          }
        }
      }
      return redirect('karyawan');
    }

    public function active($id)
    {
      $da = Data::find($id);
      $da->status = 1;
      $da->save();

      return redirect(url('karyawan'));
    }

    public function notactive($id)
    {
      $da = Data::find($id);
      $da->status = 2;
      $da->save();

      return redirect(url('karyawan'));
    }

    public function booking($id)
    {
      $da = Data::find($id);
      $da->status = 3;
      $da->save();

      return redirect(url('karyawan'));
    }
}
