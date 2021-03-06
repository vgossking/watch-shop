@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div id="log-in-form">
            <h1 class="padding-lft-30">Edit Watch {{$watch->name}}</h1>
            {!! Form::model($watch, [ 'method'=>'PATCH','action' => ['Admin\AdminWatchController@update', $watch->id], 'files'=>true]) !!}

            <div class="container">
                <div class="form-group col-md-6">
                    {!!  Form::label('name', 'Name: ') !!}
                    {!!  Form::text('name', null, ['class' => 'form-control']) !!}
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
                    {!!  Form::number('price', $watch->price, ['class' => 'form-control', 'step'=>'any']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!!  Form::label('discount_price', 'Discount Price: ') !!}
                    {!!  Form::number('discount_price', null, ['class' => 'form-control','step'=>'any']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!!  Form::label('quantity', 'Quantity: ') !!}
                    {!!  Form::number('quantity', null, ['class' => 'form-control']) !!}
                </div>

            </div>
            <h3 class="mg-lft-30">Categories: </h3>
            <div class="category-checkbox">
                @foreach($categories as $category)

                    <label class="checkbox-inline mg-lft-30 mg-btm-20">
                        {!! Form::checkbox('categories[]', $category->id ) !!}
                        {{$category->name}}
                    </label>


                @endforeach
            </div>

            {!! Form::submit('Edit Watch', ['class'=>'btn btn-success clear-both mg-lft-30']) !!}


            {!! Form::close() !!}

            @include('errors.error')


        </div>

    </div>

@endsection