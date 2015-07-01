@extends('master')

@section('head')
@parent
<title>Location</title>
@stop
@section('content')

<div class="container">
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      Create user
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
                <form action="{{URL::to('user_create')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="form-group @if ($errors->has('username')) has-error @endif">
                            <label class="col-sm-2 control-label">Username: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" value="{{ Input::old('username') }}">
                                @if ($errors->has('username')) <p class="help-block">{{ $errors->first('username') }}</p> @endif
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-group @if ($errors->has('password')) has-error @endif">
                            <label class="col-sm-2 control-label">Password: </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                                @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                            </div>
                        </div>
                        &nbsp;
                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                            <label class="col-sm-2 control-label">Name: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" value="{{ Input::old('name') }}">
                                @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
