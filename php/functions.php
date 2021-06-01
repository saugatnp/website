<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'it solutions');
class DB_con
{
public function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}
//Data Insertion Function
	public function insert($fname,$lname,$emailid,$contactno,$address,$proname)
	{
	$ret=mysqli_query($this->dbh,"insert into tblusers(FirstName,LastName,EmailId,ContactNumber,Address,proname) values('$fname','$lname','$emailid','$contactno','$address','$proname')");
	return $ret;
	}
//product insertion
public function insertpro($pname,$detail,$feature,$price,$category,$image){
	$ins=mysqli_query($this->dbh," insert into tblproduct (productname,details,features,price,category,images) values('$pname','$detail','$feature','$price','$category','$image')");
	return $ins;
}
//Data read Function
public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from tblusers");
	return $result;
	}
//product details read function
public function fetchproduct(){
	$prodetail=mysqli_query($this->dbh,"select * from tblproduct");
	return $prodetail;
}
//Data one record read Function
public function fetchonerecord($userid)
	{
	$oneresult=mysqli_query($this->dbh,"select * from tblusers where id=$userid");
	return $oneresult;
	}
// product one record read function
public function fetchonepro($userid){
	$oneproresult=mysqli_query($this->dbh,"select * from tblproduct where id=$userid");
	return $oneproresult;
}
//Data updation Function
public function update($fname,$lname,$emailid,$contactno,$address,$userid)
	{
	$updaterecord=mysqli_query($this->dbh,"update  tblusers set FirstName='$fname',LastName='$lname',EmailId='$emailid',ContactNumber='$contactno',Address='$address' where id='$userid' ");
	return $updaterecord;
	}
// product update function
public function updatepro($pname,$detail,$feature,$price,$category,$userid){
	$updateprorecord=mysqli_query($this->dbh,"update tblproduct set productname='$pname',details='$detail',features='$feature',price='$price',category='$category'where id='$userid'");
	return $updateprorecord;
}
//Data Deletion function Function
public function delete($rid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from tblusers where id=$rid");
	return $deleterecord;
	}
//product deletion function
public function deletepro($rid){
	$deleterecord=mysqli_query($this->dbh,"delete from tblproduct where id=$rid");
	return $deleterecord;
}
//checking category
public function checkcat($check){
	$result=mysqli_query($this->dbh,"select * from tblproduct where category='$check'");
	return $result;
}
//check email for purchases
public function purchase($email){
	$result=mysqli_query($this->dbh,"select * from tblusers where EmailId='$email'");
	return $result;
}
public function deletemail($email){
	$delete=mysqli_query($this->dbh,"delete from tblusers where EmailId='$email'");
	return $delete;		
}
public function getproname($userid){
	$result=mysqli_query($this->dbh,"select productname from tblproduct where id='$userid'");
	return $result;
}
//insert user into database
public function insertuser($fname,$lname,$email,$phoneNo,$address,$password){
	$result =mysqli_query($this->dbh," insert into customers (firstName , lastName , email , address , phoneNo , password) values('$fname' , '$lname' ,'$email' , '$address' ,'$phoneNo' ,'$password')");
	return $result;
}
}
?>