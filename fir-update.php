<?php  include("config.php");  ?>
<?php

if(isset($_POST['edit-user'])){
    $u_id = $_POST['u_id'];
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $u_age = $_POST['u_age'];
    $u_address = $_POST['u_address'];
    // $photo = $_FILES['photo'];


        //cod for image update
        if(empty($_FILES['new_image']['name'])){
            $photo = $_POST['old_image'];
           }
           else{
              // post image move in folder and uploads in database
              $photo_new =  $_FILES['new_image'];
           
              $photo_name = $_FILES['new_image']['name'];
              $photo_size = $_FILES['new_image']['size'];
              $photo_type = $_FILES['new_image']['type'];
              $photo_tmp_name = $_FILES['new_image']['tmp_name'];
              //post image because we will send image directory in database
              $photo = "img-uploads/$u_name" . $photo_name;
              // move in folder function
              move_uploaded_file($photo_tmp_name, $photo);


              
    $photo_dir = "img-uploads/$u_name" .$photo_name;
    
    move_uploaded_file($photo_tmp_name , $photo_dir);
           }




    $sql = "UPDATE user_info SET name='$u_name' , email='$u_email' , age='$u_age' , address='$u_address' , photo='$photo' WHERE id='$u_id' " ;
    $result = mysqli_query($cn , $sql);

    if($result){
        header("Location:index.php");
    }
    else{
        echo mysqli_error($cn);
    }


}


?>