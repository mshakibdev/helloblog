@extends('layouts.admin')


@section('content')
    <div class="container-fluid col-md-6 ">
        <h1>User Create Form</h1>
        <hr>
        {!! Form::open(['method'=>'POST','action'=>'Admin\AdminUsersController@store']) !!}

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
        <div class="form-group ">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',null,['class'=>'form-control']) !!}
        </div>

            <div class="form-group">
                 {!! Form::submit('Create Users',['class'=>'btn btn-primary']) !!}
            </div>

                {{csrf_field()}}

        {!! Form::close() !!}
    </div>
@stop
