@extends('app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('companies') }}">

                        {{--{!! Form::model([$jaagir = new \App\Jaagir, 'url'=>'jaagirs']) !!}--}}
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Website</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="website" value="{{ old('website') }}">

                                    @if ($errors->has('website'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('established_year') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Established Year</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="established_year" value="{{ old('established_year') }}">

                                    @if ($errors->has('established_year'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('established_year') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('employee_count') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Employee Count</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="employee_count" value="{{ old('employee_count') }}">

                                    @if ($errors->has('employee_count'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('employee_count') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Comany Bio</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="bio" value="{{ old('bio') }}">

                                    @if ($errors->has('bio'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('bio') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('focus_area') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Focus Area</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="focus_area" value="{{ old('focus_area') }}">

                                    @if ($errors->has('focus_area'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('focus_area') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i>Create
                                    </button>
                                </div>
                            </div>
                        {{--{!! Form::close() !!}--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('errors.list')
@stop
