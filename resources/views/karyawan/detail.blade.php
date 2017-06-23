@extends('layouts.app')

@section('content')
<style>
.widget-header {
  padding: 40px 15px;
  background-color: #ffffff;
}
.widget-footer {
  padding: 10px;
  background-color: #f6f9fd;
}
.widget .avatar {
  width: 130px;
  margin-bottom: 10px;
}
.profile-user {
  margin-bottom: 10px;
  color: #263238;
  font-size: 20px;
}
.profile-job {
  margin-bottom: 0px;
  color: #a3afb7;
}
.profile-job2 {
  margin-bottom: 20px;
  color: #a3afb7;
}
.profile-social {
  margin: 25px 0;
}
.profile-social .icon {
  margin: 0 10px;
  color: rgba(55, 71, 79, 0.4);
}
.profile-stat-count {
  display: block;
  margin-bottom: 3px;
  color: #526069;
  font-size: 20px;
  font-weight: 200;
}
.profile-stat-count + span {
  color: #a3afb7;
}
.list-group-item {
  padding: 25px 15px;
  border-top-color: #e4eaec;
}
.list-group-item:first-child {
  border-top: transparent;
}
.list-group-item:last-child {
  border-bottom-color: #e4eaec;
}
.list-group-item .media .avatar {
  width: 50px;
}
.list-group-item .media small {
  color: #a3afb7;
}
.list-group-item .media-heading {
  font-size: 16px;
}
.list-group-item .media-heading span {
  margin-left: 5px;
  color: #76838f;
  font-size: 14px;
}
.list-group-item .media .media:first-child {
  border-top: none;
}
.profile-readMore {
  margin: 40px 0;
}
.profile-brief {
  margin-top: 20px;
}
.profile-uploaded {
  width: 200px;
  height: 150px;
  margin-right: 20px;
  margin-bottom: 5px;
}
</style>

<div class="page-header">
  <div class="page-header-actions">
      <a class="btn btn-sm btn-default btn-outline btn-round" href="{{ url('karyawan')}}" >
        <i class="icon wb-arrow-left" aria-hidden="true"></i>
        <span class="hidden-xs">Back</span>
      </a>
    </div>
