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

  <link type="text/css" rel="stylesheet" href="css/main.css" />


  <title>Custom Materialize Theme</title>
</head>
<body>
  <?php 
    include 'top-nav.php';
    include 'side-nav.php';
  ?>



















  
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="./plugins/materialize/js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      // Custom JS & jQuery here

      
      //initialize side-nav
      $(".button-collapse").sideNav({
                draggable:true
            });
    });
  </script>
</body>
</html>