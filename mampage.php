<html>
<body>

<link rel="stylesheet" type="text/css" href="f.css">

<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$contactno=$_POST['contactno'];  

$conn=new mysqli('localhost', 'root','','form12');
if(! $conn)
{
die("connection failed:").mysqli_error;
}
$sql="INSERT INTO `form1` (`id`, `firstname`, `lastname`, `contactno`) VALUES (NULL, '$firstname' ,  '$lastname' ,  '$contactno ')";
mysqli_query($conn, $sql);
?>
<div class="form">
<form action="<?php $_PHP_SELF ?>" method="post" >
<h1> REGISTRATION  FORM </h1>
Firstname:<input type="text" name="firstname"size=80 required placeholder="First Name" autocomplete="on"><br><br>
Lastname:<input type="text" name="lastname" size=80 required><br><br>
Contact no:<input type="text" id="phoneno" name="contactno" size=80 required><br><br>
<input type="file"id="myfile"name="filename"><br><br>
<input type="submit" value="submit">
</form>
</div>
</body>
</html