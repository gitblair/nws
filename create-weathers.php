<?php
$w1 = '<pre>';
$xml=simplexml_load_file("feeds/weather-KNYC.xml") or die("Error: Cannot create object");
$w2 = '<b>' . $xml->credit[0] . '</b>';
$w3 = '<br>';
$w4 = '‣ ' . $xml->location[0] . ': ' . $xml->weather[0] . ' and '  . $xml->temp_f[0] . '°F';
$w5 = '<br>          [' . $xml->observation_time[0] . ']<br>';
$xml=simplexml_load_file("feeds/weather-KCDW.xml") or die("Error: Cannot create object");
$w6 = '‣ ' . $xml->location[0] . ': ' . $xml->weather[0] . ' and '  . $xml->temp_f[0] . '°F';
$w7 = '<br>          [' . $xml->observation_time[0] . ']</pre>';
$weathers = "$w1 $w2 $w3 $w4 $w5 $w6 $w7";
?>
