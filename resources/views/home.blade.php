@extends('layouts.default')

@section('title', 'Trang chủ - PT Store')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($product as $item)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">

                <span>{{$item->image}}</span>


                <img src="{{ asset($item->image) }}" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="view/{{$item->id}}" name="id" value="{{$item->id}}" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="./index.php?act=editProduct&id={{ $item->id }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <a href="./index.php?act=deleteProduct&id={{ $item->id }}" class="btn btn-sm btn-outline-secondary">Delete</a>
                        </div>
                        <small class="text-muted">{{ $item->price }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection