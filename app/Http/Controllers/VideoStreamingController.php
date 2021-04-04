<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\VideoStreamingService;

class VideoStreamingController extends Controller
{

    protected VideoStreamingService $videoStreamingService;


    public function __construct(VideoStreamingService $videoStreamingService)
    {
        $this->videoStreamingService = $videoStreamingService;
    }
    
    public function index()
    {
        $response = $this->videoStreamingService->videoRooms();

        return view('videoStreaming.index',compact('response'));

    }


    public function create(Request $request)
    {

        $data = $request->validate(['name' => ['required']]);

        $response = $this->videoStreamingService->createRoom($data['name']);

        return redirect()->route('room.index');
    }


    public function join($room)
    {
        $response = $this->videoStreamingService->joinRoom($room);

        return view('videoStreaming.room',compact('response'));

    }
}
