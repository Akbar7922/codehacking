@extends('layouts.admin')

@section('content')

    <h1>Update Form</h1>

    <div class="col-sm-3">

        <img height="400" src="{{$user->photo ? $user->photo->path : 'https://i.stack.imgur.com/l60Hf.png'}}" alt="" class="img-responsive img-rounded">
        
    </div>
    
    <div class="col-sm-9">

        {!! Form::model($user,['action'=>['AdminUsersController@update',$user->id],'method'=>'PATCH','files'=>true]) !!}

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
            {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id','Role :') !!}
            {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Photo :') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password :') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>

        <div class="form-group col-sm-6">
            {!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



        {!! Form::model($user,['action'=>['AdminUsersController@destroy',$user->id],'method'=>'DELETE']) !!}

            {{csrf_field()}}

            <div class="form-group col-sm-6">
                {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}
            </div>

        {!! Form::close() !!}

    </div>

    @include('includes.form_error')

@endsection
