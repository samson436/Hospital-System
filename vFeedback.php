<?php require_once 'header.php'; 
require_once 'includes/dbh.inc.php'?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MMH Admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest clients feedbacks.
                            <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table" class="table table-borderred table-striped">
                                <thead>
                                    <tr>
                                        <th>revID</th>
                                        <th>Full Name</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                    //select the tables
                    $sql = "SELECT * FROM feedbacks";
                    $result = $conn->query($sql);
                    if ($result->num_rows>0) {
                        while($row=$result->fetch_assoc()){
                           ?>
                                    <tr> 
                                        <td><?php echo $row['revID']; ?></td>
                                        <td><?php echo $row['fullName']; ?></td>
                                        <td><?php echo $row['feedMessage']; ?></td>
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