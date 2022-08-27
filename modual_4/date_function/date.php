<?php
echo "<h2 align='center'>Date function</h2>";
echo "Today is: " . date('d') . "</br></br>"; //date formate like 01
echo "Today date is: " . date('jS') . "</br></br>"; //dte formate like 1st
echo "Today month is: " . date('m/M/n/F') . "</br></br>";
echo "Today year is: " . date('y') . "</br></br>";
echo "Today year is: " . date('Y') . "</br></br>";
echo "Full date  is: " . date('d/m/Y') . "<hr>";

echo "<h2 align='center'>Week function</h2>";
echo "Week day is: " . date('D') . "</br>";  //aug
echo "Week day is: " . date('l') . "</br>";    // august

echo "day is: " . date('N') . "</br>"; //week start is monday 1
echo "day is: " . date('w') . "</br>"; //week start is sunday 0
echo "day of year: " . date('z') . "</br>"; //total day of year
echo "week of the year: " . date('W') . "</br>"; //week of the year
echo "Days of the mont: " . date('t') . "</br>"; //days of the month
echo "this is Leap year: " . date('L') . "</br>"; //leap year return two value like true 1 or false 0
