<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 

<html>
    <head>

        <title>Fit v1.0</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet" type="text/css">

    </head>

    <body>

       <?php

        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $parsed_url = parse_url($url,PHP_URL_QUERY);

        parse_str($parsed_url,$arr);

        $jsondata = file_get_contents('getfit.json');
        $tempArray = json_decode($jsondata);

        $newarr = array("date" => $arr["date"], "treadmill" => $arr["treadmill"], "rower"=>$arr["rower"]);

        echo "<div id='summary'>Summary</div>";

        echo "<div id='summ_equip'>";

            echo "<div id='summ_tread'>Treadmill: ", $arr["treadmill"], " km</div>";

            echo "<div id='summ_row'>Rower: ", $arr["rower"], " m</div>";

        echo "</div>";    

        array_push($tempArray -> fit,$newarr);

        $newjson = json_encode($tempArray);
        file_put_contents('getfit.json', $newjson);

        ?> 

    </body>

</html>
