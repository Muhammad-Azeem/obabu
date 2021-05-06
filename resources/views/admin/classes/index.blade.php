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
                    <a href="{{ route('page.classes-add') }}" class="btn btn-primary" >Add New Class  </a>

                </h3>
            </div>
        </div>
        <div class="container">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Class Name</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Classes</th>
                </tr>
                </thead>
                <tbody>
                @forelse($classes as $key => $class)

                    <tr>
                        <th>{{$key +1}}</th>
                        <td>{{isset($class->name)?$class->name:"N/A"}}</td>
                        <td>{{isset($class->teacher_name)?$class->teacher_name:"N/A"}}</td>
                        <td>
                            <table>
                                <thead>
                                   <tr>
                                       <td>Day</td>
                                       <td>Date/Time</td>
                                   </tr>
                                </thead>
                                <tbody class="table table-sm table-hover">
                                    @foreach($class->days as $day)
                                    <tr>
                                        <td>
                                            {{$day->day}}
                                        </td>
                                        <td>
                                            {{ date('F j, Y  H:i:s', strtotime($day->date_time))}}

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </td>

                        <td>
                            <a href=" {{route('class.edit', $class->id)}} ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>
                            <a class="btn btn-sm delete" data-id="{{$class->id}}" ><i class="la la-trash"></i> Delete </a>
                        </td>
                    </tr>
                @empty
                    <h1 class="text-center" id="btn-delete"> No Data Found</h1>
                @endforelse
                </tbody>
            </table>
        </div>
        <script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>
        <link href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
        <script type="text/javascript">

            $( "body" ).on( "click", ".delete", function () {

                var task_id = $( this ).attr( "data-id" );

                var form_data = {

                    class_id: task_id

                };

                swal({

                    title: "Do you want to delete this Class",

                    //text: "category.delete_category_msg",

                    type: 'info',

                    showCancelButton: true,

                    confirmButtonColor: '#F79426',

                    cancelButtonColor: '#d33',

                    confirmButtonText: 'Yes',

                    showLoaderOnConfirm: true

                }).then( ( result ) => {

                    if ( result.value == true ) {

                        $.ajax( {

                            type: 'POST',

                            headers: {

                                'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )

                            },

                            url: '<?php echo url('/class/delete'); ?>',

                            data: form_data,

                            success: function ( msg ) {

                                // alert('hlo');

                                // swal(msg)

                                swal( "Class Deleted Successfully", '', 'success' )

                                setTimeout( function () {

                                    location.reload();

                                }, 9000 );

                            }

                        } );

                    }

                } );

            } );

        </script>
@endsection

@section('javascript')

@endsection
