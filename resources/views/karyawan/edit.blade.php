@extends('layouts.app')

@section('content')

  <div class="page-header">
    <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="{{ url('karyawan')}}" >
          <i class="icon wb-arrow-left" aria-hidden="true"></i>
          <span class="hidden-xs">Kembali</span>
        </a>
        <a class="btn btn-sm btn-default btn-outline btn-round" href="{{ url('pengadaan/import')}}" >
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
                <form autocomplete="off" role="form" action="{{ url('karyawan/edit')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{ $kar->caddy_id }}">
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Nama Lengkap</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="nama"
                      autocomplete="off"  value="{{ $kar->nama }}"/>
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Tempat Lahir</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="tmpt"
                      autocomplete="off" value="{{ $kar->tempat_lahir }}"/>
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label" for="inputBasicFirstName">Tanggal Lahir</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="icon wb-calendar" aria-hidden="true"></i>
                      </span>
                      <input type="text" class="form-control" data-plugin="datepicker" name="tgll" value="{{ $kar->tanggal_lahir }}">
                    </div>
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label">Jenis Kelamin</label>
                      <div>
                        <div class="radio-custom radio-default radio-inline">
                          <input type="radio" id="inputBasicMale" name="kelamin" value="Pria"
                          @if ($kar->kelamin == "Pria") checked @endif>
                            <label for="inputBasicMale">Pria</label>
                        </div>
                        <div class="radio-custom radio-default radio-inline">
                          <input type="radio" id="inputBasicFemale" name="kelamin" value="Wanita"
                          @if ($kar->kelamin == "Wanita") checked @endif>
                            <label for="inputBasicFemale">Wanita</label>
                        </div>
                      </div>
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Nomer Telepon / Handphone</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="tlp"
                      autocomplete="off" value="{{ $kar->tlp }}"/>
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label" for="inputBasicKondisi">Agama</label>
                    <select class="form-control" name="agama">
                      <option></option>
                      <option value="Islam" @if ($kar->agama == "Islam") selected @endif >
                        Islam
                      </option>
                      <option value="Kristen" @if ($kar->agama == "Kristen") selected @endif >
                        Kristen
                      </option>
                      <option value="Hindu" @if ($kar->agama == "Hindu") selected @endif >
                        Hindu
                      </option>
                      <option value="Budha" @if ($kar->agama == "Budha") selected @endif >
                        Budha
                      </option>
                      <option value="Lain-lain" @if ($kar->agama == "Lain-lain") selected @endif >
                        Lain-lain
                      </option>
                    </select>
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Email</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="email"
                      autocomplete="off" value="{{ $kar->email }}"/>
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Alamat</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="alamat"
                      autocomplete="off" value="{{ $kar->alamat }}"/>
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Pekerjaan / Jabatan</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="pekerjaan"
                      autocomplete="off" value="{{ $kar->pekerjaan }}"/>
                  </div>
                  <div class="form-group form-material">
                      <label class="control-label" for="inputBasicFirstName">Perusahaan</label>
                      <input type="text" class="form-control" id="inputBasicNamaBarang" name="perusahaan"
                      autocomplete="off" value="{{ $kar->perusahaan }}"/>
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label" for="inputBasicKondisi">Status Perkawinan</label>
                    <select class="form-control" name="statusp">
                      <option></option>
                      <option value="Single" @if ($kar->status_perkawinan == "Single") selected @endif >Single</option>
                      <option value="Menikah" @if ($kar->status_perkawinan == "Menikah") selected @endif >Menikah</option>
                      <option value="Duda" @if ($kar->status_perkawinan == "Duda") selected @endif >Duda</option>
                      <option value="Janda" @if ($kar->status_perkawinan == "Janda") selected @endif >Janda</option>
                    </select>
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label" for="inputBasicKondisi">Status</label>
                    <select class="form-control" name="status">
                      <option></option>
                      <option value="1" @if ($kar->status == "1") selected @endif >Active</option>
                      <option value="2" @if ($kar->status == "2") selected @endif >Not Active</option>
                    </select>
                  </div>
                  <div class="form-group form-material">
                    <label class="control-label" for="inputBasicKondisi">Group</label>
                    <select class="form-control" name="group">
                      <option></option>
                      @foreach($group as $g)
                      <option value="{{ $g->nama_group }}" @if ($kar->group == $g->nama_group) selected @endif >
                        {{ $g->nama_group }}
                      </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group form-material form-material-file">
                    <label class="control-label" for="inputFile">Foto</label>
                    <input type="text" class="form-control" readonly=""> {{ $kar->photo }}
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
