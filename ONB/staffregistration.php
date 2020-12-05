<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Register</title>
<?php include('header.php');?>
<script scr="scr.js"></script>
</head>
<body  style="background-image: url('');
				background-repeat: no-repeat;
				">
<div class="main">
		<h1>Online Notice Board</h1>
	</div>
	<div class="content">
		<a style="border-top-left-radius: 30%" href="index.php" >Student</a> <a href="#" class="active">Staff</a><a style="border-top-right-radius: 30%"
			href="adminlog.php">Admin</a>
	</div>
	<div >
		<div style="margin-left:20%;margin-top:3%;">
				<form method="POST">
					<h2 style="color:rgb(76, 45, 248);">
				Name :<br><input size="40" width="20" type="text" id="te" pattern="[a-zA-Z]*"  name="na" placeholder="Enter Name" required/><br><br />
				Mobile-No :<br><input size="40" type="tel" pattern="[0-9]{1,}" id="te" name="numb" placeholder="Enter number" maxlength="10" required/><br><br />
				EMail :<br><input size="40" value="@gmail.com" type="email" id="te" name="ema" placeholder="Enter email-id" required/><br><br />
				ID : <br><input size="40" type="text" id="te" name="ud" placeholder="Enter user name" required/><br><br />
				Password :<br><input size="40" type="password" id="te" name="pas" placeholder="Enter password" required/><br><br />
				
				<br>
				
				 <input type="submit" name="b" style="width: 20%;font-size: 25px;background-color:blue;border: none;border-radius: 50px;color:white;font-weight: bold;font-family: 'Times New Roman', Times, serif;" value="Register"  /><br />
				 </form>
				 <?php
					$con=mysqli_connect('localhost','root','');
				
					mysqli_select_db($con,'eg');
					if(isset($_POST['b']))
                    {
											
						$uname=$_POST['na'];
						$num=$_POST['numb'];
						$emai=$_POST['ema'];
						$usn=$_POST['ud'];
						$pass=$_POST['pas'];
						if($uname!="" && $num!="" && $emai!=""  && $usn!="" && $pass!="" )
						{
						
							$result="INSERT INTO stafflist (uname,number,email,usn,pass) VALUES ('$uname','$num','$emai','$usn','$pass')";
							
							if($con->query($result)===TRUE)
							{
								?>
							<script>alert("Registration successful");</script>
							<?php
							}
							else
							{
								$con->error;
							}
						}
						else
						{
							?>
							<h6 style="color:red;font-size:150%;">fill all field</h6>
							<?php
						}
					}
				?>
			
	
				
				<div style="color: lightseagreen;">
					already registered?<a id="reg" href="index.php"
						style="zoom: 0%; text-decoration: none;">Login</a>
				</div>
			</h2>
		</div>
	</div>
</body>
</html>