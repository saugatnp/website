<?php
// include database connection file
require_once'functions.php';
// Object creation
$insertdata=new DB_con();
if(isset($_POST['insert']))
{
// Posted Values
$proname=intval($_GET['proname']);
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
//Function Calling
$sql=$insertdata->insert($fname,$lname,$emailid,$contactno,$address,$proname);
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
