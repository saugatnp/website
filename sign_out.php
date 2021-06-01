
<?php
$token = rand(40000,60000);
setcookie("token",$token, time()+86400*30 ,"/");
?>