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
  $costP = $_POST['costPrice'];
  $currStatus = $_POST['status'];
  $fenced = $_POST['fenced'];
  $status = $_POST['status'];
  $origOwnerName = $_POST['status'];
  $origOwnerAddress = $_POST['status'];
  $origOwnerPhone = $_POST['status'];
  $buildingPlan = $_POST['status'];
  $no_floors = $_POST['no_floors'];
  $natGrid = $_POST['natGrid'];
  $yearCompleted = $_POST['yearCompleted'];
  $buildingState = $_POST['status'];
  $assetHolder = $_POST['assetHolder'];
  $usage = $_POST['usage'];
  $buildingMaterial = $_POST['buildingMaterial']; 
  $sql = $updatedata->updateBuilding_old($assetName, $address, $costP, $currStatus,$id);
  // $assetInsert = $alist-> saveBuilding($assetCategory, $assetName, $address,$no_of_plots,$larea, $costPrice, $fenced, $currStatus, $origOwnerName, $origOwnerAddress, $origOwnerPhone, $buildingPlan, $no_floors, $natGrid, $estCost, $yearCompleted, $buildingState, $assetHolder, $usage, $buildingMaterial);
  // $sql = $updatedata->updateBuilding($assetName, $address, $costP, $fenced, $currStatus, $origOwnerName, $origOwnerAddress, $origOwnerPhone, $buildingPlan, $no_floors, $natGrid, $yearCompleted, $buildingState, $assetHolder, $usage, $buildingMaterial,$id);
  // Mesage after updation  
  echo "<script>alert('Record Updated successfully');</script>";
  // Code for redirection
  echo "<script>window.location.href='buildingasset.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>UPDATE LAND ASSET </title>
  <?php
  require "../../../bin/hed/sandls.php";
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    $sql = $onerecord->fetchoneBuildingrecord($id);
    $cnt = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
      
      <form name="insertrecord" method="post">
        
        
<?php } ?>
<div id="btnRCS">
  <a href="buildingasset.php" class="btn btn-danger">Back</a>
  <!-- <button class="btn btn-success" name="update">Update</button> -->
</div>
<!-- <div class="row" style="margin-top:1%">
  <div class="col-md-8">
    <input type="submit" name="update" value="Update">
  </div>
</div> -->

<?php
        require_once "../../../../com/sess/mods/connect.php";
        require_once "assdata.php";
        $alist = new asdata;      
        
        $aloc = $alist->getAssetLoc('');
        $aloc = $alist->getAssetLoc('');

        ?>


<?php
    // Get the userid
    $id = intval($_GET['id']);
    $onerecord = new DB_con();
    $sql = $onerecord->fetchoneBuildingrecord($id);
    $cnt = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>


