<?php
// include database connection file
require_once'functions.php';
// Object creation
$insertdata=new DB_con();


if(isset($_POST['addcart'])){
    $userid=intval($_GET['id']);
    $token = $_COOKIE['token'];
    $proname=$insertdata->getproname($userid);
    //get product name from query
    while($row=mysqli_fetch_array($proname)){
        $productname =htmlentities($row['productname']);
    }
    //get userdata through token
    $sql = $insertdata->checktoken($token);
   
    //assign userdata to variable
    while($row=mysqli_fetch_array($sql)){
        $fname=$row['firstName'];
        $lname=$row['lastName'];
        $emailid=$row['email'];
        $contactno=$row['phoneNo'];
        $address=$row['address'];
    }

//Function Calling
$sql=$insertdata->insert($fname,$lname,$emailid,$contactno,$address,$productname);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='../purchases.php?emailid=$emailid'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='../index.php'</script>";
}
}
?>
