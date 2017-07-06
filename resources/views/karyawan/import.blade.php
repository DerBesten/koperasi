@extends('layouts.app')

@section('content')

  <div class="page-header">
    <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="{{ url('karyawan')}}" >
          <i class="icon wb-arrow-left" aria-hidden="true"></i>
          <span class="hidden-xs">Kembali</span>
        </a>
      </div>
  </div>
  <div class="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Import Data PramuGolf</h3>
      </div>
      <div class="panel-body container-fluid">
        <form autocomplete="off" class="form-horizontal" role="form" action="{{ url('karyawan/import')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group form-material form-material-file">
            <label class="control-label" for="inputFile">File</label>
            <input type="text" class="form-control" placeholder="Browse.." readonly="" />
            <input type="file" id="inputFile" name="datab" multiple="" />
          </div>
          <div class="form-group form-material">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
