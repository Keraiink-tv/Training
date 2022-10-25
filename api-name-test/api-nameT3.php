<?php

// This is how you make a array, THIS IS IMPORTANT! 
// What is a array? It is a special variable and it CAN hold more than one value in different ways 
// such as:
// ___________________________________________________________________________________
// $letters0 = "a";
// $letters1 = "b";
// $letters2 = "c";
// ___________________________________________________________________________________

// THE EXCERCISE
// in this excise I will go through how to put a list of letters in a array.
// Also called indexed array as: (There are 2 different ways you can do it!)
// ___________________________________________________________________________________
// $letters[0] = "a";
// $letters[1] = "b";
// $letters[2] = "c";
// ___________________________________________________________________________________

// WHICH IS ALSO ONE OF THE QUESTIONS YOU FAILD IN ANSWERING MONICA!


// THERE ARE DIFFERENT WAYS, BUT THIS IS THE FIRST ONE!
// First of, you want to give the array a name and in this example it will be $letters.
// and remember to always open the <?php tag.
// And then open the array such as: array(); to create it.

// After that enter the letters such as array("a","b","c");
$letters = array("a","b","c");

// I will then echo it to show the output in the client.
// and put the letters I want to show, in this example I will show them all.
// Therefor I will choice the different value, and put a: .",". between the values.
echo $letters[0].",".$letters[1].",".$letters[2];

// If there is a success
// It will show: a,b,c in the thunder client.

// THIS IS THE SECOND WAY TO DO IT!
// I will make the different letters just like before, but put it up like this:
$letters[0] = "a";
$letters[1] = "b";
$letters[2] = "c";

// And echo it the same way as you did before.
// echo $letters[0].",".$letters[1].",".$letters[2];
// if again there is a success it will show exactly the same as before.

