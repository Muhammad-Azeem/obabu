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
                <th scope="col">Per Day Price</th>
                <th scope="col">Session Count</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($subscribers as $key => $subscriber)
                    <tr>
                        <th>{{++$key}}</th>
                        <td>{{$subscriber->per_day_price}}</td>
                        <td>{{$subscriber->is_session_count}}</td>
                        <td>
{{--                            <form action="{{ route('subscriber.destroy',$subscriber->id) }}" method="POST">--}}
                                <a href="{{ route('subscriber.edit',$subscriber->id) }}">
                                    <i class="fas fa-edit  fa-lg"></i></a>
                                    @csrf
{{--                                    @method('DELETE')--}}

{{--                                    <button type="submit" title="delete" style="border: none; background-color:transparent;">--}}
{{--                                        <i class="fas fa-trash fa-lg text-danger"></i>--}}
{{--                                    </button>--}}
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
