<?php
include_once 'dbh.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));

$name = $_POST['name'];
$nric = $_POST['nric'];
$gender = $_POST['gender'];
$edu = $_POST['edu'];
$contactno = $_POST['contactno'];
$email = $_POST['email'];
$address = $_POST['address'];
$jobtype = $_POST['jobtype'];

$temp=explode(".",$_FILES['file']['name']);
$extension=end($temp);
$upload_file=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], "C:/xampp/htdocs/kidsPlanet(2)/php/resumes/".$upload_file);

$sql = "INSERT INTO jobcandidate VALUES('$name','$nric','$gender','$edu','$contactno','$email','$address','$jobtype','".$upload_file."');";
mysqli_query($conn,$sql); 
if($sql){
  echo "Job application success";
  header("Location: ../index.php?jobapplysuccess");

}else{
  echo "Job application error";
  header("Location: ../index.php?joberror");
}
?>