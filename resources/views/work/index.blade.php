@extends('layouts.app')

@section('content')
<!-- Page -->
  <div class="page-content">
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-sm-12 col-md-6">
          <!-- Example Horizontal Form -->
            <div class="example-wrap">
              <h4 class="example-title">Comments</h4>
              <div class="example">
                <form class="form-horizontal" action="{{ url('work/create') }}" method="post" >
                  {{ csrf_field() }}
                  <input type="hidden" name="data_id" id="caddy_id" value="{{ $kar->caddy_id}}">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Caddy :</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="" id="" value="{{ $kar->nama}}" disabled>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Name of Golfer: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama" placeholder="Name of Golfer" autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No BagTag: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nb" placeholder="No Bag" autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Clubs: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="clubs" placeholder="Clubs" autocomplete="off" />
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
