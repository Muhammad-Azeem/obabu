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
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">age</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $key => $user)
            @if($user->type == 'teacher')
            <tr>
            <th>{{$key++}}</th>
            <td>{{$user->photo}}</td>
            <td>{{$user->name}}</td>
            <td></td>
        </tr>
            @endif
        @empty
            <h1 class="text-center"> No Data Found</h1>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
@section('javascript')
@endsection
