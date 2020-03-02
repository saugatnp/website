<?php //Deletion
require_once 'functions.php';
if(isset($_GET['id']))
    {
// Geeting deletion row id
$rid=$_GET['id'];
$deletedata=new DB_con();
$sql=$deletedata->delete($rid);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
}
    }
?>
