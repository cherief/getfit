<?php

// print_r($_POST);


// $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
// $parsed_url = parse_url($url,PHP_URL_QUERY);

// parse_str($parsed_url,$arr);

$jsondata = file_get_contents('general.json');
$tempArray = json_decode($jsondata);

// $newarr = array("date" => $arr["date"], "treadmill" => $arr["treadmill"], "rower"=>$arr["rower"]);

$newarr = $_POST;

array_push($tempArray -> fit,$newarr);

$newjson = json_encode($tempArray);
file_put_contents('general.json', $newjson);

?>
