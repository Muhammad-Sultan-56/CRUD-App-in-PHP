<?php  include("config.php");  ?>
<?php

if(isset($_POST['edit-user'])){
    $u_id = $_POST['u_id'];
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $u_age = $_POST['u_age'];
    $u_address = $_POST['u_address'];
    $photo = $_FILES['photo'];

    $photo_name = $_FILES['photo']['name'];
    $photo_tmp_name = $_FILES['photo']['tmp_name'];
    $photo_size = $_FILES['photo']['size'];
    $photo_type = $_FILES['photo']['type'];
    $photo_dir = "img-uploads/$u_name " .$photo_name;


    $sql = "UPDATE user_info SET name='$u_name' , email='$u_email' , age='$u_age' , address='$u_address' , photo='$photo_dir' WHERE id='$u_id' " ;
    $result = mysqli_query($cn , $sql);

    if($result){
        header("Location:index.php");
    }
    else{
        echo mysqli_error($cn);
    }


}


?>