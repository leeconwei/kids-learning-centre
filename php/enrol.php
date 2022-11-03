<?php

session_start();
    include_once 'dbh.php';

    $p_name = $_POST['p_name'];
    $p_type = $_POST['selectedProgramme'];
    $c_name = $_POST['c_name'];
    $c_ic = $_POST['c_ic'];
    $payment_type = $_POST['payment_type'];
    $selectedPeriod = $_POST['selectedPeriod'];
    $user= $_SESSION['id'];
    $status='unpaid';

if($p_name=="Weekends Programme")
{
 $programme_prices = array("cook"=>"120","think"=>"100","living"=>"100","chefs"=>"150");
 $programmePrice=$programme_prices[$p_type];
 $periods = array("1 month"=>"1","6 months"=>"6","12 months"=>"12");
 $period=$periods[$selectedPeriod];
 $programmeFee=0;
		if($period=="1"){
			$programmeFee=$programmePrice;
		}else if($period=="6"){
			$programmeFee=$programmePrice*$period*0.9;
		}else{
			$programmeFee=$programmePrice*$period*0.7;
		}
}
else if($p_name=="Holiday Programme")
{
$programme_prices = array("alice"=>"400","dance"=>"400","sea"=>"450","lego"=>"450");
 $programmePrice=$programme_prices[$p_type];
 $periods = array("1 month"=>"1","6 months"=>"6","12 months"=>"12");
 $period=$periods[$selectedPeriod];
 $programmeFee=0;
		if($period=="1"){
			$programmeFee=$programmePrice;
		}else if($period=="6"){
			$programmeFee=$programmePrice*$period*0.9;
		}else{
			$programmeFee=$programmePrice*$period*0.7;
		}
}
else if($p_name=="Music Class")
{
$programme_prices = array("little"=>"180","junior"=>"200","intermediate"=>"220");
 $programmePrice=$programme_prices[$p_type];
 $periods = array("1 month"=>"1","6 months"=>"6","12 months"=>"12");
 $period=$periods[$selectedPeriod];
 $programmeFee=0;
		if($period=="1"){
			$programmeFee=$programmePrice;
		}else if($period=="6"){
			$programmeFee=$programmePrice*$period*0.9;
		}else{
			$programmeFee=$programmePrice*$period*0.7;
		}
}
else if($p_name=="Art Class")
{
$programme_prices = array("little"=>"150","junior"=>"170","intermediate"=>"200");
 $programmePrice=$programme_prices[$p_type];
 $periods = array("1 month"=>"1","6 months"=>"6","12 months"=>"12");
 $period=$periods[$selectedPeriod];
 $programmeFee=0;
		if($period=="1"){
			$programmeFee=$programmePrice;
		}else if($period=="6"){
			$programmeFee=$programmePrice*$period*0.9;
		}else{
			$programmeFee=$programmePrice*$period*0.7;
		}
}
else if($p_name=="Abacus Class")
{
$programme_prices = array("Brain Development Program"=>"180");
 $programmePrice=$programme_prices[$p_type];
 $periods = array("1 month"=>"1","6 months"=>"6","12 months"=>"12");
 $period=$periods[$selectedPeriod];
 $programmeFee=0;
		if($period=="1"){
			$programmeFee=$programmePrice;
		}else if($period=="6"){
			$programmeFee=$programmePrice*$period*0.9;
		}else{
			$programmeFee=$programmePrice*$period*0.7;
		}
}	
else if($p_name=="Day Care Programme")
{
$programme_prices = array("Toddlers Centre (6 months - 3 years old)"=>"500","Junior Centre (4 - 6 years old)"=>"550","Senior Centre (7 - 12 years old)"=>"600");
 $programmePrice=$programme_prices[$p_type];
 $periods = array("1 month"=>"1","6 months"=>"6","12 months"=>"12");
 $period=$periods[$selectedPeriod];
 $programmeFee=0;
		if($period=="1"){
			$programmeFee=$programmePrice;
		}else if($period=="6"){
			$programmeFee=$programmePrice*$period*0.9;
		}else{
			$programmeFee=$programmePrice*$period*0.7;
		}
}

	 
$total=$programmeFee;	
	 

$sql="INSERT INTO enrollment (p_name,p_type,c_name,c_ic,total,payment_type,selectedPeriod,user,status) VALUES ('$p_name','$p_type','$c_name','$c_ic','$total','$payment_type','$selectedPeriod','$user','$status');";
$result = mysqli_query($conn, $sql); 

if (!$result) {
  printf("Errormessage: %s\n", mysqli_error($conn));
}

header("Location:../programEnroll.php?enroll=success")
?>