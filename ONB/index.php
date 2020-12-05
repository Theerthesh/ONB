<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login</title>
<?php include('header.php');?>
</head>
<body style="background-image: url('1.jpg');
				background-repeat: no-repeat;
				background-attachment: fixed;">
	<div class="main">
		<h1>Online Notice Board</h1>
	</div>
	<div class="content">
		<a style="border-top-left-radius: 30%" href="#" class="active">Student</a> <a href="stafflog.php">Staff</a><a style="border-top-right-radius: 30%"
			href="adminlog.php">Admin</a>
	</div>
	<div class="mainlog">
		<div id="login" style="background-color: rgb(243, 245, 241);">
			<div class="logname">
				<h2>Student Login</h2>
			</div>
			<div class="loddetail">
				<form action="" method="POST">
				<table align="center" height="120">
					<tr><td>USN_ID: </td><td > <input type="text" id="te" name="udi"
						placeholder="Enter user name" /><br /></td></tr>
					<br /><tr><td> Password: </td><td><input type="password" id="te" name="pass"
						placeholder="Enter password" /><br /></td></tr>
				</table>
					<br /> <input type="submit" id="su" name="log" value="Login" /><br />
				</form>
                <br>
				<div style="color: lightseagreen;">
					not registered?<a id="reg" href="stdregister.php"
						style="zoom: 0%; text-decoration: none;">Register</a>
				</div>
				<?php
                    $con=mysqli_connect('localhost','root','');
                    mysqli_select_db($con, "eg");
                    if(isset($_POST['log']))
                    {
                        $uname=$_POST['udi'];
                        $pass=$_POST['pass'];
                        $count=mysqli_num_rows(mysqli_query($con, "SELECT * FROM stdreg WHERE Usn='$uname' AND Pass='$pass'"));
                        if($count==1)
                        {
							echo "<h2>LOGIN SUCCESS</h2>";
							$r=mysqli_query($con,"SELECT Name,Number FROM stdreg WHERE Usn='$uname'");
                        $ro=mysqli_fetch_assoc($r);
						$o=$ro['Name'];
						$n=$ro['Number'];
						$_SESSION['n']=$n;
						$_SESSION['id']=$uname;
						$_SESSION['name']=$o;
						

							echo '<meta http-equiv="refresh" content="1;URL=student/student.php"/>';
							header('location:student/student.php');
							
						}
						else
						{
                            echo "<h4 >UID or password invalied</h4>";
						}
						
						
						
                    }
				
					mysqli_close($con);
				?>
				
			</div>
		</div>
	</div>

</body>
</html>