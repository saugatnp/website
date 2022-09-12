<!DOCTYPE html>
<html>
  <head>
    <title>
      RaizStore
    </title>
    <?php 
      include_once "navbar.php";
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="wireless">
  <div class="wirelesspro ">
  <h1 style=" font-size:60px; text-align:center;">WIRELESS</h1>
  <div class="row text-centre py-5">
  <?php
  
   $check='wireless';
  $hit2=$DB->checkcat($check);
   $sql=$DB->fetchproduct();
   $cnt=1;
   while($row=mysqli_fetch_assoc($hit2))
   {
   ?>
        <div class="col-md-2 col-sm-5 my-2 my-md-0">
            <div class="card">
            <div>
                <img width="200" height="200" src="http://localhost:8080/website/images/<?=$row['images'];?>">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlentities($row['productname']);?></h5>
                <h5>
                  <span class="price">Rs.<?php echo htmlentities($row['price']);?></span>
                </h5>
                <a href="productdetails.php?id=<?php echo htmlentities($row['id']);?>"><button type="submit" class="btn btn-info btn-xs">Details</button></a>
               <br>
               <br>
               <?php 
                $sql = $DB->checktoken($token);
                while($row=mysqli_fetch_array($sql)){
                  ?>
               <form name="insertrecord" text-align="center" method="post" action="php/insert.php?id=<?php echo htmlentities($row['id']);?>">
               <?php 
                }
                ?>
               <input class="btn btn-success btn-xs" type="submit" name="addcart" value="Add to Cart">
               </form>
               <!-- <a href="php/insert.php?id=</*?php echo htmlentities($row['id']);?>"> <button method="post" type="submit" name="addcart" >Add to cart</button></a>-->
              </div>
            </div>
        </div>
    <?php
// for serial number increment
$cnt++;
}?>
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
