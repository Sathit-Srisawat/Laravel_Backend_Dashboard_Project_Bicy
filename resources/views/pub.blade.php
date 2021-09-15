<?php


require("phpMQTT.php");

$server  = "128.199.197.229";
$port  = 1883;
$username = "";
$password = "";
$client_id = "Client-".rand();

$mqtt = new phpMQTT($server, $port, $client_id);



if ($mqtt->connect(true, NULL, $username, $password)) {
 $mqtt->publish("test/topic", "{{input->command}}", 0);
 $mqtt->close();
} else {
    echo "Time out!\n";
}



?>
