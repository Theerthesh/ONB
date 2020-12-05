
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>
    Staff
</title>
<link rel="stylesheet" href="design.css">
<link rel="stylesheet" href="admin.css">
</head>
<body style="background-color:rgba(16, 21, 68, 0.925)">
<div class="adtop">
    <div class="tright">
        <a href="stafflog.php">Logout</a>
    </div>
    <div class="tleft">
    <a style="text-decoration: none; text-shadow: 0px 0px 2px silver;" href="staffprf.php">Profile</a>
    </div>
    <div class="tcenter">
        <a class="act" href="#">Staff</a>
        <a href="staff.php">Home</a>
        <a href="ststudent.php">Student</a>
        <a href="stnotification.php">Notification</a>
    </div>
</div>
<br>
<div class="logstaf">Staff List</div>
<br>
<table class="tablestaff">
    <tr><th>Id</th>
        <th>Name</th>
        <th>Number</th>
        <th>Email</th>
        <th>USN</th>
    </tr>

  <?php
   $con=mysqli_connect("localhost","root","","eg");
   $sql="SELECT id, uname, number, email, usn from stafflist";
   $result=$con-> query($sql);
   if($result-> num_rows > 0)
   {
       while($row = $result-> fetch_assoc())
       {
           echo "<tr><td>". $row["id"] ."</td>". "<td>". $row["uname"] ."</td>". "<td>". $row["number"] ."</td>".  "<td>". $row["email"] ."</td>". "<td>". $row["usn"] ."</td></tr>";
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
</body>
</html>