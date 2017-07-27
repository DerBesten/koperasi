<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;
use App\Group;

class WelcomeController extends Controller
{
    //
    public function index()
    {
      # code...
      $kar = Data::orderBy('updated_at', 'asc')->paginate(999);
      $count = 0;
      foreach ($kar as $key => $value) {
        if ($value->status == 1) {
          $count += 1;
        }
      }

      return view('welcome',['kar' => $kar, 'count' => $count]);
    }

    public function indexGroup()
    {
      # code...
      $group = Group::all();

      return view('activasi.index', ['group' => $group]);
    }

    public function update(Request $r)
    {
      # code...
      $g = $r->input('group');
      $gr = Data::where('group', $g)->get();
      foreach ($gr as $key => $value) {
        $value->status = $r->input('status');
        $value->save();
      }


      return redirect('activasi');
    }
}
