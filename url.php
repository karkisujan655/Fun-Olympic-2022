
<?php
    include 'connection.php';
    function watchPage($connection){
        $sql = "select * from live where page = 'live'";
        $compile = mysqli_query($connection, $sql);
        $fetch = mysqli_fetch_row($compile);
        return $fetch;
    }
    $val = watchPage($connection);
?>


<?php
  include 'connection.php';
  if(isset($_POST['stream'])){

    $url=$_POST['url'];
    $tquery="update live set url='$url' where page='live' ";
    $query=mysqli_query($connection, $tquery);
    if($query){
      header('location: url.php');
    }
    else{
      echo 'not updated';
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
         <a href="logout.php"> <button class="logout">Logout</button></a>
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
<style type="text/css">
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #1C3879;
}
	.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}
.container{
	margin-top: 90px;
}
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

input,
.btn {
  width: 50%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none;
}
</style>

<h2 class="text-center" >Change URL</h2>

<div class="container text-center">
       	<form action="" method="POST">
	        <input type="url" name="url" placeholder="New Url" value="<?php echo $val[1]; ?>" >
	        <input type="submit" name="stream" value="Stream Now">
	      
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