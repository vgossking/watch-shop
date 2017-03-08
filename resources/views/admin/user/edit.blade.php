@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="title">Edit User</h1>

        <div id="log-in-form">

            {!! Form::model($user, [ 'method'=>'PATCH','action' => ['Admin\AdminUserController@update', $user->id], 'files'=>true]) !!}


            <div class="form-group">
                {!!  Form::label('first_name', 'Name: ') !!}
                {!!  Form::text('first_name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!!  Form::label('last_name', 'Name: ') !!}
                {!!  Form::text('last_name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!!  Form::label('password', 'Password:(leave blank if dont want to change) ') !!}
                {!!  Form::password('password', ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!!  Form::label('email', 'Email: ') !!}
                {!!  Form::text('email', null, ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!!  Form::label('role_id', 'Role: ') !!}
                {!!  Form::select('role_id', $roles, $user->role_id, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!!  Form::label('is_active', 'Status ') !!}
                {!!  Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'], $user->is_active, ['class'=>'form-control']) !!}
            </div>


            {!! Form::submit('Update User', ['class'=>'btn btn-success']) !!}


            {!! Form::close() !!}

            @include('errors.error')


        </div>

    </div>

@endsection