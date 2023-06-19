<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DCMA - FURNITURE</title>
  <?php
  require "../../../bin/hed/sandls.php";
  ?>
  <style>
    form {
      margin-top: 5vh;
      padding-bottom: 1px;
    }

    .cont {
      display: block;
      width: 95%;
      height: 90vh;
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
</head>

<body>

  <div class="container-fluid cont my-4 bg-secondary text-white">
    <!-- form start here -->
    <form action="" method="POST">
      <center>
        <h2>DEEPER LIFE BIBLE CHURCH</h2>
        <font color="brown">
          <h6 id="hed"> </h6>
        </font>
        <h4>ASSET ENTRY FORM</h4>
      </center>
      <?php
      require_once "../../../../com/sess/mods/connect.php";
      require_once "assdata.php";
      $alist = new asdata;
      // $cats = $alist->getCat('chair', 'tables', 'pulpit'); 
      $cats = $alist->get1Cat('Furniture');
      $aloc = $alist->getAssetLoc('');
      ?>
      <div class="row">
        <div class="col-5">
          <label for="" class="">Asset Category</label>
        </div>
        <div class="col-7 my-2">
          <select class="form-select" name="assetCategory" id="categoryName" aria-label="Default select example" onchange="showme(this.value)">
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
          <!-- pass showmeType function to onchange event -->
          <select class="form-select" name="subCategory" id="subcateg" onchange="showmeType(this.value)">
            <option selected>Select Asset Type</option>
          </select>
          <!-- write a script for the function showmeType -->
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
          <label for="" class="qty">Asset Name</label>
        </div>
        <div class="col-7">
          <select class="form-select" name="assetName" id="assetName">
            <option selected> Select Asset Name </option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label for="">Quantity</label>
        </div>
        <div class="col-7 my-2">
          <input class="form-control form-control-md" name="quantity" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label for="" class="">Date of Purchase</label>
        </div>
        <div class="col-7 my-2">
          <input class="form-control form-control-md" name="dop" type="date" />
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label for="" class="">Cost at Purchase</label>
        </div>
        <div class="col-7 my-2">
          <input class="form-control form-control-md" name="cap" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label for="" class="">Asset Location</label>
        </div>
        <div class="col-7 my-2">
          <select class="form-select" name="location" aria-label="Default select example">
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
          <select class="form-select" name="status" aria-label="Default select example">
            <option selected>Select Asset Status</option>
            <option value="In Use">In Use</option>
            <option value="Bad">Bad</option>
            <option value="On Repair">On Repair</option>
            <option value="Abandoned">Abandoned</option>
          </select>
        </div>
      </div>
      <!-- buttons -->
      <div id="btnRCS">
        <a href="furasset.php" class="btn btn-danger">Close</a>
        <button class="btn btn-success" name="submit">Submit</button>
      </div>
    </form>
  </div>
  <script>
    var state = sessionStorage['astate'];
    var region = sessionStorage['aregion'];
    var ogroup = sessionStorage['aogroup'];
    var ugroup = sessionStorage['group'];
    var district = sessionStorage['district'];
    var loc = sessionStorage['loc'];
    var msg = state + " | " + region + " | " + ogroup + " | " + ugroup + " | " + district + " DISTRICT";

    document.getElementById('hed').innerHTML = msg;
  </script>
  <!--inserting into the database  -->
  <?php
  if (isset($_POST['submit'])) {
    $assetCategory = $_POST['assetCategory'];
    $subCategory = $_POST['subCategory'];
    $assetName = $_POST['assetName'];
    $quantity = $_POST['quantity'];
    $dop = $_POST['dop'];
    $cap = $_POST['cap'];
    $location = $_POST['location'];
    $status = $_POST['status'];

    $assetInsert = $alist->createAsset($assetCategory, $subCategory, $assetName, $quantity, $dop, $cap, $location, $status);
    if ($assetInsert == 'Success') {
      echo '<script> alert("Data saved successfully") </script>';
    } else {
      echo '<script> alert("Unable to save data") </script>';
    }
  }
  ?>
</body>

</html>