<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php
// Get the userid
 require_once'functions.php';
$userid=intval($_GET['id']);
$onerecord=new DB_con();
$sql=$onerecord->fetchonepro($userid);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>
<form name="insertrecord" method="post" action="updatepro.php">
<div class="row">
<input type="hidden" name="id" value="<?php echo htmlentities($row['id']);?>" class="form-control" required>

Product Name: <?php echo htmlentities($row['productname']);?><br/>

Details: <?php echo htmlentities($row['details']);?><br/>

Features: <?php echo htmlentities($row['features']);?><br/>
Price: "<?php echo htmlentities($row['price']);?><br/>
Category: "<?php echo htmlentities($row['category']);?><br/>



<?php } ?>
</body>
</html>