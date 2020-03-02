<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php
// include database connection file
include_once("functions.php");
//Object
$updateprodata=new DB_con();
if(isset($_POST['updatepro']))
{
// Get the userid
$userid=intval($_POST['id']);
// Posted Values
$pname=$_POST['Productname'];
$detail=$_POST['Details'];
$feature=$_POST['Features'];
$price=$_POST['Price'];
$category=$_POST['Category'];
//Function Calling
$sql=$updateprodata->updatepro($pname,$detail,$feature,$price,$category,$image,$userid);
// Mesage after updation
echo "<script>alert('product Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>";
}
?>
</body>
</html>