<?php
session_start();
//@ob_start();
$servername = "handson-mysql";
$username = "guestinterns";
$password = "interns2017";
$dbname="intern2017_group2";
echo "hello";
//$_SESSION['Clientid']=$_COOKIE['id'];
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
echo "Connected successfully";

  
	echo "America";
	echo $_SESSION['Clientid'];
	 $name  =  $_POST["Name"];
	 $type =   $_POST["Type"];
	 $cost  = $_POST["Cost"];
	 $miles = $_POST["Miles"];
	 $client_id = $_SESSION['Clientid'];

echo $name;

	
	$squery = "INSERT INTO CARgroup2(car_id,car_name,type,cost,client_id,miles ) VALUES('".$name."','".$type."', '".$cost."','".$client_id."','".$miles."')";
	 
	echo $squery;
	$result1 =mysqli_query($conn,$sql12);
		//$result1=$conn->query($sql12);
		if(!$result1)
			echo "unsuccesfull";
		
	echo "successful;

 	



?>