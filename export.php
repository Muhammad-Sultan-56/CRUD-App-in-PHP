<?php include("config.php");  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Crud App</title>
  <!-- Bootstrap Links -->
  <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
  <script src="./Bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container mb-4 mt-1">
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

    <div class="container mt-3">
      <div class="row">
        <div class="col-md-12">

          <div class="d-flex justify-content-between">
            <div class="d-grid">
              <a href="add-user.php" class="btn btn-primary"> + Add Students</a>

              <a href="export.php" class="btn btn-primary"> Export Data</a>

            </div>
            <div class="text-end">
              <input type="text" id="searchInput" class="form-control" onkeyup="liveSearch()" placeholder="Search here...">
            </div>
          </div>
          <!-------------- table start ---------->
          <div class="table-responsive" id="dataTable">
            <table class="table table-striped table-hover my-4">
              <thead>
                <tr>
                  <th scope="col">Sr.No.</th>
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
                $result = mysqli_query($cn, $sql);
                $total_records = mysqli_num_rows($result);

                if ($total_records > 0) {

                  // for Pagination
                  $page = 1; // page 1 by default
                  $limit = 5; //limit to show data on 1 page

                  if (isset($_GET['page'])) {
                    $page = $_GET['page']; // change page value by get id
                  }
                  $start = ($page - 1) * $limit; // formula to show 5, next 5 users and so on.

                  $pagination_qry = "SELECT * FROM user_info ORDER BY id DESC LIMIT $start,$limit"; // query for pagination
                  $pagination_qry_result = mysqli_query($cn, $pagination_qry);

                  $i = $start + 1; // to show the exact number of user not id
                  while ($row = mysqli_fetch_assoc($pagination_qry_result)) {

                ?>

                    <tr>
                      <th scope="row"><?php echo $i; ?></th>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['age']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td> <img src="<?php echo $row['photo']; ?>" alt="Image not found" height="50px"></td>

                      <td>

                        <a href="edit-user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm ">Edit</a>

                        <a href="fir-delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm ">Delete</a>


                      </td>
                    </tr>
                <?php
                    $i++;
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
          <!-------------- table End ---------->
          <div class="d-flex justify-content-between">
            <?php
            $total_pages = ceil($total_records / $limit);

            echo "<b>Page : $page / $total_pages</b>";

            $pagination = "<nav'>
             <ul class='pagination'>";

            if ($total_records > $limit) {

              $disabled = ($page == 1) ? 'disabled' : '';
              $prev = $page + 1;
              $pagination .= "<li class='page-item $disabled'><a class='page-link' href='?page=1'>First</a></li>";
              $pagination .= "<li class='page-item $disabled'><a class='page-link' href='?page=$prev'>Previous</a></li>";

              $disabled = ($page == $total_pages) ? 'disabled' : '';
              $next = $page + 1;
              $pagination .= "<li class='page-item $disabled'><a class='page-link' href='?page=$next'>Next</a></li>";
              $pagination .= "<li class='page-item $disabled'><a class='page-link' href='?page=$total_pages'>Last</a></li>";
            }

            $pagination .= "</ul></nav>";

            echo "<div>$pagination </div>";


            echo "<b>Total Records :  $total_records</b>";

            ?>
          </div>

        </div>
      </div>
    </div>
</body>

</html>





    



