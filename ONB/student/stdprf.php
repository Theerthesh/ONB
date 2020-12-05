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
    <center><div class="mc"><h1>Profile detail</h1></div></center>
   
    <div class="prfdetail">
        <form method="POST">
            
                Name :<br>
        <input type="text" value="<?php echo $_SESSION['name'];?>" readonly/><br>
        <hr>
        USN :<br>
        <input type="text" name="ud" value="<?php echo $_SESSION['id'];?>" readonly/><br><hr>
        Email :<br>
        <input type="email" value="@gmail.com" name="em"/><br><hr>
        NUMBER :<br>
        <input type="number" maxlength="10" name="no" value="<?php echo $_SESSION['n'];?>" readonly/><br><hr>
        
        <center><input type="submit" name="lo" value="UPDATE"></center>
        <center><a href="stdchange.php">Change Password</a></center>
        <?php
                    $con=mysqli_connect('localhost','root','');
                    mysqli_select_db($con, "eg");

                    if(isset($_POST['lo']))
                    {
                        $uname=$_POST['ud'];
                        $ema=$_POST['em'];
                        $num=$_POST['no'];
                        $result=mysqli_query($con,"SELECT Email,Number FROM stdreg WHERE Usn='$uname'");
                        $row=mysqli_fetch_assoc($result);
                        
                           $sql=mysqli_query($con,"UPDATE stdreg SET Email='$ema',Number='$num' where Usn='$uname'");
                          echo "updated succefully";
                        
                           
                    }
            ?>
        </form>
    </div>  
</div>


</div>


</body>
</html>