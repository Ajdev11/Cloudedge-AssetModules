<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furniture Assets Records</title>
  <script src="https://kit.fontawesome.com/1d2533baae.js" crossorigin="anonymous"></script>
  <?php
  require "../../../bin/hed/sandls.php";
  ?>
  <style type="text/css">
    #logo {
      width: 50px;
      height: 50px;
      border-radius: 50px;
    }

    .cent {
      text-align: center;
    }

    table {
      display: block;
      margin: auto;
      background-color: white;
      overflow-x: auto;
    }

    /* desktop screen */
    @media only screen and (min-width: 600px) {
      #logo {
        width: 100px;
        height: 100px;
      }

      .navHeaders {
        width: 100%;
      }

      .listBtn {
        width: 50%;
        margin: auto;
        margin-top: 2.2rem;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <nav class="navbar bg-success">
      <div class="row navHeaders">
        <div class="col-3">
          <img id="logo" src="img/clogo.png">
        </div>
        <div class="col-9 text-light">
          <h3>ASSET MANAGEMENT SYSTEM</h3>
        </div>
      </div>
    </nav>
    <h3 class="cent my-2">MY DISTRICT FURNITURE ASSET</h3>
    <p class="text-muted text-center">To update or Delete an Asset from the list, click the "Edit" column of the row.</p>
    <div class="listBtn">
      <a class="back" href="asspage.php">
        <button id="btn" class="btn btn-dark mb-3 bg-primary">BACK</button></a>
      <a href="furasset.php" class="btn btn-dark mb-3 bg-dark">View All Asset</a>
      <a onclick="showopts('subCategory')" class="btn btn-dark mb-3 bg-success">Chairs List</a>
      <a onclick="showopts('subCategory')" class="btn btn-dark mb-3 bg-warning">Tables List</a>
      <a onclick="showopts('subCategory')" class="btn btn-dark mb-3 bg-danger">Pulpit List</a>
      <a href="furniture.php" class="btn btn-dark mb-3 bg-light text-dark">Add New Asset</a>
    </div>
    <div id="furdiv">
      <table class="table table-hover text-center">
        <thead class="table-dark">
          <tr>
            <th scope="col">SN</th>
            <th scope="col">Asset Category</th>
            <th scope="col">SubCategory</th>
            <th scope="col">Asset Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Date of Purchase</th>
            <th scope="col">Cost at Purchase</th>
            <th scope="col">Location</th>
            <th scope="col">Status</th>
            <th scope="col">Edit Asset</th>
            <th scope="col">Remove Asset</th>
          </tr>
        </thead>

        <tbody id="chairs">
          <?php
          require "../../../../com/sess/mods/connect.php";
          require "assdata.php";
          $asscl = new asdata;
          $alist = $asscl->getFurAss('chairs');
          $sn = 0;
          if (!is_null($alist)) {
            foreach ($alist as $asslist) {
              $sn = $sn + 1;
              echo '<tr>';
              echo '<td>' . $sn . '</td>';
              echo '<td>' . $asslist['assetCategory'] . '</td>';
              echo '<td>' . $asslist['subCategory'] . '</td>';
              echo '<td>' . $asslist['assetName'] . '</td>';
              echo '<td>' . $asslist['quantity'] . '</td>';
              echo '<td>' . $asslist['dop'] . '</td>';
              echo '<td>' . $asslist['cap'] . '</td>';
              echo '<td>' . $asslist['location'] . '</td>';
              echo '<td>' . $asslist['status'] . '</td>';
              echo '<td><a class="link-dark" href="furniture.php"><i class="fa-regular fa-pen-to-square fs-5 me-3"></i></a>
                          </td>';
              echo '<td><a class="link-dark" href=""><i class="fa-solid fa-trash fs-5 me-3"></i></a>
                          </td>';
              echo '</tr>';
            }
          }
          ?>
        </tbody>
        <tbody>
          <?php
          $asscl = new asdata;
          $alist = $asscl->getFurAss('Tables');
          // $sn = 0;
          if (!is_null($alist)) {
            foreach ($alist as $asslist) {
              $sn = $sn + 1;
              echo '<tr>';
              echo '<td>' . $sn . '</td>';
              echo '<td>' . $asslist['assetCategory'] . '</td>';
              echo '<td>' . $asslist['subCategory'] . '</td>';
              echo '<td>' . $asslist['assetName'] . '</td>';
              echo '<td>' . $asslist['quantity'] . '</td>';
              echo '<td>' . $asslist['dop'] . '</td>';
              echo '<td>' . $asslist['cap'] . '</td>';
              echo '<td>' . $asslist['location'] . '</td>';
              echo '<td>' . $asslist['status'] . '</td>';
              echo '<td><a class="link-dark" href="furniture.php"><i class="fa-regular fa-pen-to-square fs-5 me-3"></i></a>
                          </td>';
              echo '<td><a class="link-dark" href=""><i class="fa-solid fa-trash fs-5 me-3"></i></a>
                          </td>';
              echo '</tr>';
            }
          }
          ?>
        </tbody>
        <tbody>
          <?php
          $asscl = new asdata;
          $alist = $asscl->getFurAss('Pulpit');
          // $sn = 0;
          if (!is_null($alist)) {
            foreach ($alist as $asslist) {
              $sn = $sn + 1;
              echo '<tr>';
              echo '<td>' . $sn . '</td>';
              echo '<td>' . $asslist['assetCategory'] . '</td>';
              echo '<td>' . $asslist['subCategory'] . '</td>';
              echo '<td>' . $asslist['assetName'] . '</td>';
              echo '<td>' . $asslist['quantity'] . '</td>';
              echo '<td>' . $asslist['dop'] . '</td>';
              echo '<td>' . $asslist['cap'] . '</td>';
              echo '<td>' . $asslist['location'] . '</td>';
              echo '<td>' . $asslist['status'] . '</td>';
              echo '<td><a class="link-dark" href="furniture.php"><i class="fa-regular fa-pen-to-square fs-5 me-3"></i></a>
                          </td>';
              echo '<td><a class="link-dark" href=""><i class="fa-solid fa-trash fs-5 me-3"></i></a>
                          </td>';
              echo '</tr>';
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script type="text/javascript">
    //  hideopts();
    // function hideopts(){
    //   // $("#test").hide();
    //     $("#chairs").hide();
    //     //  $("#tables").hide();
    //     //  $("#pulpit").hide();  
    // }
    function showopts(opts) {
      if (opts == 'chairs ') {

        // $("#chairs").show();
        alert();
      } else if (opt == 'tables') {
        //  $("#tables").show();
      } else if (opt == 'pulpit') {
        // $("#pulpit").show();
      }
    }
  </script>
</body>

</html>