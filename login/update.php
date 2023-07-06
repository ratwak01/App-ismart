<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `operat` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$number=$row['number'];
$poste=$row['poste'];


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $number=$_POST['number'];
  $poste=$_POST['poste'];

  $sql="update`operat` set id=$id,name='$name',email='$email',password='$password',number='$number',poste='$poste' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo"update insered";
    header ('location:operateur.php');
  }else{
    die(mysqli_error($con));
  }

}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>table</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" >
  </head>
  <body>
    <main class="main">
        <form method="post">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" autocomplete="off" value=<?php echo $name;?>>
                </div>
                <div class="mb-3">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" autocomplete="off" value=<?php echo $email;?>>
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" autocomplete="off" value=<?php echo $password;?>>
                </div>
                <div class="mb-3">
                    <label>Number</label>
                    <input type="text" class="form-control" name="number" autocomplete="off" value=<?php echo $number;?>>
                </div>
                <div class="mb-3">
                    <label>Poste</label>
                    <input type="text" class="form-control" name="poste" autocomplete="off" value=<?php echo $poste;?>>
                </div>
                
                
                
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="submit">update</button>
            </div>
            </div>
            </div>
        </div></form> 
    </main>


    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



</body>
</html>
</body>
</html>