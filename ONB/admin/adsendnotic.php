<?php
include "sessionheader.php";?>
?>
<?php include "header.php";?>
<style>
.apsel
{
    width:100%;
    background-color:rgba(16, 21, 68, 0.850);
    color: rgb(165, 240, 27);
    display: flex;
    justify-content: center;
}
.apsel input[type="radio"]{
    height: 20px;
    display:inline-block;
    margin:0 10px 0 100px;
}

    </style>
</head>
<body style="background-color:rgba(16, 21, 68, 0.925);">
<div class="adtop1">
    <div class="tright">
        <a href="logout.php">Logout</a>
    </div>
    <div class="tleft">
    Admin
    </div>
    <div class="tcenter">
        <a href="adstaff.php">Staff</a>
        <a href="admin.php">Home</a>
        <a href="adstudent.php">Student</a>
        <a href="adnotification.php">Notification</a>
    </div>
</div>
<br>
<br />
 <br/>
 <br/>
 <br>

    <br>

    <br>
    <div class="mainlog">
           <div style="background-color:white;" class="senddiv">
           <form method="POST" action="" enctype="multipart/form-data">
           <div class="ap">
           <select name="std"><option>-Staff-</option>
        <?php
					$con=mysqli_connect('localhost','root','');
				
                    mysqli_select_db($con,'eg');
                    $sql=mysqli_query($con,"SELECT usn FROM stafflist");
                    $row=mysqli_num_rows($sql);
                    //echo "<select name='staff'>";
                    while($row=mysqli_fetch_array($sql))
                    {
                        echo "<option value='" . $row['usn'] ."'>" .$row['usn'] ."</option>";
                    }
                    //echo "</select>";

        ?>
        </select>
        </div>
            Title:<br><input type="text" name="title"><br>
            Content:<br><textarea name="content"></textarea><br>
            Image:<br><input type="file" name="pic" accept="image/*"><br>
            <input type="submit" name="bu" value="Send"> 
            </form>
            
            <?php
					$con=mysqli_connect('localhost','root','');
				
					mysqli_select_db($con,'eg');
					
					if(isset($_POST['bu']))
                    {
						$usn=$_POST['std'];
						$tt=$_POST['title'];
						$cont=$_POST['content'];
                        
                        $filename=$_FILES["pic"]["name"];
                        $tempname=$_FILES["pic"]["tmp_name"];
                        $folder="notification/".$filename;
                        move_uploaded_file($tempname,$folder);
						
						if($tt!="" && $cont!="")
						{
							$result="INSERT INTO notification (usn,title,description,image) VALUES ('$usn','$tt','$cont','$folder')";
							if($con->query($result)===TRUE)
							{
								?>
							<script>alert("Notification sent successfully");</script>
                            echo '<meta http-equiv="refresh" content="0;URL=adsendnotic.php"/>';
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
							<h2 style="color:red;">fill fields</h2>
							<?php
						}
					}
				?>   
           </div>
    </div>                   
    <?php include "footer.php";?>  
</body>
</html>