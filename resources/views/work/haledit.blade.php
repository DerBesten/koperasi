@extends('layouts.app')

@section('content')

  <div class="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data Round Today</h3>
      </div>
      <div class="panel-body">
        <div class="row row-lg">
          <div class="col-sm-12">
            <!-- Example Toolbar -->
            <div class="example-wrap">
              <div class="example">

                <table id="exampleTableToolbar" data-mobile-responsive="true">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No BagTag</th>
                      <th>Nama PramuGolf</th>
                      <th>Nama Golfer</th>
                      <th>Clubs</th>
                      <th class="text-nowrap">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($jan as $key => $op)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $op->no_bagtag }}</td>
                      <td>{{ $op->nama_caddy}}</td>
                      <td>{{ $op->nama_golfer}}</td>
                      <td>{{ $op->clubs }}</td>
                      <td class="text-nowrap">
                        <a href="{{ url('/work/edit/'.$op->operations_id) }}">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                        </a>
                        <a href="{{ url('/work/delete/'.$op->id) }}">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                            <i class="icon wb-close" aria-hidden="true"></i>
                          </button>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- End Example Toolbar -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Panel Other -->
  </div>

@endsection
