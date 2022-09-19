<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<style>
    .navbar .nav-link{
        color:white;
        font-size: 20px;
        
    }
    .navbar-nav .nav-item{
        padding: 10px 20px;
    }
    .nav-item .nav-link:hover{
        color:burlywood;
        font-size: 20px;
        background:red;
        /* padding: 10px 10px; */
    }
    
    
   .dropdown-menu .dropdown-item{
        color:white;
        font-size: 20px;
    }

        .navbar-brand{
            color:white;
        
    }
     .nav-link .active{
        color:black;
        background: white;
    } 
   
</style>
</head>
<body>
    <div class="container-fluid mt-2">
        <div class="row border border-danger">
            <div class="col px-0">
                <nav class="navbar navbar-expand bg-primary">
                    <a href="" class="navbar-brand text-dark"><h4>Yahoo baba</h4></a>
                    <ul class="navbar-nav nav-pills mr-auto">
                        <li class="nav-item"><a href="" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link">About-Us</a></li>
                        <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallary</a>
                            <div class="dropdown-menu bg-primary">
                                <a href="" class="dropdown-item">link-one</a>
                                <a href="" class="dropdown-item">link-two</a>
                                <a href="" class="dropdown-item">link-three</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link">Blogs</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Contact-Us</a></li>
                    </ul>
                    <form action="" class="form-inline">
                    <div class="form-group">
                        <input type="search" placeholder="Search.." class="form-control mr-md-2">
                    </div>
                    <div class="form-group ml-2">
                        <input type='submit' class="btn btn-success btn-lg my-2 mr-sm-2" value="Seach">
                    </div>
                </form>
                </nav>

            </div>
        </div>
    </div>
</body>
</html>