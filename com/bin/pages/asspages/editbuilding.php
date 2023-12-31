<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCMA - BUILDINGS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />
  </head>
  <style>
    form {
      margin-top: 5vh;
    }
    .cont{
      display:block;
      width: 98%;
      margin:auto;
      background-color: #ddd;
    }
    .back{
      text-decoration: none;
      color: #fff;
    }
    .btn{
      width: 20%;
      margin-left: 5px;
      background: #000;
    }
    /* desktop screen */
    @media only screen  and (min-width: 600px) {
      .cont{
      width: 50%;
    }
    .btn{
      width: 10%;
    }
    }
  </style>
  <body> 
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
    <img id="logo"  src="img/clogo.png" width="5%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Building Asset Management
    </nav>
     <!-- back button -->
    <a class="back" href="asspage.php"> <button class = "btn btn-dark">
      BACK
    </button></a>
    <center>
        <a href="building.php" class="btn btn-dark mb-3">Asset Page</a> &nbsp;&nbsp;
        <a href="buildingReport.php" class="btn btn-dark mb-3">Asset Report</a> &nbsp;&nbsp;
        <a href="editbuilding.php" class="btn btn-dark mb-3">Update Asset</a> &nbsp;&nbsp;
        <!-- <a href="editict.php" class="btn btn-dark mb-3">Delete ICT Asset</a>-->
    </center> 
    <div class="container-fluid cont">
      <form action="building.php" method="post">
      <center>
      <h2>DEEPER LIFE BIBLE CHURCH</h2>
     <font color="brown"> <h6 id="hed"> </h6> </font>
      <h4>ASSET ENTRY FORM</h4>
      </center>
        <!-- <div class="mb-3">
          <label for="cty" class="cty">Country</label>
          <label for="state" class="state">State</label>
          <label for="reg" class="reg">Region</label>
          <label for="old-grp" class="old_grp">Old Group</label>
          <label for="grp" class="grp">Group</label>
        </div> -->
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
            <input class="form-control form-control-md" name="address" placeholder="Enter Address of Building" type="text" />
          </div>
          </div>
         <div class="row">
         <div class="col-7 my-2">
            <label for="" class="">Year Completed</label>
          </div>
          <div class="col-5">
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
            <select name="currStatus"
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
            <select name="usage"
              class="form-select "
              aria-label="Default select example"
            >
              <option selected>Select Asset Location</option>
              <option value="Adult Church">Adult Church</option>
              <option value="General Auditorium">General Auditorium</option>
              <option value="Canteen">Canteen</option>
              <option value="Office space">Office space</option>
              <option value="Youth Church">Youth Church</option>
              <option value="Children Church">Children Church</option>
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
          <div class = "row">
        <div class ='col-7'>
        <button class = "btn btn-dark">Reset</button>
        </div>
         
        <div class ='col-5'>
        <button class = "btn btn-success" name="submit1" value="Register">Submit</button>
        </div>
      </div>
      </form>
      <?php
      if(isset($_POST['submit1']))
{  
  
  require_once "../../../../com/sess/mods/connect.php";
  require_once "assdata.php";
  $alist = new asdata;          
 // $alist2 = new asdata2; 
  //  $cat1 = $alist->get1Cat('music');   

    $assetCategory = $_POST['item_category'];
    $assetName = $_POST['assetName'];
    $address = $_POST['address'];
    $no_of_plots = $_POST['no_of_plots'];
    $larea = $_POST['larea'];
    $costPrice = $_POST['cost_price'];
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
    $assetInsert = $alist-> saveBuilding($assetCategory, $assetName, $address,$no_of_plots,$larea, $costPrice, $fenced, $currStatus, $origOwnerName, $origOwnerAddress, $origOwnerPhone, $buildingPlan, $no_floors, $natGrid, $estCost, $yearCompleted, $buildingState, $assetHolder, $usage, $buildingMaterial);
    if($assetInsert == 'Success'){
     echo '<script> alert("Data Saved Successfully") </script>';

    }else{
      echo '<script> alert("Unable to Save Data") </script>';
    }
  }
?>
    </div>
    <script>
   var state = sessionStorage ['astate'];
   var region = sessionStorage['aregion'];
   var ogroup = sessionStorage ['aogroup'];
   var ugroup = sessionStorage ['group'];
   var district = sessionStorage ['district'];
   var loc = sessionStorage ['loc'];
  // alert(state + ogroup + ugroup + district+loc);
  var msg = state + " | " + region + " | "+ogroup + " | " + ugroup +" | " + district +" DISTRICT";

  document.getElementById('hed').innerHTML = msg; 
</script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
