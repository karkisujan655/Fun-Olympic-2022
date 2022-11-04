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
         <a href="login.php"> <button class="login">Login</button></a>
         <a href="sign.php"> <button class="login">Sign Up</button> </a>
        </div>
      </div>
  </section>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="nav container-fluid">
      <a class="navbar-brand" href="index.html">
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
  <section class="carousel">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/kid.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/bb.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/mar.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="highlights">

    <div class="container">
      <div class="row">
        <div class="col-lg-5 mx-auto b py-5 text-center">
          <h1>Highlights</h1>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-lg-4">
          <div class="sbox pb-5">
            <h3>Top scorer in swimming</h3>
            <iframe style="padding: 20px;" width="100%" height="315"
              src="https://www.youtube.com/embed/SONx52cyltI?autoplay=1" title="YouTube video player" frameborder="0"
              allow="autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="sbox pb-5">
            <h3>Artistic Gymnastics </h3>
            <iframe style="padding: 20px;" width="100%" height="315"
              src="https://www.youtube.com/embed/O4pSYZNFej0?start=65" title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="sbox pb-5">
            <h3>Women's Split Triplet</h3>
            <iframe style="padding: 20px;" width="100%" height="315"
              src="https://www.youtube.com/embed/SRKGHEf24tM?start=65" title="YouTube video player" frameborder="0"
              allow="autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>


  </section>

  <section class="updates py-3">

    <div class="container">
      <div class="row">
        <div class="col-lg-5 mx-auto b py-5 text-center">
          <h1>Updates</h1>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="img/injured.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Long Tennis player got injured</h5>
              <p class="card-text">while in second round, she fall down and her leg got injured. Get latest and breaking
                news on Tennis, current worldwide updates & trends at NDTV Sports.

              </p>
              <button type="button" class="btn btn-success">Read More <i class="bi bi-arrow-right"></i>
              </button>

            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/sch.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">No Match</h5>
              <p class="card-text">Tomorrow is no match due to strick which makes unsafety environment for player and
                audience.</p>
              <button type="button" class="btn btn-success">Read More <i class="bi bi-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/swimming.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Swimming Winner</h5>
              <p class="card-text">Avrial Angila took the first place. Two swimmers fell into distress at 6:21 p.m. on
                Sunday, and a third person went in the water to try to help get them out. Aaccording to Domingos
                Saldida, Long Branch public safety director. Lifeguards showed up and were able to rescue two of the
                three people.</p>
              <button type="button" class="btn btn-success">Read More <i class="bi bi-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/aud.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Audience craze</h5>
              <p class="card-text">Maximum seats are booked, we all are amazed by audience craze. Please book your seat
                fast.</p>
              <button type="button" class="btn btn-success">Read More <i class="bi bi-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

  </section>

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