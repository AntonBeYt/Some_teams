<?php
require __DIR__ . ('/data.php');

foreach ($teams as $team) :
    $cities[] = $team['city'];
endforeach;

$cities = array_unique($cities);
foreach ($cities as $city) :
    echo $city . " ";
endforeach;
