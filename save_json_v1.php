<?php

// does NOT open new page when data is submitted

$jsondata = file_get_contents('getfit.json');
$tempArray = json_decode($jsondata);

$newarr = $_POST;

array_push($tempArray -> fit,$newarr);

$newjson = json_encode($tempArray);
file_put_contents('getfit.json', $newjson);

?>
