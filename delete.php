<?php
include 'connection.php';
$id=$_GET['id'];

$deletequery ="delete from tbl_users where id=$id";
$query=mysqli_query($connection, $deletequery);
if($query){
    header('location: users.php');
?>

    <script>
        alert('deleted sucessfully!');
    </script>

   <?php
}
else{
    header('location: usersdb.php');
    ?>
    <script>
        alert('deleted sucessfully!');
    </script>
    <?php
}

?>