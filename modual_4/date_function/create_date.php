<?php
echo "<h2 align='center'>create date & time </h2><hr width='100%'>";

$date = date_create('2022-8-3'); //revers formate y-m-d 
echo date_format($date, 'd-m-Y h:i:s a e') . "</br></br>";
