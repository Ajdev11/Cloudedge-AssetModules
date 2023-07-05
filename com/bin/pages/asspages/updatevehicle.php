<?php
// include function file
include_once("function.php");
//Object
$updatedata = new DB_con();
if (isset($_POST['update'])) {
    // Get the userid
    $id = intval($_GET['id']);
    $categ = $_POST['assetCategory'];
    $subCateg = $_POST['subCategory'];
    $assetName = $_POST['assetName'];
    $vehicleno = $_POST['vehicleno'];
    $dop = $_POST['dop'];
    $cap = $_POST['cap'];
    $loc = $_POST['location'];
    $status = $_POST['status'];
    $sql = $updatedata->updateVehicle($categ, $subCateg, $assetName,  $vehicleno, $dop, $cap, $loc, $status, $id);
    // Mesage after updation
    echo "<script>alert('Record Updated successfully');</script>";
    // Code for redirection
    echo "<script>window.location.href='assetvehicle.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UPDATE VEHICLE ASSET </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <?php
    require "../../../bin/hed/sandls.php";
    ?>
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

    <div class="container-fluid cont bg-secondary text-white">
        <?php
        // Get the userid
        $id = intval($_GET['id']);
        $onerecord = new DB_con();
        $sql = $onerecord->fetchoneVehiclerecord($id);
        $cnt = 1;
        while ($row = mysqli_fetch_array($sql)) {
        ?>
            <h2 class="text-center">Edit Vehicle Record</h2>
            <hr>
            <form action="" method="post">
                <?php
                require_once "../../../../com/sess/mods/connect.php";
                require_once "assdata.php";
                $alist = new asdata;
                $cats = $alist->get1Cat('vehicle');
                $aloc = $alist->getAssetLoc('');
                ?>

                <div class="row">
                    <div class="col-5">
                        <label for="" class="">Asset Category</label>
                    </div>
                    <div class="col-7">
                        <input style="background: #ddd" type="text" id="plan1" name="" value="<?php echo htmlentities($row['item_category']); ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <select class="form-select" name="assetCategory" id="categoryName" onchange="showme(this.value)">
                            <option selected>Select Asset Category</option>
                            <?php
                            foreach ($cats as $cat) {
                                echo '<option value = ' . $cat['categoryName'] . '>' . strtoupper($cat['categoryName']) . '</option>';
                            }
                            ?>
                        </select>
                        <script type="text/javascript">
                            function showme(val) {
                                $.post("assbrg.php", {
                                    Categ: val
                                }, function(data, status) {
                                    document.getElementById("subcateg").innerHTML = data;
                                })
                            }
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="" class="">Asset Type</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="text" id="plan1" name="plan1" value="<?php echo htmlentities($row['item_type']); ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <select class="form-select" name="subCategory" id="subcateg" onchange="showmeType(this.value)">
                            <option selected>Select subcategory</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="">Asset Name</label>
                    </div>
                    <div class="col-7">
                        <input style="background: #ddd" type="text" id="plan1" name="plan1" value="<?php echo htmlentities($row['assetName']); ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <select class="form-select" name="assetName" id="assetName">
                            <option selected>Select asset name</option>
                        </select>
                        <script type="text/javascript">
                            function showmeType(val) {
                                $.post("assbrg.php", {
                                    Categ: val
                                }, function(data, status) {
                                    document.getElementById("assetName").innerHTML = data;
                                })
                            }
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="">Vehicle Number</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="number" min="0" step="1" id="" name="vehicleno" value="<?php echo htmlentities($row['sn']); ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <input class="form-control form-control-md" name="quantity" type="number" min="0" step="1" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="" class="">Date of Purchase</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="date" id="" name="" value="<?php echo htmlentities($row['dop']); ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <input class="form-control form-control-md" name="dop" type="date" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="" class="">Cost</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="number" min="0" step="1" id="" name="" value="<?php echo htmlentities($row['cap']); ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 text-info my-2">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <input class="form-control form-control-md" name="cap" type="number" min="0" step="1" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="" class="">Asset Location</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="text" id="" name="" value="<?php echo htmlentities($row['location']); ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <select class="form-select" name="location">
                            <option selected>Select Asset Location</option>
                            <?php
                            foreach ($aloc as $loc) {
                                echo '<option value = ' . $loc['assloc'] . '>' . strtoupper($loc['assloc']) . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <label for="" class="">Asset Status</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="text" id="" name="" value="<?php echo htmlentities($row['status']); ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <select class="form-select" name="status">
                            <option selected>Select Asset Status</option>
                            <option value="In Use">In Use</option>
                            <option value="Bad">Bad</option>
                            <option value="On Repair">On Repair</option>
                            <option value="Abandoned">Abandoned</option>
                        </select>
                    </div>
                </div>

            <?php } ?>
            <div id="btnRCS">
                <a href="assetvehicle.php" class="btn btn-danger">Close</a>
                <button class="btn btn-success" name="update">Update</button>
            </div>

            </form>
    </div>
</body>
</htm