<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
    include "local-css-import.php";
    ?>

    <link rel="stylesheet" href="./plugins/dropify/dist/css/dropify.css">

    <link type="text/css" rel="stylesheet" href="./css/main.css" />


    <title>New Emplyee</title>
  </head>

  <body>
    <?php 
    include 'top-nav.php';
    include 'side-nav.php';
    ?>

    <!--section-->
    <div class="wrapper row">
      <div class="col s12 l10 offset-l1 xl8 offset-xl2">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <span class="card-title">New Employee</span>
            </div>
            <form action="">
              <div class="row">
                <div class="input-field col s12 m6 push-m6">
                  <input type="file" id="" class="dropify" >
                </div>
                <div class="col s12 m6 pull-m6">
                  <div class="input-field">
                    <input type="text" id="">
                    <label>First Name</label>
                    <!--TODO: transform input to uppercase-->
                  </div>
                  <div class="input-field">
                    <input type="text" id="">
                    <label>Middle Name</label>
                    <!--TODO: transform input to uppercase-->
                  </div>
                  <div class="input-field">
                    <input type="text" id="">
                    <label>Last Name</label>
                    <!--TODO: transform input to uppercase-->
                  </div>
                  <div class="">
                  <h6>Gender</h6>
                    <p>
                      <label>
                        <input name="group1" type="radio" id="1" class="with-gap" checked />
                        <span>Male</span>
                      </label>
                      <br>
                      <label>
                        <input name="group1" type="radio" id="2" class="with-gap"/>
                        <span>Female</span>
                      </label>
                    </p>
                  </div>


                </div>

                <div class="clearfix"></div>
                
                <div class="input-field col s12 m3 ">
                  <input type="text" id="job-order-date" class="date-picker">
                  <label for="job-order-date">Birthday</label>
                </div>

                <div class="input-field col s12 m3">
                    <select>
                      <optgroup label="Operation">
                        <option value="1">Helper</option>
                        <option value="2">Driver</option>
                      </optgroup>
                      <optgroup label="Office">
                        <option value="3">Coordinator</option>
                        <option value="4">Accounting/Billing</option>
                        <option value="5">Operations Supervisor</option>
                      </optgroup>
                      <optgroup label="Admin">
                        <option value="6">Operation Manager</option>
                        <option value="7">General Manager</option>
                        <option value="8">Finance</option>
                      </optgroup>
                    </select>
                    <label>Position</label>
                  </div>



                  <div class="input-field col s12 m3 ">
                    <input type="text" id="job-order-date" class="date-picker">
                    <label for="job-order-date">Employment Date</label>
                  </div>

                  <div class="clearfix"></div>

                <!-- <div class="input-field col s12">
                  <input type="text" id="">
                  <label>Description</label>
                </div> -->




                <!-- <div class="input-field col s12 m3">
                  <input type="text" pattern="[0-9]*" inputmode="numeric" id="" class="numeric" value="0">
                  <label>Reorder Point</label>
                </div>
                <div class="input-field col s12 m3">
                  <input type="text" pattern="[0-9]*" inputmode="numeric" id="" class="numeric" value="0">
                  <label>Reorder Quantity</label>
                </div>
                <div class="clearfix"></div>

                <div class="input-field col s12 m2">
                  <input type="text" pattern="[0-9]*" inputmode="numeric" id="normal-price" class="money" placeholder="">
                  <label>Normal Price</label>
                </div>
                <div class="input-field col s12 m2">
                  <input type="text" pattern="[0-9]*" inputmode="numeric" id="markup-price" class="money" placeholder="">
                  <label>Markup Price</label>
                </div> -->
              </div>
            </form>
          </div>
          <div class="card-action right-align">
            <button class="btn green ">Add</button>
          </div>
        </div>
      </div>
    </div>


















    <?php
    include "local-js-import.php";
    ?>
    <script src="./plugins/dropify/dist/js/dropify.js"></script>
    <script type="text/javascript" src="./plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <script>
      $(document).ready(function () {
        // Custom JS & jQuery here


        //initialize side-nav
        $(".sidenav").sidenav({
          draggable: true
        });

        $(".dropify").dropify();

        $('input#category').autocomplete({
          data: {
            "tires": null,
            "rims": null,
            "filters": null,
            "oils": null,
            "electrical": null,
          },
        });

        $('.money').inputmask({
          "alias": "currency",
          "prefix": "₱",
          "rightAlign": false,
        });

        $('.numeric').inputmask({
          "alias": "numeric",
          "rightAlign": false
        });

        $('select').formSelect();

        $(".date-picker").datepicker({
          selectMonths: true,
          selectYears: 100,
          container: 'body'
          // closeOnSelect: true
        });
        // $("#date-picker-btn").onClick()

      });
    </script>
  </body>

</html>