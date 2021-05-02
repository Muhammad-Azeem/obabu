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

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Monthly Price</th>
                <th scope="col">Weekly Price</th>
                <th scope="col">Discount</th>
                <th scope="col">Days Per Week</th>
                <th scope="col">Per Day Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($packages as $key => $package)
                    <tr>
                        <th>{{++$key}}</th>
                        <td>{{$package->name}}</td>
                        <td>{{$package->monthly_price}}</td>
                        <td>{{$package->weekly_price}}</td>
                        <td>{{$package->discount}}</td>
                        <td>{{$package->days_per_week}}</td>
                        <td>${{$package->per_day_price}}</td>
                        <td>
{{--                            <form action="{{ route('package.destroy',$package->id) }}" method="POST">--}}
                                <a href="{{ route('package.edit',$package->id) }}">
                                    <i class="fas fa-edit  fa-lg"></i></a>
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}

{{--                                <button type="submit" title="delete" style="border: none; background-color:transparent;">--}}
{{--                                    <i class="fas fa-trash fa-lg text-danger"></i>--}}

{{--                                </button>--}}
                            </form>
                        </td>
                    </tr>
            @empty
                <h1 class="text-center"> No Data Found</h1>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
@section('javascript')
@endsection
