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
                    <a href="{{ url('karyawan/create') }}">
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
                      <th>Nama Karyawan</th>
                      <th>Status</th>
                      <th>Nomor Handphone</th>
                      <th>Email</th>
                      <th>Pekerjaan</th>
                      <th class="text-nowrap">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($karyawan as $key => $kar)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $kar->nama}}</td>
                      <td>
                        @if($kar->status === "Sudah Melamar")
                        <span class="label label-round label-success">{{ $kar->status }}</span>
                        @elseif($kar->status === "Belum Melamar")
                        <span class="label label-round label-danger">{{ $kar->status }}</span>
                        @endif
                      </td>
                      <td>{{ $kar->tlp}}</td>
                      <td>{{ $kar->email }}</td>
                      <td>{{ $kar->pekerjaan}}</td>
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
