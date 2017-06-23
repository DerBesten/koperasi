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
          <span class="hidden-xs">Import Pengadaan</span>
        </a>
      </div>
  </div>
  <div class="page-content">
    <div class="panel">
      <div class="panel-heading">
        <h3 class="panel-title">Isi Pengadaan Manual</h3>
      </div>
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-sm-6">
            <!-- Example Basic Form -->
            <div class="example-wrap" style="width:950px">
              <div class="example">
                <form autocomplete="off" role="form" action="{{ url('karyawan/create')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Nama Lengkap</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="nama"
                      autocomplete="off" />
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Tempat Lahir</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="tmpt"
                      autocomplete="off" />
                  </div>
                  <!-- <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Umur</label>
                      <input type="text" class="form-control" id="umur" name="age"
                      autocomplete="off" />
                  </div> -->
                  <div class="form-group form-material">
                    <label class="control-label" for="inputBasicFirstName">Tanggal Lahir</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" id="datepicker" data-plugin="datepicker" name="tgll">
                    </div>
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label">Jenis Kelamin</label>
                      <div>
                        <div class="radio-custom radio-default radio-inline">
                          <input type="radio" id="inputBasicMale" name="kelamin" value="Pria">
                            <label for="inputBasicMale">Pria</label>
                        </div>
                        <div class="radio-custom radio-default radio-inline">
                          <input type="radio" id="inputBasicFemale" name="kelamin" value="Wanita">
                            <label for="inputBasicFemale">Wanita</label>
                        </div>
                      </div>
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Nomer Telepon / Handphone</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="tlp"
                      autocomplete="off" />
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label" for="inputBasicKondisi">Agama</label>
                    <select class="form-control" name="agama">
                      <option></option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Lain-lain">Lain-lain</option>
                    </select>
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Email</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="email"
                      autocomplete="off" />
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Alamat</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="alamat"
                      autocomplete="off" />
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Pekerjaan / Jabatan</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="pekerjaan"
                      autocomplete="off" />
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Perusahaan</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="perusahaan"
                      autocomplete="off" />
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label" for="inputBasicKondisi">Status Perkawinan</label>
                    <select class="form-control" name="statusp">
                      <option></option>
                      <option value="Single">Single</option>
                      <option value="Menikah">Menikah</option>
                      <option value="Duda">Duda</option>
                      <option value="Janda">Janda</option>
                    </select>
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label" for="inputBasicKondisi">Status</label>
                    <select class="form-control" name="status">
                      <option></option>
                      <option value="1">Booking</option>
                      <option value="2">Non Aktif</option>
                    </select>
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label" for="inputBasicKondisi">Group</label>
                    <select class="form-control" name="group">
                      <option></option>
                      @foreach($group as $g)
                      <option value="{{ $g->nama_group }}">{{ $g->nama_group }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group form-material form-material-file">
                    <label class="control-label" for="inputFile">Foto</label>
                    <input type="text" class="form-control" readonly="">
                    <input type="file" id="inputFile" name="photo" multiple="">
                    @if ($errors->has('photo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('photo') }}</strong>
                        </span>
                    @endif
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
  </div>

@endsection
