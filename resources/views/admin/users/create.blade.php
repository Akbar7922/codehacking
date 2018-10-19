@extends('layouts.admin')

@section('content')

    <h1>Create Form</h1>

    {!! Form::open(['action'=>'AdminUsersController@store','method'=>'Post','files'=>true]) !!}
    @csrf
    <div class="form-group">

        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}

    </div>

    <div class="from-group">

        {!! Form::file('file',['class'=>'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>

    @if(count($errors)>0)

        @foreach($errors->all() as $error)

            <div class="alert alert-danger">
                {{$error}}
            </div>

        @endforeach

    @endif


@endsection