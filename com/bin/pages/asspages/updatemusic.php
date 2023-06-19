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
    <title>UPDATE MUSIC ASSET </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
</head>
<style>
form {
    margin-top: 5vh;
}

.cont {
    display: block;
    width: 98%;
    margin: auto;
    background-color: #ddd;
}

.back {
    text-decoration: none;
    color: #fff;
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
    $sql = $onerecord->fetchoneMusicrecord($id);
    $cnt = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
        <h2 class="text-center">Edit Music Record</h2>
        <hr>
        <form action="updatemusic.php" method="post">
            <?php
        require_once "../../../../com/sess/mods/connect.php";
        require_once "assdata.php";
        $alist = new asdata;
        // $alist2 = new asdata2;

        $cat1 = $alist->get1Cat('music');
        $aloc = $alist->getAssetLoc('');
        ?>

            <div class="row">
                <div class="col-7">
                    <label for="" class="">Item Category</label>
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="categoryName1" value="<?php echo htmlentities($row['item_category']); ?>"
                        class="form-control" required>
                    <select class="form-select" aria-label="Default select example" name="categoryName"
                        id="categoryName" onchange="showme(this.value)">
                        <option selected>--Select--</option>
                        <?php
              foreach ($cat1 as $cat) {
                echo '<option value = ' . $cat['categoryName'] . '>' . strtoupper($cat['categoryName']) . '</option>';
              }
              ?>
                    </select>
                    <script type="text/javascript">
                    function showme(val) {
                        $.post("assbrg1.php", {
                            Categ: val
                        }, function(data, status) {
                            document.getElementById("subcateg").innerHTML = data;
                        })

                    }
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="" class="">Sub Category</label>
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="subcateg1" value="<?php echo htmlentities($row['item_type']); ?>"
                        class="form-control" required>
                    <select class="form-select" aria-label="Default select example" name="subcateg" id="subcateg"
                        onchange="showme2(this.value)">
                        <option selected>--Select--</option>
                        <?php
              foreach ($cat1 as $cat) {
                echo '<option value = ' . $cat['subCategory'] . '>' . strtoupper($cat['subCategory']) . '</option>';
              }
              ?>
                    </select>
                    <script type="text/javascript">
                    function showme2(val) {
                        $.post("assbrg1.php", {
                            Categ: val
                        }, function(data, status) {
                            document.getElementById("assetName").innerHTML = data;
                        })

                    }
                    </script>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="" class="">Asset Name</label>
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="assetName1" value="<?php echo htmlentities($row['assetName']); ?>"
                        class="form-control" required>
                    <select class="form-select" aria-label="Default select example" name="assetName" id="assetName">
                        <option selected>--Select--</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="add" class="add">Manufacturer</label>
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="manufacturer1" value="<?php echo htmlentities($row['oem']); ?>"
                        class="form-control" required>
                    <input class="form-control form-control-md" name="manufacturer" type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="" class="">Model</label>
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="model1" value="<?php echo htmlentities($row['model']); ?>"
                        class="form-control" required>
                    <input class="form-control form-control-md" name="model" type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="" class="">Serial Number</label>
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="sn1" value="<?php echo htmlentities($row['sn']); ?>" class="form-control"
                        required>
                    <input class="form-control form-control-md" name="sn" type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="" class="">Date of Purchase</label>
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="dop1" value="<?php echo htmlentities($row['dop']); ?>" class="form-control"
                        required>
                    <input class="form-control form-control-md" name="dop" type="date" />
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="" class="">Cost at Purchase</label>
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="cap1" value="<?php echo htmlentities($row['cap']); ?>" class="form-control"
                        required>
                    <input class="form-control form-control-md" name="cap" type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="" class="">Asset Location</label>
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="assetLocation1" value="<?php echo htmlentities($row['location']); ?>"
                        class="form-control" required>
                    <select class="form-select" aria-label="Default select example" name="assetLocation">
                        <option selected>--Select--</option>
                        <?php
              foreach ($aloc as $loc) {
                echo '<option value = ' . $loc['assloc'] . '>' . strtoupper($loc['assloc']) . '</option>';
              }
              ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="" class="">Asset Status</label>
                </div>
                <div class="col-5 my-2">
                    <input type="text" name="assetStatus1" value="<?php echo htmlentities($row['status']); ?>"
                        class="form-control" required>
                    <select class="form-select" aria-label="Default select example" name="assetStatus">
                        <option selected>Select Asset Status</option>
                        <option value="In Use">In Use</option>
                        <option value="Bad">Bad</option>
                        <option value="On Repair">On Repair</option>
                        <option value="Abandoned">Abandoned</option>
                    </select>
                </div>
            </div>
            <!-- buttons -->

            <!-- buttons -->

            <div id="btnRCS">
                <a href="musicassets.php" class="btn btn-danger">Close</a>
                <button class="btn btn-success" name="update">Submit</button>
            </div>
        </form>




        <?php } ?>
        <!-- <div id="btnRCS">
  <a href="musicassets.php" class="btn btn-danger">Close</a>
  <button class="btn btn-success" name="update">Update</button>
</div> -->
        <!-- <div class="row" style="margin-top:1%">
  <div class="col-md-8">
    <input type="submit" name="update" value="Update">
  </div>
</div> -->
        </form>
    </div>
</body>
</htm