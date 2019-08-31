<?php


session_start();

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password);

	mysqli_select_db($conn,"tanya");

	$username = $_POST['user'];
    $password = $_POST['pass'];


$s = "SELECT * FROM tanya  ";
$result = mysqli_query($conn,$s);



  
if ($result == 1)
     {
	echo "Already login" ;
	}
	else{
		$login = "INSERT INTO tanya1(name ,password) VALUES ('$username','$password') ";
		mysqli_query($conn, $login);
		echo "<h1>Registration Successful</h1>";
	}

?>