<?php
$apikey = getenv('OPENWEATHER_API_KEY');
$zip = $_GET["zip"];
$country = $_GET["country"];
$lat = $_GET["lat"];
$lon = $_GET["lon"];
$ge = $_GET["ge"];

if ($ge=="false") {
    $call = "https://api.openweathermap.org/data/2.5/weather?zip=".$zip.",".$country."&appid=".$apikey;
} else {
    $call = "https://api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$lon."&appid=".$apikey;
} 

$fp = fopen($call, "r");
$contents = "";
while ($more = fread($fp, 1000)) {
    $contents .= $more;
}
echo $contents;
?>