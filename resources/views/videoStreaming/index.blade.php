<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Video Chat Rooms
                </div>

                <div class="card-body">
                   <form action="{{route('room.create')}}" method="post">
                   @csrf
                       <div class="form-group">
                          <label for="video-room">Create or Join a Video Chat Room</label>
                          <input type="text" name="name" id="chat-room">
                       </div>
                       <div class="form-group">
                          <button>Go</button>
                       </div>
                   </form>
                </div>
            </div>              
        </div>
        <div class="card">
               <div class="card-header">
                  <div class="title">Video Rooms</div>
               </div>
               <div class="card-body">
               @if($response['status'])
                 <table class="table">
                    <tr>
                      <th>Meeting Link</th>
                      <th>Maximum Participant Allowed</th>
                      <th>Status</th>
                    </tr>
                    @foreach ($response['rooms'] as $room)
                    <tr>
                       <th>
                       <a href="{{ route('room.join',['room'=> $room])}}">{{ $room }}</a></th>
                    </tr>
                    @endforeach

                 </table>
                @endif
               </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
