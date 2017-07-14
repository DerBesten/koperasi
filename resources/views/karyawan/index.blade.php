@extends('layouts.app')

@section('content')

  <div class="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Data PramuGolf</h3>
      </div>
      <div class="panel-body">
        <div class="row row-lg">
          <div class="col-sm-12">
            <!-- Example Toolbar -->
            <div class="example-wrap">
              <div class="example">
                <div class="bars pull-left">
                  <div class="btn-group hidden-xs" id="exampleToolbar" role="group">
                    <a href="{{ url('karyawan/create') }}">
                      <button type="button" class="btn btn-outline btn-default">
                        <i class="icon wb-plus" aria-hidden="true"></i>
                      </button>
                    </a>
                    <a href="{{ url('karyawan/pdf') }}">
                      <button type="button" class="btn btn-outline btn-default">
                        <i class="icon fa-file-pdf-o" aria-hidden="true"></i>
                      </button>
                    </a>
                  </div>
                </div>
                <table id="exampleTableToolbar" data-mobile-responsive="true">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama PramuGolf</th>
                      <th>Nomor Handphone</th>
                      <th>Email</th>
                      <th>Group</th>
                      <th>Status</th>
                      <th class="text-nowrap">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($karyawan as $key => $kar)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $kar->nama}}</td>
                      <td>{{ $kar->tlp}}</td>
                      <td>{{ $kar->email }}</td>
                      <td>{{ $kar->group }}</td>
                      <td>
                        <div class="dropdown">
                          @if($kar->status === "1")
                          <button type="button" class="btn btn-success dropdown-toggle" id="exampleColorDropdown5" data-toggle="dropdown" aria-expanded="false">Active
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-warning" aria-labelledby="exampleColorDropdown5" role="menu">
                            <li role="presentation"><a href="{{ url('karyawan/booking/'.$kar->caddy_id) }}" role="menuitem">Booking</a></li>
                            <li role="presentation"><a href="{{ url('karyawan/notactive/'.$kar->caddy_id) }}" role="menuitem">Not Active</a></li>
                          </ul>
                          @elseif($kar->status === "2")
                          <button type="button" class="btn btn-danger dropdown-toggle" id="exampleColorDropdown5" data-toggle="dropdown" aria-expanded="false">Not Active
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-warning" aria-labelledby="exampleColorDropdown5" role="menu">
                            <li role="presentation"><a href="{{ url('karyawan/active/'.$kar->caddy_id) }}" role="menuitem">Active</a></li>
                            <li role="presentation"><a href="{{ url('karyawan/booking/'.$kar->caddy_id) }}" role="menuitem">Booking</a></li>
                          </ul>
                          @elseif($kar->status === "3")
                          <button type="button" class="btn btn-info dropdown-toggle" id="exampleColorDropdown5" data-toggle="dropdown" aria-expanded="false">Booking
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-warning" aria-labelledby="exampleColorDropdown5" role="menu">
                            <li role="presentation"><a href="{{ url('karyawan/active/'.$kar->caddy_id) }}" role="menuitem">Active</a></li>
                            <li role="presentation"><a href="{{ url('karyawan/notactive/'.$kar->caddy_id) }}" role="menuitem">Not Active</a></li>
                          </ul>
                          @elseif($kar->status === "4")
                          <button type="button" class="btn btn-primary dropdown-toggle" id="exampleColorDropdown5" data-toggle="dropdown" aria-expanded="false">StandBy
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-warning" aria-labelledby="exampleColorDropdown5" role="menu">
                            <li role="presentation"><a href="{{ url('karyawan/active/'.$kar->caddy_id) }}" role="menuitem">Active</a></li>
                            <li role="presentation"><a href="{{ url('karyawan/notactive/'.$kar->caddy_id) }}" role="menuitem">Not Active</a></li>
                          </ul>
                          @endif
                        </div>
                      </td>
                      <td class="text-nowrap">
                        <a href="{{ url('/karyawan/detail/'.$kar->caddy_id) }}">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="View">
                            <i class="icon wb-eye" aria-hidden="true"></i>
                          </button>
                        </a>
                        <a href="{{ url('/karyawan/edit/'.$kar->caddy_id) }}">
                          <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                            <i class="icon wb-wrench" aria-hidden="true"></i>
                          </button>
                        </a>
                        <a href="{{ url('/karyawan/delete/'.$kar->id) }}">
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
