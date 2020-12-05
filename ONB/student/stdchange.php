<?php
include "sessionhead.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>
  Profile
</title>
<?php include('header.php');?>
</head>
<body>
<?php include("prfHeader.php");?>
<div class="prfright">
   
    <div class="move">
    <center><div class="mc"><h1>Change Password</h1></div></center>
   
    <div class="prfdetail">
        <form method="POST">
            
                USN :<br>
        <input type="text" name="ud" value="<?php echo $_SESSION['id'];?>" readonly/><br>
        <hr>
        Oldpassword :<br>
        <input type="password" name="pas" placeholder="Enter password" /><br><hr>
        New Password :<br>
        <input type="password"  name="pass" placeholder="Enter New password" /><br><hr>
        Conform Password :<br>
        <input type="password" name="passs" placeholder="Re-enter password" /><br><hr>
        
        <center><input type="submit" name="lo" value="UPDATE"></center>
        <center><a href="stdprf"><--Back</a></center>
        <?php
                    $con=mysqli_connect('localhost','root','');
                    mysqli_select_db($con, "eg");

                    if(isset($_POST['lo']))
                    {
                        $uname=$_POST['ud'];
                        $oldpass=$_POST['pas'];
                        $newpass=$_POST['pass'];
                        $conpass=$_POST['passs'];
                        $result=mysqli_query($con,"SELECT Pass FROM stdreg WHERE Usn='$uname'");
                        $row=mysqli_fetch_assoc($result);
                        $oldpassd=$row['Pass'];
                        if(!$result)
                        {
                            echo "USN_ID not match";
                        
                        }
                        if($oldpass==$oldpassd) 
                        {
                            if($newpass==$conpass)
                            {
                                $sql=mysqli_query($con,"UPDATE stdreg SET Pass='$newpass' where Usn='$uname'");
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


</div>


</body>
</html>