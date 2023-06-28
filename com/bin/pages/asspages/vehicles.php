<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DCMA - VEHICLE Assets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
  <?php
  require "../../../bin/hed/sandls.php";
  ?>
</head>
<style>
  form {
    margin-top: 5vh;
    padding-bottom: 1px;
  }

  .cont {
    display: block;
    width: 95%;
    height: 140vh;
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

  <div class="container-fluid cont">
    <center>
      <h2>DEEPER LIFE BIBLE CHURCH</h2>
      <font color="brown">
        <h6 id="hed"> </h6>
      </font>
      <h4>ASSET ENTRY FORM</h4>
    </center>
    <form action="" method="post">
      <?php
      require_once "../../../../com/sess/mods/connect.php";
      require_once "assdata.php";
      $alist = new asdata;
      $cats = $alist->get1Cat('vehicle');
      $aloc = $alist->getAssetLoc('');
      ?>

      <div class="row">
        <div class="col-7">
          <label for="" class="">Item Category</label>
        </div>
        <div class="col-5 my-2">
          <select class="form-select" name="categoryName" id="categoryName" onchange="showme(this.value)">
            <option selected>--Select--</option>
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
        <div class="col-7">
          <label for="" class="">Sub Category</label>
        </div>
        <div class="col-5 my-2">
          <select class="form-select" name="subcateg" id="subcateg" onchange="showmeType(this.value)">
            <option selected>Select asset Type</option>
          </select>
        </div>
      </div>


      <div class="row">
        <div class="col-7">
          <label for="" class="">Asset Name</label>
        </div>
        <div class="col-5 my-2">
          <select class="form-select" name="assetName" id="assetName">
            <option selected>--Select--</option>
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
        <div class="col-7">
          <label for="add" class="add">Manufacturer</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="manufacturer" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <label for="" class="">Model</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="model" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <label for="" class="">Plate Number</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="plate" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <label for="" class="">Engine Number</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="engine" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <label for="" class="">Chasis Number</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="chasis" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <label for="" class="">Date of Purchase</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="dop" type="date" />
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <label for="" class="">Cost at Purchase</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="cap" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <label for="" class="">Asset Location</label>
        </div>
        <div class="col-5 my-2">
          <select class="form-select" name="assetLocation">
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
          <label for="" class="">Vehicle Status</label>
        </div>
        <div class="col-5 my-2">
          <select class="form-select" name="assetStatus">
            <option selected>Select Asset Status</option>
            <option value="In Use">In Use</option>
            <option value="Bad">Bad</option>
            <option value="On Repair">On Repair</option>
            <option value="Abandoned">Abandoned</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-7">
          <label for="" class="">Details</label>
        </div>
        <div class="col-5 my-2">
          <textarea class="form-control form-control-md" name="details" id="" cols="30" rows="5" placeholder="Expiry Date|Renewal Date|Driver's Info"></textarea>
        </div>
      </div> 
      <!-- buttons -->
      <div id="btnRCS">
        <a href="assetvehicle.php" class="btn btn-danger">Close</a>
        <button class="btn btn-success" name="submit">Submit</button>
      </div>
    </form>



    <?php
    if (isset($_POST['submit'])) {
      $assetCategory = $_POST['categoryName'];
      $subCategory = $_POST['subcateg'];
      $assetName = $_POST['assetName'];
      $manufacturer = $_POST['manufacturer'];
      $model = $_POST['model'];
      $plateNo = $_POST['plate'];
      $engineNo = $_POST['engine'];
      $chasisNo = $_POST['chasis'];
      $sn = "Plate No: " . $plateNo . "| Engine No: " . $engineNo . "| Chasis No: " . $chasisNo;
      $dop = $_POST['dop'];
      $cap = $_POST['cap'];
      $assetLocation = $_POST['assetLocation'];
      $assetStatus = $_POST['assetStatus'];
      $details = $_POST['details'];
      $assetInsert = $alist->createVehicleAsset($assetCategory, $subCategory, $assetName, $manufacturer, $model, $sn, $dop, $cap, $assetLocation, $assetStatus, $details);
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>