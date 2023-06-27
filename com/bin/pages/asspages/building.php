<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCMA - BUILDINGS</title>
    <?php
  require "../../../bin/hed/sandls.php";
  ?>
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    /> -->
</head>
<style>
form {
    margin-top: 5vh;
    padding-bottom: 1px;
}

.cont {
    display: block;
    width: 95%;
    height: 130vh;
    margin: auto;
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
        width: 45%;
    }

    #hed {
        font-size: 15px;
        width: 100%;
    }

    #btn {
        width: 10%;
    }
}
</style>

<body>
    <div class="container-fluid cont my-4 bg-secondary">
        <form action="building.php" method="post">
            <?php
        require_once "../../../../com/sess/mods/connect.php";
        require_once "assdata.php";
        $alist = new asdata;      
        
        $aloc = $alist->getAssetLoc('');
        // $aloc = $alist->getAssetLoc('');

        ?>
            <center>
                <h2>DEEPER LIFE BIBLE CHURCH</h2>
                <font color="brown">
                    <h6 id="hed"> </h6>
                </font>
                <h4>ASSET ENTRY FORM</h4>
            </center>

            <div class="row">
                <div class="col-3">
                    <label for="" class="">Building plan</label>
                </div>
                <div class="col-9 my-2">
                    <input class="form-control form-control-md" type="text" name="plan" />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="" class="">fenced?</label>
                </div>
                <div class="col-9 my-2">
                    <select class="form-select" name="fenced" id="">
                        <option value="Select">--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="Yes">No</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <label for="" class="">No of Floors</label>
                </div>
                <div class="col-7 my-2">
                    <input class="form-control form-control-md" name="no_floors" type="number" />
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <label for="" class="">Connected to national grid</label>
                </div>
                <div class="col-7">
                    <select class="form-select" name="natGrid" id="">
                        <option value="Select">--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="Yes">No</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <label for="" class="">Estimated Cost</label>
                </div>
                <div class="col-7 my-2">
                    <input class="form-control form-control-md" name="estCost" type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="" class="">Address</label>
                </div>
                <div class="col-9 my-2">
                    <input class="form-control form-control-md" name="address" placeholder="Enter Address of Building"
                        type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col-7 my-2">
                    <label for="" class="">Year Completed</label>
                </div>
                <div class="col-5">
                    <select name="yearCompleted" class="form-select" aria-label="Default select example">
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
                <div class="col-7 my-2">
                    <label for="" class="">Current Status</label>
                </div>
                <div class="col-5">
                    <select name="currStatus" class="form-select " aria-label="Default select example">
                        <option selected>Select Current Status</option>
                        <option value="Abandoned">Abandoned</option>
                        <option value="Completed">Completed</option>
                        <option value="Non-completed3">Non-completed</option>
                        <option value="Dilapidated">Dilapidated</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="" class="">Asset Holder</label>
                </div>
                <div class="col-5">
                    <select name="assetHolder" class="form-select " aria-label="Default select example">
                        <option selected>Select Asset Holder</option>
                        <option value="State">State</option>
                        <option value="Old District">Old District</option>
                        <option value="Group">Group</option>
                        <option value="District">District</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <label for="" class="">Usage</label>
                </div>
                <div class="col-5">
                    <select name="usage" class="form-select " aria-label="Default select example">
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
                <div class="col-7">
                    <label for="" class="">Building Materials</label>
                </div>
                <div class="col-5">
                    <select name="buildingMaterial" class="form-select " aria-label="Default select example">
                        <option selected>Select Material Used</option>
                        <option value="Block">Block</option>
                        <option value="Wood">Wood</option>
                        <option value="Iron Sheet">Iron Sheet</option>
                        <option value="Tarpaulin">Tarpaulin</option>
                    </select>
                </div>
            </div>

            <!-- seller info -->
            <div class="accordion my-2" id="">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="">
                        <button class="accordion-button fs-4 fw-bold" type="button">
                            Original Owner Information
                        </button>
                    </h2>
                    <div class="row">
                        <div class="col-3">
                            <label for="ori_owner" class="ori_owner pt-2">Name</label>
                        </div>
                        <div class="col-9 my-2">
                            <input class="form-control form-control-md" name="origOwnerName" type="text" />
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="ori_add" class="ori_add">Address</label>
                            </div>
                            <div class="col-9 my-2">
                                <input class="form-control form-control-md" name="origOwnerAddress" type="text" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="add" class="cty">Phone Number</label>
                            </div>
                            <div class="col-6 my-2">
                                <input class="form-control form-control-md" name="origOwnerPhone" type="text" />
                            </div>
                        </div>

                    </div>
                </div>

                <!-- buttons -->

                <div id="btnRCS">
                    <a href="buildingasset.php" class="btn btn-danger">Close</a>
                    <button class="btn btn-success" name="submit">Submit</button>
                </div>
        </form>
        <?php
      if(isset($_POST['submit1']))
{  
  
  require_once "../../../../com/sess/mods/connect.php";
  require_once "assdata.php";
  $alist = new asdata;      
  
  $aloc = $alist->getAssetLoc('');
 // $alist2 = new asdata2; 
  //  $cat1 = $alist->get1Cat('music');   

    $assetCategory = $_POST['item_category'];
    $assetName = $_POST['assetName'];
    $address = $_POST['address'];
    $no_of_plots = $_POST['no_of_plots'];
    $larea = $_POST['larea'];
    $costPrice = $_POST['cost_price'];
    $cp = number_format($costPrice);
    $fenced = $_POST['fenced']; 
    $currStatus = $_POST['currStatus'];
    $origOwnerName = $_POST['origOwnerName'];
    $origOwnerAddress = $_POST['origOwnerAddress'];
    $origOwnerPhone = $_POST['origOwnerPhone'];
    $buildingPlan = $_POST['plan'];
    $no_floors = $_POST['no_floors'];
    $natGrid = $_POST['natGrid'];
    $estCost = $_POST['estCost'];
    $yearCompleted = $_POST['yearCompleted'];
    $buildingState = $_POST['currStatus'];
    $assetHolder = $_POST['assetHolder'];
    $usage = $_POST['usage'];
    $buildingMaterial = $_POST['buildingMaterial'];
 
   // `item_category`, `assetName`, `address`, `no_of_plots`, `larea`, `cost_price`, `fenced`, `current_status`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`, `building_plan`, `no_of_floors`, `national_grid`, `estimated_cost`, `year_completed`, `building_state`, `asset_holder`, `usage`, `building_material`
    // $sql= "INSERT INTO `assetlb`(`id`, `country`, `state`, `region`, `ogroup`, `ugroup`, `district`, `loc`,`building_plan`, `address`, `fenced`, `current_status`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`,`no_of_floors`, `national_grid`, `estimated_cost`, `year_completed`, `building_state`, `asset_holder`, `usage`, `building_material`) values (null,'Nigeria','Rivers','Port-Harcourt','Rumuigbo','Mgbuoba','Aganorlu','Aganorlu','$plan','$address', '$fenced', '$currStatus','$origOwnerName', '$origOwnerAddress','$origOwnerPhone', '$no_floors', '$natGrid', '$estCost','$yearCompleted','$buildingState','$assetHolder','$usage','$buildingMaterial')";
    $assetInsert = $alist-> saveBuilding($assetCategory, $assetName, $address,$no_of_plots,$larea, $cp, $fenced, $currStatus, $origOwnerName, $origOwnerAddress, $origOwnerPhone, $buildingPlan, $no_floors, $natGrid, $estCost, $yearCompleted, $buildingState, $assetHolder, $usage, $buildingMaterial);
    if($assetInsert == 'Success'){
     echo '<script> alert("Data Saved Successfully") </script>';

    }else{
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>