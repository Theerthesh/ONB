<?php
include "sessionheader.php";?>
?>
<?php include "header.php";?>
<body  style="background-color:rgba(16, 21, 68, 0.925);">
<div class="adtop1">
    <div class="tright">
        <a href="logout.php">Logout</a>
    </div>
    <div class="tleft">
    Admin
    </div>
    <div class="tcenter">
        <a  href="adstaff.php">Staff</a>
        <a  href="admin.php">Home</a>
        <a  href="adstudent.php">Student</a>
        <a  href="adnotification.php">Notification</a>
    </div>
</div>
<br>
<br/>

<div style="display:inline-flex;align-item:center;margin-top:30px;width: 50%;justify-content: center;float: left;" >
  <img style="height: 310px;width: 300px;margin-top:5%;border-radius:60px;" src="admin.jpg"/>
</div>
<div style=" margin-top:30px;height: 350px;" >
    <div style=" background-color:rgba(17, 20, 48, 0.658);  float: right; height: 100px; display: flex; color: white; width:42.5%;justify-content: center;">
    <h1>Change Password</h1>
    </div>
   
    <div style=" display:flex;justify-content: center;float: right;width:42.5%;height: 100px;font-size:25px; ">
    <form action=""  method="POST">
        <table align="center" height="120" style="color: #5c5c5c;">
            <tr><td>USN_ID: </td><td > <input  type="text" id="te" name="ud"
                placeholder="Enter USN" /><br /></td></tr>
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
                        $result=mysqli_query($con,"SELECT pass FROM login WHERE uname='$uname'");
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
                                $sql=mysqli_query($con,"UPDATE login SET pass='$newpass' where uname='$uname'");
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
<br/><br/>
    <div style="display:inline-flex;justify-content: center;margin-top: 113px;width: 50%;float: left;">

    <a style="background-color:white;text-decoration:none;font-size:150%;padding:30px;border-radius:20px;" href="adsendnotic.php">Send Notification</a>
     </div> 
     <?php include "footer.php";?>  
</body>
</html>