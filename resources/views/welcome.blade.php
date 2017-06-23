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

<div class="page-content container-fluid">
  <div class="row">
    @foreach($kar as $k)
    @if($k->status == "1")
    <div class="col-md-3">
      <!-- Page Widget -->
      <div class="widget widget-shadow text-center">
        <div class="widget-header">
          <div class="widget-header-content" style="height:150px">
            <a class="avatar avatar-lg" href="javascript:void(0)">
              <img src="{{ url('../'.$k->photo) }}" alt="..." style="height:100px; width:100px">
            </a>
            <div class="profile-user">{{ $k->nama}}</div>
            <p><h5>Grade  : </h5></p>
          </div>
        </div>
        <div class="widget-footer">
          <div class="row no-space">
            <div class="col-xs-4">
              <a href="{{ url('/work/index/'.$k->caddy_id) }}"><button type="button" class="btn btn-success btn-round btn-default" style="margin-left:55px">
                <i class="icon wb-check" aria-hidden="true"></i> Active
              </button></a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Widget -->
    </div>
    @else
    @endif
    @endforeach
  </div>
</div>
@endsection
