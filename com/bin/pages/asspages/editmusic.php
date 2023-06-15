<?php
// include function file
include_once("function.php");
//Object
$updatedata = new DB_con();
if (isset($_POST['update'])) {
  // Get the userid
  $id = intval($_GET['id']);
  // Posted Values
  $oem = $_POST['oem'];
  $model = $_POST['model'];
  $sn = $_POST['sn'];
  $dop = $_POST['dop'];
  $cap = $_POST['cap'];
  $locat = $_POST['assetLocation'];
  $status = $_POST['assetStatus'];
  $categ = $_POST['categoryName'];
  $subCateg = $_POST['subcateg'];
  $assetName = $_POST['assetName'];
  //Function Calling
  $sql = $updatedata->updateMusic($oem, $model, $sn, $dop, $cap, $locat, $status, $categ, $subCateg, $assetName, $id);
  // Mesage after updation
  echo "<script>alert('Record Updated successfully');</script>";
  // Code for redirection
  echo "<script>window.location.href='editmusic.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DCMA - Edit MUSIC Assets</title>
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
    width: 98%;
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
    <center>
      <h2>DEEPER LIFE BIBLE CHURCH</h2>
      <font color="brown">
        <h6 id="hed"> </h6>
      </font>
      <h4>ASSET ENTRY FORM</h4>
    </center>
    <?php
    // Get the userid
    $id = intval($_GET['id']);
    $onerecord = new DB_con();
    $sql = $onerecord->fetchonerecord($id);
    $cnt = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
      <form action="editmusic.php" method="post">
        <div class="row">
          <div class="col-7">
            <label for="" class="">Item Category</label>
          </div>
          <div class="col-5 my-2">
            <select class="form-select" aria-label="Default select example" name="categoryName" id="categoryName" onchange="showme(this.value)">
              <option selected>--Select--</option>
              <?php
              foreach ($cat1 as $cat) {
                echo '<option value = ' . $cat['categoryName'] . '>' . strtoupper($cat['categoryName']) . '</option>';
              }
              ?>
            </select>
            <script type="text/javascript">
              function showme(val) {
                $.post("assbrg1.php", {
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
            <select class="form-select" aria-label="Default select example" name="subcateg" id="subcateg" onchange="showme2(this.value)">
              <option selected>--Select--</option>
              <?php
              foreach ($cat1 as $cat) {
                echo '<option value = ' . $cat['subCategory'] . '>' . strtoupper($cat['subCategory']) . '</option>';
              }
              ?>
            </select>
            <script type="text/javascript">
              function showme2(val) {
                $.post("assbrg1.php", {
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
            <label for="" class="">Asset Name</label>
          </div>
          <div class="col-5 my-2">
            <select class="form-select" aria-label="Default select example" name="assetName" id="assetName">
              <option selected>--Select--</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <label for="add" class="add">Manufacturer</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" name="oem" value="<?php echo $row['oem']; ?>" type="text" />
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <label for="" class="">Model</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" name="model" value="<?php echo $row['model']; ?>" type="text" />
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <label for="" class="">Serial Number</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" name="sn" value="<?php echo $row['sn']; ?>" type="text" />
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <label for="" class="">Date of Purchase</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" name="dop" value="<?php echo $row['dop']; ?>" type="date" />
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <label for="" class="">Cost at Purchase</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" name="cap" value="<?php echo $row['cap']; ?>" type="text" />
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <label for="" class="">Asset Location</label>
          </div>
          <div class="col-5 my-2">
            <select class="form-select" aria-label="Default select example" name="assetLocation">
              <option selected>--Select--</option>
              <option value="Children Church">Children Church</option>
              <option value="Adult Church">Adult Church</option>
              <option value="Campus Church">Campus Church</option>
              <option value="Pastor's Office">Pastor's Office</option>
              <option value="Admin Office">Admin Office</option>
              <option value="Accounts Office">Accounts Office</option>
              <option value="General Office">General Office</option>
              <option value="Kitchen">Kitchen</option>
              <option value="Security Gate">Security Gate</option>
              <option value="Bookshop">Bookshop</option>
              <option value="IBTC">IBTC</option>
              <option value="Hostel">Hostel</option>
              <option value="Restaurant/Canteen">Restaurant/Canteen</option>
              <option value="Camp Ground">Camp Ground</option>
              <option value="Others">Others</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <label for="" class="">Asset Status</label>
          </div>
          <div class="col-5 my-2">
            <select class="form-select" aria-label="Default select example" value="<?php echo $row['status']; ?>" name="assetStatus">
              <option selected>Select Asset Status</option>
              <option value="In Use">In Use</option>
              <option value="Bad">Bad</option>
              <option value="On Repair">On Repair</option>
              <option value="Abandoned">Abandoned</option>
            </select>
          </div>
        </div><?php } ?>
  
     <!-- buttons -->
     <div id="btnRCS">
        <a href="musicassets.php" class="btn btn-danger">Close</a>
        <button class="btn btn-success" name="submit">update records</button>
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
    // alert(state + ogroup + ugroup + district+loc);
    var msg = state + " | " + region + " | " + ogroup + " | " + ugroup + " | " + district + " DISTRICT";

    document.getElementById('hed').innerHTML = msg;
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>