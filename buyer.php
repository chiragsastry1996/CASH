<?php

echo "inside buyer.php";

$servername = "handson-mysql";
$username = "guestinterns";
$password = "interns2017";
$dbname="intern2017_group2";
session_start();

$valuename=$_GET["SearchbyName"];
$valuecost=$_GET["SearchbyCost"];
$valuemiles=$_GET["Smileage"];
//echo $valuename;
 //Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
//echo "Connected successfully";
$client_id = $_SESSION['Clientid'];
$sql = "SELECT * from CARgroup2  where car_name = '$valuename' and cost <= $valuecost and miles >= $valuemiles";
echo $sql;
/*$result1=$conn->query($sql);*/
$result = mysqli_query($conn,$sql);
//var_dump($result);
//echo 'after query execution';

//if ($result->num_rows > 0) {
     
    while($row = $result->fetch_assoc()) {
    	//echo "hello";
        echo "id: " . $row["car_id"]. " - Name: " . $row["car_name"]. " type" . $row["type"]. "cost". $row["cost"]."client_id:".$row["client_id"]."miles:".$row["miles"]."<br>";
    }
//}

?>
