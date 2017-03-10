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
            <th>Quantity</th>
            <th>Price</th>
            <th>Discount Price</th>
            <th>Categories</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($watches as $watch)
            <tr id="watch-{{$watch->id}}">
                <td class="watch-id">{{$watch->id}}</td>
                <td>{{$watch->brand ? $watch->brand->name : ' No brand'}}</td>
                <td>{{$watch->name}}</td>
                <td>{{$watch->quantity !== null? $watch->quantity : 'No Info'}}</td>
                <td>{{$watch->price? $watch->price : 'No Information'}}</td>
                <td>{{$watch->discount_price!== null? $watch->discount_price : 'Not Discount' }}</td>
                <td>
                    @foreach($watch->categories as $category)
                        @if($loop->last)
                            {{$category->name}}
                        @else
                            {{$category->name}},
                        @endif

                    @endforeach
                </td>
                <td>{{$watch->isAvailable() ? 'Available': 'Not Available'}}</td>

                <td><a href="{{url(route('watches.edit', $watch->id))}}" class="btn btn-primary">Update</a></td>
                <td>
                    <button class="btn btn-danger btn-watch-delete">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $watches->links() }}
    @else
    <div class="alert alert-info clear-both">No watch found</div>
    @endif

@endsection


