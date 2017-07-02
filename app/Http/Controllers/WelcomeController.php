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
      $kar = Data::all();

      return view('welcome',['kar' => $kar]);
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
