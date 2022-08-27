<center>
    <h2>make time inside of php</h2>
    <hr style="margin-top:20px; width:25%;">

    <?php
    echo date('l', mktime(0, 0, 0, 05, 8, 2022)) . "</br></br>";
    $mktime = date('H:i:s  m-d-Y', mktime(23, 2, 55, 8, 31, 2022)) . "</br></br>";
    $gmdate = date('h:i:s a', gmmktime(23, 02, 55, 8, 31, 2022)) . "</br></br>";

    echo "mkdate is: " . date($mktime) . "</br></br>";
    echo "gmdate is: " . date($gmdate) . "</br></br>";