</div>
<div class="page-content container-fluid">
  <div class="row">
    <div class="col-md-3">
      <!-- Page Widget -->
      <div class="widget widget-shadow text-center">
        <div class="widget-header">
          <div class="widget-header-content">
            <a class="avatar avatar-lg" href="javascript:void(0)">
              <img src="{{ asset('../'.$kar->photo) }}" alt="...">
            </a>
            <div class="profile-user">{{ $kar->nama}}</div>
            <div class="profile-job">{{ $kar->group }}</div>
            <p>{{ $kar->bio }}</p>
            <!-- <div class="profile-social">
              <a class="icon bd-twitter" href="javascript:void(0)"></a>
              <a class="icon bd-facebook" href="javascript:void(0)"></a>
              <a class="icon bd-dribbble" href="javascript:void(0)"></a>
              <a class="icon bd-github" href="javascript:void(0)"></a>
            </div>
            <button type="button" class="btn btn-primary">Follow</button> -->
          </div>
        </div>
        <div class="widget-footer">
          <div class="row no-space">
            <!-- <div class="col-xs-4">
              <strong class="profile-stat-count">260</strong>
              <span>Follower</span>
            </div>
            <div class="col-xs-4">
              <strong class="profile-stat-count">180</strong>
              <span>Following</span>
            </div>
            <div class="col-xs-4">
              <strong class="profile-stat-count">2000</strong>
              <span>Tweets</span>
            </div> -->
          </div>
        </div>
      </div>
      <!-- End Page Widget -->
    </div>

    <div class="col-md-9">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body">
          <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
            <li class="active" role="presentation"><a data-toggle="tab" href="#activities" aria-controls="activities"
              role="tab">Profile</a></li>
            <li role="presentation"><a data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Performance</a></li>
            <li role="presentation"><a data-toggle="tab" href="#operation" aria-controls="profile" role="tab">Operation</a></li>
            <li role="presentation"><a data-toggle="tab" href="#comment" aria-controls="profile" role="tab">Comments</a></li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane active" id="activities" role="tabpanel">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Full name		</label>
										: {{ $kar->nama }}
									</div>
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Date of birth		</label>
										: {{ $kar->tempat_lahir.' - '. $kar->tanggal_lahir }}
									</div>
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Gender		</label>
										: {{ $kar->kelamin }}
									</div>
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Phone Number		</label>
										: {{ $kar->tlp }}
									</div>
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Religion		</label>
										: {{ $kar->agama }}
									</div>
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Email		</label>
										: {{ $kar->email }}
									</div>
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Address		</label>
										: {{ $kar->alamat }}
									</div>
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Position		</label>
										: {{ $kar->pekerjaan }}
									</div>
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Company		</label>
										: {{ $kar->perusahaan }}
									</div>
                </li>
              </ul>
            </div>
            <!-- //buattabkinerja -->
            <div class="tab-pane" id="profile" role="tabpanel">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Joined		</label>
										: {{ $jun }}
									</div>
                </li>
                <li class="list-group-item">
                  <div class="form-group">
										<label class="col-sm-4 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Turun Berapa Kali		</label>
                      :<br>
                      <table class="table table-hover" style="margin-left:10px">
                        <thead>
                          <tr>
                              <th>Bulan</th>
                              <th>Jumlah Turun</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Januari</td>
                            <td>{{ $jan }} kali</td>
                          </tr>
                          <tr>
                            <td>Februari</td>
                            <td>{{ $feb }} kali</td>
                          </tr>
                          <tr>
                            <td>Maret</td>
                            <td>{{ $mar }} kali</td>
                          </tr>
                          <tr>
                            <td>April</td>
                            <td>{{ $apr }} kali</td>
                          </tr>
                          <tr>
                            <td>Mei</td>
                            <td>{{ $mei }} kali</td>
                          </tr>
                          <tr>
                            <td>Juni</td>
                            <td>{{ $jun }} kali</td>
                          </tr>
                          <tr>
                            <td>Juli</td>
                            <td>{{ $jul }} kali</td>
                          </tr>
                          <tr>
                            <td>Agustus</td>
                            <td>{{ $agu }} kali</td>
                          </tr>
                          <tr>
                            <td>September</td>
                            <td>{{ $sep }} kali</td>
                          </tr>
                          <tr>
                            <td>Oktober</td>
                            <td>{{ $okt }} kali</td>
                          </tr>
                          <tr>
                            <td>November</td>
                            <td>{{ $nov }} kali</td>
                          </tr>
                          <tr>
                            <td>Desember</td>
                            <td>{{ $des }} kali</td>
                          </tr>
                        </tbody>
                      </table>
									</div>
                </li>
              </ul>
            </div>
            <div class="tab-pane" id="operation" role="tabpanel">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="form-group">
										<label class="col-sm-6 control-label no-padding-right" for="form-field-1" style="font-size: 15px;"> Turun dengan Siapa Saja Hari ini		</label>
                      : <br>
                      <table class="table" style="margin-left:10px">
                        <thead>
                          <tr>
                              <th>Name</th>
                              <th>Tanggal dan Waktu</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($golf as $g)
                          <tr>
                            <td>{{ $g->nama_golfer }}</td>
                            <td>{{ $g->tanggal }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
									</div>
                </li>
              </ul>
            </div>
            <div class="tab-pane" id="comment" role="tabpanel">
              <ul class="list-group">
                <li class="list-group-item">
                  Comment from Golfer
                  <div class="tab-pane active" id="forum-newest" role="tabpanel">
                    <table class="table is-indent">
                      <tbody>
                        @foreach ($komentar as $key => $value)
                        <tr>
                          <td class="pre-cell"></td>
                          <td class="cell-60 responsive-hide">
                            <a class="avatar" href="javascript:void(0)">
                              <span class="icon wb-user" style="font-size: 34px;"></span>
                            </a>
                          </td>
                          <td>
                            <div class="content">
                              <div class="title">
                                {{ $value->komentar_isi }}
                              </div>
                              <div class="metas">
                                <span class="author">Oleh {{ $value->komentar_nama }}</span>
                                <span class="started">. {{ $value->komentar_tglinput }}</span>
                              </div>
                            </div>
                          </td>
                          <td class="suf-cell"></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel -->
    </div>
  </div>
</div>
@endsection
