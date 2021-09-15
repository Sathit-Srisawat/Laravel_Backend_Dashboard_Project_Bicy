<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mqttRequest;
use Lzq\Mqtt\SamMessage;
use Lzq\Mqtt\SamConnection;

class Mqtt_request extends Controller
{
    public function SendMsgViaMqtt(Request $request){
        $input = $request->all();
        $data = mqttRequest::create($input);
	echo $data->command;

//16

$conn = new SAMConnection();//create a new connection object

$conn->connect('mqtt', array('SAM_HOST' => '128.199.197.229', 'SAM_PORT' => '1883'));//start initialise the connection

$msgCpu = new SAMMessage($data->command);//create a new MQTT message with the output of the shell command as the body

$conn->send('topic://'.'tests', $msgCpu);//send the message on the topic cpu

$conn->disconnect();

	
    }


}
