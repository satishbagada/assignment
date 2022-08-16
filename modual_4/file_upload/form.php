<?php
if (isset($_POST['upload_btn'])) {


    $size = $_FILES['img']['size'];
    $name = $_FILES['img']['name'];
    $tmpname = $_FILES['img']['tmp_name'];
    $error = $_FILES['img']['error'];
    $path = $_FILES['img']['full_path'];
    $type = $_FILES['img']['type'];
    // echo "<pre>";
    // print_r($_FILES['img']);
    // echo "</pre>";
    $path = "uploads/" . $name;
    if (move_uploaded_file($tmpname, $path)) {
        echo "<h3 class='alert alert-success w-50 mx-auto  text-center'>your file uploaded successfully.</h3>";


        header('refresh:3,show_file.php');
    } else {
        function test($msg)
        {
            echo "<h3 class='alert alert-danger text-center w-50 mx-auto'>
            $msg</h3>";
        }
        test("file note found.");
        header('refresh:3,form.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="../session/bootstrap-5.0.2/dist/css/bootstrap.css" rel="stylesheet">
    <link href="../session/bootstrap-5.0.2/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="../session/bootstrap-5.0.2/dist/js/bootstrap.js"></script>
    <script src="../session/bootstrap-5.0.2/dist/js/bootstrap.bundle.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7 mx-auto py-3">
                <h3 class="text-danger text-center">Registration Form</h3>
                <hr class="border border-2 w-50 mx-auto border-light">

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3">

                        <input type="text" name="user" class="form-control" placeholder="username *">
                    </div>

                    <div class="form-group mb-3">

                        <input type="text" name="pass" class="form-control" placeholder="Passoword *">
                    </div>

                    <div class="form-group mb-3">

                        <input type="text" name="email" class="form-control" placeholder="email *">
                    </div>

                    <div class="form-group mb-3">

                        <input type="file" name="img" class="form-control w-50">
                    </div>

                    <div class="form-group mb-3">

                        <input type="submit" name="upload_btn" class="btn btn-primary text-white btn-lg">
                    </div>
                </form>

            </div>
            <!-- col-md-7 close div -->

        </div>
    </div>
</body>

</html>