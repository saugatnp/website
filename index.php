<!DOCTYPE html>
<html>
  <head>
    <title>
      IT Biz Solutions
    </title>
    <?php 
      include_once "php/functions.php" ;
      include_once "navbar.php";
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="demo" class="carousel slide " data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="wireless1.jpg"  >
          <div class="carousel-caption ">
            
            <a href="wireless.php"><button style="background-color:transparent; border:none;" >Click to view more</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="wired1.png"  >
          <div class="carousel-caption ">
            
            <a href="wired.php"><button style="background-color:transparent; border:none;" >Click to view more</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="accessoriesaudiocord.png"  >
          <div class="carousel-caption ">
            
            <a href="accessories.php"><button style="background-color:transparent; border:none;" >Click to view more</button></a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php
    include "footer.html";
    ?>
  </body>
</html>
