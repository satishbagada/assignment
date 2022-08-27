<?php
 date_default_timezone_set('asia/kolkata');
echo date('d-m-Y',strtotime('now()'))."</br>";
echo date('d-m-Y',strtotime('9 march 2005'))."</br>";
echo date('d-m-Y',strtotime('+9 days'))."</br>";
echo date('d-m-Y',strtotime('-9 days'))."</br>";
echo date('d-m-Y',strtotime('+2 years +9 days'))."</br>";
echo date('d-m-Y',strtotime('+1 week'))."</br>";
echo date('d-m-Y h:i:s a',strtotime('+2 hours -59second'))."</br>";
echo date('d-m-Y',strtotime('next monday'))."</br>";
echo date('d-m-Y',strtotime('last monday'))."</br>";