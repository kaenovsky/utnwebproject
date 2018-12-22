<?php

  session_start();

  // if (!isset($_SESSION["username"])) {
  // 	echo "No podes ingresar porque no estas logeado";
  // 	exit();
  // }

  include_once 'includes/header.php';
  include_once 'includes/db.php';
  include_once 'includes/dates.php';
  include_once 'includes/queries.php';

?>

 <body>

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
                      echo "<p class='subtitle-data'>Non active users: $usersInactiveTotal[0]</p>";
                   ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="dashboard-right">
                  <div class="panel">
                    <h3>Sales today</h3>
                    <?php
                        echo "<p>$$salesToday[0]</p>";
                        echo "<p class='subtitle-data'>Tickets sold today: $ticketsToday[0]</p>
                        <p class='subtitle-data'>Tickets sold yesterday: $ticketsYesterday[0]</p>";
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
                        echo "<p class='subtitle-data'>Past events: $pastEvents[0]</p>";
                     ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 ">
                <div class="dashboard-right">
                  <div class="panel">
                    <h3>Events today</h3>
                    <?php
                        echo "<p>$eventsToday[0]</p>";
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
