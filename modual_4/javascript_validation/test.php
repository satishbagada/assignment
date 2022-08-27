<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'student_data');
if (isset($_POST['reg'])) {
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $pass = mysqli_real_escape_string($conn, md5($_POST['pwd']));
  $con_pass = mysqli_real_escape_string($conn, md5($_POST['con_pwd']));
  $gender = mysqli_real_escape_string($conn, $_POST['gander']);
  $country = mysqli_real_escape_string($conn, $_POST['country']);
  $state = mysqli_real_escape_string($conn, $_POST['state']);
  $dob = mysqli_real_escape_string($conn, $_POST['dateofbirth']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = array($fname, $lname);
  $fullname = implode('', $username);

  //file upload code
  $name = $_FILES['img']['name'];
  $type = $_FILES['img']['type'];
  $tmp_name = $_FILES['img']['tmp_name'];
  $path = "uploads/" . $name;

  move_uploaded_file($tmp_name, $path);
  // -----------file uplode close-----------

  $sel_query = "SELECT full_name FROM student WHERE full_name='$fullname'";
  $sel_data = mysqli_query($conn, $sel_query);
  $tot = mysqli_num_rows($sel_data);
  if ($tot > 0) {
    $_SESSION['status'] = "user allredy exists";
  } else

  if ($pass == $con_pass) {
    $query = "INSERT INTO student(full_name,password,gander,country,state,email,birth_of_date,images)
    VALUES('$fullname','$pass','$gender','$country','$state','$email','$dob','$path')";
    $data = mysqli_query($conn, $query);
    if ($data) {
      $_SESSION['status'] = 'user register successfull';
    } else {
      $_SESSION['status'] = 'user are not register successfully';
    }
  } else {
    $_SESSION['status'] = "password are missmatch";
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- ---------------animation link-------------------------- -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- ===================================javascript-link=========================== -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- =================validation-file============================== -->
  <script src="js/vadition.js"></script>


  <style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      /* line-height: 2.15; */
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }

    #animation {
      animation: fadeInDown;
      animation-duration: 1.5s;
    }
  </style>
</head>

<body>
  <section class="h-100 bg-dark">
    <div class="container py-5 h-100" id="animation">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="js/register.webp" alt="Sample photo" class="img-fluid" style="height:100%;border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6">
                <!-- ---------------message show-------------- -->
                <?php
                if (isset($_SESSION['status'])) {


                ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hey!</strong><?php echo $_SESSION['status']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                  unset($_SESSION['status']);
                  session_destroy();
                } ?>
                <div class="card-body p-md-5 text-black">

                  <h3 class="mb-5 text-uppercase">Student registration form</h3>
                  <!-- =====================registration form================= -->

                  <form method="POST" action="#" name="frm" enctype="multipart/form-data" onsubmit="return valid(this.value)">
                    <div class="row">
                      <div class="col-md-6 mb-2">

                        <div class="form-group">
                          <label class="form-label" for="form3Example1m">First name</label>
                          <input type="text" name="fname" class="form-control text-uppercase" />
                          <div id="error" class="text-danger"></div>

                        </div>
                      </div>
                      <div class="col-md-6 mb-2">
                        <div class="form-group">
                          <label class="form-label" for="form3Example1n">Last name</label>
                          <input type="text" name="lname" class="form-control text-uppercase" />
                          <div id="lname" class="text-danger"></div>

                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="form-label" for="form3Example8">Password</label>
                      <input type="text" name="pwd" class="form-control" />
                      <div class="text-danger" id="pass"></div>

                    </div>

                    <div class="form-group my-2">
                      <label class="form-label" for="form3Example8">confirm Password</label>
                      <input type="text" name="con_pwd" class="form-control" />
                      <div class="text-danger" id="con_pass"></div>
                    </div>

                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                      <h6 class="mb-0 me-4">Gender: </h6>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gander" value="Femal" required />
                        <label class="form-check-label" for="femaleGender">Female</label>
                      </div>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gander" value="Male" required />
                        <label class="form-check-label" for="maleGender">Male</label>
                      </div>

                      <div class="form-check form-check-inline mb-0">
                        <input class="form-check-input" type="radio" name="gander" value="other" required />
                        <label class="form-check-label" for="otherGender">Other</label>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">

                        <select class="form-select" name="state" id="state_id">
                          <option value="1">-State-</option>
                          <?php
                          $url = "state.json";
                          $content = file_get_contents($url, true);
                          $dec = json_decode($content, true);
                          foreach ($dec as $val) {
                            echo "<option value='$val'>$val</option>";
                          }
                          ?>
                        </select>

                      </div>
                      <div class="col-md-6 mb-4">

                        <select class="form-select" id="country" name="country">
                          <option value="1">--select country--</option>
                          <?php
                          $url = "http://country.io/names.json";
                          $content = file_get_contents($url, true);
                          $dec = json_decode($content, true);
                          foreach ($dec as $val) {
                            echo "<option value='$val'>$val</option>";
                          }
                          ?>
                        </select>

                      </div>
                    </div>

                    <div class="form-group mb-2">
                      <label class="form-label mb-0" for="form3Example9">DOB</label>
                      <input type="date" name="dateofbirth" class="form-control" />

                    </div>

                    <div class="form-group mt-2">
                      <label class="form-label mb-0" for="form3Example97">Email ID</label>
                      <input type="email" name="email" class="form-control" />
                      <div class="text-danger" id="error"></div>
                    </div>

                    <div class="form-group mt-2">
                      <input type="file" name="img" class="form-control w-75" />

                    </div>

                    <div class="d-flex justify-content-end pt-3">
                      <input type="reset" value="All Reset" class="btn btn-secondary btn-lg">
                      <input type="submit" name="reg" accesskey='h' id='result' class="btn btn-warning btn-lg ms-2" value="Register">

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <script src="js/jquery.js"></script>
  <script>
    $(document).ready(function() {
      $('#result').click(function(event) {
        event.preventDefault();
      });
    });
  </script> -->
</body>

</html>