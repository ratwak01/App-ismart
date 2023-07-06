<?php

include 'connect.php';

if(isset($_POST['submit'])){
    $poste=$row['poste'];
    $operateur=$row['operateur'];
    $statut=$row['statut'];

  $sql="insert into`stock`(poste, operateur, statut) values('$poste', '$operateur','$statut')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo"data insered";
  }else{
    die(mysqli_error($con));
  }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="look4.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav>
        <div class="top">
            <div class="topbar">
                <div class="search">
                    <label><input type="text" placeholder="Search here"><i class='bx bx-search'></i></label>
                </div>
    
                <div class="we9t">
                <div class="day">day</div>
                <div class="date">date</div>
                <div class="time">time</div> 
                </div>

                <div class="user">
                    <a href="#"><i class='bx bxs-bell'></i></a>
                    <a href="#"><i class='bx bxs-user'></i></a>
                </div>
            </div>
       </div>
       </nav>
    </header>
    <section>
        <div id="sidebar">
            <h1 class="logo">i<span>Smart</span></h1>
                <ul class="sidenav">
                <li class="active">
                    <a href="config.php"><i class='bx bxs-home'></i>Tableau de bord</a></li>
                    <li>
                    <a href="operateur.php"><i class='bx bxs-group'></i>Opérateurs</a>
                    </li>
                    <li>
                    <a href="stock.html"><i class='bx bx-bar-chart'></i> Stocks </a></li>
                    <li class="postes">
                        <a href="poste.php"><i class='bx bxs-dashboard' ></i> Postes </a>
                    </li>
                   
                    <li>
                    <a href="alerte.php"><i class='bx bx-message-rounded-error' ></i> Alertes</a></li>
        
                    <li>
                        <a href="login.php" class="logout">
                            <i class='bx bxs-log-out-circle' ></i>
                            <span class="text">Logout</span>
                        </a>
                    </li>
                </ul> 
            </div>
    </section>
    <main class="main">
        <div class="cards">
            
              <div class="card">
                <div class="icon-box">
                    <a><i class='bx bx-user-check'></i></a>
                </div>
                  <div class="card-content">
                      <div class="cardname">Nombre des postes actifs:</div>
                      <div class="numbers">4</div>
                  </div>
              </div>
              <div class="card">
                <div class="icon-box">
                    <a><i class='bx bx-user-x'></i></a>
                </div>
                  <div class="card-content">
                      <div class="cardname">Nombre des postes non actifs:</div>
                      <div class="numbers">3</div>
                  </div>
              </div>
          </div>
          
          
  
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">poste</th>
                  <th scope="col">operateur</th>
                  <th scope="col">statut</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
  
              <tbody>
  
  
              <?php
              $sql="select * from `stock`";
              $result=mysqli_query($con,$sql);
              if($result){
                while($row=mysqli_fetch_assoc($result)){
                  $id=$row['id'];
                  $poste=$row['poste'];
                  $operateur=$row['operateur'];
                  $statut=$row['statut'];
                  echo '<tr>
                  <th scope="row">'.$id.'</th>
                  <td>'.$poste.'</td>
                  <td>'.$operateur.'</td>
                  <td>'.$statut.'</td>
                  <td>
                  <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" >view</a></button>
                  
                  </td>
                  </tr>';
  
                }
                
              }
              ?>
  
              </tbody>
            </table>
  
  
  
  
          <form method="post">
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">New user</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" autocomplete="off">
                  </div>
                  <div class="mb-3">
                      <label>Email address</label>
                      <input type="email" class="form-control" name="email" autocomplete="off">
                  </div>
                  <div class="mb-3">
                      <label>Password</label>
                      <input type="text" class="form-control" name="password" autocomplete="off">
                  </div>
                  <div class="mb-3">
                      <label>Number</label>
                      <input type="text" class="form-control" name="number" autocomplete="off">
                  </div>
                  <div class="mb-3">
                      <label>Poste</label>
                      <input type="text" class="form-control" name="poste" autocomplete="off">
                  </div>
                  
                  
                  
              </div>
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="submit">Save</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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