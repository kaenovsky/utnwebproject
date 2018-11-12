<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Alpogo KPI dashboard</title>
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/dashboard.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>

<body>

<?php

  $servername = "localhost";
  $username = "admin";
  $password = "P5iFnp1jyoYN";

  // Create connection
  $conn = new mysqli($servername, $username, $password, "alpogotest");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "<p class='database-status'>Database is working fine!</p>";

  $activeEventsQuery = $conn->query("SELECT count(*) FROM eventos WHERE estado = 'activo'");
  $activeEvents = $activeEventsQuery->fetch_array();

  $usersTotalQuery = $conn->query("SELECT count(*) FROM auth_users WHERE active = '1'");
  $usersTotal = $usersTotalQuery->fetch_array();

  $eventsToday = 6;

  $salesToday = 12698;

 ?>

    <div class="header">
      <a href="https://alpogo.com" target="_blank" ><img src="./assets/img/logo-alpogo.png" alt="logo alpogo"></a>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title"><img src="./assets/img/speedometer.svg" alt="icon">
              <p>KPI Dashboard</p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- <hr> -->

    <div class="container">
      <div class="row">
        <div class="col-lg-6">

          <!-- columna panel izquierda -->

          <div class="container">
            <div class="row">
              <div class="col-lg-3">
                <div class="dashboard-left">
                  <div class="panel">
                    <h3>Users</h3>
                  <?php
                      echo "<p>$usersTotal[0]</p>";
                   ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="dashboard-right">
                  <div class="panel">
                    <h3>Sales today</h3>
                    <?php
                        echo "<p>$$salesToday</p>";
                     ?>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="container">
            <div class="row">

              <div class="col-lg-3">
                <div class="dashboard-left">
                  <div class="panel">
                    <h3>Active events</h3>
                    <?php
                        echo "<p>$activeEvents[0]</p>";
                     ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 ">
                <div class="dashboard-right">
                  <div class="panel">
                    <h3>Events today</h3>
                    <?php
                        echo "<p>$eventsToday</p>";
                     ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- columna panel derecho -->
        <div class="box-right">
            <div class="col-lg-6">
              <div class="city-list">
                <h3>Users by city</h3>
                <ol>
                  <li>Córdoba</li>
                  <li>Buenos Aires</li>
                  <li>Rosario</li>
                  <li>La Plata</li>
                  <li>Neuquén</li>
                  <li>Mar del Plata</li>
                  <li>Trelew</li>
                  <li>Bahía Blanca</li>
                  <li>Montevideo</li>
                </ol>
              </div>
            </div>
        </div>
      </div>
    </div>

  <!-- jquery CDN -->

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous">
  </script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
