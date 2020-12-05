<?php
session_start();
if(isset($_SESSION['aid']))
{
    echo "";
}
else{
    header('location:../adminlog.php');
}
?>