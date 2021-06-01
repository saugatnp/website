<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php
// Get the userid
 require_once 'functions.php';
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

First Name: <?php echo htmlentities($row['FirstName']);?><br/>

Last Name: <?php echo htmlentities($row['LastName']);?><br/>

Email id: <?php echo htmlentities($row['EmailId']);?><br/>
Contactno: "<?php echo htmlentities($row['ContactNumber']);?><br/>

Address: <?php echo htmlentities($row['Address']);?><br/>

<?php } ?>
</body>
</html>