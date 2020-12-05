<?php
include "sessionheader.php";?>
?>
<?php include "header.php";?>
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
        <a class="act" href="#">Notification</a>
    </div>
</div>
<br>
<div class="logstaf">Notifications</div>
<br>
<div class="nmain">
<div class="dmain">
    
        <?php
                    $con=mysqli_connect("localhost","root","","eg");
                   
                    $sql="SELECT title,date,description,image from notification ORDER BY notification.id DESC";
                    $result=$con->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result-> fetch_assoc())
                        {
                         ?><div class="mhead">
                                <div class="nhead"><?php echo $row["title"]; ?></div>
                            <div style="color:red;" class="time"> <?php echo $row["date"];?></div>
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