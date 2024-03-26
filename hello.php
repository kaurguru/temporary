<?php
 $first=$_POST['fname'];
$last=$_POST['lname'];
$con =new mysqli("localhost"," ","test");
if($con->connect_error){
die("failed to connect :".$con->connect-error);
}else{
$stmt =$con->prepare("select *from registrationwhere email =?");
$stmt =bind_param("s",$email();
$stmt =execute();
$stmt _result =$stmt-> get_result();
if($stmt_result
?> 

echo $_GET["fname"];
echo $_GET["lname"];
echo $_GET["gender"];
echo $_GET["email"];
echo $_GET["password"];
echo $_GET["phoneno."];