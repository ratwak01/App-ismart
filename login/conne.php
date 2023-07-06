<?php

$con=new mysqli('localhost','root','','user_db');
 if (!$con){
    
    die(mysql_error($con));
 }

?>