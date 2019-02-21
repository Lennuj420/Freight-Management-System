<html>

  <head>
    <!--Import Google Icon Font-->
    <link href="css/material-icons.css" rel="stylesheet">
    <!--Import Font Awesome Font-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Import materialize.css-->
    <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->
    <link rel="stylesheet" href="./plugins/materialize/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/main.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Materialize Theme</title>
  </head>

  <body>
    <?php 
      include 'top-nav.php';
      include 'side-nav.php';
    ?>

    <!-- floating action btn -->
    <div class="fixed-action-btn click-to-toggle">
      <a class="btn-floating btn-large green darken-2">
        <i class="fa fa-plus"></i>
        <!--<i class="material-icons">add</i>-->
      </a>
      <ul>
        <li>
          <a href="#post-modal" class="btn-floating blue modal-trigger">
            <!--<i class="material-icons">mode_edit</i>-->
            <i class="fa fa-book"></i>
          </a>
        </li>
        <li>
          <a href="#category-modal" class="btn-floating blue modal-trigger">
            <i class="material-icons">folder</i>
          </a>
        </li>
        <li>
          <a href="#user-modal" class="btn-floating blue modal-trigger">
            <!--<i class="material-icons">supervisor_account</i>-->
            <i class="fa fa-user-o"></i>
          </a>
        </li>
      </ul>
    </div>

    <!--Content Container-->
    <!--<div class="container">-->

    <!-- section stats -->
    <div class="row">
      <div class="col s6 m6 l3">
        <div class="card-panel purple white-text center">
          <p><i class="fa fa-book"></i> Booking</p>
          <h5>64</h5>
        </div>
      </div>

      <div class="col s6 m6 l3">
        <div class="card-panel red lighten-1 white-text center">
          <p><i class="fa fa-chevron-up"></i> Revenue</p>
          <!--<p><i class="fa fa-chevron-up background-round"></i> Revenue</p>-->
          <h5 class="count">&#8369;103,342</h5>
        </div>
      </div>

      <div class="col s6 m6 l3">
        <div class="card-panel amber darken-3 white-text center">
          <p><i class="fa fa-chevron-down"></i> Operation</p>
          <h5 class="count">&#8369;93,342</h5>
        </div>
      </div>

      <div class="col s6 m6 l3">
        <div class="card-panel blue white-text center">
          <p><i class="fa fa-wrench"></i> Maintenance</p>
          <h5 class="count">&#8369;50,264</h5>
        </div>
      </div>
    </div>

    <!-- section performance-->
    <div class="row">
      <div class="col l8 s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Monthly Trip</span>
            <div style="height: 400px">
              <canvas id="line-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col l4 s12">
        <ul class="collection with-header latest-comments">
          <li class="collection-header center">
            <h5>Leave Application</h5>
          </li>
          <li class="collection-item avatar">
            <img src="./img/person1.jpg" alt="" class="circle">
            <span class="title">John Doe</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium error maiores
              alias
              pariatur dolore quisquam numquam? Iste perferendis sit nisi velit, rem debitis. Aspernatur odio, odit
              voluptatem
              nisi sunt quis.</p>
            <div class="right">
              <a href="#" class="approve green-text">Approve</a> |
              <a href="#" class="deny red-text">Deny</a> |
              <a href="#" class="deny blue-text">Details</a>
            </div>
          </li>
          <li class="collection-item avatar">
            <img src="./img/person2.jpg" alt="" class="circle">
            <span class="title">Damian Marley</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium error maiores
              alias
              pariatur dolore quisquam numquam? Iste perferendis sit nisi velit, rem debitis. Aspernatur odio, odit
              voluptatem
              nisi sunt quis.</p>
            <div class="right">
              <a href="#" class="approve green-text">Approve</a> |
              <a href="#" class="deny red-text">Deny</a> |
              <a href="#" class="deny blue-text">Details</a>
            </div>
          </li>
          <li class="collection-item avatar">
            <img src="./img/person3.jpg" alt="" class="circle">
            <span class="title">Joe Smith</span>
            <p class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium error maiores
              alias
              pariatur dolore quisquam numquam? Iste perferendis sit nisi velit, rem debitis. Aspernatur odio, odit
              voluptatem
              nisi sunt quis.</p>
            <div class="right">
              <a href="#" class="approve green-text">Approve</a> |
              <a href="#" class="deny red-text">Deny</a> |
              <a href="#" class="deny blue-text">Details</a>
            </div>
          </li>
        </ul>
      </div>
    </div>


    <!--Deisel Consumptions-->
    <div class="row">
      <div class="col s12 m6 l6">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Kilometer per 1L of Diesel</span>
            <div>
              <canvas id="diesel-chart" style="max-height: 400px;"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--</div>-->


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
    <script src="./plugins/materialize/js/materialize.min.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/Chart 2.7.2.min.js"></script>
    <script>
      $(document).ready(function () {
        console.log("document ready");
        // Custom JS & jQuery here

        //initialize side-nav
        $(".sidenav").sidenav({
          draggable: true
        });


        var lineChartData = {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Trips",
            data: [30, 34, 45, 22, 16, 37, 11, 67, 92, 27, 75, 52],
            borderColor: "rgb(56, 142, 60)",
            pointRadius: 5,
            pointBackgroundColor: "rgb(27, 94, 32)",
            //backgroundColor: "rgba(0,0,0,0)",
            fill: false,
            lineTension: 0
          }]
        };

        var lineChartOption = {
          maintainAspectRatio: false,
          legend: {
            display: false,
            position: 'top',
            labels: {
              //fontColor: 'rgb(255, 99, 132)'
            }
          },
          scales: {
            xAxes: [{
              gridLines: {
                display: true
              }
            }],
            yAxes: [{
              gridLines: {
                display: true
              },
              ticks: {
                beginAtZero: true
              }
            }]
          }

        }
        var lineChart = $("#line-chart");
        var myChart = new Chart(
          lineChart, {
            type: 'line',
            data: lineChartData,
            options: lineChartOption
          }
        );

        var dieselChartData = {
          labels: ['NM 9179', 'AAB 9497', 'ABK 6323', 'AAT 4125', 'EVT 191'],
          datasets: [{
            label: 'Km/h',
            data: [2, 7, 10, 5, 3]
          }]

        };
        var dieselChartOption = {

        }

        var dieselChartCanvas = $("#diesel-chart");
        var dieselChart = new Chart(
          dieselChartCanvas, {
            type: 'bar',
            data: dieselChartData,
            options: dieselChartOption
          })

      });
      $(window).on("load", function () {
        console.log("window loaded");




      });
    </script>
  </body>

</html>