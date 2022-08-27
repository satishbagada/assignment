<?php
$date = date_parse('2022-9-12 23:25:57 a');
echo "<pre>";
print_r($date);
echo "</pre>";

echo $date['hour'] . "</br>";
echo $date['minute'] . "</br>";
echo $date['second'] . "</br>";
