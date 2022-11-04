<?php
    include 'connection.php';
    session_start();

    if(isset($_POST['submit'])){
        $fname=mysqli_real_escape_string($connection, $_POST['fname']);
        $email=mysqli_real_escape_string($connection, $_POST['email']);
        $password=mysqli_real_escape_string($connection, md5($_POST['password']));
        $cpassword=mysqli_real_escape_string($connection,md5( $_POST['cpassword']));
        $country=mysqli_real_escape_string($connection, $_POST['country']);

        $equery="select * from tbl_users where email='$email'";
        $query=mysqli_query($connection, $equery);
        $ecount=mysqli_num_rows($query);
        if($ecount>0)
        {
            echo "<script>alert('email exists!')</script>";
        }        
        else{
            if($password!=$cpassword)
            {
                echo "<script>alert('password not matched!')</script>";
            }
            else{
                $insertq="INSERT INTO `tbl_users` (name, email, password, country) VALUES ('$fname', '$email', '$password', '$country')" or die('failed');
                $insertquery=mysqli_query($connection, $insertq);
                if($insertquery)
                {
                    echo "<script>alert('registered!')</script>";
                }
                else
                {
                    echo "<script>alert('not registered!')</script>";
                }
            }
        }


    }
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <a class="navbar-brand">
            <span id='date-time'></span>
          </a>
        </div>
        <div class="col-lg-6 text-lg-end login">
         <a href="login.php"> <button class="login">Login</button></a>
        </div>
      </div>
</section>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="nav container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="live.php">Live</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="schedule.php">schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

    <div class="form text-center">
      <h2>Sign Up page</h2> <br>
        <form action method='POST'>
        <label for="">Fullname: </label>   <br>
        <input type="text" name="fname" value="" placeholder="enter your full name"> <br>    <br>
        <label for="">Email: </label>     <br>
        <input type="text" name="email" value="" placeholder="enter your email">  <br>   <br>
        <label for="">Password: </label>  <br>   
        <input type="password" name="password" value="" placeholder="enter your password"> <br>    <br>
        <label for="">Confirm Password: </label>  <br>
            <input type="password" name="cpassword" value="" placeholder="confirm password"> <br>    <br>
            <label for="">Country: </label>  <br>
            <input type="text" name="country" value="" placeholder="enter your country"> <br>    <br>
            <input type="submit" name="submit" id="" value="SIGN UP">
           
        </form>
    </div>
 
    <div class="footer">
        <footer class="text-white text-center text-lg-start ">
          <div class="container-fluid">
              <div class="container p-4">
                  <div class="row mt-4">
                      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                          <h5 class="text-uppercase mb-4">About Fun Olympic Games 2022</h5>
                          <p>
                              The City of Bayjing won the bid to host the next FunOlympic Games in 2022. During
                              the buildup to the planned games in 2022 the city had already invested hugely in IT
                              infrastructure and
                              systems to make sure that the games would have been well organised, staffed,
                              attended, and
                              accessible to everyone.
                          </p>
                          <p>
                              For targecting audience, Fun Olympic games has provided live broadcast of games for
                              their audience also.
                          </p>
                      </div>
      
                      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
      
      
                          <ul class="fa-ul" style="margin-left: 1.65em;">
                              <li class="mb-3">
                                  <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">The
                                      City of Bayjing, China</span>
                              </li>
                              <li class="mb-3">
                                  <span class="fa-li"><i class="fas fa-envelope"></i></span><span
                                      class="ms-2">funolympic@gmail.com</span>
                              </li>
                              <li class="mb-3">
                                  <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+ 01
                                      234 567 88</span>
                              </li>
                              <li class="mb-3">
                                  <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+ 01
                                      234 567 89</span>
                              </li>
                          </ul>
                      </div>
      
                      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                          <h5 class="text-uppercase mb-4">Game hours</h5>
      
                          <table class="table text-center text-white">
                              <tbody class="font-weight-normal">
                                  <tr>
                                      <td>Mon - Thu:</td>
                                      <td>8am - 9pm</td>
                                  </tr>
                                  <tr>
                                      <td>Fri - Sat:</td>
                                      <td>8am - 1am</td>
                                  </tr>
                                  <tr>
                                      <td>Sunday:</td>
                                      <td>9am - 10pm</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
      
                  </div>
      
              </div>
              
          </div>
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2022 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/">FunOlympic Games 2022</a>
          </div>
        </footer>
      </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
<script>var dt = new Date();
    document.getElementById('date-time').innerHTML = dt;</script>

</html>