<?php
if (isset($_POST['submit'])) {
    $num = $_POST['passnum'];

    // for ($i = 1; $i <= $num; $i++) {
    //     $arr = array("0" => $i . ' EVEN NUMBER<br><br>', "1" => $i . "  ODD NUMBER</br></br>");
    //     echo $arr[$i % 2 == 0];
    // }
    $arr = array("0" => 'EVEN NUMBER<br><br>', "1" => "ODD NUMBER</br></br>");
    echo $arr[$num % 2];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <style>

    </style>
</head>

<body>
    <form method="POST">
        <input type="text" name="passnum">
        <input type='submit' name='submit'>
    </form>
</body>

</html>