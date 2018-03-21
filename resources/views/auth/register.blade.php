@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                            <label for="nip" class="col-md-4 control-label">NIP</label>
                                <div class="col-md-6">
                                    <input id="nip" type="text" class="form-control" name="nip" value="{{ old('nip') }}" required autofocus>
                                    @if ($errors->has('nip'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nip') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_user" class="col-md-4 control-label">Nama</label>
                                <div class="col-md-6">
                                    <input id="nama_user" type="nama_user" class="form-control" name="nama_user" required>
                                    @if ($errors->has('nama_user'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama_user') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat_user" class="col-md-4 control-label">Alamat</label>
                                <div class="col-md-6">
                                    <input id="alamat_user" type="text" class="form-control" name="alamat_user" required>
                                    @if ($errors->has('alamat_user'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alamat_user') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <!-- <div class="form-group">
                            <label for="jk_user" class="col-md-4 control-label">Jenis Kelamin</label>
                                <div class="col-md-4">
                                    <label>
                                        <select id="jk_user" type="jk_user" class="form-control" name="jk_user" required>
                                            <option>-</option>
                                            <option>Laki - Laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </label>
                                </div>
                        </div> -->

                        <div class="form-group">
                            <label for="jk_user" class="col-md-4 control-label">Jenis Kelamin</label>
                            <div class="col-md-4">
                                <label>
                                    <div class="radio">
                                        <label>
                                          <input type="radio" name="jk_user" id="optionsRadios1" value="Laki - Laki">Laki - Laki</label>
                                        <label>
                                          <input type="radio" name="jk_user" id="optionsRadios2" value="perempuan">Perempuan</label>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
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
