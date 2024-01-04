
<?php  include("config.php");   ?>

<!DOCTYPE html>
<html lang="en">
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
    <h2 class="text-center mb-3">Add User Information</h2>
    <form action="fir-insert.php" method="post" enctype="multipart/form-data">
       <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Full Name <span class="text-danger fw-bold">*</span> </label>
         <input type="text" name="u_name" class="form-control form-control-sm" placeholder="Enter here..." required>
       </div>
       <div class="mb-3">
         <label class="form-label">Email address <span class="text-danger fw-bold">*</span></label>
         <input type="email" name="u_email" class="form-control form-control-sm" placeholder="Enter here..." >
       </div>

       <div class="mb-3">
        <label class="form-label">Age (in years) <span class="text-danger fw-bold">*</span></label>
        <input type="text" name="u_age" class="form-control form-control-sm" placeholder="Enter here..." required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Address<span class="text-danger fw-bold">*</span></label>
        <input type="text" name="u_address" class="form-control form-control-sm" placeholder="Enter here..." required>
      </div>

      <div class="mb-3">
        <label class="form-label">Photo<span class="text-danger fw-bold">*</span></label>
        <input type="file" name="photo" class="form-control form-control-sm"  required>
      </div>

       <div class="d-grid">
        <button type="submit" name="add-user" class="btn btn-primary w-50 m-auto">Submit</button>

       </div>
     </form>

     <!-------------- Form End ---------->
</div>

<div class="col-md-3"></div>
</div>

    </div>
</body>
</html>