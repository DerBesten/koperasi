@extends('layouts.app')

@section('content')
<!-- Page -->
  <div class="page-content">
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-sm-12 col-md-7">
          <!-- Example Horizontal Form -->
            <div class="example-wrap">
              <h4 class="example-title">Comments</h4>
              <div class="example">
                <form class="form-horizontal" action="{{ url('work/edit') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="this_id" value="{{ $operation->operations_id}}">
                  <input type="hidden" name="data_id" id="caddy_id">
                  <input type="hidden" name="before_id" value="{{ $operation->operations_caddy_id }}">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Change Caddy:</label>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">From :</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama1" placeholder="Name of Golfer" value="{{ $operation->nama_caddy }}" autocomplete="off" disabled="disabled"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">To :</label>
                    <div class="col-sm-9">
                      <select class="form-control select2-hidden-accessible" data-plugin="select2" tabindex="-1" aria-hidden="true"
                              id="nama_cad" placeholder="Pilih Nama Caddy" name="nama_caddy">
                        <option></option>
                        @foreach($kar as $value)
                        <option>{{ $value->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Name of Golfer: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama" placeholder="Name of Golfer" value="{{ $operation->nama_golfer }}" autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No BagTag: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nb" placeholder="No Bag" value="{{ $operation->no_bagtag }}"autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Clubs: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="clubs" placeholder="Clubs" value="{{ $operation->clubs }}"autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                      <button type="submit" class="btn btn-primary">Submit </button>
                      <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Example Horizontal Form -->
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- End Page -->

@endsection
