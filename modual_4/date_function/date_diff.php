<h2 align='center'>check date & date differance </h2>
<hr width='100%'>


<?php
$date1 = date_create('2022-12-03'); //revers formate 
$date2 = date_create('2022-08-25');
$diff = date_diff($date1, $date2);
$checkdt = checkdate(3, 29, 2014);
if ($checkdt == 1) {
    echo "valide date " . $checkdt;
} else {
    echo "invalid date." . $checkdt;
}


echo "<pre>";
print_r($diff);
echo "</pre>";
// if ($diff->invert == 0) {
//     echo "positive value" . $diff->days;
// } else if ($diff->invert == 1) {
//     echo "nagative value" . $diff->days;
// }
echo $diff->days . "</br>";
echo $diff->format('%a') . "</br>";
echo $diff->format('%R%a') . "</br>";
echo $diff->format('%r%a days') . "</br>";
