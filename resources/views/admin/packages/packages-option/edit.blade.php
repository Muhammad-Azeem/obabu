@extends('layouts.master.master-admin')
@section('header')
    <style>
        .kt-badge--success {
            background: #1BB580 !important;
        }
    </style>
@stop
@section('content')
    <div class="container">
        <form action="{{route('package.update', $package->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name" value="{{$package->name}}">
            </div>

            <div class="form-group">
                <label for="monthly_price">Monthly Price:</label>
                <input type="text" class="form-control" id="monthly_price" name="monthly_price" aria-describedby="monthly_price" placeholder="Enter monthly_price" value="{{$package->monthly_price}}">
            </div>

            <div class="form-group">
                <label for="weekly_price">Weekly Price:</label>
                <input type="text" class="form-control" id="weekly_price" name="weekly_price" aria-describedby="weekly_price" placeholder="Enter weekly_price" value="{{$package->weekly_price}}">
            </div>

            <div class="form-group">
                <label for="discount">Discount:</label>
                <input type="text" class="form-control" id="discount" name="discount" aria-describedby="discount" placeholder="Enter discount" value="{{$package->discount}}">
            </div>

            <div class="form-group">
                <label for="days_per_week">Days Per Week:</label>
                <input type="text" class="form-control" id="days_per_week" name="days_per_week" aria-describedby="days_per_week" placeholder="Enter days_per_week" value="{{$package->days_per_week}}">
            </div>

            <div class="form-group">
                <label for="per_day_price">Per Day Price:</label>
                <input type="text" class="form-control" id="per_day_price" name="per_day_price" aria-describedby="per_day_price" placeholder="Enter per_day_price" value="{{$package->per_day_price}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@section('javascript')
@endsection
