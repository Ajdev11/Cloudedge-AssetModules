<?php
include "conn.php";

if(isset($_POST['submit']))
{
    $categName = $_POST['categoryName'];

    $sql = "INSERT INTO `assetcategory`(`categoryName`) VALUES ('$categName')";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header("location: home.php?msg=New Category created successfully");

    }
    else {
        echo "Failed: ". mysqli_error($conn);
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Asset Category</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
    <img id="logo"  src="img/clogo.png" width="5%">&nbsp;&nbsp;&nbsp;&nbsp;Asset Management System
    </nav>
    <div class="container">
        <div class="text-center mb-4">
<h3>Add New Asset Category</h3>
    <p class="text-muted">Complete the Form below to add new Asset Category</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width: 300px;">
            <div class="row">
                <div class="col">
                    <label class="form-label">Category ID: </label>
                    <input type="text" name="cat_ID" placeholder="Enter Asset Category ID" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">Category Name: </label>
                    <input type="text" name="categoryName" placeholder="Enter Asset Category" class="form-control">
                </div>
                
            </div>
            <div ><br>
                 <button type="submit" name="submit" class="btn btn-success">Save</button>
                 <a href="home.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
        </div>
    </div>

</body>
</html>