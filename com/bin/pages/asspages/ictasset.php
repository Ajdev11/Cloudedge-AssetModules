<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICT Assets Records</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <?php
    require "../../../bin/hed/sandls.php";
    require "header.php";
    ?>
</head>

<body>
    <div id="cont" class="container-fluid">
        <center>
            <div class="listBtn">
                <a href=" " class="btn btn-dark mb-3 bg-dark text-white">Home</a>
                <a class="back" href="asspage.php">
                    <button id="btn" class="btn btn-dark mb-3 bg-primary">Asset Page</button></a>
                <!-- <a href="ictasset.php" class="btn btn-dark mb-3 bg-dark">View All Asset</a> -->
                <a onclick="showopts('cal')" class="btn btn-dark mb-3 bg-success">Electrical List</a>
                <a onclick="showopts('nic')" class="btn btn-dark mb-3 bg-warning">Electronics List</a>
                <a onclick="showopts('ict')" class="btn btn-dark mb-3 bg-danger">ICT List</a>
                <a href="ict.php" class="btn btn-dark mb-3 bg-success text-white">Add New</a>
            </div>
        </center>
        <p class="text-muted">To updte or Delete an Asset from the list, click under the "Action" column of the row.</p>
        <div id="tricaldiv">
            <h3 class="cent">ELECTRICAL ASSETS</h3>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">sn</th>
                        <!-- <th scope="col">Asset Category</th> -->
                        <th scope="col">Asset Type</th>
                        <th scope="col">Asset Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">Serial No</th>
                        <th scope="col">Date of Purchase</th>
                        <th scope="col">Cost at Purchase</th>
                        <!-- <th scope="col">Action</th> -->
                        <th scope="col">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "../../../../com/sess/mods/connect.php";
                    require "assdata.php";
                    $asscl = new asdata;
                    $alist = $asscl->getIctAss('ELECTRICAL');
                    $sn = 0;
                    foreach ($alist as $asslist) {
                        $sn = $sn + 1;
                        echo '<tr>';
                        echo '<td>' . $sn . '</td>';
                        // echo '<td>' . $asslist['item_category'] .'</td>';
                        echo '<td>' . $asslist['item_type'] . '</td>';
                        echo '<td>' . $asslist['assetName'] . '</td>';
                        echo '<td>' . $asslist['model'] . '</td>';
                        echo '<td>' . $asslist['sn'] . '</td>';
                        echo '<td>' . $asslist['dop'] . '</td>';
                        echo '<td>' . $asslist['cap'] . '</td>';
                        echo '<td>' . $asslist['status'] . '</td>';
                        echo '</tr>';
                    }

                    ?>
                </tbody>

            </table>
        </div>

        <div id="tronivdiv">
            <h3 class="cent">ELECTRONIC ASSETS</h3>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">sn</th>
                        <!-- <th scope="col">Asset Category</th> -->
                        <th scope="col">Asset Type</th>
                        <th scope="col">Asset Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">Serial No</th>
                        <th scope="col">Date of Purchase</th>
                        <th scope="col">Cost at Purchase</th>
                        <!-- <th scope="col">Action</th> -->
                        <th scope="col">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $alist = $asscl->getIctAss('ELECTRONICS');
                    $sn = 0;
                    foreach ($alist as $asslist) {
                        $sn = $sn + 1;
                        echo '<tr>';
                        echo '<td>' . $sn . '</td>';
                        // echo '<td>' . $asslist['item_category'] .'</td>';
                        echo '<td>' . $asslist['item_type'] . '</td>';
                        echo '<td>' . $asslist['assetName'] . '</td>';
                        echo '<td>' . $asslist['model'] . '</td>';
                        echo '<td>' . $asslist['sn'] . '</td>';
                        echo '<td>' . $asslist['dop'] . '</td>';
                        echo '<td>' . $asslist['cap'] . '</td>';
                        echo '<td>' . $asslist['status'] . '</td>';
                        echo '</tr>';
                    }

                    ?>
                </tbody>

            </table>
        </div>

        <div id="ictdiv">
            <h3 class="cent">ICT ASSETS</h3>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">sn</th>
                        <!-- <th scope="col">Asset Category</th> -->
                        <th scope="col">Asset Type</th>
                        <th scope="col">Asset Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">Serial No</th>
                        <th scope="col">Date of Purchase</th>
                        <th scope="col">Cost at Purchase</th>
                        <!-- <th scope="col">Action</th> -->
                        <th scope="col">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $alist = $asscl->getIctAss('ICT');
                    $sn = 0;
                    foreach ($alist as $asslist) {
                        $sn = $sn + 1;
                        echo '<tr>';
                        echo '<td>' . $sn . '</td>';
                        // echo '<td>' . $asslist['item_category'] .'</td>';
                        echo '<td>' . $asslist['item_type'] . '</td>';
                        echo '<td>' . $asslist['assetName'] . '</td>';
                        echo '<td>' . $asslist['model'] . '</td>';
                        echo '<td>' . $asslist['sn'] . '</td>';
                        echo '<td>' . $asslist['dop'] . '</td>';
                        echo '<td>' . $asslist['cap'] . '</td>';
                        echo '<td>' . $asslist['status'] . '</td>';
                        echo '</tr>';
                    }

                    ?>
                </tbody>

            </table>
        </div>
    </div> <!--  ------- -->
    <script type="text/javascript">
        hideopts();

        function hideopts() {
            // $("#test").hide();
            $("#tricaldiv").hide();
            $("#tronivdiv").hide();
            $("#ictdiv").hide();
        }

        function showopts(opt) {
            hideopts();
            if (opt == 'cal') {
                $("#tricaldiv").show();
            } else if (opt == 'nic') {
                $("#tronivdiv").show();
            } else if (opt == 'ict') {
                $("#ictdiv").show();
            }
        }
    </script>
</body>

</html>