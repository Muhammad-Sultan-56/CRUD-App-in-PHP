
<?php  include("config.php");  ?>
<?php

$get_id = $_GET['id'];




    $sql = "DELETE FROM user_info WHERE id=$get_id" ;
    $result = mysqli_query($cn , $sql);
    if($result){
        header("Location:index.php");
    }




?>