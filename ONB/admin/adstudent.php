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
        <a href="admin.php">Home</a>
        <a class="act" href="#">Student</a>
        <a href="adnotification">Notification</a>
    </div>
</div>
<br>
<div class="logstaf">Student List</div>
<br>
<table class="tablestaff">
    <tr><th>Id</th>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Sem</th>
        <th>USN</th>
    </tr>

  <?php
   $con=mysqli_connect("localhost","root","","eg");
   $sql="SELECT id, Name, Number, Email, Dob, Sem, Usn  from stdreg";
   $result=$con->query($sql);
   if($result->num_rows > 0)
   {
       while($row = $result-> fetch_assoc())
       {
           echo "<tr><td>". $row["id"] ."</td><td>". $row["Name"] ."</td><td>". $row["Number"] ."</td><td>". $row["Email"] ."</td><td>". $row["Dob"] ."</td><td>". $row["Sem"] ."</td><td>". $row["Usn"] ."</td><td>";
       }
       echo "</table>";
    
  }
   else
   {
       echo "0 result";
   }
   mysqli_close($con);
  ?>
  </table>
  <?php include "footer.php";?>  
</body>
</html>