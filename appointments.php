<?php 
  $error="";
  if (isset($_GET['error'])){
    if ($_GET['error'] =="emptyInputs") {
      $error="Please fill in all fields....";
    }
    if ($_GET['error'] =="invalidName") {
        $error="Please a valid name. Numbers and special characters are not allowed.";
    }
    if ($_GET['error'] =="invalidNumber") {
        $error="Please enter a number..";
    }
    if ($_GET['error'] =="invalidEmail") {
        $error="Please enter a valid email address...";
    }
    if ($_GET['error'] =="stmtFailed") {
        $error="Whoops!!.. Something went wrong...";
    }
    if ($_GET['error']=="success") {
        $error="Appointment booked we will contact you a day before visit date...";
    }
  }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clicnic appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>MMH error!!</strong> <?php echo $error; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <p>Book Your clinic appointment early and save time.</p>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Fill the Appointment Form.
                        <a href="index.html" class="btn btn-danger float-end">BACK</a>
                        </h2>    
                    </div>
                    <div class="card-body">
                        <form action="includes/apt.inc.php" method="post">
                          <div class="mb-3">
                          <label>Patient Name</label>
                          <input type="text" name="fname" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Phone Number</label>
                          <input type="tel" name="phonenumber" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Patient Email</label>
                          <input type="text" name="email" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Residence Area</label>
                          <input type="text" name="residence" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Patient Age</label>
                          <input type="text" name="age" class="form-control">
                          </div>
                          <div class="mb-3">
                          <label>Gender</label>
                          <input type="radio" name="gender" value="Male">Male
                          <input type="radio" name="gender" value="Female">Female
                          </div>
                          <div class="mb-3">
                          <label>Select op clinic</label>
                          <?php
                    include_once 'includes/dbh.inc.php';
                    $sql = "SELECT * FROM clinics";
                    $result = $conn->query($sql);
                    ?>
                    <select name="clinic" id="reg" class="form-control">
                        <option value="" disabled selected hidden> Select Clinic </option>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <option><?php echo $row["opCategory"]; ?></option>
                            <?php
                            }
                        } else {
                            ?>
                            <option><?php echo "Op Clinics are not available"; ?></option>
                        <?php
                        }

                        ?>
                    </select>
                          </div>
                          <div class="mb-3">
                          <label>Select doctor's name</label>
                          <?php
                    include_once 'includes/dbh.inc.php';
                    $sql = "SELECT * FROM doctors";
                    $result = $conn->query($sql);
                    ?>
                    <select name="doc" id="reg" class="form-control">
                        <option value="" disabled selected hidden> Select Doctor </option>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <option><?php echo $row["docName"]; ?></option>
                            <?php
                            }
                        } else {
                            ?>
                            <option><?php echo "Doc Not Available"; ?></option>
                        <?php
                        }

                        ?>
                    </select>
                          </div>
                          <div class="mb-3">
                            <input type="submit" name="submit-apt" value="Book Appointment" class="btn btn-primary">
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