@extends('layouts.master.master-admin')
@section('header')
    <style>
        .kt-badge--success {
            background: #1BB580 !important;
        }
    </style>
@stop
@section('content')
<div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                <a href="{{ route('page.parentcreate') }}" class="btn btn-primary" >Add New Parent  </a>

                </h3>
            </div>
        </div>
<div class="container">

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">phone</th>
            <th scope="col">age</th>
            <th scope="col">gender</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($parentUsers as $key => $user)
            <tr>
            <th>{{$key+1}}</th>
                <td>{{isset($user->name)?$user->name:"N/A"}}</td>
                <td>{{isset($user->email)?$user->email:"N/A"}}</td>
                <td>{{isset($user->phone)?$user->phone:"N/A"}}</td>
                <td>{{isset($user->age)?$user->age:"N/A"}}</td>
                <td>{{isset($user->gender)?$user->gender:"N/A"}}</td>
                <td>{{isset($user->photo)?$user->photo:"N/A"}}</td>
            <td>
                <a href=" {{route('parent.edit', $user->id)}} ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
                </a>

                <a href="{{url('users/parent/view/childs/'.$user->id)}}" class="btn btn-sm btn-info"> View Childs</a>
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
