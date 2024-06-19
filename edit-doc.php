<?php 
  $error="";
  require_once 'header.php';
  require_once 'includes/dbh.inc.php';
  if (isset($_GET['error'])){
    if ($_GET['error'] =="emptyInputs") {
      $error="Please fill in all fields....";
    }
    if ($_GET['error'] =="invalidName") {
        $error="Please a valid name. Numbers and special characters are not allowed.";
    }
    if ($_GET['error'] =="invalidEmail") {
        $error="Please provide a valid email address....";
    }
    if ($_GET['error'] =="docExis") {
        $error="Doctor exist or Email already exist..";
    }
    if ($_GET['error'] =="stmtFailed") {
        $error="Whoops!!.. Something went wrong...";
    }
    if ($_GET['error']=="success") {
        $error="Record Saved...";
    }
  }
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
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>MMH error!!</strong> <?php echo $error; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Update doctors account.
                        <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                        </h2>    
                    </div>
                    <div class="card-body">

                    <?php
                        //CHECKING FOR VALLID CLINIC ID ##FROM URL VARIABLE
                            if (isset($_GET['id'])) {
                              //$cintId= mysqli_real_escape_string($conn, $_GET['id']);
                              $docId=$_GET['id'];
                              $sql = "SELECT * FROM doctors WHERE docID=?";
                              $stmt=mysqli_stmt_init($conn);
                              //iff connection fails do
                              if (!mysqli_stmt_prepare($stmt, $sql)) {
                                  header("location: edit-doc.php?error=stmtFailed");
                                  exit();
                              }
                              mysqli_stmt_bind_param($stmt, "i", $docId);
                              mysqli_stmt_execute($stmt);
                              //fetch results
                              $result=mysqli_stmt_get_result($stmt);
                              if ($row = mysqli_fetch_assoc($result)) {
                                  ?>
                              <form action="includes/updateDoc.inc.php" method="post">
                              <input type="text" name="id" value="<?php echo $row['docID']; ?>" hidden>
                          <div class="mb-3">
                          <label>Doctor's Fullname</label>
                          <input type="text" name="fname" value="<?php echo $row['docName']; ?>" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Doctor's Email</label>
                          <input type="text" name="email" value="<?php echo $row['docEmail']; ?>" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Doctor's Speciality</label>
                          <input type="text" name="speciality" value="<?php echo $row['docSpec']; ?>" class="form-control">
                          </div>
                          <div class="mb-3">
                            <input type="submit" name="submit-update-doc" value="Update Doctor" class="btn btn-primary">
                          </div>
                        </form>
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