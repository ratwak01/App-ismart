<?php
include 'conn.php';

 extract($_POST);
if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['passwordSend']) && isset($_POST['numberSend']) && isset($_POST['posteSend']))
{

    $sql = "INSERT INTO `operat` (name, email, password, number, poste) VALUES ('$nameSend', 'emailSend', 'passwordSend', 'numberSend', 'posteSend')";
    $result=mysqli_query($con,$sql);
}
?>