<?php 
include 'connect.php'; 
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];      
    $sql="delete * form `operat` where id=$id";     
    $result=mysqli_query($con,$sql);     
    if($result){       
        //echo "deleted sucss";     
        header ('location:table.php');   
             
    }else{         
        die(mysqli_error($con));     
    } 
} 
?>