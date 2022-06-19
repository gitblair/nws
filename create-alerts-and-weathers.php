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
//echo $weathers;

$a1 = '<pre>';
$xml=simplexml_load_file("feeds/alert-NYC061.xml") or die("Error: Cannot create object");
$a2 = '<b>' . $xml->generator[0] . '</b>';
$a3 = '<br>';
$a4 = '‣ NYC: ' . $xml->entry[0]->title[0];
//$a5 = '<br>          [' . $xml->entry[0]->updated[0] . ']<br>';
$a5 = '<br>';
$xml=simplexml_load_file("feeds/alert-NJC013.xml") or die("Error: Cannot create object");
$a6 = '‣ NJ: ' . $xml->entry[0]->title[0];
//$a7 = '<br>          [' . $xml->entry[0]->updated[0] . ']<br></pre>';
$a7 = '</pre>';
$alerts = "$a1 $a2 $a3 $a4 $a5 $a6 $a7";
//echo $alerts;
//observation_time

?>
