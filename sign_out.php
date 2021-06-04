
<?php
$token = rand(40000,60000);
setcookie("token",$token, time()+86400*30 ,"/");
echo "<script>alert('Do you want to sign out?');</script>";
echo "<script>window.location.href='index.php'</script>";
?>