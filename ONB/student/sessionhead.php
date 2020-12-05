<?php
session_start();
if(isset($_SESSION['id']))
{
    echo "";
}
else{
    header('location:../index.php');
}
?>