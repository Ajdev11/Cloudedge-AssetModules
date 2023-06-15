<?php
$sessionStorage["auser"] = 'abuloma.group';
$sessionStorage["acountry"] = 'NIGERIA';
$sessionStorage["astate"] = 'RIVERS';
$sessionStorage["aregion"] = 'PORT-HARCOURT';
$sessionStorage["aogroup"] = 'RUMUIGBO';
$sessionStorage["agroup"] = 'MGBUOBA';
$sessionStorage["district"] = 'AGANORLU';
$sessionStorage["loc"] = 'CHINDA';
//session_start();
// $SESSION["auser"] = 'abuloma.group';
// $SESSION["acountry"] = 'NIGERIA';
// $SESSION["astate"] = 'RIVERS';
// $SESSION["aregion"] = 'PORT-HARCOURT';
// $SESSION["aogroup"] = 'RUMUIGBO';
// $SESSION["agroup"] = 'MGBUOBA';
// $SESSION["district"] = 'AGANORLU';
// $SESSION["loc"] = 'CHINDA';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Asset Homepage</title>
    <?php
  require  "../../hed/sandls.php";
  require "header.php";
  ?>



    <script src="https://kit.fontawesome.com/1d2533baae.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="cont" class="container-fluid">
        <div id="row" class="row row-cols-1 row-cols-md-3 g-2">
            <div class="col col-box">
                <a class="text-decoration-none text-dark" href="landasset.php">
                    <div class="card h-100 w-100 bg-light">
                        <img src="img/land.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        </div>
                        <div class="card-footer text-center">
                            <h4>LAND</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col col-box">
                <a class="text-decoration-none text-dark" href="buildingasset.php">
                    <div class="card h-100 w-100 bg-light">
                        <img src="img/building.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        </div>
                        <div class="card-footer text-center">
                            <h4>BUILDING</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a class="text-decoration-none text-dark" href="furasset.php">
                    <div class="card h-100 w-100 bg-light">
                        <img src="img/furnitures.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        </div>
                        <div class="card-footer text-center">
                            <h4>FURNITURES</h4>
                        </div>
                    </div>
                </a>
            </div>


            <!-- <br> -->

            <div id="row" class="row row-cols-1 row-cols-md-3 g-2">
                <div class="col">
                    <a class="text-decoration-none text-dark" href="musicassets.php">
                        <div class="card h-100 w-100 bg-light">
                            <img src="img/music.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            </div>
                            <div class="card-footer text-center">
                                <h4>MUSICAL</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="text-decoration-none text-dark" href="assetvehicle.php">
                        <div class="card h-100 w-100 bg-light">
                            <img src="img/vehicle.png" class="card-img-top" alt="...">
                            <div class="card-body">
                            </div>
                            <div class="card-footer text-center">
                                <h4>VEHICLES</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="text-decoration-none text-dark" href="ictasset.php">
                        <div class="card h-100 w-100 bg-light">
                            <img src="img/ict.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                            </div>
                            <div class="card-footer text-center">
                                <h4>ICT&ELECT/ELECT</h4>
                            </div>
                        </div>
                </div>
                </a>
            </div>
            <!-- <div class="col">
        <a class="text-decoration-none" href="admin.php">
          <div class="card h-100 w-100 bg-info">
            <img src="img/admins.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            </div>
            <div class="card-footer text-center text-light">
              <h4>ADMIN</h4>
            </div>
          </div>
      </div>
      </a>
    </div> -->
</body>

</html>