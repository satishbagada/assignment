<?php
require_once("../controller/controller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="container p-3 mt-3">
    <h3 class="text-center text-danger">User Registration Form</h3>
            <hr class="border border-2 border-danger w-50 mx-auto mb-4">
        <div class="row">
             <div class="col-md-6 mx-auto bg-secondary px-5">
                <form method="POST">
                    <div class="form-group">
                    <label>enter name:</label>
                    <input type="text" name='nm' placeholder="enter name *" class="form-control" require>
                    </div>

                    <div class="form-group">
                    <label>enter age:</label>
                    <input type="number" name='age' class="form-control" placeholder="enter age *" require>
                    </div>

                    <div class="form-group">
                    <label>enter message:</label>
                    <input type="text" name='msg' class="form-control" placeholder="enter message*" require>
                    </div>

                    <div class="form-group">
                    <label>enter phone:</label>
                    <input type="text" name='ph' class="form-control" placeholder="enter phone  *" require>
                    </div>
                    <div class="form-group">
                    <input type="submit" name='sub' class="btn btn-success btn-lg">
                    </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>