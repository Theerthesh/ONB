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
		<a style="border-top-left-radius: 30%" href="index.php">Student</a> <a href="stafflog.php" >Staff</a><a style="border-top-right-radius: 30%" class="active" href="#">Admin</a>
	</div>
	<div class="mainlog">
		<div id="login" style="height:400px;background-color: rgb(243, 245, 241);">
			<div class="logname">
				<h2>Admin Login</h2>
			</div>
			<div class="loddetail">
				<form action=""  method="POST">
				<table align="center" height="120">
					<tr><td>ID: </td><td > <input type="text" id="te" name="ud"
						placeholder="Enter user name" /><br /></td></tr>
					<br /><tr><td> Password: </td><td><input type="password" id="te" name="pas"
						placeholder="Enter password" /><br /></td></tr>
				</table>
					
					<br> <input type="submit" name="lo" id="su" value="Login" /><br />
				</form>
				<?php
                    $con=mysqli_connect('localhost','root','');
                    mysqli_select_db($con, "eg");

                    if(isset($_POST['lo']))
                    {
                        $uname=$_POST['ud'];
                        $pass=$_POST['pas'];
                        $count=mysqli_num_rows(mysqli_query($con, "SELECT * FROM login WHERE uname='$uname' AND pass='$pass'"));
                        if($count==1)
                        {
							echo "<h2>LOGIN SUCCESS</h2>";
							$_SESSION['aid']=$uname;
							echo '<meta http-equiv="refresh" content="1;URL=admin/admin.php"/>';
							header('location:admin/admin.php');
							
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