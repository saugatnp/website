<?php
// include database connection file
require_once "functions.php";
// Object creation
$insertdata=new DB_con();
if(isset($_POST['insert']))
{
// Posted Values
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$email=$_POST['email'];
$phoneNo=$_POST['phoneNo'];
$address=$_POST['address'];
$password=$_POST['password'];

echo $fname;
//Function Calling
$sql=$insertdata->insertuser($fname,$lname,$emailid,$contactno,$address,$proname);
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
