@extends('layouts.admin')


@section('content')

    <div class="container-fluid  ">

        <h1>Edit User Form</h1>
        <hr>
        <div class="row">
        <div class="col-md-3">
            <img src="{{$user->photo->path}}" height="250" width="250" alt="" class="img-responsive img-rounded">
        </div>
        <div class="col-md-9">
            {!! Form::model($user , ['method'=>'PATCH','action'=>['Admin\AdminUsersController@update',$user->id], 'files'=>'true']) !!}

            <div class="form-group">
                {!! Form::label('name','Name :') !!}
                {!! Form::text('name',null,['class'=>'form-control ']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email','Email :') !!}
                {!! Form::email('email',null,['class'=>'form-control  ']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id','Role :') !!}
                {!! Form::select('role_id',[''=>'Choose Options']+$roles,['class'=>'form-control ']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active','Status :') !!}
                {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control ']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id','Upload:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group ">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update Users',['class'=>'btn btn-primary']) !!}
            </div>

            {{csrf_field()}}

            {!! Form::close() !!}
            @include('includes.form_error')

        </div>
        </div>
    </div>

@stop
