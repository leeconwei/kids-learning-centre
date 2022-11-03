<?php
session_start();
include_once 'dbh.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));

$user=$_SESSION['id'];
$amount_paid="SELECT SUM(total) FROM enrollment WHERE user='$id' AND status='unpaid';"; 

if($amount_paid!=0.00)
{ 

	$temp=explode(".",$_FILES['file']['name']);
	$extension=end($temp);
	$upload_file=$_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], "C:/xampp/htdocs/kidsPlanet(2)/php/receipt/".$upload_file);

	$sql2 = "Update enrollment set status='Paid' where user='$user'";
	$sql= "INSERT INTO outstanding_fee(user,amount_paid,receipt) VALUES('$user','$amount_paid','".$upload_file."');";

	mysqli_query($conn,$sql2);
	mysqli_query($conn,$sql); 
	if($sql)
	{
 	 echo "Payment success";
 	 header("Location: ../index.php?outstandingsuccess");
	}
	else
	{
	  echo "Payment error";
	  header("Location: ../payment.php?outstandingerror");
	}

	if($sql2)
	{
	  echo "Receipt upload success";
	  header("Location: ../index.php?outstandingsuccess");

	}
	else
	{
 	 echo "Receipt upload error";
 	 header("Location: ../payment.php?outstandingerror");
	}
}
else
{
  echo "No outstanding fee";
  header("Location: ../payment.php?nooutstandingerror");
}
?>