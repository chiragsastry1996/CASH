<?php
// Start the session
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
//echo $_POST["Loginid"];
$Loginid = $_POST["Loginid"];
$Loginname = $_POST["LoginName"];
// Set session variables
//echo $Loginid;

$_SESSION['Clientid']  = $Loginid ;
setcookie("id", $cookie_id, time() + (86400 * 30));
echo $_SESSION['Clientid']  ;
/*echo "Session variables are set.";
echo $_SESSION["CLientid "];*/
$sql12 = "INSERT INTO  LoginGroup2(client_id,username) VALUES ('".$Loginid."','".$Loginname."'')";

$result1=$conn->query($sql12);
if(result1)
	echo "Inserted successfully";
else
	echo "Not Inserted successfully";

?>

