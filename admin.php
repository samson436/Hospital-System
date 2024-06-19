<?php 
require_once 'header.php';
require_once 'includes/dbh.inc.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MMH Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src=" https://kit.fontawesome.com/8fab363ec0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/admin.css">
</head>
  <body>
  <div class="sidebar">
        <header>MMH Admin Dashboard</header>
        <ul>
    
        <li><a href="#apt"><i class="fa fa-person"></i>Appointments</a></li>
            <li><a href="#"><i class="fa fa-envelope"></i>Mail</a></li>
            <li><a href="vClinic.php"><i class="fa-sharp fa-solid fa-house-medical-circle-check"></i>View Clinics</a></li>
            <li><a href="vDoc.php"><i class="fa-solid fa-user-doctor"></i>Veiw Doctors</a></li>
            <li><a href="vAdmin.php"><i class="fa fa-users"></i>View Admins</a></li>
            <li><a href="vFeedback.php"><i class="fa fa-book-open"></i>View feedback</a></li>
        </ul>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>MMH Admin Dashboard s
                                <a href="includes/logout.inc.php"class="btn btn-primary float-end">Log Out</a>
                                <a href="clinic.php" class="btn btn-primary float-end">Add Clinic</a>
                                <a href="doctor.php" class="btn btn-primary float-end">Create doc's account</a>
                                <a href="create-admin.php" class="btn btn-primary float-end">Create admin account</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table" class="table table-borderred table-striped">
                                <thead>
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Patient Phone Number</th>
                                        <th>Patient Email</th>
                                        <th>Residence</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Outpatient Clinic</th>
                                       <!-- <th>Attending Doctor</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                    //select the tables
                    $sql = "SELECT * FROM patientvisitdetails";
                    $result = $conn->query($sql);
                    if ($result->num_rows>0) {
                        while($row=$result->fetch_assoc()){
                           ?>
                                    <tr> 
                                        <td><?php echo $row['pntName']; ?></td>
                                        <td><?php echo $row['pntPhoneNo']; ?></td>
                                        <td><?php echo $row['pntEmail']; ?></td>
                                        <td><?php echo $row['pntResidence']; ?></td>
                                        <td><?php echo $row['pntAge']; ?></td>
                                        <td><?php echo $row['pntGender']; ?></td>
                                        <td><?php echo $row['pntOpCategory']; ?></td>
                                        <!--<td><?php echo $row['pntName']; ?></td>--->
                                    </tr>
                           <?php
                        }
                    } else{
                        echo"<h5>No Records Found</h5>";
                    }
                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>