<?php //Deletion
require 'php/functions.php';
// Getting deletion row id and email
$rid1=$_GET['emailid'];
$rid2=$_GET['id'];
$deletedata=new DB_con();
$sql=$deletedata->delete($rid2);
if($sql)
{
// Message for successfull deletion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='purchases.php?emailid=$rid1'</script>";
}
    
?>
