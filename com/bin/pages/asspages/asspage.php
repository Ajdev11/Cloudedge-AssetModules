<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Asset Homepage</title>
    <?php
        require  "../../hed/sandls.php";
    ?>
    <script src="https://kit.fontawesome.com/1d2533baae.js" crossorigin="anonymous"></script>
      <script>
        sessionStorage ['astate'] = "RIVERS";
        sessionStorage ['aregion'] = "PORT-HARCOURT";
        sessionStorage ['aogroup'] = "RUMUIGBO";
        sessionStorage ['group'] = "MGBUOBA";
        sessionStorage ['district'] = "AGANORLU";
        sessionStorage ['loc'] = "CHINDA";
     </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Raleway:wght@200&display=swap');
        #hed{
            font-size: 33px;
            font-family: 'Raleway', sans-serif;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        #ass{
            text-align: center;
            padding-top: 0px;
            font-size: 25px;
            font-family: 'Raleway', sans-serif;
            font-weight: 600;
        }
        #reg{
           text-align: center;
           color: darkblue; 
           font-family: 'Montserrat Alternates', sans-serif;
        }
        #logo{
            width: 60px;
        }
        /* Larger screen */
        @media only screen and (min-width: 600px) {
       .row{
        width: 55rem;
        margin:auto;
       }
       #hed{
            font-size: 60px;
            width:100%;
        }
        #logo{
            width: 150px;
            height: 100px;
            border-radius: 50px;
        }
    }
    
    </style>
</head>

<body>
    <div id="cont" class="container-fluid">
        <div id="hed" class="row">
            <div class="col-4"><img id="logo"  src="img/clogo.png"></div>
            <div class="col-8">
                <h1>DEEPER LIFE BIBLE CHURCH</h1>
            </div>
        </div>
        <br>
<!-- <h2 id="reg"></h2> -->
<h2 id="ass">ASSET MANAGEMENT SYSTEM</h2>
<br>
<div id="row" class="row row-cols-1 row-cols-md-3 g-2">
  <div class="col col-box">
  <a class="text-decoration-none text-dark" href="building.php">
  <div class="card h-100 w-100 bg-light">
      <img src="img/land.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      </div>
      <div class="card-footer text-center">
        <h4>LAND&BUILDING</h4>
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

<br>

<div id="row" class="row row-cols-1 row-cols-md-3 g-2">
    <div class="col">
  <a class="text-decoration-none text-dark" href="music.php">
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
</div>
    <script>
        const region = sessionStorage.region + " REGION";
        document.getElementById('reg').innerHTML = region;

        function proceed(){
           location.href = "ass01.<?php ?>";
        }
        function useroption(opt){
            alert('Yes');
            if (opt == 'landb'){
                location.href = "asset.php";
            }
        }
    </script>
</body>
</html>