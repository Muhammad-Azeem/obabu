<?php
namespace App\Services;

use Twilio\Rest\Client;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;

class VideoStreamingService {

    protected ?string $sid;
    protected ?string $token;
    protected ?string $api_key;
    protected ?string $api_secret;

    public function __construct(){

        $this->sid = 'ACafa2f6f3173c2f4d68d7a42ea0bacc94';//config('services.twilio.sid');
        $this->token = '36e297bb8369f494607a2ce4c898a880';//config('services.twilio.token');
        $this->api_key = config('services.twilio.api_key');
        $this->api_secret = config('services.twilio.api_secret');

    }

    public function videoRooms():array
    {
        $rooms = [];

        try{
            $client = new Client($this->sid,$this->token);
            $allRooms = $client->video->rooms->read([]);
            $rooms = array_map(fn($room) => $room->uniqueName,$allRooms);
            $response = ['status' => true , 'message' => 'Video Rooms Successfully Load.' , 'rooms' => $rooms];

        }
        catch(\Exception $exception){

            $message = $exception->getMessage();

            $response = ['status' => false , 'message' => $message , 'rooms' => null];
        }

        return $response;

    }


    public function createRoom(?string $name):array
    {
      try{

        $client = new Client($this->sid,$this->token);
        $exists = $client->video->rooms->read(['uniqueNmae' => $name]);

        if(empty($exists)){
            $client->video->rooms->create([
                'uniqueName' => $name,
                'type' => 'group',
                'recordParticipantOnConnect' => false,
            ]);
        }
        $response = ['status' => true , 'message' => 'nothing','roomName' => $name];
      }
      catch(\Exception $exception)
      {

        $response = ['status' => false , 'message' => $exception->getMessage(),'roomName' => $name];

      }

      return $response;

    }


    public function joinRoom(string $name):array
    {
        try{
            $names = ['ahmad' , 'umer' , 'faizan' , 'azeem' , 'zohaib'];
            $identity = $names[array_rand($names)];

            $token = new AccessToken($this->sid, $this->api_key , $this->api_secret , 3600 , $identity);

            $videoGrant = new VideoGrant();
            $videoGrant->setRoom($name);

            $token->addGrant($videoGrant);

            $response = ['status' => true , 'message' => 'Room join successfully.' , 'accessToken' => $token->toJWT() , 'roomName' => $name];
        }
        catch(\Exception $exception)
        {
            $response = ['status' => false , 'message' => $exception->getMessage(),'roomName' => $name];
        }

        return $response;
    }


}
