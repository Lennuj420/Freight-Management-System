<!DOCTYPE html>
<html>

  <head>
    <?php
    include "local-css-import.php";
    ?>
    <!-- <link rel="stylesheet" href="./plugins/datatables/datatables.css"> -->

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

    <div class="wrapper">
          <!--profile card-->
    <div class="row">
      <div class="col s12 l12">
      <li class="collection-header center teal white-text">
            <h5>Bio Data</h5>
          </li> 
        <div class="card">
          <div class="card-image teal">
            <div class="profile-card-bg">
              <canvas id="line-chart"></canvas>
            </div>

          </div>

          <div class="card-content">
            <img src="./img/person4.jpg" alt="" class="profile-card-img circle responsive-img z-depth-2">
            <div class="row">
              <div class="col s12 m3 center-align">
                <h4 class="card-title grey-text text-darken-2">
                  <b>Junnel Verceluz</b>
                </h4>
                <p class="grey-text medium2small">Operation Supervisor</p>
              </div>
              <div class="col s12 m3 center-align">
                <h4 class="card-title grey-text text-darken-2">
                  <b>24 months</b>
                </h4>
                <p class="grey-text medium2small">Employment Duration</p>
              </div>
              <div class="col s12 m2 l3 center-align">
                <h4 class="card-title grey-text text-darken-2">
                  <b>254</b>
                </h4>
                <p class="grey-text medium2small">Total trips</p>
              </div>
              <div class="col s12 m4 l3 center-align">
                <h4 class="card-title grey-text text-darken-2">
                  <b>&#8369; 54,325.00</b>
                </h4>
                <p class="grey-text medium2small">Salary earned</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--
        <div class="col s12 center">
            <img src="/img/profile%20card.PNG" alt="" class="responsive-img">
        </div>
        -->
    </div>


    <div class="row">
      <!--Bio data-->
      <div class="col s12 m6 l4 xl3">
        <ul class="collection with-header z-depth-1">
          <li class="collection-header center teal white-text">
            <h5>Bio Data</h5>
          </li>
          <li class="collection-item row">
            <div class="col s5 left-align grey-text text-darken-2">
              Age:
            </div>
            <div class="col s7 right-align">
              <b>24</b>
            </div>
          </li>
          <li class="collection-item row">
            <div class="col s5 left-align grey-text text-darken-2">
              Birthday:
            </div>
            <div class="col s7 right-align">
              <b>January 21</b>
            </div>
          </li>
          <li class="collection-item row">
            <div class="col s5 left-align grey-text text-darken-2">
              Address:
            </div>
            <div class="col s7 right-align">
              <b>B131 L29 P2 Mabuhay Mamatid Cabuyao Laguna</b>
            </div>
          </li>
          <li class="collection-item row">
            <div class="col s5 left-align grey-text text-darken-2">
              Status:
            </div>
            <div class="col s7 right-align">
              <b>Married</b>
            </div>
          </li>

          <li class="collection-item row">
            <div class="col s5 left-align grey-text text-darken-2">
              Spouse:
            </div>
            <div class="col s7 right-align">
              <b>Samuel Jackson</b>
            </div>
          </li>
        </ul>
      </div>
    </div>
    </div>

    <?php
    include "local-js-import.php";
    ?>
    <script src="js/chart.js"></script>
    <script src="js/Chart 2.7.2.min.js"></script>
    <!-- <script src="plugins/datatables/datatables.js"></script> -->
    <script>
      $(document).ready(function () {
        console.log("document ready");
        // Custom JS & jQuery here

        //initialize side-nav
        $(".sidenav").sidenav({
          draggable: true
        });



      });
      $(window).on("load", function () {
        console.log("window loaded");

        var lineChartData = {
          labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "# of Trips",
            data: [30, 34, 45, 22, 16, 37, 11, 67, 92, 27, 75, 52],
            borderColor: "rgb(255, 255, 255)",
            pointRadius: 5,
            pointBackgroundColor: "rgb(245, 124, 0)",
            backgroundColor: "rgb(245, 124, 0)",
            fill: false,
            lineTension: 0
          }]
        };

        var lineChartOption = {
          maintainAspectRatio: false,
          legend: {
            //display: false,
            position: 'top',
            labels: {
              fontColor: "white",
              fontSize: 15
            }
          },
          scales: {
            xAxes: [{
              gridLines: {
                display: false
              },
              ticks: {
                fontColor: "white",
                fontSize: 15
              }
            }],
            yAxes: [{
              gridLines: {
                display: true
              },
              ticks: {
                fontColor: "white",
                fontSize: 15,
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
        var myTable = $("#my-table");
        var myTableOptions = {
          // paging: false,
          // searching: false,
          // ordering:  false
        }
        // $("#my-table").DataTable(myTableOptions);
      });
    </script>
  </body>

</html>