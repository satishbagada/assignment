<?PHP
//  Write a PHP program to check Leap years between 1901 to 2016 Using nested

for ($i = 1901; $i <= 2016; $i++) {
    if ($i % 4 == 0) {
        if ($i % 100 != 0 || $i % 4 == 0) {
            echo "$i is a Leap Year<br></br>";
        }
    } else {
        echo "$i is a not Leap year<br></br>";
    }
}
