@extends('layouts.app')
@section('content')
    <div class="flt-left">
        <h1>All Brand</h1>
    </div>
    @if($brands->count() > 0)
        <div class="flt-right mg-top-20">
            <a href="{{url(route('brands.create'))}}" class="btn btn-info">Add Brand</a>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>History</th>
                <th>Product</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands->get() as $brand)
                <tr id="brand-{{$brand->id}}">
                    <td class="brand-id">{{$brand->id}}</td>
                    <td>{{$brand->name}}</td>
                    <td>{{$brand->history !== null? $brand->history : 'No Info'}}</td>
                    <td>{{$service->countProducts($brand) }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info clear-both">No brand found</div>
    @endif

@endsection


