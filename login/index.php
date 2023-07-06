<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css" />
    <title>DASHBOARD</title>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages: ['corechart', 'line']});
      google.charts.setOnLoadCallback(drawBasic);

      function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Production');

      data.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
        [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
        [24, 60], [25, 50], [26, 79], [27, 100], [28, 90], [29, 95],
        [30, 55], [31, 55]
      ]);

      var options = {
        hAxis: {
          title: 'mois'
        },
        vAxis: {
          title: 'cost(k)'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
</head>
<body>
    <div class="container">
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
    <section id="navbar">
        <nav>

        <div class="search">
            <label><input type="text" placeholder="Search here"><i class='bx bx-search'></i></label>
        </div>


        <div class="we9t">
            <div class="day">day</div>
            <div class="date">date</div>
            <div class="time">time</div> 
        </div>


        <a href="#" class="notif">
            <i class='bx bx-bell'></i>
        </a>
        <a href="#" class="account">
            <i class='bx bxs-group'></i>
        </a>
        </nav>
    </section>
    <div class="main">
        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <div class="cardname">Quantité:</div>
                    <div class="numbers">80,000</div>
                    <div class="text">production</div>
                    <div class="numbers">90,000</div>
                    <div class="text">target</div>
                </div>
                <div class="icon-box">
                    <a><i class='bx bxs-up-arrow'></i>-49%</a>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="cardname">Cout de fabrication:</div>
                    <div class="numbers">$34k</div>
                    <div class="text">current month</div>
                    <div class="numbers">$54k</div>
                    <div class="text">last month</div>
                </div>
                <div class="icon-box">
                    <a><i class='bx bxs-down-arrow'></i>-45%</a>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="cardname">Cout de travail:</div>
                    <div class="numbers">$8k</div>
                    <div class="text">current month</div>
                    <div class="numbers">$9k</div>
                    <div class="text">last month</div>
                </div>
                <div class="icon-box">
                    <a><i class='bx bxs-down-arrow'></i>-50%</a>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="cardname">Quantité:</div>
                    <div class="numbers">80,000</div>
                    <div class="text">production</div>
                    <div class="numbers">90,000</div>
                    <div class="text">target</div>
                </div>
                <div class="icon-box">
                    <a><i class='bx bxs-up-arrow'></i>-49%</a>
                </div>
            </div>
        </div>
        
        <div class="charts">
            <div class="chart">
                <div class="cardname">Cout de production (12 mois)</div>
                <div id="chart_div"></div>
            </div>
            <div class="chart">
                <div class="cardname">Cout de production (12 mois)</div>
                <div id="chart_div"></div>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <div class="card-content">
                    <div class="cardname">Quantité:</div>
                    <div class="numbers">80,000</div>
                    <div class="text">production</div>
                    <div class="numbers">90,000</div>
                    <div class="text">target</div>
                </div>
                <div class="icon-box">
                    <a><i class='bx bxs-up-arrow'></i>-49%</a>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="cardname">Cout de fabrication:</div>
                    <div class="numbers">$34k</div>
                    <div class="text">current month</div>
                    <div class="numbers">$54k</div>
                    <div class="text">last month</div>
                </div>
                <div class="icon-box">
                    <a><i class='bx bxs-down-arrow'></i>-45%</a>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="cardname">Cout de travail:</div>
                    <div class="numbers">$8k</div>
                    <div class="text">current month</div>
                    <div class="numbers">$9k</div>
                    <div class="text">last month</div>
                </div>
                <div class="icon-box">
                    <a><i class='bx bxs-down-arrow'></i>-50%</a>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="cardname">Quantité:</div>
                    <div class="numbers">80,000</div>
                    <div class="text">production</div>
                    <div class="numbers">90,000</div>
                    <div class="text">target</div>
                </div>
                <div class="icon-box">
                    <a><i class='bx bxs-up-arrow'></i>-49%</a>
                </div>
            </div>
        </div>

    </div>
    
    
<script src="js/chart1.js"></script>
<script src="script.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
</body>
</html>