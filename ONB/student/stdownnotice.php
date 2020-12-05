<?php
include "sessionhead.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>
   student
</title>
<?php include('header.php');?>
</head>
<body style="background-color:rgba(16, 21, 68, 0.925);">

<div class="adtop">
    <div class="tright">
        <a href="logout.php">Logout</a>
    </div>
    <div class="tleft">
    <a style="text-decoration: none; text-shadow: 0px 0px 2px silver;" href="stdprf.php">Profile</a>
    </div>
    <div class="tcenter">
        <a class="act" style="font-size:20px;" href="student.php">Notification</a>
        <a class="act" href="">Personal_Notification</a>
    </div>
</div>
<br>
<div style="margin-top:50px;" class="nmain">
<div class="dmain">
    
        <?php
                    $con=mysqli_connect("localhost","root","","eg");
                   $a=$_SESSION['id'];
                    $sql="SELECT usn,title,date,description,image from notification WHERE usn='$a' ORDER BY notification.id DESC";
                    $result=$con->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result-> fetch_assoc())
                        {
                           
                         ?><div class="mhead">
                                <div class="nhead"><?php echo $row["title"]; ?></div>
                            <div style="color:red;" class="time"> <?php echo "<h4>".$row["date"]."</h4>";?></div>
                        </div>
                            <div class="ncnt"> <?php echo $row["description"];?></div>
                            <?php 
                            if($row['image']!="../notification/")
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
<?php include("footer.php");?>


</body>
</html>