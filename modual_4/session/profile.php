<?php
session_start();
if (!isset($_SESSION['email_address'])) {
    header('refresh:0,login.php');
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
            <div class="col-md-8 mx-auto">
                <h3 class="text-danger">Welcome:
                    <b>
                        <?php echo $_SESSION['email_address']; ?>
                        <a href="logout.php" class="btn btn-danger btn-lg text-light" onclick="return confirm('are you sure to logout system');">Logout</a>
                    </b>

                </h3>
                <hr class="border border-2 border-danger">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora officia sequi tenetur ipsum, odio rem! Totam obcaecati dignissimos consequuntur in quibusdam eligendi architecto et est facere quod repellat esse praesentium quasi consequatur eos modi mollitia deserunt, illum molestias tempore labore ut repudiandae impedit natus? Tenetur, minima excepturi officiis culpa autem aperiam, magni tempora eligendi quis consequuntur dolorum perferendis aliquid magnam et nihil quibusdam cupiditate. Ex quaerat quos ad vero! Inventore tempora esse hic eaque, atque nesciunt nisi maiores laudantium impedit illo dolorem eius nostrum amet rem fuga vitae cum repudiandae, dolores distinctio corrupti. Doloribus perferendis repellat odio! Voluptatum, culpa.
                </p>
            </div>
        </div>
    </div>
</body>

</html>