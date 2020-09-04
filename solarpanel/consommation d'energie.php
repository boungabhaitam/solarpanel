<?php

include_once 'mysqlconnection.php';

$sql1 = "SELECT * FROM capteurs;";
$result1=mysqli_query($conn,$sql1);
$row1 = $result1->fetch_assoc(); 
$sql2= "SELECT * FROM indicateurs;";
$result2=mysqli_query($conn,$sql2);
$row2 = $result2->fetch_assoc(); 
$sql3= "SELECT * FROM energiesolaire;";
$result3=mysqli_query($conn,$sql3);
$row3 = $result3->fetch_assoc(); 
$sql4= "SELECT * FROM réseau;";
$result4=mysqli_query($conn,$sql4);
$row4 = $result4->fetch_assoc(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Consommation d'energie</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/css.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
  <script src="js/jquery.min.js"></script>
  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->
  <script src="js/popper.min.js"></script>
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
  <script src="js/bootstrap.min.js"></script>

  <!-- Custom Font awesome -->
  <!--<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">-->
  <link href="css/font-awesome.css" rel="stylesheet">

  <!-- Bootstrap core CSS
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet"> -->


  <!--<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>-->
  <script src="js/Chart.min.js"></script>
  <script src="js/Chart.js"></script>
  <script src="js/Chart.bundle.min.js"></script>

</head>

<body class="card bg-secondary">


  <nav class="navbar navbar-expand-lg navbar-light bg-bg">
    <img src="img/logo.jpg" class="rounded" alt="Cinque Terre" width="100" height="40">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto"></ul>
      <img src="img/bell1.png" class="img-fluid" alt="Responsive image" width="40" height="40">
      <img src="img/menu.png" class="img-fluid" alt="Responsive image" width="40" height="40">
    </div>
  </nav>


  <div class="card bg-dark">
    <div class="row">
      <div class="col-xl-12 card text-white" style="height: 109px">
        <div class="card-body">
          <div class="row">

            <div class="col"><img src="img/university.png" style="width: 150px; height: 85px; " class="img-fluid" alt="Responsive image"></div>

            <div class="col p-3 mb-2 card bg-secondary text-white " style="width: 500px">Installation Photovoltaique /
              توليد الكهرباء بالطاقة الشمسية
            </div>

            <div class="col"><img src="img/ensaj.png" style="width: 150px; height: 85px; " class="img-fluid" alt="Responsive image"></div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <br>
    <div class="row">

      <div class="col-xl-6 ">
        <div class="card">

          <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold" style="height: 20px">BLANCE
            ENERGRTIQUE</div>

        </div>
        <br>
        <div class="row">
          <div class="col ">
            <div class="card bg-danger text-white  ">
              <div class="card-body ">
                <div class="row">
                  <div class="col "><img src="img/net.png" class="img-fluid" width="40" height="40"></div>
                  <div class="col text-center  ">Réseau - الشبكة العمومية
                    <hr class="new5">
                  </div>
                </div>
                <div class=" text-center  font-weight-bold">
                  <br><br>
                  10kW <br>
                  5.313KWH/Février
                  <br> <br> <br> <br>
                </div>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card bg-success text-white">
              <div class="card-body">
                <div class="row">
                  <div class="col"><img src="img/solarpanel.png" class="img-fluid" width="40" height="40"> </div>
                  <div class="col-xl-8">مولد الطاقة الشمسية energie solaire
                    <hr class="new5">
                  </div>

                </div>
                <div class=" text-center  font-weight-bold">
                <?php
                                  echo $row3['DC'];
                                  ?> KWp(DC) <br>
                  <?php
                                  echo $row3['AC'];
                                  ?> KW5AC<br>
                  <?php
                                  echo $row3['month'];
                                  ?> KWh/ Février<br><br>
                  <p class="text-danger">Objective :</p>
                  2.104 KWh /Février
                </div>
              </div>
            </div>
          </div>
        </div><br>
        <div class="card bg-primary text-white">
          <div class="card-body">
            <div class="row">
              <div class="col-xl-4"><img src="img/utili.jpg" class="img-fluid" width="40" height="40"></div>
              <div class="col-xl-10">الاستعمال - Utilisation
                <hr class="new5">
              </div>

            </div>
            <div class=" text-center  font-weight-bold">
              <div class="row">
                <div class="col"> <canvas id="doughnut-chart"></canvas></div>
                <div class="col"> <br><br><br>
                  23.23 kW <br>
                  5.773 kWh/Février
                </div>

              </div>

            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xl-2"></div>
          <div class="col-xl-5">
            <div class="card bg-success text-white divx" style="width: 20px; height: 10px; display:inline-block;">
              <div class="card-body"></div>
            </div>
            <div style="display: inline-block;" class="text-success">Autoconsommation</div>
          </div>
          <div class="col-xl-5">
            <div class="card bg-danger text-white" style="width: 20px; height: 10px; display:inline-block;">
              <div class="card-body"></div>
            </div>
            <div style="display: inline-block;" class="text-danger">Consommation réseau</div>
          </div>
        </div>

        <div class="row">
          <div class="col"></div>
          <div class="col">
            <button type="button" class="btn btn-light">Ecran1</button>
            <emsp></emsp><button type="button" class="btn btn-light">Ecran2</button>
          </div>
        </div>
      </div>


      <div class="col-xl-6 ">
        <div class="row">
          <div class="col">


            <div class="card">
              <div class="row">
                <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold" style="height: 20px">
                  INDICATEURS--FEVRIER</div>
              </div>
              <div class="row">
                <div class="col"><img src="img/panneau.png" style="width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <br>
                <div class="col" ></div>
                <div class="col"><?php
                                  echo $row2['KWH'];
                                  ?> KWh</div>
              </div>
              <br>
              <br>
              <br>
              <div class="row">
                <div class="col"><img src="img/money.png" style="width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col"></div>
                <div class="col"><?php
                                  echo $row2['DH'];
                                  ?> 'DH'</div>
              </div>
              <br>
              <br>
              <br>
              <div class="row">
                <div class="col"><img src="img/co2.png" style="width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col"></div>
                <div class="col"><?php
                                  echo $row2['KG'];
                                  ?> Kg</div>
              </div>
            </div>

          </div>
          <div class="col">

            <div class="card">
              <div class="row">
                <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold" style="height: 20px">
                  CAPTEURS</div>
              </div>
              <div class="row">
                <div class="col"><img src="img/soleil.png" style="width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col">Température solaire</div>
                <div class="col"> <?php
                                  echo $row1['TS'];
                                  ?>°c</div>
              </div>
              <div class="row">
                <div class="col"><img src="img/weather.png" style="width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col">Température amblante</div>
                <div class="col"><?php
                                  echo $row1['TA'];
                                  ?>°c</div>
              </div>
              <div class="row">
                <div class="col"><img src="img/temperature.png" style="width: 50px; height: 50px; " class="img-fluid" alt="Responsive image"></div>
                <div class="col">Température des modules</div>
                <div class="col"><?php
                                  echo $row1['TM'];
                                  ?>°c</div>
              </div>
              <div class="row">
              <div class="col"> </div>
                <div class="col"> Vitesse du vent</div>
                
                <div class="col"><?php
                                  echo $row1['VV'];
                                  ?> m/s</div>
              </div>
            </div>

          </div>


        </div>
        <br>

        <div class="col-xl-12">

          <div class="card center ">
            <div class="row">
              <div class="card-body align-items-center d-flex justify-content-center text-danger font-weight-bold" style="height: 20px">
                ALARMES</div>
            </div>
            <div class="row">
              <div class="col"> <canvas id="chart"></canvas></div>
              <div class="col">
                Injection réseau <br>
                Alarme modulation <br>
                de puissance onduleur <br>
                Désequilibre de courant
                String<br>
                Perte communication
              </div>
            </div>
          </div>

        </div>


      </div>

      <script>
        new Chart(document.getElementById("doughnut-chart"), {
          type: 'doughnut',
          data: {

            datasets: [{
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
              data: [55, 45]
            }]
          },
          options: {

          }
        });
      </script>
    </div>


  </div>


</body>

</html>

<!---<i class="fas fa-bars"></i>
<i class="fa fa-list-alt"></i>-->