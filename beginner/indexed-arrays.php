<?php

$i = array('Gaza', 'Rafah', 'Nasser');
echo $i["0"];
echo "<hr>";

$i["0"] = "Ali";
$i["1"] = "Ahmad";
$i["2"] = "Essam";
$i["3"] = "Hani";

echo $i["0"] . "<br>";
echo $i["1"] . "<br>";
echo $i["2"] . "<br>";
echo $i["3"];
