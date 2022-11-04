<?php
    $server= 'localhost';
    $na='root';
    $pa='';
    $db='fun';
    $connection=mysqli_connect($server, $na, $pa, $db);
    if($connection){
        // echo 'success';
    }
    else{
        echo 'failed';
    }