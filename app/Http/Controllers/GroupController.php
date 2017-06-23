<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    //
    public function index()
    {
      # code...
      $gr = Group::all();

      return view ('group.index', ['gr' => $gr]);
    }

    public function create()
    {
      # code...
      return view('group.create');
    }

    public function save(Request $r)
    {
      # code...
      $gr = New Group;
      $gr->nama_group = $r->group;

      $gr->save();

      return redirect ('group');
    }

    public function edit($id)
    {
      # code...
      $gr = Group::find($id);

      return view('group.edit', ['gr' => $gr]);
    }

    public function update(Request $r)
    {
      # code...
      $id = $r->input('id');
      $gr = Group::find($id);
      $gr->nama_group = $r->nama;

      $gr->save();
    }

    public function delete($id)
    {
      # code...
      $gr = Group::find($id)->delete();

      return redirect('group');
    }
}
