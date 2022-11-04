<?php

include 'connection.php';
session_start();

$ids = $_GET['id'];
$showquery = "select * from tbl_users where id={$ids}";
$showdata=mysqli_query($connection, $showquery);
$arrdata=mysqli_fetch_array($showdata);

if (isset($_POST['submit'])) {
    $idupdate=$_GET['id'];

    $fname = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $country = mysqli_real_escape_string($connection, $_POST['country']);

    $query="update tbl_users set name='$fname', email='$email', country='$country' where id='$idupdate'";
    $res=mysqli_query($connection, $query);
    if($res){
        header('location: users.php');
    }
    else{
        echo "<script>alert('not updated')</script>";
    }



}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <!-- Font Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- CSS File Link -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="CSS/stylechat.css">
    <script src="js/index.js"></script>
</head>
<style>
    html {
        font-size: 62.5%;
    }

    .navbar li {
        font-size: 1.5rem;
    }

    footer {
        font-size: 1.5rem;
    }

    .form-container .bg-sucess {
        background-color: #D9D9D9;
        color: green;

    }

    #reg-gmail {
        display: flex;
        align-content: center;
        margin: auto;
        margin-bottom: 5px;
        margin-top: 2px;
        /* border: none; */
    }
</style>

<body>

    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '
            <div class="message">
                <span>' . $message . '</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>        
            </div> ';
        }
    }
    ?>



    <header class="headder">
        <nav id="navi" class="navbar">
            <div class="logo">
                <a href="home.php">

                    <img src="images/logo1.png" alt="" srcset="">
                </a>
            </div>

            <div class="left-nav">
                <ul class="left-part">
                    <li><a href="home.php">HOME</a></li>
                </ul>
                <ul class="right-part">
                    <li class="login-area"><a href="login.php">LOGOUT</a></li>


                </ul>
            </div>

        </nav>
    </header>
    <div class="form-container">
        <form action="" method="POST">
            <h3 class="regis">EDIT NOW</h3>

            <!-- <label for="">Full Name:</label> -->
            <input type="text" name="name" placeholder="enter your full name" value="<?php echo $arrdata['name']; ?>" required class="box"> <br>
            <!-- <label for="">Email:</label> -->
            <input type="text" name="email" placeholder="enter your email" value="<?php echo $arrdata['email']; ?>" required class="box"> <br>
            <!-- <label for="">Country:</label> -->
            <input type="country" name="country" placeholder="enter your country" value="<?php echo $arrdata['country']; ?>" required class="box"> <br>
            <input type="submit" name="submit" value="Update" class="btn">

        </form>
    </div>

    
</body>

</html>