@extends('layouts.app')
@section('content')
    <div class="flt-left">
        <h1>All Watches</h1>
    </div>
    @if($watches->count() > 0)
    <div class="flt-right mg-top-20">
        <a href="{{url(route('watches.create'))}}" class="btn btn-info">Add User</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Name</th>
            <th>Shape</th>
            <th>Size</th>
            <th>Bezel Material</th>
            <th>Band Material</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Discount Price</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($watches as $watch)
            <tr id="watch-{{$watch->id}}">
                <td class="watch-id">{{$watch->id}}</td>
                <td>{{$watch->brand ? $watch->brand->name : ' No brand'}}</td>
                <td>{{$watch->name}}</td>
                <td>{{$watch->shape? $watch->shape : 'No Information'}}</td>
                <td>{{$watch->size? $watch->size : 'No Information' }}</td>
                <td>{{$watch->bezel_material? $watch->bezel_material : 'No Information'}}</td>
                <td>{{$watch->band_material? $watch->band_material : 'No Information'}}</td>
                <td>{{$watch->quantity? $watch->quantity : 'No Information'}}</td>
                <td>{{$watch->price? $watch->price : 'No Information'}}</td>
                <td>{{$watch->discount_price? $watch->discount_price : 'Not Discount'}}</td>
                <td>{{$watch->isAvailable() ? 'Available': 'Not Available'}}</td>
                <td>{{$watch->created_at ? $watch->created_at->diffForHumans(): "Do not have info"}}</td>
                <td>{{$watch->updated_at ? $watch->updated_at->diffForHumans(): "Do not have info"}}</td>
                <td><a href="{{url(route('watches.edit', $watch->id))}}" class="btn btn-primary">Update</a></td>
                <td>
                    <button class="btn btn-danger btn-delete">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-info clear-both">No watch found</div>
    @endif
@endsection


