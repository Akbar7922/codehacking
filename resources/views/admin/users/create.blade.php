@extends('layouts.admin')

@section('content')

    <h1>Create Form</h1>

    {!! Form::open(['action'=>'AdminUsersController@store','method'=>'Post','files'=>true]) !!}

    {{csrf_field()}}

    <div class="form-group">
        {!! Form::label('name','Name :') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email :') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active','Status :') !!}
        {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),1,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id','Role :') !!}
        {!! Form::select('role_id',[''=>'Choose Role']+$roles,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Photo :') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password :') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>

    @include('includes.form_error')

@endsection