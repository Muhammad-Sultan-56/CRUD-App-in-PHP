
<?php  include("config.php");  ?>
<?php

if(isset($_POST['add-user'])){

    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $u_age = $_POST['u_age'];
    $u_address = $_POST['u_address'];
    $photo = $_FILES['photo'];

    $photo_name = $_FILES['photo']['name'];
    $photo_tmp_name = $_FILES['photo']['tmp_name'];
    $photo_size = $_FILES['photo']['size'];
    $photo_type = $_FILES['photo']['type'];
    
    $photo_dir = "img-uploads/$u_name" .$photo_name;
    
    move_uploaded_file($photo_tmp_name , $photo_dir);

    $sql = "INSERT INTO user_info(name , email , age , address , photo)
    VALUES ('$u_name' , '$u_email' , '$u_age' , '$u_address' , '$photo_dir')" ;
    $result = mysqli_query($cn , $sql);
    if($result){
        header("Location:index.php");
    }


}

?>