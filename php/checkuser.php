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
    echo "you've been logged in your token is $token";
}
else {
    echo "username/password not matched";
}
}


?>