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
        
        <a  href="staff.php">Home</a>
        <a  href="ststudent.php">Student</a>
        <a  href="stnotification.php">Notification</a>
    </div>
</div>
<br>
<br/>

<div style="display:block;align-item:center;margin-top:30px;width: 50%;justify-content: center;float:left;" >
  <center><img style="height: 310px;width: 300px;margin-top:5%;" src="../user.png"/><br /></center>
  <center><h1 style="color:white;">"<?php echo $_SESSION['sname'];?>"</h1></center>
  

<center><div style="display:inline-block;justify-content: center;margin-top: 113px;width: 50%;">

    <a style="background-color:white;text-decoration:none;font-size:150%;padding:30px;border-radius:20px;" href="stsendnotic.php">Send Notification</a>
     </div> </center></div>
<div style=" margin-top:40px;height: 350px;" >
    <div style="  background-color:rgba(17, 20, 48, 0.658);  float: right; height: 100px; display: flex; color: white; width:42.5%;justify-content: center;">
    <h1>Change Password</h1>
    </div>
   
    <div style=" display:flex;justify-content: center;float: right;width:42.5%;height: 100px;font-size:25px; ">
    <form action=""  method="POST">
        <table align="center" height="120"  style="color: #5c5c5c;">
            <tr><td>USN_ID: </td><td > <input  type="text" id="te" name="ud"
            value="<?php echo $_SESSION['sid'];?>" readonly /><br /></td></tr>
            <br /><tr><td>Old Password: </td><td><input type="password" id="te" name="pas"
                placeholder="Enter password" /><br /></td></tr>
                <br /><tr><td>New Password: </td><td><input type="password" id="te" name="pass"
                    placeholder="Enter New password" /><br /></td></tr>
                    <br /><tr><td>conform Password: </td><td><input type="password" id="te" name="passs"
                    placeholder="Re-enter password" /><br /></td></tr>
        </table>
            
            <br> <input type="submit" name="lo" id="su" value="Submit" /><br />
            <?php
                    $con=mysqli_connect('localhost','root','');
                    mysqli_select_db($con, "eg");

                    if(isset($_POST['lo']))
                    {
                        $uname=$_POST['ud'];
                        $oldpass=$_POST['pas'];
                        $newpass=$_POST['pass'];
                        $conpass=$_POST['passs'];
                        $result=mysqli_query($con,"SELECT pass FROM stafflist WHERE usn='$uname'");
                        $row=mysqli_fetch_assoc($result);
                        $oldpassd=$row['pass'];
                        if(!$result)
                        {
                            echo "USN_ID not match";
                        
                        }
                        if($oldpass==$oldpassd) 
                        {
                            if($newpass==$conpass)
                            {
                                $sql=mysqli_query($con,"UPDATE stafflist SET pass='$newpass' where usn='$uname'");
                              echo "updated succefully";
                            }
                            else
                            {
                                
                            echo "new password don't match";
                            }
                        }
                        else{
                            
                        echo "UID or old password don't match";
                        }
                    }
            ?>
        </form>
    </div>
</div>
    

</body>
</html>