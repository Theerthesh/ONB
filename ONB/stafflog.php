<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>login</title>
<?php include('header.php');?>
</head>
<body style="background-image: url('1.jpg');
				background-repeat: no-repeat;
				background-attachment: fixed;">
<div class="main">
		<h1>Online Notice Board</h1>
	</div>
	<div class="content">
		<a style="border-top-left-radius: 30%" href="index.php">Student</a> <a href="stafflog.php"  class="active">Staff</a><a
			style="border-top-right-radius: 30%" href="adminlog.php">Admin</a>
	</div>
	<div class="mainlog">
		<div id="login" style="background-color: rgb(243, 245, 241);">
			<div class="logname">
				<h2>Staff Login</h2>
			</div>
			<div class="loddetail">
				<form action="" method="POST">
				<table align="center" height="120">
					<tr><td>USN_ID: </td><td > <input type="text" id="te" name="udi"
						placeholder="Enter user name" /><br /></td></tr>
					<br /><tr><td> Password: </td><td><input type="password" id="te" name="pass"
						placeholder="Enter password" /><br /></td></tr>
				</table>
					<br /> <input type="submit" name="lo" id="su" value="Login" /><br />
				</form>
				<br>
				<div style="color: lightseagreen;">
					not registered?<a id="reg" href="staffregistration.php"
						style="zoom: 0%; text-decoration: none;">Register</a>
				</div>
				<?php
                    $con=mysqli_connect('localhost','root','');
                    mysqli_select_db($con, "eg");
					
					
                    if(isset($_POST['lo']))
                    {
						$uname=$_POST['udi'];
					$pass=$_POST['pass'];
                        $count=mysqli_num_rows(mysqli_query($con, "SELECT * FROM stafflist WHERE usn='$uname' AND pass='$pass'"));
                        if($count==1)
                        {
							echo "<h2>LOGIN SUCCESS</h2>";
							$r=mysqli_query($con,"SELECT uname,number FROM stafflist WHERE usn='$uname'");
							$ro=mysqli_fetch_assoc($r);
						$o=$ro['uname'];
						$n=$ro['number'];
						$_SESSION['sn']=$n;
						$_SESSION['sid']=$uname;
						$_SESSION['sname']=$o;
							echo '<meta http-equiv="refresh" content="1;URL=staff.php"/>';
							header('location:staff/staff.php');
						}
						else
						{?>
							<h4 style="color:red">UID or password invalied</h4>
							<?php
						}

                    }
                    mysqli_close($con);
                    
				?>
				
			</div>
		</div>
	</div>

</body>
</html>