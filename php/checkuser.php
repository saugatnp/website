<?php 
// include database connection file
require_once "functions.php";
// Object creation
$checkdata=new DB_con();

if(isset($_POST['loginbutton'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
//function call
$sql=$checkdata->checkuser($email,$password);

if(mysqli_num_rows($sql)>0){
    $token = $password.rand(20000,40000);
    $checkdata->updatetoken($token,$email,$password);
    setcookie("token",$token, time()+86400 ,"/");
    // Message for successfull insertion
echo "<script>alert('You've been successfully logged in.');</script>";
echo "<script>window.location.href='../index.php'</script>";
}
else {
    echo "<script>alert('username/password not matched');</script>";
}
}


?>