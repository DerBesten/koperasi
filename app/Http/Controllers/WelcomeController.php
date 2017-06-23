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
      $group = Group::all();

      return view('activasi.index',['group' => $group]);
    }

    public function update(Request $r)
    {
      # code...
      $g = $r->input('group');
      dd($g)
      $gr = Data::where('group', $g)->first();
      $gr->status = $r->status;

      $gr->save();

      return redirect('activasi');
    }
}
