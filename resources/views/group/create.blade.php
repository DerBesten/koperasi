@extends('layouts.app')

@section('content')

  <div class="page-header">
    <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="{{ url('group')}}" >
          <i class="icon wb-arrow-left" aria-hidden="true"></i>
          <span class="hidden-xs">Kembali</span>
        </a>
      </div>
  </div>
  <div class="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Isi Group Manual</h3>
      </div>
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-sm-6">
            <!-- Example Basic Form -->
            <div class="example-wrap" style="width:950px">
              <div class="example">
                <form autocomplete="off" role="form" action="{{ url('group/create')}}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group row form-material">
                    <div class="col-sm-6">
                      <label class="control-label" for="inputBasicFirstName">Merk</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="group"
                      autocomplete="off" />
                    </div>
                  </div>
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

    <!-- <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Import Data Merk</h3>
      </div>
      <div class="panel-body container-fluid">
        <form autocomplete="off">
          <div class="form-group form-material form-material-file">
            <label class="control-label" for="inputFile">File</label>
            <input type="text" class="form-control" placeholder="Browse.." readonly="" />
            <input type="file" id="inputFile" name="inputFile" multiple="" />
          </div>
          <div class="form-group form-material">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div> -->
  </div>

@endsection
