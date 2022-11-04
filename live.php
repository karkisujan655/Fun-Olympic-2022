<?php
include 'connection.php';
    session_start();
    if(!isset($_SESSION['userID'])){
        header('location: login.php');
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
                   <a href="logout.php"> <button class="login">LOG OUT</button> </a>
                  
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
       
        <h3 class="text-center">Watch Live</h3>
        <!-- <div class="row py-5">
            <div class="col-lg-9">
                <iframe width="100%" height="510" src=""
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                  
            </div>
            <div class="col-lg-3 comment-box ">
                <h2 class="text-center">Live Comments</h2>
                <ul id="unordered" style="list-style-type:none; padding: 0px;">
                </ul>
                <input type="text" id="comment-box" placeholder="Enter comment">
                <button id="post">Post</button>
                <div id="previewbox"></div>
            </div>
        </div> -->

         <div class="row py-5">
            <div class="col-lg-9">
                 <?php 
                 
                 include "connection.php";
                 $sql = "select * from live where page = 'live'";
                 $compile = mysqli_query($connection, $sql);
                 $fetch = mysqli_fetch_row($compile);   
                               
                 ?>
                <iframe width="100%" height="510"
                    src="<?php echo $fetch[1]; ?>" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                    
            </div>
            <div class="col-lg-3 comment-box ">
                <h2 class="text-center">Live Comments</h2>
                <ul id="unordered1" style="list-style-type:none; padding: 0px;">
                </ul>
                <input type="text" id="comment-box1" placeholder="Enter comment">
                <button id="post1">Post</button>
                <div id="previewbox1"></div>
            </div>
        </div>
<!--
        <div class="row py-5">
            <div class="col-lg-9">
                <iframe width="100%" height="510"
                    src="https://www.youtube.com/embed/IgOKx-G6qhA?controls=0&amp;start=270"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-3 comment-box ">
                <h2 class="text-center">Live Comments</h2>
                <ul id="unordered2" style="list-style-type:none; padding: 0px;">
                </ul>
                <input type="text" id="comment-box2" placeholder="Enter comment">
                <button id="post2">Post</button>
                <div id="previewbox2"></div>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-lg-9">
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/Orhm2Naa_Qg?controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-3 comment-box ">
                <h2 class="text-center">Live Comments</h2>
                <ul id="unordered3" style="list-style-type:none; padding: 0px;">
                </ul>
                <input type="text" id="comment-box3" placeholder="Enter comment">
                <button id="post3">Post</button>
                <div id="previewbox3"></div>
            </div> -->
        <!-- </div> -->

        <!-- <div class="row py-5">
            <div class="col-lg-9">
                <iframe width="100%" height="510" src="https://www.youtube.com/embed/5s9RKu9Irqo?controls=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg-3 comment-box ">
                <h2 class="text-center">Live Comments</h2>
                <ul id="unordered4" style="list-style-type:none; padding: 0px;">
                </ul>
                <input type="text" id="comment-box4" placeholder="Enter comment">
                <button id="post4">Post</button>
                <div id="previewbox4"></div>
            </div>
        </div> -->
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
<script>
    var post = document.getElementById("post");
    post.addEventListener("click", function () {
        var commentBoxValue = document.getElementById("comment-box").value;

        var li = document.createElement("li");
        var text = document.createTextNode(commentBoxValue);
        li.appendChild(text);
        document.getElementById("unordered").appendChild(li);

    });
</script>
<script>
    var post = document.getElementById("post1");
    post.addEventListener("click", function () {
        var commentBoxValue = document.getElementById("comment-box1").value;

        var li = document.createElement("li");
        var text = document.createTextNode(commentBoxValue);
        li.appendChild(text);
        document.getElementById("unordered1").appendChild(li);

    });
</script>

<script>
    var post = document.getElementById("post2");
    post.addEventListener("click", function () {
        var commentBoxValue = document.getElementById("comment-box2").value;

        var li = document.createElement("li");
        var text = document.createTextNode(commentBoxValue);
        li.appendChild(text);
        document.getElementById("unordered2").appendChild(li);

    });
</script>


</html>