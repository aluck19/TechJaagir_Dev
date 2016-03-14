@extends('app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('jaagirs') }}">

                        {{--{!! Form::model([$jaagir = new \App\Jaagir, 'url'=>'jaagirs']) !!}--}}
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Title</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('total_openings') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Total Openings</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="total_openings" value="{{ old('total_openings') }}">

                                    @if ($errors->has('total_openings'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('total_openings') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Salary</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="salary" value="{{ old('salary') }}">

                                    @if ($errors->has('salary'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="experience" value="{{ old('experience') }}">

                                    @if ($errors->has('experience'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Category</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="category" value="{{ old('category') }}">

                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Position</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="position" value="{{ old('position') }}">

                                    @if ($errors->has('position'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Level</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="level" value="{{ old('level') }}">

                                    @if ($errors->has('level'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('level') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Type</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="type" value="{{ old('type') }}">

                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Education</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="education" value="{{ old('education') }}">

                                    @if ($errors->has('education'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Location</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="location" value="{{ old('location') }}">

                                    @if ($errors->has('location'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Level</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="level" value="{{ old('level') }}">

                                    @if ($errors->has('level'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('level') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="description" value="{{ old('description') }}">

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('specification') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Specification</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="specification" value="{{ old('specification') }}">

                                    @if ($errors->has('specification'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('specification') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('published_at') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Published Data</label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="published_at" value="{{ old('published_at') }}">

                                    @if ($errors->has('published_at'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('published_at') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('expiry_at') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Expiry Date</label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="expiry_at" value="{{ old('expiry_at') }}">

                                    @if ($errors->has('expiry_at'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('expiry_at') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('apply_description') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Apply Description</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="apply_description" value="{{ old('apply_description') }}">

                                    @if ($errors->has('apply_description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('apply_description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('apply_email') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Apply Email</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="apply_email" value="{{ old('apply_email') }}">

                                    @if ($errors->has('apply_email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('apply_email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('apply_website') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Apply Email</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="apply_website" value="{{ old('apply_website') }}">

                                    @if ($errors->has('apply_website'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('apply_website') }}</strong>
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
