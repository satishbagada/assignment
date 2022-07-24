<!-- Write a PHP program to enter marks of five subjects Physics, Chemistry,
Biology, Mathematics and Computer, calculate percentage and grade by if else  -->
<?php
if (isset($_POST['submit'])) {
    $mark1 = $_POST['physics'];
    $mark2 = $_POST['chemistry'];
    $mark3 = $_POST['biology'];
    $mark4 = $_POST['computer'];
    $mark5 = $_POST['mathematics'];
    $total = ($mark1 + $mark2 + $mark3 + $mark4 + $mark5);
    $avg = ($total / 5);

    echo "total number of marks " . $total;
    echo "<br>";
    echo "<br>";
    echo "percentege of mark:" . $avg;
    echo "<br>";

    if ($avg >= 90 && $avg < 100) {

        echo "A+ GRADE";
    } else if ($avg >= 80 && $avg < 90) {
        echo "A GRADE";
    } elseif ($avg >= 70 && $avg < 80) {
        echo "B GRADE";
    } else if ($avg >= 60 && $avg < 70) {
        echo "c GRADE";
    } else if ($avg >= 45 && $avg < 60) {
        echo "D GRADE";
    } else {
        echo "failed";
    }
}

?>

<html>

<body>
    <form method="POST">
        <table>
            <tr>
                <td>PHYSICS:</td>
                <td>
                    <input type="number" name="physics" placeholder="enter youre mark" required>
                </td>
            </tr>

            <tr>
                <td>CHEMISTRY:</td>
                <td>
                    <input type="number" name="chemistry" placeholder="enter youre mark" required>
                </td>
            </tr>

            <tr>
                <td>BIOLOGY:</td>
                <td>
                    <input type="number" name="biology" placeholder="enter youre mark" required>
                </td>
            </tr>

            <tr>
                <td>COMPUTER:</td>
                <td>
                    <input type="number" name="computer" placeholder="enter youre mark" required>
                </td>
            </tr>

            <tr>
                <td>MATHEMATICS:</td>
                <td>
                    <input type="number" name="mathematics" placeholder="enter youre mark" required>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>