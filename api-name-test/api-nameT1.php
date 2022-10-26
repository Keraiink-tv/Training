<?php


// This is a assoc array because you have name keys that are assigned to it,
// and in this exercise I wanna where I output it, on the browser.
// First I create the user and gives it a "field name" as a a example 'first_name' 
// And then give it a value of any name you want. Which means you created the first key to your array.

// $user = [
//     'first_name' => 'Monica',
//     'last_name' => 'Jensen',
//     'message' => 'Welcome'
// ];
// echo "{$user['message']}, {$user['first_name']} {$user['last_name']}";

// If sucess
// You will get a message that says: Welcome, Monica Jensen
// Start with echoing it and choice what you want to echo, in this example I echo everything in one line.
// This way I can choice exactly what I want to output, so if I just wanted to echo only the name:

// [IMPORTANT!!] I would simply write: 
$user = [
    'first_name' => 'Monica',
    'last_name' => 'Jensen',
    'message' => 'Welcome'
];
echo json_encode($user); 

// if success - Then in the client, it would only show the name.


// There is also another way to do it
// You will start it like this, the difference is that you say: = array(); instead of: = []
// Which is the same way, and you can always add the other names by adding like this:
// echo $user[0]." ".$user[1]." ".$user[2];

// $user = array("Monica","Somera","Jensen");
// echo $user[0];

// If there is a success it will show the name.

