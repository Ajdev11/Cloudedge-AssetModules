<?php
// include function file
include_once("function.php");
//Object
$updatedata = new DB_con();
if (isset($_POST['update'])) {
  // Get the userid
  $id = intval($_GET['id']);
  $assetName = $_POST['assetName'];
  $address = $_POST['address'];
  $plots = $_POST['plots'];
  $costP = $_POST['costPrice'];
  $status = $_POST['status'];
  $sql = $updatedata->updateLand($assetName, $address, $plots, $costP, $status, $id);
  // Mesage after updation
  echo "<script>alert('Record Updated successfully');</script>";
  // Code for redirection
  echo "<script>window.location.href='landasset.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UPDATE LAND ASSET </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
</head>
<style>
.cont {
    display: block;
    height: 70vh;
    margin: auto;
    background-color: #ddd;
}

#btn {
    width: 20%;
    margin-left: 5px;
    background: #000;
}

#btnRCS {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

/* desktop screen */
@media only screen and (min-width: 600px) {
    .cont {
        width: 50%;
    }

    #btn {
        width: 10%;
    }
}
</style>

<body>
    <div class="container-fluid cont">
        <?php
    // Get the userid
    $id = intval($_GET['id']);
    $onerecord = new DB_con();
    $sql = $onerecord->fetchoneLandrecord($id);
    $cnt = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <h2 class="text-center">Edit Land Record</h2>
        <hr>
        <form name="insertrecord" method="post">
            <div class="row">
                <div class="col-7">Asset Name
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="assetName" value="<?php echo htmlentities($row['assetName']); ?>"
                        class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-7">Current status
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="status" value="<?php echo htmlentities($row['current_status']); ?>"
                        class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-7">Plot of land
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="plots" value="<?php echo htmlentities($row['no_of_plots']); ?>"
                        class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-7">Cost Price
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="costPrice" value="<?php echo htmlentities($row['cost_price']); ?>"
                        class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-7">Asset Address
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="address" value="<?php echo htmlentities($row['address']); ?>"
                        class="form-control" required>
                </div>
            </div>







            <?php } ?>
            <div id="btnRCS">
                <a href="landasset.php" class="btn btn-danger">Close</a>
                <button class="btn btn-success" name="update">Update</button>
            </div>
        </form>
    </div>
</body>
</htm