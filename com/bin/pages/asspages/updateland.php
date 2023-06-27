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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
</head>
<style>
    .cont {
        display: block;
        height: 230vh;
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
            <!-- begining -->


            <form action="land.php" method="post">
                <div class="mb-3">
                    <label for="cty" class="cty">Country</label>
                    <label for="state" class="state">State</label>
                    <label for="reg" class="reg">Region</label>
                    <label for="old-grp" class="old_grp">Old Group</label>
                    <label for="grp" class="grp">Group</label>
                </div>
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
                <div class="row">
                    <div class="col-6 my-2">
                        <label for="" class="">Current Status</label>
                    </div>
                    <div class="col-6">
                        <select name="status" class="form-select " aria-label="Default select example">
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
                    <div class="col-7">
                        <select name="fullypaid" class="form-select " aria-label="Default select example">
                            <option selected>--Select--</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <!-- under litigation -->
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
                    <?php } ?>
                    <!-- buttons -->
                    <div id="btnRCS">
                        <a href="landasset.php" class="btn btn-danger">Close</a>
                        <button class="btn btn-success" name="submit">Submit</button>
                    </div>
                    </div>
            </form>


    </div>
</body>
</htm