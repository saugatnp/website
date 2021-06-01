<?php
// include database connection file
require_once "functions.php";
// Object creation
$insertdata=new DB_con();

if(isset($_POST['insertbutton']))
{

// Posted Values
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$email=$_POST['email'];
$phoneNo=$_POST['phoneNo'];
$address=$_POST['address'];
$password=$_POST['password'];
$token = $fname.rand(0,20000).$lname;
//Function Calling
$sql=$insertdata->insertuser($fname,$lname,$email,$address,$phoneNo,$password,$token);
if($sql)
{
// Message for successfull insertion

echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='../login.php'</script>";
}
else
{
    
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='../index.php'</script>";
}
}
?>
