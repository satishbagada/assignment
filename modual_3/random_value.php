 <!-- 
     Get random values from array
 <?php
    //use of array random function
    $color = array('a' => 'red', 'b' => 'green', 'c' => 'yellow', 'd' => 'blue');

    $arr = array_rand($color, 3);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo $color[$arr[0]] . "<br>";
    echo $color[$arr[1]] . "<br>";
    echo $color[$arr[2]] . "<br>";

    ?> -->

 <?php
    // use of shuffle function
    $color = array('a' => 'red', 'b' => 'green', 'c' => 'yellow', 'd' => 'blue');

    shuffle($color);
    foreach ($color as $value) {
        echo $value . "<br>";
    }
    //or 
    echo "<pre>";
    print_r($color);
    echo "</pre>";
    ?>