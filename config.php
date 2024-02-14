<?php
session_start();
$cn= mysqli_connect("localhost","root","","crud");
if(!$cn){
    echo "Connection Faild";
}
?>