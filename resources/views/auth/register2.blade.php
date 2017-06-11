@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name Lengkap</label>

                            <div class="col-md-6">
                                <input id="name_lengkap" type="text" class="form-control" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autofocus>

                                @if ($errors->has('nama_lengkap'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_lengkap') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username')?' has-error' : ''}}">
                          <label for="username" class="col-md-4 control-label">Username</label>

                          <div class="col-md-6">
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                            @if($errors->has('username'))
                              <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="user_email" value="{{ old('email') }}" required>

                                @if ($errors->has('user_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('userpass') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="userpass" type="password" class="form-control" name="userpass" required>

                                @if ($errors->has('userpass'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userpass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="userpass-confirm" type="password" class="form-control" name="userpass_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_telp')?' has-error' : ''}}">
                          <label for="user_telp" class="col-md-4 control-label">No.Telp</label>

                          <div class="col-md-6">
                            <input id="user_telp" type="number" class="form-control" name="user_telp" value="{{ old('user_telp') }}" required autofocus>

                            @if($errors->has('user_telp'))
                              <span class="help-block">
                                <strong>{{ $errors->first('user_telp') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_aktif')?' has-error' : ''}}">
                          <label for="user_aktif" class="col-md-4 control-label">Sebagai</label>

                          <div class="col-md-6">
                            <select class="form-control" name="user_aktif">
                              <option value=""></option>
                              <option value="Admin">Admin</option>
                              <option value="Mahasiswa">Mahasiswa</option>
                            </select>

                            @if($errors->has('user_aktif'))
                              <span class="help-block">
                                <strong>{{ $errors->first('user_aktif') }}</strong>
                              </span>
                            @endif
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn waves-effect waves-light col s12">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
