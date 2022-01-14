<?php
$url = json_decode(file_get_contents("https://raw.githubusercontent.com/mohmadhabib/RandomEnglishWords/master/randomword.json"));
$rand = array_rand($url, 1);
$res[] = ["word" => $url[$rand]];
echo json_encode($res,64|128|256);
