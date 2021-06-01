<?php 
// include database connection file
require_once "functions.php";
// Object creation
$checktoken=new DB_con();
$productid=intval($_GET['id']);
$token = $_COOKIE['token'];
$proname=$checktoken->getproname($productid);
if(isset($_POST['addcart'])){

    $sql = $checktoken->checktoken($token);
    while($row=mysqli_fetch_array($sql))
  {
      ?>
    <form name="insertrecord" text-align="center" method="post" action="insert.php?proname=<?php echo htmlentities($row['productname']) ?>">
    <?php }?>
    <div class="row">
    <div class="col-md-4"><b>First Name</b>
    <input type="text" name="firstname" class="form-control" required>
    </div><br>
    <div class="col-md-4"><b>Last Name</b>
    <input type="text" name="lastname" class="form-control" required>
    </div><br>
    </div>
    <div class="row">
    <div class="col-md-4"><b>Email id</b>
    <input type="email" name="emailid" class="form-control" required>
    </div><br>
    <div class="col-md-4"><b>Contactno</b>
    <input type="text" name="contactno" class="form-control" maxlength="10" required>
    </div><br>
    </div>
    <div class="row">
    <div class="col-md-8"><b>Address</b>
    <textarea class="form-control" name="address" required></textarea>
    </div><br>
    </div>
    <div class="row" style="margin-top:1%">
    <div class="col-md-8">
    <input type="submit" name="insert" value="Submit">
    </div><br>
    </div>
    </form>

}
?>
