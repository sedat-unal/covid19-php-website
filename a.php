<?php
function getDay()
{
    $day = date("d");
    $dayArray = array(
        0 => $day - 3,
        1 => $day - 2,
        2 => $day - 1,
        3 => $day
    );
    return $dayArray;
}
$gun = getDay();
for ($i = 0; $i < count($gun); $i++) {
    $nowDate = date("d.m.Y");
    $cut = explode(".", $nowDate, 3);
    $cut[0] = $gun[$i];
    $imp = implode("/", $cut);
    $source = file_get_contents("https://raw.githubusercontent.com/ozanerturk/covid19-turkey-api/master/dataset/timeline.json");
    $data = json_decode($source, true);
    $cases[] = $data[$imp];
}

var_dump($cases);
?>