<?php
include "sessionheader.php";
?>
<?php include "header.php";?>
<body style="background-color:rgba(16, 21, 68, 0.925)">
<div class="adtop">
    <div class="tright">
        <a href="logout.php">Logout</a>
    </div>
    <div class="tleft">
    
    <a style="text-decoration: none; text-shadow: 0px 0px 2px silver;" href="staffprf.php">Profile</a>
    </div>
    <div class="tcenter">
        
        <a class="act" href="#">Home</a>
        <a href="ststudent.php">Student</a>
        <a href="stnotification.php">Notification</a>
    </div>
</div>
<br>
<div style="display:flex;align-item:center;margin-top:10px;justify-content:center;" >
  <img style="height: 20%;width: 20%;margin-top:5%;" src="../user.png"/>
</div> 
<div style="display:flex;align-item:center;margin-top:50px;justify-content:center;">

    <a style="background-color:lightgreen;text-decoration:none;font-size:150%;padding:50px;margin-right:80px;border-radius:50%;" href="stchange.php">Change Password</a>
    <a style="background-color:lightblue;text-decoration:none;font-size:150%;padding:50px;margin-right:80px;border-radius:50%;" href="stsendnotic.php">Send Notification</a>

</div> 
<?php include "footer.php"?>   
</body>
</html>