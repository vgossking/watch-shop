@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div id="log-in-form">
            <h1>Create User</h1>
            {!! Form::open(['action' => 'Admin\AdminUserController@store', 'method'=>'POST', 'files'=>true]) !!}


            <div class="form-group">
                {!!  Form::label('first_name', 'First Name: ') !!}
                {!!  Form::text('first_name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!!  Form::label('last_name', 'Last Name: ') !!}
                {!!  Form::text('last_name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!!  Form::label('password', 'Password: ') !!}
                {!!  Form::password('password', ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!!  Form::label('email', 'Email ') !!}
                {!!  Form::text('email', null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!!  Form::label('role_id', 'Role: ') !!}
                {!!  Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!!  Form::label('is_active', 'Status ') !!}
                {!!  Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'], null, ['class'=>'form-control']) !!}
            </div>


            {!! Form::submit('Add Watch', ['class'=>'btn btn-success']) !!}


            {!! Form::close() !!}

            @include('errors.error')


        </div>

    </div>

@endsection