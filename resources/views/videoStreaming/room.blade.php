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
                    <input type="hidden" name="roomName" id="room-name-test" data-name = "{{$response['roomName']}}">
                    <input type="hidden" name="token" id="token-access-test" data-token = "{{$response['accessToken']}}">
                </div>
            </div> 
            <div class="card-body">
                <div id="media-div"></div>
            </div>  
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//media.twiliocdn.com/sdk/js/video/v1/twilio-video.min.js"></script>
        <script src="{{asset('assets/js/twilio.js')}}"></script>
    </body>
</html>
