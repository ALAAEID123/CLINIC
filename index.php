<?php
	
	$name=$_REQUEST['name'] ;
	$address=$_REQUEST['address'] ;
	$telephone=$_REQUEST['telephone'] ;
	$date=$_REQUEST['date'] ;

if(isset($_POST['send'])){

$host="localhost" ;
$user="root" ;
$bassword="" ;
$db="clinic_data" ; 


$conn=mysqli_connect ($host,$user,$password,$db) ;

$insert="insert into patientsinfo values('$name','$address','$telephone','$date')" ;

mysqli_query($conn,$insert) ;

if($conn){
	echo("<h2 style='color:green;' >your Registration Is Done!</h2>") ;
}
else
     echo("<h2 style='color:red;' >your Registration Is Faild!</h2>") ;
}


?>
