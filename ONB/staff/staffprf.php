<?php
include "sessionheader.php";
?>
<?php include "header.php";?>
<body>

<?php include "prfheader.php"?>
<div class="prfright">
   
    <div class="move">
    <center><div class="mc"><h1>Profile detail</h1></div></center>
   
    <div class="prfdetail">
        <form method="POST">
            
                Name :<br>
        <input type="text"  value="<?php echo $_SESSION['sname'];?>" readonly/><br>
        <hr>
        USN :<br>
        <input type="text"  name="ud" value="<?php echo $_SESSION['sid'];?>" readonly/><br><hr>
        Email :<br>
        <input type="email" value="@gmail.com" name="em"/><br><hr>
        NUMBER :<br>
        <input type="number" maxlength="10" value="<?php echo $_SESSION['sn'];?>" name="no"/><br><hr>
        
        <center><input type="submit" name="lo" value="UPDATE"></center>
        <?php
                    $con=mysqli_connect('localhost','root','');
                    mysqli_select_db($con, "eg");

                    if(isset($_POST['lo']))
                    {
                        $uname=$_POST['ud'];
                        $ema=$_POST['em'];
                        $num=$_POST['no'];
                        $result=mysqli_query($con,"SELECT email,number FROM stafflist WHERE usn='$uname'");
                        $row=mysqli_fetch_assoc($result);
                      
                        
                           $sql=mysqli_query($con,"UPDATE stafflist SET email='$ema',number='$num' where usn='$uname'");
                          echo "updated succefully";
                           
                    }
            ?>
        </form>
    </div>  
</div>


</div>


</body>
</html>