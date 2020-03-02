<?php
$msg ="";
// include database connection file
require_once'functions.php';
// Object creation
$insertdata=new DB_con();
if(isset($_POST['insert']))
{
// Posted Values
$pname=$_POST['productname'];
$detail=$_POST['details'];
$feature=$_POST['features'];
$price=$_POST['price'];
$category=$_POST['category'];
$image=$_FILES['image']['name'];
$target="../images/".basename($_FILES['image']['name']);
//Function Calling
$sql=$insertdata->insertpro($pname,$detail,$feature,$price,$category,$image);
if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
    $msg= "uploaded successfully";
}
else{
    $msg= "upload unsuccessful";
}
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='../admin.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='../index.php'</script>";
}
}
?>
