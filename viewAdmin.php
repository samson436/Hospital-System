<?php 
  $error="";
  require_once 'header.php';
  require_once 'includes/dbh.inc.php';
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MMH Admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Admin accounts details.
                        <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                        </h3>    
                    </div>
                    <div class="card-body">
                    <?php
                        //CHECKING FOR VALLID CLINIC ID ##FROM URL VARIABLE
                            if (isset($_GET['id'])) {
                              //$cintId= mysqli_real_escape_string($conn, $_GET['id']);
                              $adminId=$_GET['id'];
                              $sql = "SELECT * FROM admins WHERE adminID=?";
                              $stmt=mysqli_stmt_init($conn);
                              //iff connection fails do
                              if (!mysqli_stmt_prepare($stmt, $sql)) {
                                  header("location: edit-admin.php?error=stmtFailed");
                                  exit();
                              }
                              mysqli_stmt_bind_param($stmt, "i", $adminId);
                              mysqli_stmt_execute($stmt);
                              //fetch results
                              $result=mysqli_stmt_get_result($stmt);
                              if ($row = mysqli_fetch_assoc($result)) {
                                  ?>
                         <div class="mb-3">
                          <label>User Id</label>
                          <p class="form-control"><?php echo $row['adminID']; ?></p>
                          </div>
                          <div class="mb-3">
                          <label>Fullname</label>
                          <p class="form-control"><?php echo $row['fullName']; ?></p>
                          </div>
                          <div class="mb-3">
                          <label>Username</label>
                          <p class="form-control"><?php echo $row['loginName']; ?></p>
                          </div>
                          <div class="mb-3">
                          <label>Your Email</label>
                          <p class="form-control"><?php echo $row['adminEmail']; ?></p>
                          </div>
                          <div class="mb-3">
                          <label>Your Password</label>
                          <p class="form-control"><?php echo $row['pwd']; ?></p>
                          </div>
                                  <?php
                              } else {
                                echo "<h5>No Records Found</h5>";
                              }


                            }
                        ?>
                        




                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>