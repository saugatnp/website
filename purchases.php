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
  <body class="">
  <h1>PURCHASES</h1>
<table id="mytable" class="table table-bordred table-striped">
   <thead>
   <th>#</th>
   <th>First Name</th>
   <th>Last Name</th>
   <th>Email</th>
   <th>Contact</th>
   <th>Address</th>
   <th>Posting Date</th>
   <th>Delete</th>
   </thead>
   <tbody>
  <?php
  include 'php/functions.php';
  $cnt=1;
    $emailid=($_GET['emailid']);
$onerecord=new DB_con();
$sql=$onerecord->purchase($emailid);
while($row=mysqli_fetch_array($sql))
  {
      ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($row['FirstName']);?></td>
      <td><?php echo htmlentities($row['LastName']);?></td>
      <td><?php echo htmlentities($row['EmailId']);?></td>
      <td><?php echo htmlentities($row['ContactNumber']);?></td>
      <td><?php echo htmlentities($row['Address']);?></td>
      <td><?php echo htmlentities($row['PostingDate']);?></td>
   <td><a href="delete.php?emailid=<?php echo htmlentities($row['EmailId']);?>&&id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">Delete<span class="glyphicon glyphicon-trash"></span></button></a></td>
      </tr>
        <?php
        $cnt++;
  }
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
