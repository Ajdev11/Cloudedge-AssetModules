<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCMA - LAND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
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
        color: #fff;
        text-decoration: none;
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
        <center>
            <h2>DEEPER LIFE BIBLE CHURCH</h2>
            <font color="brown">
                <h6 id="hed"> </h6>
            </font>
            <h4>ASSET ENTRY FORM</h4>
        </center>
        <!-- form  -->
        <form action="land.php" method="post">
            <!-- <div class="mb-3">
                <label for="cty" class="cty">Country</label>
                <label for="state" class="state">State</label>
                <label for="reg" class="reg">Region</label>
                <label for="old-grp" class="old_grp">Old Group</label>
                <label for="grp" class="grp">Group</label>
            </div> -->
            <div class="accordion my-2" id="">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="">
                        <button class="accordion-button fs-4 fw-bold" type="button">
                            Land information
                        </button>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="" class="">Location</label>
                </div>
                <div class="col-9 my-2">
                    <input class="form-control form-control-md" type="text" name="location" />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="" class="">Address</label>
                </div>
                <div class="col-9 my-2">
                    <input class="form-control form-control-md" type="text" name="address" />
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <label for="" class="">Fenced?</label>
                </div>
                <div class="col-3 my-2">
                    <select name="fenced" class="form-select">
                        <option selected>--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <label for="" class="">No of Plots</label>
                </div>
                <div class="col-3 my-2">
                    <input class="form-control form-control-md" type="number" min="0" step="1" name="plots" type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="" class="">LandArea(Sqm)</label>
                </div>
                <div class="col-6 my-2">
                    <input class="form-control form-control-md" name="larea" type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="" class="">Cost Price</label>
                </div>
                <div class="col-6 my-2">
                    <input class="form-control form-control-md" name="cost" type="number" min="0" step="1" />
                </div>
            </div>
            <div class="row">
                <div class="col-6 my-2">
                    <label for="" class="">Year of Purchase</label>
                </div>
                <div class="col-6">
                    <input type="date" name="yearPurchased" id="">
                </div>
            </div>
            <!-- under litigation -->
            <div class="row">
                <div class="col-7 my-2">
                    <label for="" class="">Under Litigation</label>
                </div>
                <div class="col-5">
                    <select name="litig" class="form-select">
                        <option selected>--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <!-- fully paid -->
            <div class="row">
                <div class="col-7 my-2">
                    <label for="" class="">Fully Paid</label>
                </div>
                <div class="col-5">
                    <select name="fullypaid" class="form-select">
                        <option selected>--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-6 my-2">
                    <label for="" class="">Current Status</label>
                </div>
                <div class="col-6">
                    <select name="status" class="form-select">
                        <option selected>--Select--</option>
                        <option value="Developed">Developed</option>
                        <option value="Under-developement">Under-developement</option>
                        <option value="Undeveloped">Undeveloped</option>
                        <option value="Partly-developed">Partly-developed</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6 my-2">
                    <label for="" class="">National Grid</label>
                </div>
                <div class="col-6">
                    <select name="natGrid" class="form-select">
                        <option selected>--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6 my-2">
                    <label for="" class="">Asset Holder</label>
                </div>
                <div class="col-6">
                    <select name="assetHolder" class="form-select">
                        <option selected>--Select--</option>
                        <option value="District">District</option>
                        <option value="Group">Group</option>
                        <option value="Old District">Old District</option>
                        <option value="Region">Region</option>
                        <option value="State">State</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="" class="">Land Use</label>
                </div>
                <div class="col-6 my-2">
                    <input class="form-control form-control-md" placeholder="Enter usage of Land" name="usage" type="text" />
                </div>
            </div>

            <!-- seller info -->
            <div class="accordion my-2" id="">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="">
                        <button class="accordion-button fs-4 fw-bold" type="button">
                            Seller information
                        </button>
                    </h2>
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="">Name</label>
                        </div>
                        <div class="col-9 my-2">
                            <input class="form-control form-control-md" type="text" name="sellerName" />
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="" class="">Address</label>
                            </div>
                            <div class="col-9 my-2">
                                <input class="form-control form-control-md" name="sellerAddress" type="text" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="" class="">Phone Number</label>
                            </div>
                            <div class="col-6 my-2">
                                <input class="form-control form-control-md" name="sellerPhone" type="number" min="0" step="1" />
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Buyer info -->
                <div class="accordion my-2" id="">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="">
                            <button class="accordion-button fs-4 fw-bold" type="button">
                                Buyer information
                            </button>
                        </h2>
                        <div class="row">
                            <div class="col-3">
                                <label for="" class="pt-2">Name</label>
                            </div>
                            <div class="col-9 my-2">
                                <input class="form-control form-control-md" name="transName" type="text" />
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="" class="">Phone Number</label>
                                </div>
                                <div class="col-6 my-2">
                                    <input class="form-control form-control-md" name="transPhone" type="number" min="0" step="1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion my-2" id="">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="">
                                <button class="accordion-button fs-4 fw-bold" type="button">
                                    Attachments
                                </button>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 my-2">
                            <label for="" class="form-label">Survey plan</label>
                        </div>
                        <div class="col-9 my-2">
                            <input class="form-control" type="file" id="spln" name="survey" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">DEED</label>
                        </div>
                        <div class="col-9 my-2">
                            <input class="form-control" type="file" id="deed" name="deed" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">Receipt</label>
                        </div>
                        <div class="col-9 my-2">
                            <input class="form-control" type="file" id="rpt" name="receipt" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="" class="form-label">CofO</label>
                        </div>
                        <div class="col-9 my-2">
                            <input class="form-control form-control-md" name="cofo" id="cof" type="file" />
                        </div>
                    </div>

                    <!-- buttons -->
                    <div id="btnRCS">
                        <a href="landasset.php" class="btn btn-danger">Close</a>
                        <button class="btn btn-success" name="submit">Submit</button>
                    </div>
                </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            require_once "../../../../com/sess/mods/connect.php";
            require_once "assdata.php";
            $alist = new asdata;
            $assetCategory = "LAND";
            $assetName = "LAND";
            $location = $_POST['location'];
            $address = $_POST['address'];
            $no_of_plots = $_POST['plots'];
            $larea = $_POST['larea'];
            $costPrice = $_POST['cost'];
            $yearPurchased = $_POST['yearPurchased'];
            $fenced = $_POST['fenced'];
            $currStatus = $_POST['status'];
            $fullypaid = $_POST['fullypaid'];
            $litig = $_POST['litig'];
            $natGrid = $_POST['natGrid'];
            $assetHolder = $_POST['assetHolder'];
            $usage = $_POST['usage'];
            $origOwnerName = $_POST['sellerName'];
            $origOwnerAddress = $_POST['sellerAddress'];
            $origOwnerPhone = $_POST['sellerPhone'];
            $surveyPlan = $_POST['survey'];
            $deed = $_POST['deed'];
            $cofo = $_POST['cofo'];
            $receipt = $_POST['receipt'];
            $transName = $_POST['transName'];
            $transPhone = $_POST['transPhone'];

            $assetInsert = $alist->saveLand($assetCategory, $assetName, $location, $address, $no_of_plots, $larea, $costPrice, $yearPurchased, $fenced, $currStatus, $fullypaid, $litig, $natGrid, $assetHolder, $usage, $origOwnerName, $origOwnerAddress, $origOwnerPhone, $surveyPlan, $deed, $cofo, $receipt, $transName, $transPhone);
            if ($assetInsert == 'Success') {
                echo '<script> alert("Data Saved Successfully") </script>';
            } else {
                echo '<script> alert("Unable to Save Data") </script>';
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"     ></script>


</body>

</html>