<center>
      <h2>DEEPER LIFE BIBLE CHURCH</h2>
     <font color="brown"> <h6 id="hed"> </h6> </font>
      <h4>EDIT ASSET FORM</h4>
      </center>
     <hr>

      <div class="row">
          <div class="col-5">Asset Name
          </div>
          <div class="col-7">
            <input style = "background:orange" type="text" name="assetName" value="<?php echo htmlentities($row['assetName']); ?>" class="form-control" required>
          </div>
        </div>
        <div class="row">  
          <div class="col-3">
            <label for="" class="">Building Plan</label>
          </div>
          <div class="col-9 my-2">
          <input style = "background:orange" type="text" id="plan1" name="plan1" value="<?php echo htmlentities($row['building_plan']); ?>" class="form-control" required>
            <input class="form-control form-control-md" id="plan"  onchange = "repeatvalue()" type="text" name="plan" />
          </div>
          <script>
      function repeatvalue() {
         var txtName = document.getElementById("plan");
         var lblName = document.getElementById("plan1");
         lblName.innerHTML = txtName.value;
      }
   </script>
          </div>
          <div class="row">
          <div class="col-3">
            <label for="" class="">fenced?</label>
          </div>
          <div class="col-9 my-2">
          <input style = "background:orange" type="text" name="fenced1" value="<?php echo htmlentities($row['fenced']); ?>" class="form-control" required>
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
          <input style = "background:orange" type="text" name="no_floors1" value="<?php echo htmlentities($row['no_of_floors']); ?>" class="form-control" required>
            <input class="form-control form-control-md" name="no_floors" type="number" />
          </div>
         </div>
        <div class="row">
        <div class="col-5">
            <label for="" class="">Connected to national grid</label>
          </div>
          <div class="col-7">
          <input style = "background:orange" type="text" name="natGrid1" value="<?php echo htmlentities($row['national_grid']); ?>" class="form-control" required>
          <select class="form-select" name="natGrid" id="">
            <option value="Select">--Select--</option>
              <option value="Yes">Yes</option>
              <option value="Yes">No</option>
            </select>
          </div>
          </div>
       <div class="row">
       <div class="col-5">
            <label for="" class="">Cost of Building</label>
          </div>
          <div class="col-7 my-2">
          <input style = "background:orange" type="text" name="costPrice1" value="<?php echo htmlentities($row['cost_price']); ?>" class="form-control" required>
            <input class="form-control form-control-md" name="costPrice" type="text" />
          </div>
       </div>
       <div class="row">
          <div class="col-3">
            <label for="" class="">Address</label>
          </div>
          <div class="col-9 my-2">
          <input style = "background:orange" type="text" name="address1" value="<?php echo htmlentities($row['address']); ?>" class="form-control" required>
            <input class="form-control form-control-md" name="address" placeholder="Enter Address of Building" type="text" />
          </div>
          </div>
         <div class="row">
         <div class="col-7 my-2">
            <label for="" class="">Year Completed</label>
          </div>
          <div class="col-5">
          <input style = "background:orange" type="text" name="yearCompleted1" value="<?php echo htmlentities($row['year_completed']); ?>" class="form-control" required>
            <select name="yearCompleted"
              class="form-select"
              aria-label="Default select example"
            >
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
          <input style = "background:orange" type="text" name="status1" value="<?php echo htmlentities($row['current_status']); ?>" class="form-control" required>
            <select name="status"
              class="form-select "
              aria-label="Default select example"
            >
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
            <label for="" class=""
              >Asset Holder</label
            >
          </div>
          <div class="col-5">
          <input style = "background:orange" type="text" name="assetHolder1" value="<?php echo htmlentities($row['asset_holder']); ?>" class="form-control" required>
            <select name="assetHolder"
              class="form-select "
              aria-label="Default select example"
            >
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
            <label for="" class=""
              >Usage</label
            >
          </div>
          <div class="col-5">
          <input style = "background:orange" type="text" name="usage1" value="<?php echo htmlentities($row['usage']); ?>" class="form-control" required>
            <select name="usage"
              class="form-select "
              aria-label="Default select example"
            >
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
            <label for="" class=""
              >Building Materials</label
            >
          </div>
          <div class="col-5">
          <input style = "background:orange" type="text" name="buildingMaterial1" value="<?php echo htmlentities($row['building_material']); ?>" class="form-control" required>
            <select name="buildingMaterial"
              class="form-select "
              aria-label="Default select example"
            >
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
            <label for="ori_owner" class="ori_owner pt-2"
              >Name</label
            >
          </div>
          <div class="col-9 my-2">
          <input style = "background:orange" type="text" name="origOwnerName1" value="<?php echo htmlentities($row['orig_owner_name']); ?>" class="form-control" required>
            <input class="form-control form-control-md" name="origOwnerName" type="text" />
          </div>
          <div class="row">
          <div class="col-3">
            <label for="ori_add" class="ori_add">Address</label>
          </div>
          <div class="col-9 my-2">
          <input style = "background:orange" type="text" name="origOwnerAddress1" value="<?php echo htmlentities($row['orig_owner_address']); ?>" class="form-control" required>
            <input class="form-control form-control-md" name="origOwnerAddress" type="text" />
          </div>
          </div>
        <div class="row">
        <div class="col-6">
            <label for="add" class="cty">Phone Number</label>
          </div>
          <div class="col-6 my-2">
          <input style = "background:orange" type="text" name="origOwnerPhone1" value="<?php echo htmlentities($row['orig_owner_phone']); ?>" class="form-control" required>
            <input class="form-control form-control-md" name="origOwnerPhone" type="text" />
          </div>
        </div>
        
    </div>
  </div>
  <?php } ?>
          <!-- buttons -->
         
      <div id="btnRCS">
        <a href="buildingasset.php" class="btn btn-danger">Close</a>
        <button class="btn btn-success" name="update">Update</button>
      </div>





</form>
</div>
</body>
</htm