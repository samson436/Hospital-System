<?php 
  $error="";
  if (isset($_GET['error'])){
    if ($_GET['error'] =="emptyinputs") {
      $error="Please fill in all fields....";
    }
    if ($_GET['error'] =="entervalidname") {
        $error="Please a valid name. Numbers and special characters are not allowed.";
    }
    if ($_GET['error'] =="enterValidEmail") {
        $error="Please provide a valid email address....";
    }
    if ($_GET['error'] =="pwdDonotMatch") {
        $error="Password and Confirm password do not match...";
    }
    if ($_GET['error'] =="stmtfailed") {
        $error="Whoops!!.. Something went wrong...";
    }
    if ($_GET['error'] =="emailExistorAdminExist") {
        $error="Admin already exist or email is taken";
    }
    if ($_GET['error']=="none") {
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
                        <h2>Create admin account.
                        <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                        </h2>    
                    </div>
                    <div class="card-body">
                        <form action="includes/admin.inc.php" method="post">
                          <div class="mb-3">
                          <label>Fullname</label>
                          <input type="text" name="fname" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Username</label>
                          <input type="text" name="uid" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Your Email</label>
                          <input type="text" name="email" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Password</label>
                          <input type="password" name="pwd" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Confirm Passord</label>
                          <input type="password" name="conPwd" class="form-control">
                          </div>
                          <div class="mb-3">
                            <input type="submit" name="submit-create" value="Save Admin" class="btn btn-primary">
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>