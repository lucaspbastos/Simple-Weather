<?php
$lat = $_GET["lat"];
$lon = $_GET["lon"];
$call = "http://api.open-notify.org/iss-pass.json?lat=".$lat."&lon=".$lon."&alt=20&n=5&callback=";
$fp = fopen($call, "r");
$contents = "";
while ($more = fread($fp, 1000)) {
    $contents .= $more;
}
echo $contents;
?>
