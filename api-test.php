<?php

$first_name = $_POST['fornavn'];
$last_name = $_POST['efternavn'];
http_response_code(400);
echo "hej $first_name $last_name";