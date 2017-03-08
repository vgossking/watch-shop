@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div id="log-in-form">
            <h1 class="padding-lft-30">Add Watch</h1>
            {!! Form::open(['action' => 'Admin\AdminWatchController@store', 'method'=>'POST', 'files'=>true]) !!}

            <div class="container">
                <div class="form-group col-md-6">
                    {!!  Form::label('first_name', 'Name: ') !!}
                    {!!  Form::text('first_name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!!  Form::label('brand_id', 'Brand: ') !!}
                    {!!  Form::select('brand_id', $brands, null, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!!  Form::label('shape', 'Shape: ') !!}
                    {!!  Form::text('shape', null,['class' => 'form-control']) !!}
                </div>


                <div class="form-group col-md-6">
                    {!!  Form::label('size', 'Size: ') !!}
                    {!!  Form::number('size', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!!  Form::label('bezel_material', 'Bezel: ') !!}
                    {!!  Form::text('bezel_material', null,['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!!  Form::label('band_material', 'Band: ') !!}
                    {!!  Form::text('band_material', null,['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!!  Form::label('price', 'Price: ') !!}
                    {!!  Form::number('price', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!!  Form::label('discount_price', 'Discount Price: ') !!}
                    {!!  Form::number('discount_price', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!!  Form::label('quantity', 'Quantity: ') !!}
                    {!!  Form::number('quantity', null, ['class' => 'form-control']) !!}
                </div>

            </div>

            @foreach($categories as $category)
                <div class="checkbox mg-lft-30">
                    <label>
                        {!! Form::checkbox('categories[]', $category->id ) !!}
                        {{$category->name}}
                    </label>
                </div>

            @endforeach
            {!! Form::submit('Add User', ['class'=>'btn btn-success clear-both mg-lft-30']) !!}


            {!! Form::close() !!}

            @include('errors.error')


        </div>

    </div>

@endsection