<?php  
$username = $_POST['user'];
$password = $_POST['pass'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"cities");

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);



$result = mysqli_query($con,"select * from admins where A_username = '$username' and Password = '$password' ")
                       or die("Failed to query database".mysqli_error($con));
$row = mysqli_fetch_array($result);
if($row['A_username'] == $username && $row['Password'] == $password ){
header("Location:simulation.html");
  } else{
     header("Location:failure.html");
  }	  
?>

	






