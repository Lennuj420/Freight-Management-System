<!-- <!DOCTYPE html> -->
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css' /> -->
    <link rel="stylesheet" href="./plugins/materialize/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/main.css" />


    <title>Job Order No. 0568</title>
  </head>

  <body>
    <?php 
    include 'top-nav.php';
    include 'side-nav.php';
  ?>

    <!--section-->
    <div class="row">
      <div class="col s12 m10 offset-m1 l8 offset-l2">
        <div class="card">
          <div class="card-content">

            <div class="row">
              <span class="card-title">
                <b>Job Order No. 0568</b>
              </span>
            </div>
            <form action="col s12">
              <div class="row">
                <div class="input-field col s12 m3 ">
                  <input type="text" id="job-order-date" class="datepicker">
                  <label for="job-order-date">Date</label>
                </div>
                <div class="input-field col s12 m3">
                  <input type="text" id="plate-number">
                  <label for="plate-number">Plate No.</label>
                </div>
                <div class="input-field col s12 m3">
                  <input type="text" id="driver">
                  <label>Driver</label>
                </div>
                <div class="input-field col s12 m3">
                  <input type="text" id="">
                  <label>Job Description</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s7 m5">
                  <input type="text">
                  <label>Item Name</label>
                </div>
                <div class="input-field col s4 m1">
                  <input type="text">
                  <label>Qty</label>
                </div>
                <div class="clearfix"></div>
                <div class="input-field col s7 m5">
                  <input type="text">
                  <label>Item Name</label>
                </div>
                <div class="input-field col s4 m1">
                  <input type="text">
                  <label>Qty</label>
                </div>
                <div class="clearfix"></div>
                <div class="input-field col s7 m5">
                  <input type="text">
                  <label>Item Name</label>
                </div>
                <div class="input-field col s4 m1">
                  <input type="text">
                  <label>Qty</label>
                </div>
                <div class="clearfix"></div>
                <div class="input-field col s12">
                  <button type="button" class=" btn-small waves-effect waves-light red">Add Item</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


















    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js'></script> -->
    <script src="./plugins/materialize/js/materialize.min.js"></script>

    <script>
      $(document).ready(function () {
        // Custom JS & jQuery here


        //initialize side-nav
        $(".sidenav").sidenav({
          draggable: true
        });

        //init fab
        $('.fixed-action-btn').floatingActionButton();

        //init datepicker
        $('.datepicker').datepicker({
          autoClose: true,
          // setDefaultDate: true,
          container: 'body'
        });

        $('input#plate-number').autocomplete({
          data: {
            "053207": null,
            "NM9179": null,
            "053404": null,
            "053405": null,
            "ABK6323": null,
            "030105": null,
            "030110": null,
            "130103": null,
            "130107": null,
            "AAT4125": null,
            "ACO7047": null,
            "AWA7180": null,
            "EVL912": null,
            "EVP842": null,
            "EVT191": null
          },
        });
        $('input#driver').autocomplete({
          data: {
            "Harold Jose Buendia": null,
            "Maximo Buendia": null,
            "Benji Gusto": null,
            "Querico Obado": null,
            "Eman Nedia": null,
          },
        });
      });
    </script>
  </body>

</html>