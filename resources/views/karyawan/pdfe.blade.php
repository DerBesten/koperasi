@extends('layouts.app')

@section('content')

  <div class="page-header">
    <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="{{ url('karyawan')}}" >
          <i class="icon wb-arrow-left" aria-hidden="true"></i>
          <span class="hidden-xs">Kembali</span>
        </a>
        <a class="btn btn-sm btn-default btn-outline btn-round" href="{{ url('karyawan/import')}}" >
          <i class="icon fa-upload" aria-hidden="true"></i>
          <span class="hidden-xs">Import Data PramuGolf</span>
        </a>
      </div>
  </div>
  <div class="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Isi Data PramuGolf Manual</h3>
      </div>
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-sm-6">
            <!-- Example Basic Form -->
            <div class="example-wrap" style="width:950px">
              <div class="example">
                <form autocomplete="off" role="form" action="{{ url('karyawan/create')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group ">
                    <label class="control-label" for="inputBasicFirstName">Tanggal Awal</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" id="datepicker" data-plugin="datepicker" name="tglaw">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="control-label" for="inputBasicFirstName">Tanggal Akhir</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" id="datepicker" data-plugin="datepicker" name="tglak">
                    </div>
                  </div>
                  <div class="form-group ">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Example Basic Form -->
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
