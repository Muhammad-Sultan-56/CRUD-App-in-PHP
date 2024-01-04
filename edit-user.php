
<?php  include("config.php");   ?>

<?php

$get_id = $_GET['id'];
$sql = "SELECT * FROM user_info WHERE id = $get_id";
$result = mysqli_query($cn , $sql);

?>

<html>
<head>
    <title>Add User Data</title>
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.min.js"></script>
</head>
<body> 
    <div class="container my-5">
<div class="row">

<div class="col-md-3"></div>

<div class="col-md-6 p-3 shadow">
    <!-------------- Form Start ---------->
    <h2 class="text-center mb-3">Update User Information</h2>
    <form method="post" action="fir-update.php" enctype="multipart/form-data">
      <?php if(mysqli_num_rows($result) > 0){
        
        while($row=mysqli_fetch_assoc($result)){

        $uid = $row['id'];
        $uname = $row['name'];
        $uemail = $row['email'];
        $uage = $row['age'];
        $uaddress = $row['address']; 
        $photo = $row['photo'];


    
 ?>

<input type="hidden"  name="u_id" value="<?php echo $uid; ?>">
       <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Full Name <span class="text-danger fw-bold">*</span> </label>
         <input type="text" class="form-control form-control-sm" name="u_name" value="<?php echo $uname ?>" required>
       </div>
       <div class="mb-3">
         <label class="form-label">Email address <span class="text-danger fw-bold">*</span></label>
         <input type="email" class="form-control form-control-sm" name="u_email"  value="<?php echo $uemail?>" required>
       </div>

       <div class="mb-3">
        <label class="form-label">Age (in years) <span class="text-danger fw-bold">*</span></label>
        <input type="number" class="form-control form-control-sm" name="u_age" value="<?php echo $uage ?>" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Address<span class="text-danger fw-bold">*</span></label>
        <input type="text" class="form-control" name="u_address" value="<?php echo $uaddress ?>" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Photo<span class="text-danger fw-bold">*</span></label>
        <input type="file" name="photo" class="form-control form-control-sm"  value="<?php echo $photo ?>" required>
      </div>
       <div class="d-grid">
        <button type="submit" name="edit-user"  class="btn btn-primary w-50 m-auto">Save & Submit</button>

       </div>

       <?php }
       } ?>
     </form>

     <!-------------- Form End ---------->
</div>

<div class="col-md-3"></div>
</div>

    </div>
</body>
</html>