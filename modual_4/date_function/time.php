<?php
echo "<h2 align='center'>Time function</h2><hr width='50%'>";
// date_default_timezone_set("Asia/kolkata");

echo "hour is:" . date('h e') . "</br></br>"; //hour 01 to 12
echo "Hour is:" . date('H') . "</br></br>"; //hour 00 to 23
echo "mininus is:" . date('i') . "</br></br>";
echo "second is:" . date('s') . "</br></br>";
echo "meridian is  " . date('a/A') . "</br></br><hr>";

date_default_timezone_set("Asia/kolkata");
echo "set time zone:  " . date('e') . "</br></br>";
echo "Time is:  " . date('h:i:s a') . "</br></br>";
echo "date and Time is:   " . date('d/F/Y  h:i:s a') . "</br></br>";
