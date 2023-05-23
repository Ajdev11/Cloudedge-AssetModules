<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>ICT Assets Records</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
    Asset Management System
    </nav>
    <div class="container">
        <?php
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                '.$msg.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        ?>
        <center>
        <a href="assetCategory.php" class="btn btn-dark mb-3">Add Asset Category</a> &nbsp;&nbsp;
        <a href="assetType.php" class="btn btn-dark mb-3">Add Asset Type</a> &nbsp;&nbsp;
        <a href="assetName.php" class="btn btn-dark mb-3">Add Asset Name</a> &nbsp;&nbsp;
        <a href="ict.php" class="btn btn-dark mb-3">Add New ICT Asset</a>
    </center>
        <div class="text-center mb-4">
<h3>ICT Assets List</h3>
    <p class="text-muted">To Edit or Delete an Asset from the list, click under the "Action" column of the row.</p>
        </div>
        <div class="container d-flex justify-content-center">
            <table class="table table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Asset Category</th>
                        <th scope="col">Asset Type</th>
                        <th scope="col">Asset Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">Serial No</th>
                        <th scope="col">Date of Purchase</th>
                        <!-- <th scope="col">Cost at Purchase</th> -->
                        <th scope="col">Status</th>
                        <!-- <th scope="col">Category</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "conn.php";
                        $sql = "select * from `tblict`";
                        $result = mysqli_query($conn,$sql);
                        while($row= mysqli_fetch_assoc($result)){
                            ?>
                             <tr>
                        <td><?php echo $row['id'] ?></td> 
                        <td><?php echo $row['item_category'] ?></td> 
                        <td><?php echo $row['item_type'] ?></td>
                        <td><?php echo $row['assetName'] ?></td>
                        <td><?php echo $row['model'] ?></td>
                        <td><?php echo $row['sn'] ?></td>
                        <td><?php echo $row['dop'] ?></td>                         
                        <!-- <th><?php echo $row['cap'] ?></th>  -->
                        <td><?php echo $row['status'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?> " class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="delete.php?id=<?php echo $row['id'] ?> " class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    <?php
                        }

                    ?>
                   
                    <!-- <tr>
                        <th scope="row">2</th>
                        <td>Viola</td>
                        <td>1</td>
                        <td>String</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>