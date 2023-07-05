<?php
// include function file
include_once("function.php");
//Object
$updatedata = new DB_con();
if (isset($_POST['submit'])) {
    // Get the userid
    $id = intval($_GET['id']);
    // $assetCategory = "LAND";
    // $assetName = "LAND";
    $location = $_POST['location'];
    $address = $_POST['address'];
    $larea = $_POST['larea'];
    $no_of_plots = $_POST['plots'];
    $costPrice = $_POST['cost'];
    $yearPurchased = $_POST['yearPurchased'];
    $fenced = $_POST['fenced'];
    $fullypaid = $_POST['fullypaid'];
    $litig = $_POST['litig'];
    $currStatus = $_POST['status'];

    $sql = $updatedata->updateLand($location, $address, $larea, $no_of_plots, $costPrice, $yearPurchased, $fenced, $fullypaid, $litig, $currStatus, $id);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <style>
        .cont {
            display: block;
            height: 150vh;
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
</head>

<body>
    <div class="container-fluid cont bg-secondary text-white">

        <form name="insertrecord" method="post">
            <?php
            require_once "../../../../com/sess/mods/connect.php";
            require_once "assdata.php";
            $alist = new asdata;
            $aloc = $alist->getAssetLoc('');
            ?>

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


                <div class="row">
                    <div class="col-5">
                        <label for="" class="">Location</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="text" id="" name="location" value="<?php echo htmlentities($row['assetName']);  ?>" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 my-2">
                        <label for="" class="">Address</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="text" id="" name="address" value="<?php echo htmlentities($row['address']);
                                                                                                ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 text-info my-2">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <input class="form-control form-control-md" type="text" name="address" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2">
                        <label for="" class="qty">Fenced?</label>
                    </div>
                    <div class="col-7">
                        <input style="background: #ddd" id="" name="fenced1" class="form-control" value="<?php echo htmlentities($row['fenced']);
                                                                                                            ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 text-info my-2">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <select name="fenced" class="form-select">
                            <option selected>--Select--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2">
                        <label for="">No of Plots</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="number" min="0" step="1" id="" name="plots1" value="<?php echo htmlentities($row['no_of_plots']);
                                                                                                                    ?>" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <input class="form-control form-control-md" name="plots" type="number" min="0" step="1" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2">
                        <label for="" class="">Cost</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="number" min="0" step="1" id="" name="cost1" value="<?php echo htmlentities($row['cost_price']);
                                                                                                                    ?>" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <input class="form-control form-control-md" name="cost" type="number" min="0" step="1" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 my-2">
                        <label for="" class="">Year of Purchase</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background:" id="" name="yearPurchased1" value="<?php echo htmlentities($row['year_of_purchase']);
                                                                                        ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 text-info my-2">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <input class="form-control form-control-md" name="yearPurchased" type="date" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 my-2">
                        <label for="" class="">Current Status</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="text" id="" name="status" value="<?php echo htmlentities($row['current_status']);
                                                                                                ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <select name="status" class="form-select ">
                            <option selected>--Select--</option>
                            <option value="Developed">Developed</option>
                            <option value="Under-developement">Under-developement</option>
                            <option value="Undeveloped">Undeveloped</option>
                            <option value="Partly-developed">Partly-developed</option>
                        </select>
                    </div>
                </div>
                <!-- fully paid -->
                <div class="row">
                    <div class="col-5 my-2">
                        <label for="" class="">Fully Paid</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="text" id="" name="fullypaid1" value="<?php echo htmlentities($row['fullypaid']);
                                                                                                    ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2 text-info">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <select name="fullypaid" class="form-select">
                            <option selected>--Select--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 my-2">
                        <label for="" class="">Under Litigation</label>
                    </div>
                    <div class="col-7 my-2">
                        <input style="background: #ddd" type="text" id="" name="litig1" value="<?php echo htmlentities($row['litig']);
                                                                                                ?>" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 text-info my-2">
                        <label for="">Change</label>
                    </div>
                    <div class="col-7 my-2">
                        <select name="litig" class="form-select">
                            <option selected>--Select--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
            <?php } ?>
            <div id="btnRCS">
                <a href="landasset.php" class="btn btn-danger">Close</a>
                <button class="btn btn-success" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>