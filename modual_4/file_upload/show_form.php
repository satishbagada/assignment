<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center text-danger mt-5">display items</h1>
    <hr class="border border-2 border-danger w-25 mx-auto">
    <div class="container  mt-5">
        <div class="row">

            <div class="col-md-12 mx-auto">
                <table class="table table-responsive table-hover bg-light shadow">

                    <tr align="center">
                        <th class="py-3">ID</th>
                        <th>image</th>
                        <th>name</th>
                        <th>Action</th>
                    </tr>

                    <tbody class="text-center">
                        <tr>
                            <td>1001</td>
                            <td><img src="uploads/a.jpg" class="img-fluid" style="width:50%;height:150px;"></td>
                            <td>no found</td>
                            <td><button type="button" class="btn btn-danger btn-sm w-25 text-white">delete</button></td>
                        </tr>
                        <tr>
                            <td>1002</td>
                            <td><img src="uploads/a.jpg" class="img-fluid" style="width:50%;height:150px;"></td>
                            <td>no found</td>
                            <td><button type="button" class="btn btn-danger btn-sm  w-25 text-white">delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>