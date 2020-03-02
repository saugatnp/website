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
            <h3>Latest Product</h3>
            <a href="wireless.php"><button style="background-color:transparent; border:none;" >Click to view more</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="wired1.png"  >
          <div class="carousel-caption ">
            <h3>Latest Product</h3>
            <a href="wired.php"><button style="background-color:transparent; border:none;" >Click to view more</button></a>
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
