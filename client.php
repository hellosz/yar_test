<?php
function callback()
{
    print_r("this is " . __METHOD__);
}

$client = new Yar_Client("http://localhost/API.php");
/* call remote service */
$result = $client->some_method(array('name' => 'allen', 'age' => 18), 'callback');
?>