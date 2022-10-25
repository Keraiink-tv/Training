<?php
// In this exercise I will make a response array with json_encode and it will show the info:
// saying my first name, and will be able to change the name in thunder klient. 
// It will response with the info and name.

// IF SUCESS
$response = ['info' => "{$_POST['first_name']}"];
echo json_encode($response);

?>

