<?php
session_start();
if(isset($_SESSION['sid']))
{
    echo "";
}
else{
    header('location:../stafflog.php');
}
?>