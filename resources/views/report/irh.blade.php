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
        <h3 class="panel-title">Activasi Group</h3>
      </div>
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-sm-6">
            <!-- Example Basic Form -->
            <div class="example-wrap" style="width:950px">
              <div class="example">
                <form autocomplete="off" role="form" action="{{ url('report/harian') }}" method="get" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group ">
                    <label class="control-label" for="inputBasicFirstName">Tanggal Report</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" id="datepicker" data-plugin="datepicker" name="tgl">
                    </div>
                  </div>
                  <!-- <div class="form-group form-material">
                    <label class="control-label" for="inputBasicKondisi">Status</label>
                    <select class="form-control" name="status">
                      <option></option>
                      <option value="1">Active</option>
                      <option value="2">Non Aktif</option>
                      <option value="3">Booking</option>
                      <option value="4">StandBy</option>
                    </select>
                  </div> -->
                  <div class="form-group form-material">
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
