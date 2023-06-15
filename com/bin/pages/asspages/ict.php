<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DCMA - ICT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
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
      width: 98%;
      margin: auto;
      background-color: #ddd;
    }
    #btnRCS {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    #btn {
      width: 20%;
      margin-left: 5px;
      background: #000;
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
  <div class="container-fluid cont">
    <center>
      <h2>DEEPER LIFE BIBLE CHURCH</h2>
      <font color="brown">
        <h6 id="hed"> </h6>
      </font>
      <h4>ASSET ENTRY FORM</h4>
    </center>
    <form action="ict.php" method="post">
      <?php
      require_once "../../../../com/sess/mods/connect.php";
      require_once "assdata.php";
      $alist = new asdata;
      $cats = $alist->getCat('ict', 'electrical', 'electronics');
      // print_r($cats);
      // die();
      ?>

      <div class="row">
        <div class="col-5">
          <label for="" class="">Item Category</label>
        </div>
        <div class="col-7 my-2">
          <select class="form-select" name="item_category" id="categoryName" aria-label="Default select example" onchange="showme(this.value)">
            <option selected>Select Item Category</option>
            <?php
            foreach ($cats as $cat) {
              echo '<option value = ' . $cat['categoryName'] . '>' . strtoupper($cat['categoryName']) . '</option>';
            }
            ?>
          </select>
          <script type="text/javascript">
            function showme(val) {
              //alert(val);
              $.post("assbrg.php", {
                Categ: val
              }, function(data, status) {
                //alert(data);
                //$("#subcateg").html(data);
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
          <select class="form-select" name="subcateg" id="subcateg" aria-label="Default select example">
            <option selected>Select Asset Type</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label for="" class="">Asset Name</label>
        </div>
        <div class="col-7 my-2">
          <select class="form-select" name="assetName" id="assetName" aria-label="Default select example">
            <option selected>Select Item Name</option>
            <!-- <option value="ICT">HP Pavilion</option>
            <option value="Electronics">DELL Inspiron</option>
            <option value="Electricals">HP EliteBok</option> -->
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label for="add" class="add">OEM</label>
        </div>
        <div class="col-7 my-2">
          <input class="form-control form-control-md" name="oem" placeholder="Enter Original Equipment Manufacturer" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label for="" class="">Model</label>
        </div>
        <div class="col-7 my-2">
          <input class="form-control form-control-md" name="model" placeholder="Enter Model" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label for="" class="">Serial Number</label>
        </div>
        <div class="col-7 my-2">
          <input class="form-control form-control-md" name="sn" placeholder="Enter Serial Number" type="text" />
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
          <input class="form-control form-control-md" name="cap" placeholder="Enter Cost at Purchase" type="text" />
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label for="" class="">Asset Location</label>
        </div>
        <div class="col-7 my-2">
          <select class="form-select" name="location" aria-label="Default select example">
            <option selected>Select Asset Location</option>
            <option value="Children Church">Children Church</option>
            <option value="Adult Church">Adult Church</option>
            <option value="Campus Church">Campus Church</option>
            <option value="Campus Church">Pastor's Office</option>
            <option value="Campus Church">Admin Office</option>
            <option value="Campus Church">Accounts Office</option>
            <option value="Campus Church">General Office</option>
            <option value="Campus Church">Kitchen</option>
            <option value="Campus Church">Security Gate</option>
            <option value="Campus Church">Bookshop</option>
            <option value="Campus Church">IBTC</option>
            <option value="Campus Church">Hostel</option>
            <option value="Campus Church">Restaurant/Canteen</option>
            <option value="Campus Church">Camp Ground</option>
            <option value="Campus Church">Others</option>
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
        <a href="ictasset.php" class="btn btn-danger">Close</a>
        <button class="btn btn-success" name="submit">Save</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js">

  </script>
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
    loadCategory();
  </script>

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

  <?php

  if (isset($_POST['submit1'])) {
    echo "Welcome";

    $itemCateg = $_POST['item_category'];
    $itemType = $_POST['item_type'];
    $assetNam = $_POST['assetName'];
    $oem = $_POST['oem'];
    $model = $_POST['model'];
    $sn = $_POST['sn'];
    $dop = $_POST['dop'];
    $cap = $_POST['cap'];
    $location = $_POST['location'];
    $status = $_POST['status'];


    $sql = "INSERT INTO `tblict`(`item_category`, `item_type`,`assetName`, `oem`, `model`, `sn`, `dop`, `cap`, `location`, `status`) VALUES ('$itemCateg','$itemType','$assetNam','$oem',' $model','$sn','$dop','$cap','$location',' $status')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header("location: assetsict.php?msg=New Asset added successfully");
    } else {
      echo "Failed: " . mysqli_error($conn);
    }
  }
  ?>

</body>

</html>