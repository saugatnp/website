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
    <link rel="stylesheet" href="bootstrap.css"
  </head>
  <body class="wired">
  <h1 style=" font-size:55px; text-align:center;">WIRED</h1>
  <div class="wiredpro ">
  <div class="row text-centre py-5">
  <?php
   $check='wired';
   $hit2=$DB->checkcat($check);
   $sql=$DB->fetchproduct();
   $cnt=1;
   $click=0;
   while($row=mysqli_fetch_array($hit2))
   {

   ?>
        <div class="col-md-2 col-sm-5 my-2 my-md-0" >
            <div class="card">
              <div>
                <img width="200" height="200"src="http://localhost/website/images/<?=$row['images'];?>">
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlentities($row['productname']);?></h5>
                <h5>
                  <span class="price">Rs.<?php echo htmlentities($row['price']);?></span>
                </h5>
                <a href="productdetails.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-info btn-xs">Details</button></a><br>
                <br>
                <?php 
                $sql = $DB->checktoken($token);
                while($roww=mysqli_fetch_array($sql)){
                  ?>
                
                <form name="insertrecord" text-align="center" method="post" action="php/insert.php?id=<?php echo htmlentities($row['id']);?>">
               <?php 
                }
                ?>
               <input class="btn btn-success btn-xs" type="submit" name="addcart" value="Add to Cart">
               </form>
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
