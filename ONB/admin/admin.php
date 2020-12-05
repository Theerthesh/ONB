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
        <a  href="adstaff.php">Staff</a>
        <a class="act" href="#">Home</a>
        <a href="adstudent.php">Student</a>
        <a href="adnotification.php">Notification</a>
    </div>
</div>
<br>
<div style="display:flex;align-item:center;margin-top:10px;justify-content:center;" >
  <img style="height: 20%;width: 20%;margin-top:5%;border-radius:60px;" src="admin.jpg"/>
</div> 
<div style="display:flex;align-item:center;margin-top:50px;justify-content:center;">

    <a style="background-color:lightgreen;text-decoration:none;font-size:150%;padding:50px;margin-right:80px;border-radius:50%;" href="adchange.php">Change Password</a>
    <a style="background-color:lightblue;text-decoration:none;font-size:150%;padding:50px;margin-right:80px;border-radius:50%;" href="adsendnotic.php">Send Notification</a>

</div>  
<?php include "footer.php";?>  
</body>
</html>