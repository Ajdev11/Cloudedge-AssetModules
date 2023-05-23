<?php
include "conn.php";
$ID = $_GET['id'];

if(isset($_POST['submit']))
{
    // $assetTyp = $_POST['assetType']; item_category  item_type
    $itemCateg = $_POST['item_category'];
    $itemType = $_POST['item_type'];
    $assetNam = $_POST['assetName'];

    $sql = "UPDATE `tblict` SET `assetName`='$assetNam', `item_category`='$itemCateg', `item_type`='$itemType'   WHERE id=$ID";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header("location: assetsict.php?msg=Updated successfully");

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

    <title>Asset Name</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
    Asset Management System
    </nav>
    <div class="container">
        <div class="text-center mb-4">
<h3>Edit Asset Information</h3>
    <p class="text-muted">Click on update after changing any information about the Asset Name</p>
        </div>
        <?php
            // $ID = $_GET['id'];
            $sql = "SELECT * FROM `tblict` WHERE id = $ID LIMIT 1";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 50vw; min-width: 300px;">
            <div class="col">
                    <label class="form-label">Select Category Name: </label>
                    <select class="form-select" name="item_category" aria-label="Default select example">
                    <option selected>Select Category Name</option>
                    <option value="1">Land</option>
                    <option value="2">Building</option>
                    <option value="3">Music</option>
                    <option value="4">ICT</option>
                    <option value="5">Furniture</option>
                    <option value="6">Electronics</option>
                    <option value="8">Electricals</option> 
                    </select>
                </div>
                <div class="col"><br>
                    <label class="form-label">Select Asset Type: </label>
                    <select class="form-select" name="item_type" aria-label="Default select example">
                    <option selected>Select Asset Type</option>
                    <option value="1" <?php echo ($row['id']==1) ?>>String</option>
                    <option value="2">Brass</option>
                   <option value="3">Woodwind</option>
                    <!--  <option value="4">ICT</option>
                    <option value="5">Furniture</option>
                    <option value="6">Electronics</option>
                    <option value="8">Electricals</option>  -->
                    </select>
                </div>
            <div class="row">
                
                <div class="col"><br>
                    <label class="form-label">Asset Name: </label>
                    <input type="text" name="assetName" value="<?php echo $row['assetName'] ?>" class="form-control">
                </div>
                
            </div>
            <div ><br>
                 <button type="submit" name="submit" class="btn btn-success">Update</button>
                 <a href="assetsict.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
        </div>
    </div>

</body>
</html>