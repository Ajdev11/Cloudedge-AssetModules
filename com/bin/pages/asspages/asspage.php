<?php
$sessionStorage["auser"] = 'abuloma.group';
$sessionStorage["acountry"] = 'NIGERIA';
$sessionStorage["astate"] = 'RIVERS';
$sessionStorage["aregion"] = 'PORT-HARCOURT';
$sessionStorage["aogroup"] = 'RUMUIGBO';
$sessionStorage["agroup"] = 'MGBUOBA';
$sessionStorage["district"] = 'AGANORLU';
$sessionStorage["loc"] = 'CHINDA';
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
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

    h4 {
        text-transform: uppercase;
        clip-path: polygon(0 1%, 100% 1%, 100% 100%, 0% 100%);
        line-height: 1.8rem;
        font-family: 'Josefin Sans', sans-serif;
    }

    .char {
        transform: translateY(-115px);
        transition: transform 0.5s;
    }
    </style>
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
                            <h4 id="my-text">LAND</h4>
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
                            <h4 id="my-text">BUILDING</h4>
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
                            <h4 id="my-text">FURNITURES</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div id="row" class="row row-cols-1 row-cols-md-3 g-2">
                <div class="col">
                    <a class="text-decoration-none text-dark" href="musicassets.php">
                        <div class="card h-100 w-100 bg-light">
                            <img src="img/music.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            </div>
                            <div class="card-footer text-center">
                                <h4 id="my-text">MUSICAL</h4>
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
                                <h4 id="my-text">VEHICLES</h4>
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
                                <h4 id="my-text">ICT&ELECT/ELECT</h4>
                            </div>
                        </div>
                </div>
                </a>
            </div>
        </div>
        <script src="https://unpkg.com/split-type"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.1/gsap.min.js"
            integrity="sha512-qF6akR/fsZAB4Co1QDDnUXWnaQseLGXoniuSuSlPQK6+aWhlMZcHzkasCSlnWoe+TJuudlka1/IQ01Dnhgq95g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
        const myText = new SplitType("#my-text");
        gsap.to('.char', {
            y: 0,
            stagger: 0.05,
            delay: 1,
            duration: 0.1
        })
        </script>
</body>

</html>