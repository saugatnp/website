<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php
// Get the userid
 require_once'functions.php';
$userid=intval($_GET['id']);
$oneprorecord=new DB_con();
$sql=$oneprorecord->fetchonepro($userid);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>
<div class="formdiv" style="margin-left:50px; margin-top:20px;">
<form name="insertrecord" method="post" action="updatepro.php">
<div class="row">
<input type="hidden" name="id" value="<?php echo htmlentities($row['id']);?>" class="form-control" required>
<div class="col-md-4"><b>Product Name</b>
<input type="text" name="Productname" value="<?php echo htmlentities($row['productname']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Details</b>
<input type="text" name="Details" value="<?php echo htmlentities($row['details']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4" style="margin-top:10px;"><b>Features</b>
<input type="text" name="Features" value="<?php echo htmlentities($row['features']);?>" class="form-control" required>
</div>
<div class="col-md-4" style="margin-top:10px;"><b>Price</b>
<input type="text" name="Price" value="<?php echo htmlentities($row['price']);?>" class="form-control" maxlength="10" required>
</div>
</div>
<div class="row">
<div class="col-md-4" style="margin-top:10px;"><b>Category</b>
<input type="text" name="Category" value="<?php echo htmlentities($row['category']);?>" class="form-control" maxlength="10" required>
</div>
</div>
<?php } ?>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input class="btn btn-success btn-xs" type="submit" name="updatepro" value="Update">
</div>
</div>
     </form>
  </div>
</body>
</html>