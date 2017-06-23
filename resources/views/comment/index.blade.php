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
                <form class="form-horizontal" action="{{ url('comment/create') }}" method="post" >
                  {{ csrf_field() }}
                  <input type="hidden" name="data_id" id="caddy_id">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Caddy :</label>
                    <div class="col-sm-9">
                      <select class="form-control select2-hidden-accessible" data-plugin="select2" tabindex="-1" aria-hidden="true"
                              id="nama_caddy" placeholder="Pilih Nama Caddy" name="nama">
                        <option></option>
                        @foreach($data as $value)
                        <option>{{ $value->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Name of Golfer: </label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="nama" placeholder="Name of Golfer" autocomplete="off" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Rating Pramu Golf</label>
                    <div class="col-sm-9">
                      <div class="example">
                        <div class="rating" data-plugin="rating" style="cursor: pointer;">
                          <i data-alt="1" class="icon wb-star" title="bad"></i>&nbsp;
                          <i data-alt="2" class="icon wb-star" title="poor"></i>&nbsp;
                          <i data-alt="3" class="icon wb-star" title="regular"></i>&nbsp;
                          <i data-alt="4" class="icon wb-star" title="good"></i>&nbsp;
                          <i data-alt="5" class="icon wb-star" title="gorgeous"></i>
                          <input name="score" type="hidden"></div>
                </div>
                    </div>
                  </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Comment status</label>
                      <div class="col-sm-9">
                        <div class="radio-custom radio-default radio-inline">
                          <input type="radio" id="inputBasicMale" name="status" value="Good">
                            <label for="inputBasicMale">Good</label>
                        </div>
                        <div class="radio-custom radio-default radio-inline">
                          <input type="radio" id="inputBasicFemale" name="status" value="Bad">
                            <label for="inputBasicFemale">Bad</label>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Comment: </label>
                    <div class="col-sm-9">
                      <textarea class="form-control" placeholder="Comment" name="isi"></textarea>
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
