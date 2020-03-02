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
  <body class="fulldetail">
      
  <?php
    $userid=intval($_GET['id']);
$onerecord=new DB_con();
$sql=$onerecord->fetchonepro($userid);
while($row=mysqli_fetch_array($sql))
  {
      ?>
      <div class="prodetail">
          <div  class="card">
          <form action="php/form.php" method="post">
            <div class="image">
            <div>
                <img width="800" height="450" src="http://localhost/website/images/<?=$row['images'];?>">
              </div>
                
            </div>
            <div class="card-body2">
                <h1 class="card-title"><?php echo htmlentities($row['productname']);?></h1>
                <h5><br><br>
                  
                  <?php echo htmlentities($row['details']);?>
                  <br>
                  <br>
                    <?php echo htmlentities($row['features']);?>
                    <br>
                    <br>
                    <br>
                    <small><s>$25</s></small>
                  <span class="price"><?php echo htmlentities($row['price']);?></span>
                </h5>
<br>
                <a href="productdetails.php?id=<?php echo htmlentities($row['id']);?>"><button>Add to cart</span></button></a>
            </div>
</div>
        </div>
        <?php
  }
  include "footer.html";
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>