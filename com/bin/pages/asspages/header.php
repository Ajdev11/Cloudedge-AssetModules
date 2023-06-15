<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <?php
    require  "../../hed/sandls.php";
    ?>
    <script src="https://kit.fontawesome.com/1d2533baae.js" crossorigin="anonymous"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Raleway:wght@200&display=swap');

    #hed {
        font-size: 33px;
        font-family: 'Raleway', sans-serif;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    #reg {
        text-align: center;
        color: darkblue;
        font-family: 'Montserrat Alternates', sans-serif;
    }

    #logo {
        width: 80px;
        height: 80px;
        border-radius: 50px;
    }

    #asms {
        font-size: 16px;
    }

    .listBtn {
        width: 50%;
        margin: auto;
        margin-top: 2.2rem;
        animation-name: myList;
        animation-duration: 1s;
        animation-timing-function: ease-in-out;
        animation-iteration-count: 1;

    }

    @keyframes myList {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Larger screen */
    @media only screen and (min-width: 600px) {
        .row {
            width: 55rem;
            margin: auto;
        }

        #hed {
            font-size: 60px;
            width: 100%;
        }

        #asms {
            font-size: 25px;
            margin-left: 40px;
        }

        #logo {
            margin-top: -10px;
        }
    }
    </style>
</head>

<body>
    <div id="cont" class="container-fluid">
        <div id="hed" class="row bg-success">
            <div class="col-4"><img id="logo" src="img/clogo.png"></div>
            <div class="col-8">
                <h1 class="text-light">DEEPER LIFE BIBLE CHURCH</h1>
                <h2 id="asms">ASSET MANAGEMENT SYSTEM</h2>
            </div>
        </div>
        <br>
    </div>
</body>

</html>