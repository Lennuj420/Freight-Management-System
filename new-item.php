<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./plugins/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css' /> -->

    <link rel="stylesheet" href="./plugins/dropify/dist/css/dropify.css">

    <link type="text/css" rel="stylesheet" href="css/main.css" />


    <title>new item</title>
  </head>

  <body>
    <?php 
    include 'top-nav.php';
    include 'side-nav.php';
  ?>

    <!--section-->
    <div class="row">
      <div class="col s12 l10 offset-l1 xl8 offset-xl2">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <span class="card-title">New Item</span>
            </div>
            <form action="">
              <div class="row">
                <div class="input-field col s12 m6 push-m6">
                  <input type="file" id="" class="dropify" >
                </div>
                <div class="col s12 m6 pull-m6">
                  <div class="input-field">
                    <input type="text" id="">
                    <label>Name</label>
                    <!--TODO: transform input to uppercase-->
                  </div>

                  <div class="input-field">
                    <input type="text" id="category">
                    <label>Category</label>
                    <!--todo: get select option from database-->
                  </div>
                  <div class=" valign-wrapper">
                    <p>
                    <label>
                      <input name="group1" type="radio" id="1" class="with-gap" />
                      <span>Stockable</span>
                    </label>
                    <label>
                      <input name="group1" type="radio" id="2" class="with-gap"/>
                      <span>Service</span>
                    </label>
                    
                    </p>
                    <p>
                    <label>
                      <input name="group1" type="radio" id="3" class="with-gap"/>
                      <span>Non-Stocked</span>
                    </label>
                    
                    
                    <label>
                      <input name="group1" type="radio" id="4" class="with-gap"/>
                      <span>Serialized</span>
                    </label>
                    </p>

                  </div>
                </div>
                


                <div class="input-field col s12">
                  <input type="text" id="">
                  <label>Description</label>
                  <!--TODO: transform input to uppercase-->
                </div>
                <div class="input-field col s12 m3">
                  <input type="text" id="">
                  <label>Standard UoM</label>
                  <!--TODO: transform input to uppercase-->
                </div>
                <div class="input-field col s12 m3">
                  <input type="text" id="">
                  <label>Sales UoM</label>
                  <!--TODO: transform input to uppercase-->
                </div>
                <div class="input-field col s12 m3">
                  <input type="text" id="">
                  <label>Purchasing UoM</label>
                  <!--TODO: transform input to uppercase-->
                </div>

                <div class="clearfix"></div>

                <div class="input-field col s12 m3">
                  <input type="text" pattern="[0-9]*" inputmode="numeric" id="" class="numeric" value="0">
                  <label>Starting Quantity</label>
                  <!--TODO: transform input to uppercase-->
                </div>

                <div class="input-field col s12 m3">
                  <input type="text" pattern="[0-9]*" inputmode="numeric" id="" class="numeric" value="0">
                  <label>Reorder Point</label>
                  <!--TODO: transform input to uppercase-->
                </div>
                <div class="input-field col s12 m3">
                  <input type="text" pattern="[0-9]*" inputmode="numeric" id="" class="numeric" value="0">
                  <label>Reorder Quantity</label>
                  <!--TODO: transform input to uppercase-->
                </div>
                <div class="clearfix"></div>

                <div class="input-field col s12 m2">
                  <!--<i class="prefix">&#8369;</i>-->
                  <input type="text" pattern="[0-9]*" inputmode="numeric" id="normal-price" class="money" placeholder="">
                  <label>Normal Price</label>
                  <!--TODO: add money mask-->
                </div>
                <div class="input-field col s12 m2">
                  <!--<i class="prefix">&#8369;</i>-->
                  <input type="text" pattern="[0-9]*" inputmode="numeric" id="markup-price" class="money" placeholder="">
                  <label>Markup Price</label>
                  <!--TODO: add money mask-->
                </div>
              </div>
            </form>
          </div>
          <div class="card-action right-align">
            <button class="btn green ">Add</button>
          </div>
        </div>
      </div>
    </div>


















    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./plugins/materialize/js/materialize.min.js"></script>
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

      });
    </script>
  </body>

</html>