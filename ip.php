<?php

$user_ip = $_SERVER['REMOTE_ADDR'] ;
 
 // echo $string = "your aip address:" . $user_ip;

function echo_ip(){
global $user_ip;
$string = 'your ip address:'.$user_ip ;
echo $string ;

}

echo_ip(); 

?>