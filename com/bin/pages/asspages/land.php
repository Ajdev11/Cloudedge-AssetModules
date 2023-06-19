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
        <form action="land.php" method="post">
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
                <div class="col-3">
                    <label for="" class="">Fenced?</label>
                </div>
                <div class="col-9 my-2">
                    <select name="fenced" class="form-select " aria-label="Default select example">
                        <option selected>--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="" class="">No of Plots</label>
                </div>
                <div class="col-9 my-2">
                    <input class="form-control form-control-md" name="plots" type="text" />
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
                    <input class="form-control form-control-md" name="cost" type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col-6 my-2">
                    <label for="" class="">Year of Purchase</label>
                </div>
                <div class="col-6">
                    <select name="yearPurchased" class="form-select" aria-label="Default select example">
                        <option selected>Select Date</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                    </select>
                </div>
            </div>

            <!-- added under litigation -->
            <div class="row">
                <div class="col-5 my-2">
                    <label for="" class="">Under Litigation</label>
                </div>
                <div class="col-7">
                    <select name="litig" class="form-select " aria-label="Default select example">
                        <option selected>--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <!-- added fully paid -->
            <div class="row">
                <div class="col-5 my-2">
                    <label for="" class="">Fully paid</label>
                </div>
                <div class="col-7">
                    <select name="fullypaid" class="form-select " aria-label="Default select example">
                        <option selected>--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>
            <!-- added current status -->
            <div class="row">
                <div class="col-5 my-2">
                    <label for="" class="">Current Status</label>
                </div>
                <div class="col-7">
                    <select name="status" class="form-select " aria-label="Default select example">
                        <option selected>--Select--</option>
                        <option value="Abandoned">fully developed</option>
                        <option value="Completed">developed</option>
                        <option value="Uncompleted">Under development</option>
                        <option value="">undeveloped</option>
                    </select>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-6 my-2">
                    <label for="" class="">Current Status</label>
                </div>
                <div class="col-6">
                    <select name="status" class="form-select " aria-label="Default select example">
                        <option selected>--Select--</option>
                        <option value="Abandoned">Abandoned</option>
                        <option value="Completed">Completed</option>
                        <option value="Uncompleted">Uncompleted</option>
                    </select>
                </div>
            </div> -->
            <div class="row">
                <div class="col-6 my-2">
                    <label for="" class="">National Grid</label>
                </div>
                <div class="col-6">
                    <select name="natGrid" class="form-select " aria-label="Default select example">
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
                    <select name="assetHolder" class="form-select " aria-label="Default select example">
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
                                <input class="form-control form-control-md" name="sellerPhone" type="text" />
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
                                    <input class="form-control form-control-md" name="transPhone" type="text" />
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
                        <button class="btn btn-success" name="submit">Save</button>
                    </div>
        </form>
        <?php
        if (isset($_POST['submitL'])) {

            require_once "../../../../com/sess/mods/connect.php";
            require_once "assdata.php";
            $alist = new asdata;

            $assetCategory = "LAND";
            $assetName = "LAND";
            $address = $_POST['address'];
            $fenced = $_POST['fenced'];
            $no_of_plots = $_POST['plots'];
            $larea = $_POST['larea'];
            $costPrice = $_POST['cost'];
            $cp = number_format($costPrice);
            $yearPurchased = $_POST['yearPurchased'];
            $litig = $_POST['litig'];
            $fullypaid = $_POST['fullypaid'];
            $currStatus = $_POST['status'];
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
            $location = $_POST['location'];
            $transName = $_POST['transName'];
            $transPhone = $_POST['transPhone'];

            // `item_category`, `assetName`, `address`, `no_of_plots`, `larea`, `cost_price`, `year_of_purchase`, `fenced`, `current_status`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`, `trans_by`, `trans_phone`, `attach_surveyplan`, `attach_deed`, `attach_receipt`, `attach_cofo`, `national_grid`,  `asset_holder`, `usage`

            // `item_category`, `assetName`, `address`, `no_of_plots`, `larea`, `cost_price`, `fenced`, `current_status`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`, `building_plan`, `no_of_floors`, `national_grid`, `estimated_cost`, `year_completed`, `building_state`, `asset_holder`, `usage`, `building_material`
            // $sql= "INSERT INTO `assetlb`(`id`, `country`, `state`, `region`, `ogroup`, `ugroup`, `district`, `loc`,`building_plan`, `address`, `fenced`, `current_status`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`,`no_of_floors`, `national_grid`, `estimated_cost`, `year_completed`, `building_state`, `asset_holder`, `usage`, `building_material`) values (null,'Nigeria','Rivers','Port-Harcourt','Rumuigbo','Mgbuoba','Aganorlu','Aganorlu','$plan','$address', '$fenced', '$currStatus','$origOwnerName', '$origOwnerAddress','$origOwnerPhone', '$no_floors', '$natGrid', '$estCost','$yearCompleted','$buildingState','$assetHolder','$usage','$buildingMaterial')";
            $assetInsert = $alist->saveLand($assetCategory, $assetName, $address, $no_of_plots, $larea, $cp, $yearPurchased,  $litig,  $fullypaid, $fenced, $currStatus, $origOwnerName, $origOwnerAddress, $origOwnerPhone, $transName, $transPhone, $surveyPlan, $deed, $receipt, $cofo, $natGrid, $assetHolder, $usage);
            if ($assetInsert == 'Success') {
                echo '<script> alert("Data Saved Successfully") </script>';
            } else {
                echo '<script> alert("Unable to Save Data") </script>';
            }
        }
        ?>
    </div>
    <script>
        var state = sessionStorage['astate'];
        var region = sessionStorage['aregion'];
        var ogroup = sessionStorage['aogroup'];
        var ugroup = sessionStorage['group'];
        var district = sessionStorage['district'];
        var loc = sessionStorage['loc'];
        // alert(state + ogroup + ugroup + district+loc);
        var msg = state + " | " + region + " | " + ogroup + " | " + ugroup + " | " + district + " DISTRICT";

        document.getElementById('hed').innerHTML = msg;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>