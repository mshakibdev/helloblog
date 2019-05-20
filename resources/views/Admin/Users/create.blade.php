@extends('layouts.admin')


@section('content')
    <h1>User Create Form</h1>
    {!! Form::open(['method'=>'POST','action'=>'Admin\AdminUsersController@store']) !!}

         <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
         </div>


        <div class="form-group">
             {!! Form::submit('Create Users',['class'=>'btn btn-primary']) !!}
        </div>

            {{csrf_field()}}

    {!! Form::close() !!}
@stop
