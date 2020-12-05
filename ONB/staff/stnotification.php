<?php
include "sessionheader.php";
?>
<?php include "header.php";?>
<body style="background-color:rgba(16, 21, 68, 0.925);
				">
<div class="adtop">
    <div class="tright">
        <a href="logout.php">Logout</a>
    </div>
    <div class="tleft">
    <a style="text-decoration: none; text-shadow: 0px 0px 2px silver;" href="staffprf.php">Profile</a>
    </div>
    <div class="tcenter">
        
        <a href="staff.php">Home</a>
        <a href="ststudent.php">Student</a>
        <a class="act" href="#">Notification</a>
    </div>
</div>
<br>
<br />
<br />
<div class="tcenter">
        <a class="act" style="font-size:20px;" href="">Notification</a>
        <a class="act" style="font-size:20px;" href="stownnotice.php">Personal_Notification</a>
    </div>
<br>
<div class="nmain">
<div class="dmain">
    
        <?php
                    $con=mysqli_connect("localhost","root","","eg");
                    $sql="SELECT usn,title,date,description,image from notification WHERE usn='-Student-' OR usn='-Staff-'OR usn='' ORDER BY notification.id DESC";
                    $result=$con->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result-> fetch_assoc())
                        {
                         ?><div class="mhead">
                                <div class="nhead"><?php echo $row["title"]; ?></div>
                            <div class="time"> <?php echo $row["date"];?></div>
                        </div>
                            <div class="ncnt"> <?php echo $row["description"];?></div>
                            <?php 
                            if($row['image']!="notification/")
                            {
                            echo "<center><img src='".$row['image']."' width='500' height='500'/></center>";
                            echo "<hr>";
                            }
                            else
                            {
                           echo "<hr>";
                            }
                        }
                        echo "</div>";
                     
                   }
                    else
                    {
                        echo "<h2>no notification<h2>";
                    }
                    mysqli_close($con);
                   ?>
        
        
   


</div>
  
</body>
</html>