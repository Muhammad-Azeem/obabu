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
        <form action="{{route('subscriber.update', $package->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Session Count:</label>
                <input type="text" class="form-control" id="is_session_count" name="is_session_count" aria-describedby="is_session_count" placeholder="Enter Session Count" value="{{$package->is_session_count}}">
            </div>

            <div class="form-group">
                <label for="per_day_price">Per Day Price:</label>
                <input type="text" class="form-control" id="per_day_price" name="per_day_price" aria-describedby="per_day_price" placeholder="Enter Per Day Price" value="{{$package->per_day_price}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@section('javascript')
@endsection
