<!DOCTYPE html>
<html>
<head>
	
	<title>form</title>
	<style type="text/css">
		*{
			box-sizing: border-box;
			font-family: Comfortaa,Arial;
			margin: 0;
			padding: 0;
			text-transform: capitalize;
		}
		h3{
			text-align: center;
		}

		.box{
			position: absolute;
			top: 5%;
			left: 40%;
			
			border: 2px solid black;
			width: 450px;
			height: 650px;
			}
			.heading{
				margin-bottom: 10px;
				background-color: #0f47d4;
				padding: 20px;
				font-size: 30px;
				color: white;
			}
			form div{
				margin-bottom:5px;
				padding: 8px;
			}
			label{
				font-size: 17px;
				font-weight:bolder;
				

			}
			input[type=password],[type=number],[type=text],[type=email]{
				width: 100%;
				height: 20px;
				padding: 14px;
			}
			input[type=radio]{
				margin-top: 15px;
				margin-right: 10px;
				margin-left: 5px;
			}
          input{
          	margin-top: 5px;
          }
          .submit{
          	height: 40px;
          	width: 90px;
          	background-color:#0f47d4 ;
          	color: white;
          	border-radius: 10px;
          	font-size: 16px;
          }
         .formerror{
         	color: red;
         	text-align: center;
         	font-weight: 700;
         }


	</style>
	
</head>
<body>
<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$phoneno=$_POST['phoneno'];  

$conn=new mysqli('localhost', 'root','','form12');
if(! $conn)
{
die("connection failed:").mysqli_error;
}
$sql="INSERT INTO `form2` (`id`, `fname`, `lname`,`gender`,`email`,`password`, `phoneno`) VALUES (NULL, '$fname' ,  '$lname' ,'$gender' , '$email' ,'$password' , '$phoneno')";
mysqli_query($conn, $sql);
?>
	
<div class="box">
    <div class="heading">
         <h3>registration form</h3>
    </div>
    <div>
      <form action ="<?php $_PHP_SELF ?>"name="myform" method="post"> 
        <div id="name">
        	<label> first name</label><br>
	        <input type="text" name="fname">
	        <br><span class="formerror" required></span>
        </div>

        <div>
            <label> last name</label><br>
	        <input type="text" name="lname">
        </div>

        <div>
           <label>gender</label><br>
	       <input type="radio" value="m" name="gender">male
	       <input type="radio" value="f" name="gender">female
	       <input type="radio" value="o" name="gender">others
        </div>

        <div id="email">
        	<label> email</label><br>
	       <input type="email" name="email">
	       <br><span class="formerror" required></span>
        </div>

        <div id="password">
        	<label> password</label><br>
	        <input type="password" name="password">
	        <br><span class="formerror" required></span>
        </div>

        <div id="phone">
        	<label> phone number</label><br>
	        <input type="number" name="phoneno">
	        <br><span class="formerror" required> </span>
        </div>

        <div>
        	<input type="submit" class="submit" value="submit">
        </div>
        </form>
    </div> 

    
</div>

</body>
</html>

