<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Register</title>
<?php include('header.php');?>
<script scr="scr.js"></script>
</head>
<body style="background-image: url('');
				background-repeat: no-repeat;
				">
<div class="main">
		<h1>Online Notice Board</h1>
	</div>
	<div class="content">
		<a style="border-top-left-radius: 30%" href="#" class="active">Student</a> <a href="stafflog.php">Staff</a><a style="border-top-right-radius: 30%"
			href="adminlog.php">Admin</a>
	</div>
	<div >
		<div style="margin-left:20%;margin-top:3%;">
				<form action="" method="POST" enctype="multipart/form-data">
					<h2 style="color:rgb(76, 45, 248);">
				Name :<br><input size="40" width="20" type="text" pattern="[a-zA-Z]*" name="nam" class="te" placeholder="Enter Name" required/><br><br />
				Mobile-No :<br><input size="40" maxlength="10" type="tel" pattern="[0-9]{1,}" class="te" name="numbe" placeholder="Enter number" required/><br><br />
				EMail :<br><input size="40" type="email" value="@gmail.com" class="te"  name="emai" placeholder="Enter email-id" required/><br><br />
				DOB :<br><input size="40" type="date" class="te" name="dob" placeholder="Enter DOB" required/><br><br />
				Sem :<br><input size="40" maxlength="1"  type="number" class="te" name="sem" placeholder="Enter Sem" required/><br><br />
				USN_ID : <br><input size="40" type="text" class="te" id="v" name="udi" placeholder="Enter user name" required /><br><br />
				Password :<br><input size="40" type="password" class="te" name="pass" placeholder="Enter password" required/><br><br/>
				
				<input type="submit" name="bu" style="width: 20%;font-size: 25px;background-color:blue;border: none;border-radius: 50px;color:white;font-weight: bold;font-family: 'Times New Roman', Times, serif;" value="Register" onClick="val()"/><br />
				
				<?php
					$con=mysqli_connect('localhost','root','');
				
					mysqli_select_db($con,'eg');
					
					if(isset($_POST['bu']))
                    {
						$uname=$_POST['nam'];
						$num=$_POST['numbe'];
						$emai=$_POST['emai'];
						$dob=$_POST['dob'];
						$sem=$_POST['sem'];
						$usn=$_POST['udi'];
						$pass=$_POST['pass'];
					
						if($uname!="" && $num!="" && $emai!="" && $dob!="" && $sem!="" && $usn!="" && $pass!="" )
						{
							$result="INSERT INTO stdreg (Name,Number,Email, Dob,Sem,Usn,Pass) VALUES ('$uname','$num','$emai','$dob','$sem','$usn','$pass')";
							if($con->query($result)===TRUE)
							{
								?>
							<script>alert("Registration successfull");</script>
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
				
				</form>
	
				
				<div style="color: lightseagreen;">
					already registered?<a id="reg" href="index.php"
						style="zoom: 0%; text-decoration: none;">Login</a>
				</div>
			</h2>
		</div>
	</div>
</body>
</html>