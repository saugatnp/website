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
$onerecord=new DB_con();
$sql=$onerecord->fetchonerecord($userid);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>
<form name="insertrecord" method="post" action="update.php">
<div class="row">
<input type="hidden" name="id" value="<?php echo htmlentities($row['id']);?>" class="form-control" required>
<div class="col-md-4"><b>First Name</b>
<input type="text" name="firstname" value="<?php echo htmlentities($row['FirstName']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Last Name</b>
<input type="text" name="lastname" value="<?php echo htmlentities($row['LastName']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Email id</b>
<input type="email" name="emailid" value="<?php echo htmlentities($row['EmailId']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Contactno</b>
<input type="text" name="contactno" value="<?php echo htmlentities($row['ContactNumber']);?>" class="form-control" maxlength="10" required>
</div>
</div>
<div class="row">
<div class="col-md-8"><b>Address</b>
<textarea class="form-control" name="address" required><?php echo htmlentities($row['Address']);?></textarea>
</div>
</div>
<?php } ?>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div>
     </form>

</body>
</html>