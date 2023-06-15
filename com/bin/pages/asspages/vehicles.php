<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DCMA - Vehicles Assets</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
</head>
<style>
  form {
    margin-top: 5vh;
    padding-bottom: 1px;
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

  #hed {
    color: brown;
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
      <h6 id="hed"> </h6>
      <h4>ASSET ENTRY FORM</h4>
    </center>
    <form action="ict.php" method="post">
      <?php
    require_once "../../../../com/sess/mods/connect.php";
        require_once "assdata.php";
        $alist = new asdata;      
        
        $aloc = $alist->getAssetLoc('');
        $aloc = $alist->getAssetLoc('');
        ?>
      <div class="row">
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">ID</label>
        </div>
        <div class="col-5 my-2">
          <select class="form-select" name="" id="" aria-label="Default select example">
            <option selected>Vehicle</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Category</label>
        </div>
        <div class="col-5 my-2">
          <select class="form-select" name="item_type" id="assetType" aria-label="Default select example">
            <option selected>Select Category Type</option>

          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">type of vehicle</label>
        </div>
        <div class="col-5 my-2">
          <select class="form-select" name="assetName" id="assetName" aria-label="Default select example">
            <option selected>Select Type</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="add" class="add">Vehicle Name</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="vehnme" placeholder="Enter Vehicle Name" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">OEM</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="oem" placeholder="Enter Original Equipment Manufacturer " type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Plate Number</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="sn" placeholder="Enter Plate Number" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Driver's Name</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="drvnme" placeholder="Enter Driver's Name " type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Driver's Phone Number</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="drvno" placeholder="Enter Phone Number " type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Driver's Address</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="oem" placeholder="Enter Driver's Address " type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Date of Purchase</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="dop" type="date" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Papers Expiry Date</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="dop" type="date" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Papers Renewal Date</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="dop" type="date" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Cost of Purchase</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="cap" placeholder="Enter Cost at Purchase" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Vehicle Location</label>
        </div>
        <div class="col-5 my-2">
          <select class="form-select" name="location" aria-label="Default select example">
            <option selected>Select Vehicle Location</option>
            <?php
            foreach ($aloc as $loc) {
              echo '<option value = ' . $loc['assloc'] . '>' . strtoupper($loc['assloc']) . '</option>';
            }
            ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Vehicle Status</label>
        </div>
        <div class="col-5 my-2">
          <select class="form-select" name="status" aria-label="Default select example">
            <option selected>Select Vehicle Status</option>
            <option value="In Use">In Use</option>
            <option value="Bad">Bad</option>
            <option value="On Repair">On Repair</option>
            <option value="Abandoned">Abandoned</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Engine Number</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="cap" placeholder="Enter Engine Number" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-7 my-3">
          <label for="" class="">Chasis Number</label>
        </div>
        <div class="col-5 my-2">
          <input class="form-control form-control-md" name="cap" placeholder="Enter Chasis Number" type="text" />
        </div>
      </div>
      <!-- buttons -->
      <div id="btnRCS">
        <a href="assetvehicle.php" class="btn btn-danger">Close</a>
        <button class="btn btn-success" name="submit">Save</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#categoryName').change(function() {
        loadAssetType($(this).find(':selected').val())
      })
      $('#assetType').change(function() {
        loadAssetName($(this).find(':selected').val())
      })
    });

    function loadCategory() {
      $.ajax({
        type: "POST",
        url: "ajax.php",
        data: "get=categoryName"
      }).done(function(result) {
        $(result).each(function() {
          $("#categoryName").append($(result));
        })
      });
    }

    function loadAssetType(cat_ID) {
      $("#assetType").children().remove()
      $.ajax({
        type: "POST",
        url: "ajax.php",
        data: "get=assetType&cat_ID=" + cat_ID
      }).done(function(result) {
        $("#assetType").append($(result));
      });
    }

    function loadAssetName(type_ID) {
      $("#assetName").children().remove()
      $.ajax({
        type: "POST",
        url: "ajax.php",
        data: "get=assetName&type_ID=" + type_ID
      }).done(function(result) {
        $("#assetName").append($(result));
      });
    }
    //init the Categories
    loadCategory();
  </script>
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