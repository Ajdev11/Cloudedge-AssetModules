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
      border-radius: 10px;
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

      #btn {
        width: 10%;
      }
    }
  </style>
</head>

<body>
  <!-- <?php
        $auser = $_SESSION["auser"];
        $country = $_SESSION["acountry"];
        $state = $_SESSION["astate"];
        $region = $_SESSION["aregion"];
        $ogroup = $_SESSION["aogroup"];
        $ugroup = $_SESSION["agroup"];
        $district = $_SESSION["adistrict"];
        ?> -->
  <div class="container-fluid cont my-4 bg-secondary text-white">
    <center>
      <h2 class="text-info">DEEPER LIFE BIBLE CHURCH</h2>
      <h4 class="text-info">ASSET ENTRY FORM</h4>
    </center>

    <!-- form start here -->
    <form action="furasset.php" method="POST">
      <?php
      require_once "../../../../com/sess/mods/connect.php";
      require_once "assdata.php";
      $alist = new asdata;
      $cats = $alist->getCat('chairs', 'tables', 'pulpit');
      ?>
      <div class="row">
        <div class="col-5">
          <label for="" class="">Asset Category</label>
        </div>
        <div class="col-7 my-2">
          <select class="form-select" name="assetCategory" id="categoryName" aria-label="Default select example" onchange="showme(this.value)">
            <option selected>Select Item Category</option>
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
          <select class="form-select" name="subCategory" id="subcateg" onchange="showmeType(this.value)"> </select>
        </div>
      </div>
      <div class="row">
        <div class="col-5">
          <label for="" class="qty">Asset Name</label>
        </div>
        <div class="col-7">
          <select class="form-select" name="assetName" id="assetName">
            <option selected>Select asset name</option>
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
            <option selected></option>
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
        <button class="btn btn-warning" name="clear">Reset</button>
        <a href="furasset.php" class="btn btn-danger">Close</a>
        <button class="btn btn-success" name="submit" onclick="">Submit</button>
      </div>
    </form>
  </div>

  <!--inserting into the database  -->
  <?php
   require_once "../../../../com/sess/mods/connect.php";
   require_once "assdata.php";

  if (isset($_POST['submit'])) {
    $assetCategory = $_POST['assetCategory'];
    $subCategory = $_POST['subCategory'];
    $assetName = $_POST['assetName'];
    $quantity = $_POST['quantity'];
    $dop = $_POST['dop'];
    $cap = $_POST['cap'];
    $location = $_POST['location'];
    $status = $_POST['status'];

    $sql = "INSERT INTO `tblfur`(`assetCategory`, `subCategory`, `assetName`, `quantity`, `dop`, `cap`, `location`, `status`) VALUES ('$assetCategory','$subCategory','$assetName','$quantity','$dop','$cap','$location','$status')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
      header("location: furasset.php? msg= new asset created");
    } else {
      echo ("failed: ". mysqli_error($conn));
    }
  }
  ?>
</body>

</html>