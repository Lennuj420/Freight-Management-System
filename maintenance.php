<!DOCTYPE html>
<html>
<!-- TODO: add bar chart for fuel cunsumption from past trips -->
    <head>
        <!--Import Google Icon Font-->
        <link href="css/material-icons.css" rel="stylesheet">
        <!--Import Font Awesome Font-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!--Import materialize.css-->
        <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css'/>
        <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.css'/> -->
        <link type="text/css" rel="stylesheet" href="css/main.css" />

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Maintenance</title>
    </head>

    <body>
    <?php 
      include 'top-nav.php';
      include 'side-nav.php';
    ?>

         <!-- floating action btn -->
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large green darken-2">
            <i class="material-icons">build</i>
        </a>
        <ul>
          <li>
              <!-- <a href="#modal-job-order" class="btn-floating blue darken-2 modal-trigger"> -->
              <a href="new-job-order.html" class="btn-floating blue darken-2 modal-trigger">
                  <i class="fa fa-plus tooltipped" data-position="left" data-tooltip="New Job Order"></i>
              </a>
          </li>
        </ul>
    </div>

        <!--Content Container-->
        <div class="wrapper">
                  <!--section tire change rotation-->
        <div class="row grey lighten-3">
            <div class="col s12 m4">
                <ul class="collection with-header">
                    <li class="collection-header center blue white-text">
                        <h5>Change Tire Rotation</h5>
                    </li>
                    <!-- <li class="collection-item avatar">
                        <img src="/img/fleet/ACO 7047.JPG" alt="" class="responsive-img circle">
                        <span class="title"><b>ACO7047</b></span>
                        <p><b>Front:</b> April 3, 2018</p>
                        <p><b>Differential:</b> February 5, 2018</p>
                        <P><b>Rear:</b> July 7, 2018</P>
                    </li>
                    <li class="collection-item avatar">
                        <img src="/img/fleet/EVL912.jpg" alt="" class="circle">
                        <span class="title"><b>EVL912</b></span>
                        <p><b>Front:</b> January 3, 2018</p>
                        <p><b>Differential:</b> March 5, 2018</p>
                        <P><b>Rear:</b> May 7, 2018</P>
                    </li> -->
                    <li class="collection-item avatar col s4 valign-wrapper">
                      <span class="title"><b>Front</b></span>
                    </li>
                    <li class="collection-item avatar col s4 valign-wrapper">
                      <span class="title"><b>Differential</b></span>
                    </li>
                    <li class="collection-item avatar col s4 valign-wrapper">
                      <span class="title"><b>Rear</b></span>
                    </li>
                    <li class="collection-item avatar col s4 valign-wrapper">
                      <img src="/img/fleet/ACO 7047.JPG" alt="" class="responsive-img circle">
                      <span class="title"><b>ACO7047</b></span>
                    </li>
                    <li class="collection-item avatar col s4 valign-wrapper">
                      <img src="/img/fleet/EVL912.jpg" alt="" class="circle">
                      <span class="title"><b>EVL912</b></span>
                    </li>
                    <li class="collection-item avatar col s4 ">
                      <img src="/img/fleet/EVP842.jpg" alt="" class="circle">
                      <span class="title"><b>EVP842</b></span>
                      <p>Date: 1/25/18</p>

                    </li>
                </ul>


            </div>
            
            <div class="col s12 m4">
                <ul class="collection with-header">
                  <li class="collection-header center cyan white-text">
                    <!-- <h4>Change Oil Schedule</h4> -->
                    <h5>Change Oil Schedule</h5>
                  </li>
                  <li class="collection-item avatar">
                    <!-- <i class="material-icons blue circle">contacts</i> -->
                    <img src="/img/fleet/EVL912-cropped.jpg" alt="" class="responsive-img circle">
                    <span class="title"><b>EVL912</b></span>
                    <p>Secheduled Date: December 25, 2018</p>
                </li>
                <li class="collection-item avatar">
                  <!-- <i class="material-icons blue circle">contacts</i> -->
                  <img src="/img/fleet/EVP842.jpg" alt="" class="responsive-img circle">
                  <span class="title"><b>EVP842</b></span>
                  <p>Secheduled Date: November 12, 2018</p>
                </li>
                </ul>
            </div>

            <div class="col s12 m4">
              <ul class="collection with-header">
                <li class="collection-header center indigo darken-4 white-text">
                  <!-- <h4>Change Oil Schedule</h4> -->
                  <h5>Repack Schedule</h5>
                </li>
                <li class="collection-item avatar">
                  <!-- <i class="material-icons blue circle">contacts</i> -->
                  <img src="/img/fleet/EVL912-cropped.jpg" alt="" class="responsive-img circle">
                  <span class="title"><b>EVL912</b></span>
                  <p>Secheduled Date: December 25, 2018</p>
              </li>
              <li class="collection-item avatar">
                <!-- <i class="material-icons blue circle">contacts</i> -->
                <img src="/img/fleet/EVP842.jpg" alt="" class="responsive-img circle">
                <span class="title"><b>EVP842</b></span>
                <p>Secheduled Date: November 12, 2018</p>
              </li>
              </ul>
          </div>
        </div>

        <!--</div>-->

        <div class="modal modal-fixed-footer" id="modal-job-order">
          <div class="modal-content">
            <div class="">
              <h4>Job Order <span class="right">No. 0568</span></h4>
              <!-- <h4 class="right"># <span>0568</span></h4> -->
            </div>
            <div class="">
              <form action="" class="row">
                  <div class="input-field col s12 m4">
                      <input type="text" id="employment-date" class="datepicker">
                      <label>Date</label>
                  </div>
                  <div class="input-field col s12 m4">
                      <!-- <i class="material-icons prefix">textsms</i> -->
                      <input type="text" id="autocomplete-input" class="autocomplete">
                      <label for="">Plate No.</label>
                  </div>
                  <div class="input-field col s12 m4">
                    <input type="text" id="" >
                    <label>Driver</label>
                </div>
                  <div class="input-field col s12">
                      <input type="text" id="">
                      <label>Job Description</label>
                  </div>
                  <div class="input-field col s7 m5">
                      <input type="text">
                      <label>Item Name</label>
                  </div>
                  <div class="input-field col s4 m1">
                      <input type="text">
                      <label>Qty</label>
                  </div>
                  <div class="col s12 ">
                      <ul class="collection with-header">
                          <li class="collection-header"><h4>Items</h4></li>
                          <li class="collection-item avatar">
                              <img src="images/yuna.jpg" alt="" class="circle">
                              <span class="title"><b>Brake & Clutch Fluid</b></span>
                              <p>qty: 300 ml</p>
                              <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                            </li>
                          <li class="collection-item"><div>Bulb 24v Single Small<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                          <li class="collection-item"><div>Bulb 24v Double Big<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                          <li class="collection-item"><div>Battery Terminal<a href="#!" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                        </ul>
                  </div>
            </form>
            </div>
          </div>
          <div class="modal-footer">
          <a class="modal-action modal-close waves-effect waves-red btn">cancel</a>
          <a class="modal-action modal-close waves-effect waves-red btn">add</a>
          </div>
        </div>
        </div>



        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js'></script>
        <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.js'></script> -->
        <script src="js/chart.js"></script>
        <script src="js/Chart 2.7.2.min.js"></script>
        <script>
            $(document).ready(function() {
                console.log("document ready");
                // Custom JS & jQuery here

                //initialize side-nav
                $('.sidenav').sidenav({
                  
                });
                //init fab
                $('.fixed-action-btn').floatingActionButton();




                $(".modal").modal({
                  dismissible: false, // Modal can be dismissed by clicking outside of the modal
                  // opacity: .5, // Opacity of modal background
                  inDuration: 300, // Transition in duration
                  outDuration: 200, // Transition out duration
                  startingTop: '4%', // Starting top style attribute
                  endingTop: '10%', // Ending top style attribute

                });

                $('.datepicker').datepicker({
                  autoClose: true,
                  // setDefaultDate: true,
                  container: 'body'
                });

                $('input.autocomplete').autocomplete({
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
                // $("select ").material_select({
                //   // container: 'body'
                // });

                });
            $(window).on("load", function() {
                console.log("window loaded");




            });

        </script>
    </body>

</html>