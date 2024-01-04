
<?php  include("config.php");  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud App</title>
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container my-4">
        <!--------- Navbar S----------------->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><span class="text-primary fw-bold"> CRUD </span>Operetions</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </div>
  </nav>
<!---------------- Navbar End------------->

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">

    
<div class="d-grid">
    <a href="add-user.php" class="btn btn-primary w-25"> Add Students</a>
</div>
    <!-------------- table start ---------->
    <div class="table-responsive">
    <table class="table table-striped table-hover my-4">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Photo</th>
            <th scope="col">Actions</th>

          </tr>
        </thead>

        <tbody>

<?php    
$sql = "SELECT * FROM user_info";
$result = mysqli_query($cn , $sql);

if(mysqli_num_rows($result) > 0){

while($row=mysqli_fetch_assoc($result)){

?>

          <tr>
            <th scope="row"><?php echo $row['id'];?></th>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td> <img src="<?php echo $row['photo'];?>"  alt="Image not found" height="50px"></td>

            <td>

            <a href="edit-user.php?id=<?php echo $row['id'];?>" class="btn btn-warning btn-sm ">Edit</a>  
              
            <a href="fir-delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm ">Delete</a>


            </td>
          </tr>
<?php  }
}
?>    
        </tbody>
      </table>
      </div>

      </div>
  </div>
    <!-------------- table End ---------->
    </div>
</body>
</html>