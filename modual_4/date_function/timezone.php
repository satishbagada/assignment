<?php
date_default_timezone_set('asia/kolkata');
echo date_default_timezone_get() . "</br>";

$tz = timezone_open('Asia/Tokyo');
echo timezone_name_get($tz);


// echo "<pre>";
// print_r(timezone_location_get($tz));
// echo "</pre>";


echo "<pre>";
print_r(timezone_identifiers_list(256));
echo "</pre>";
