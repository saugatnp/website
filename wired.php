<!DOCTYPE html>
<html>
  <head>
    <title>
      IT Biz Solutions
    </title>
    <?php 
      
      include_once "navbar.php";
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="wired">
  <h1 style=" font-size:60px; text-align:center;">WIRED</h1>
  <div class="wiredpro ">
  <div class="row text-centre py-5">
  <?php
   include 'php/functions.php';
   $checkproduct=new DB_con();
   $check='wired';
   $hit2=$checkproduct->checkcat($check);
   $sql=$checkproduct->fetchproduct();
   $cnt=1;
   $click=0;
   while($row=mysqli_fetch_array($hit2))
   {

   ?>
        <div class="col-md-2 col-sm-5 my-2 my-md-0" >
            <div class="card">
              <div>
                <img width="200" height="200"src="http://localhost:8080/website/images/<?=$row['images'];?>">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlentities($row['productname']);?></h5>
                <h5>
                  <span class="price">$<?php echo htmlentities($row['price']);?></span>
                </h5>
                <a href="productdetails.php?id=<?php echo htmlentities($row['id']);?>"><button >Details</button></a><br>
                <br>
                <a href="php/form.php?id=<?php echo htmlentities($row['id']);?>"><button type="submit" >Add to cart</button></a><br>
              </div>
            </div>
        </div>
    <?php
// for serial number increment
$cnt++;

}
?>
  </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php
    include "footer.html";
    ?>
  </body>
</html>