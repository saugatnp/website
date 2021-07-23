<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css">
</head>

<body class="adminindex">
   <!--<h2>click your choice</h2>
   <form name="register" method="get" action="">
   <button name="submit" type="submit" value="save">product</button>
   
-->
<a href="../index.php"><button class="btn btn-dark btn-xs" style="float:right; margin-right: 5px; margin-top:5px;">Log Out</button></a>
<?php
     // if(isset($_GET['submit'])=='save'){
   ?>
   <h2 style="text-align:center; margin-top:10px; color:darkblue;">ORDERS</h2>
   <table id="mytable" class="table table-bordred table-striped">
   <thead>
   <th>SN</th>
   <th>First Name</th>
   <th>Last Name</th>
   <th>Email</th>
   <th>Contact</th>
   <th>Address</th>
   <th>Product Name</th>
   <th>Posting Date</th>
   <th>Edit</th>
   <th>Delete</th>
   <th>Details</th>
   </thead>
   <tbody>
   <?php
   require_once'functions.php';
   $fetchdata=new DB_con();
   $sql=$fetchdata->fetchdata();
   $cnt=1;
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
      <td><?php echo htmlentities($row['proname']);?></td>
      <td><?php echo htmlentities($row['PostingDate']);?></td>
   <td><a href="updateform.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-primary btn-xs">Edit<span class="glyphicon glyphicon-pencil"></span></button></a></td>
   <td><a href="delete.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">Delete<span class="glyphicon glyphicon-trash"></span></button></a></td>
   <td><a href="details.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-info btn-xs" onClick="return confirm('Do you really want to details');">Detail<span class="glyphicon glyphicon-trash"></span></button></a></td>
      </tr>
<?php
// for serial number increment
$cnt++;
} ?>
</tbody>
</table>
<a href="formpro.php"><button class="btn btn-success btn-xs" style="float:right; margin-right: 5px;" onClick="return confirm('Do you want to add product?');">Add Product</button></a>
<h2 style="text-align:center;color:darkblue;">PRODUCTS</h2>
<table id="mytable" class="table table-bordred table-striped">
   <thead>
   <th>SN</th>
   <th>Product Name</th>
   <th>Category</th>
   <th>Detail</th>
   <th>Feature</th>
   <th>Price</th>

   <th>Edit</th>
   <th>Delete</th>
   <th>Details</th>
   </thead>
   <tbody>
   <?php
   require_once'functions.php';
   $fetchproduct=new DB_con();
   $sql=$fetchproduct->fetchproduct();
   $cnt=1;
   while($row=mysqli_fetch_array($sql))
   {
   ?>
      <tr>
      <td><?php echo htmlentities($cnt);?></td>
      <td><?php echo htmlentities($row['productname']);?></td>
      <td><?php echo htmlentities($row['category']);?></td>
      <td><?php echo htmlentities($row['details']);?></td>
      <td><?php echo htmlentities($row['features']);?></td>
      <td><?php echo htmlentities($row['price']);?></td>


      <td><a href="updateformpro.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-primary btn-xs">Edit<span class="glyphicon glyphicon-pencil"></span></button></a></td>
      <td><a href="deletepro.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">Delete<span class="glyphicon glyphicon-trash"></span></button></a></td>
      <td><a href="detailspro.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-info btn-xs" onClick="return confirm('Do you really want to details');">Detail<span class="glyphicon glyphicon-trash"></span></button></a></td>
      
   </tr>
  
<?php
// for serial number increment
$cnt++;
} ?>

</tbody>
</table>


</body>
</html>