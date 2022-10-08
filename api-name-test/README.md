<!-- IMPORTANT THINGS TO KNOW
______________________________________________________________________
- API MUST ALWAYS BE VALIDATED
- IF THERE IS A SUCESS THERE SHOULD ALWAYS BE A 200 IF NOT A 400 ERROR
- AN API SHALL ALWAYS ECHO ONLY ONCE
- API SHOULD ONLY SHOW I JSON AND NOT RETURN TEXT OR HTML
______________________________________________________________________
-->

<!-- STEP 1 -->
<!-- Start up thunderklient and link it to the right document -->
<!-- You can then test it by putting "x" in the document -->

<!-- STEP 2 -->
<!-- Then go into thunderklient and see if it gives a 200 OK status -->

<!-- STEP 3 -->
<!-- You can start with opening a php tag -->
<!-- 
______________________________________________________________________

The wrong way to display the name in thunderklient is by just typing the name in the document.
You want it to respond with some info with json, displaying whatever name you can change in the klient.
______________________________________________________________________

-->

<!-- STEP 4 -->
<!-- You can then put in the field name to maybe "first_name" and the value to whatever the name is -->
<!-- Nothing is gonna pop up when you send the request -->

<!-- STEP 5 -->
<!-- Then you want it it equals some info (WHICH IS THE CORRECT WAY TO USE JSON) -->
<!-- You can put it in like this

<?php

$respond = ['info' => "Monica"];
echo json_encode($respond);

And it will show the name, which is kind of what we want. But what if you have to change the name?
That's correct, you want to use the fieldname called  "first_name" which you always can change the value of any name you wish! 

REMEMBER THIS! 
____________________________
echo json_encode($respond);
____________________________
You echo json_encode at last or it wont show in the thunderklient.
The reason you use json_encode is because you want it to return the text, with eitehr a suceccful or error json encoded string. 

If there is a sucess it will show the text info with the name you want.
it should show this at the moment.

{
    'info': Monica
}

?>
-->

<!-- STEP 6 -->
<!-- 
You want to do something close to what you had done before, but add the fieldname "first_name" so you can change the name in the thunderklient to whatever name you wish.

REMEMBER TO CHECK IF THE METHOD IS EITHER A GET OR POST ON THUNDERKLIENT
If it is some information, that is sensitive you want it to be a GET methode.
In this case, you can just use a POST methode.

Also a reminder: the reason you echo is because you want to print a variable in json_encode
(in this case it's the $response)
-->

<!-- Remember to make sure the MAMP is connected to the right folder, or it won't work -->
