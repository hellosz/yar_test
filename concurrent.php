<?php
function callback($retval, $callinfo) {
    var_dump($retval);
}

function error_callback($type, $error, $callinfo) {
    error_log($error);
}

Yar_Concurrent_Client::call("http://localhost/API.php", "some_method", array("1"), "callback");
Yar_Concurrent_Client::call("http://localhost/API.php", "some_method", array("2"));   // if the callback is not specificed,
// callback in loop will be used
Yar_Concurrent_Client::call("http://localhost/API.php", "some_method", array("3"), "callback", "error_callback", array(YAR_OPT_PACKAGER => "json"));
//this server accept json packager
Yar_Concurrent_Client::call("http://localhost/API.php", "some_method", array("4"), "callback", "error_callback", array(YAR_OPT_TIMEOUT=>1));
//custom timeout

Yar_Concurrent_Client::loop("callback", "error_callback"); //send the requests,
//the error_callback is optional