<?php

// Let's say I wanted to show the whole user in the client, because the website has a sign up page.
// I would do it a bit different and close to when I create a api-name, because I will json_encode it.
// This is how I would do it.

$user = [
    'first_name' => 'Monica',
    'middle_name' => 'Somera',
    'last_name' => 'Jensen',
    'email' => 'Monica@hotmail.com'
];

echo json_encode($user);

// It will show everything in the $user if there is a success