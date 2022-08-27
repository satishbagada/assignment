<?php
$date = date_create('2016-10-15');
date_time_set($date, 03, 15, 55);
echo date_format($date, 'd-m-Y h:i:s');
