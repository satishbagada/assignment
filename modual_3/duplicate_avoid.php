<?php
// Write program to remove duplicate values from array 

$fruits = array('a' => 'banana', 'b' => 'white', 'c' => 'banana', 'd' => 'cherry', 'e' => 'Melons', 'f' => 'banana');
$fruits = array_unique($fruits);
foreach ($fruits as $key => $value) {
    echo $key . '  =      ' . $value . '</br>';
}
print_r($fruits);
