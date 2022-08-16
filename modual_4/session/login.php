<?php
session_start();
if (isset($_POST['log'])) {
    $_SESSION['email_address'] = $_POST['em'];
    $_SESSION['password'] = $_POST['pwd'];
    if ($_SESSION['email_address'] == 'abc123@gmail.com'  && $_SESSION['password'] == 'abc12345') {
        echo "<h3 class='text-success text-center'>your login successfully.</h3>";
        header('refresh:3,profile.php');
    } else {
        echo "<div class='danger'>email and password are not match </div>";
        header('refresh:2,login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto py-2 px-5">
                <h1 class="text-lg text-center text-danger">Login form</h1>
                <hr class="border border-danger border-2 w-75 mx-auto">

                <form method="POST">
                    <div class="form-group mt-3">
                        <label class="form-label">email:</label>
                        <input type="email" name="em" class="form-control" placeholder="enter email *" required>
                    </div>

                    <div class="form-group mt-3">
                        <label class="form-label">password:</label>
                        <input type="text" name="pwd" class="form-control" placeholder="enter password *" required>
                    </div>

                    <div class="form-group mt-3">
                        <button name="log" class="btn btn-lg btn-dark text-white">Sign In!</button>
                        <b><a class="" style="text-decoration: none;font-size: large;" href="#">forgate password</a></b>
                    </div>
                    <div class="form-group mt-3">
                        <b>Don't have an account ?&nbsp&nbsp<a href="#">Create Account ?</a></b>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>