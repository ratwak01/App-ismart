<?php

$con=new mysqli('localhost','root','','user_db');

if(! $con){
    die(mysqli_error($con));
}

?>