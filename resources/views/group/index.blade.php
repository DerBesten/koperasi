@extends('layouts.app')

@section('content')

  <div class="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data Opname Barang</h3>
      </div>
      <div class="panel-body">
        <div class="row row-lg">
          <div class="col-sm-12">
            <!-- Example Toolbar -->
            <div class="example-wrap">
              <div class="example">
                <div class="bars pull-left">
                  <div class="btn-group hidden-xs" id="exampleToolbar" role="group">
                    <a href="{{ url('group/create') }}">
                      <button type="button" class="btn btn-outline btn-default">
                        <i class="icon wb-plus" aria-hidden="true"></i>
                      </button>
                    </a>
                  </div>
                </div>
                <table id="exampleTableToolbar" data-mobile-responsive="true">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Group</th>
                      <th class="text-nowrap">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($gr as $key => $g)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $g->nama_group}}</td>
                      <td class="text-nowrap">
                        <a href="{{ url('/group/edit/'.$g->id) }}">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                        </a>
                        <a href="{{ url('/group/delete/'.$g->id) }}">
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
