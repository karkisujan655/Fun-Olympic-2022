<?php
    include 'connection.php';
    session_start();

    if(isset($_POST['submit']))
    {
        $email= $_POST['email'];
        $password= md5($_POST['password']);

        $email_ser="select * from tbl_users where email='$email' and password='$password'";
        $query=mysqli_query($connection, $email_ser);
        $email_cou=mysqli_num_rows($query);
        if($email_cou){
            $email_p=mysqli_fetch_assoc($query);
            $_SESSION['email']=$email_p['email'];
            $_SESSION['userID']=$email_p['email'];
            $d_pass=$email_p['password'];
            if($d_pass){
                header ('location: live.php');
            }
            else
            {
                echo "not logged in";
            }
        }
        else
        {
            echo 'incorrect email or pass';
        }

    }
?>
<!-- ADMIN START>>>>>>>> -->

<?php
 if(isset($_POST['submit']))
 {
     $email= $_POST['email'];
     $password= $_POST['password'];

     $email_ser="select * from tbl_users where email='$email' and password='$password'";
     $query=mysqli_query($connection, $email_ser);
     $email_cou=mysqli_num_rows($query);
     if($email_cou){
         $email_p=mysqli_fetch_assoc($query);
         $_SESSION['email']=$email_p['email'];
         $_SESSION['adminID']=$email_p['email'];
         $d_pass=$email_p['password'];
         if($d_pass){
             header ('location: admin.php');
         }
         else
         {
             echo "not logged in";
         }
     }
     else
     {
         echo 'incorrect email or pass';
     }

 }
?>


   


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fun Olympic Games 2022</title>
  <link rel="icon" type="image/x-icon" href="img/logo1.png">
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
        <a href="sign.php"> <button class="login">Sign Up</button> </a>
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

 

    <div class="container">
        <div class="row">
            <div class="col-lg-5 mx-auto b py-2 px-6 text-center">
                <h4>Login for FunOlympic Games 2022</h4>
                <div class="iimg">
                <img src="img/logo.png" alt="">
                <div class="form">
        <form action method='POST'>
        
           <label for="">Email: </label> <input type="text" name="email" value="" placeholder="enter your email or username">  <br>   <br>
           <label for="">Password: </label> <input type="password" name="password" value="" placeholder="enter your password"> <br>    <br>
            <input type="submit" name="submit" id="" value="LOG IN">
          
            <br> <br>
            <button> <a href="forget.php"> Forget Password </a></button>

        </form>
    </div>
              </div>
            </div>
        </div>
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