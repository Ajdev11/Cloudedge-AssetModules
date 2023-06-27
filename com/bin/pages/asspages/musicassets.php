<?php
// include function file
require_once 'function.php';

//Deletion
if (isset($_GET['del'])) {
    // Geeting deletion row id
    $rid = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->deleteMusic($rid);
    if ($sql) {
        // Message for successful insertion
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href='musicassets.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSIC Assets Records</title>
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
                <!-- <a onclick="showopts('cal')" class="btn btn-dark mb-3 bg-success">View Asset</a> -->
                <a href="music.php" class="btn btn-dark mb-3 bg-success text-white">Add Asset</a>
            </div>
        </center>
        <div id="tricaldiv">
            <center>
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Asset Type</th>
                            <th scope="col">Asset Name</th>
                            <th scope="col">Manufacturer</th>
                            <th scope="col">Model</th>
                            <th scope="col">Serial No</th>
                            <th scope="col">Date of Purchase</th>
                            <th scope="col">Cost at Purchase</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require "../../../../com/sess/mods/connect.php";
                        require "assdata.php";
                        $asscl = new asdata;
                        $alist = $asscl->getMusicAss('musical', 'music-string', 'music-brass');
                        $sn = 0;
                    if (!is_null($alist)) {
                        foreach ($alist as $asslist) {
                            $sn = $sn + 1;
                            echo '<tr>';
                            echo '<td>' . $sn . '</td>';
                            echo '<td>' . $asslist['item_type'] . '</td>';
                            echo '<td>' . $asslist['assetName'] . '</td>';
                            echo '<td>' . $asslist['oem'] . '</td>';
                            echo '<td>' . $asslist['model'] . '</td>';
                            echo '<td>' . $asslist['sn'] . '</td>';
                            echo '<td>' . $asslist['dop'] . '</td>';
                            echo '<td>' . $asslist['cap'] . '</td>';
                            echo '<td>' . $asslist['status'] . '</td>'; ?>
                            <td><a href="updatemusic.php?id=<?php echo htmlentities($asslist['id']); ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td><a href="musicassets.php?del=<?php echo htmlentities($asslist['id']); ?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                        <?php echo '</tr>';
                        }
                    }
                        ?>
                    </tbody>
                </table>
            </center>
        </div>

        <!-- <div id="tronivdiv">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">S/N</th>
                        
                        <th scope="col">Asset Type</th>
                        <th scope="col">Asset Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">Serial No</th>
                        <th scope="col">Date of Purchase</th>
                        <th scope="col">Cost at Purchase</th>

                        <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    // $alist = $asscl->getStringMusicAss('STRING');
                    // $sn = 0;
                    // foreach ($alist as $asslist) {
                    //     $sn = $sn + 1;
                    //     echo '<tr>';
                    //     echo '<td>' . $sn . '</td>';

                    //     echo '<td>' . $asslist['item_type'] . '</td>';
                    //     echo '<td>' . $asslist['assetName'] . '</td>';
                    //     echo '<td>' . $asslist['model'] . '</td>';
                    //     echo '<td>' . $asslist['sn'] . '</td>';
                    //     echo '<td>' . $asslist['dop'] . '</td>';
                    //     echo '<td>' . $asslist['cap'] . '</td>';
                    //     echo '<td>' . $asslist['status'] . '</td>';
                    //     echo '</tr>';
                    // }

                    ?>
                </tbody>

            </table>
        </div> -->

        <!-- <div id="ictdiv">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">S/N</th> 
                        <th scope="col">Asset Type</th>
                        <th scope="col">Asset Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">Serial No</th>
                        <th scope="col">Date of Purchase</th>
                        <th scope="col">Cost at Purchase</th> 
                        <th scope="col">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    // $alist = $asscl->getBrassMusicAss('BRASS');
                    // $sn = 0;
                    // foreach ($alist as $asslist) {
                    //     $sn = $sn + 1;
                    //     echo '<tr>';
                    //     echo '<td>' . $sn . '</td>'; 
                    //     echo '<td>' . $asslist['item_type'] . '</td>';
                    //     echo '<td>' . $asslist['assetName'] . '</td>';
                    //     echo '<td>' . $asslist['model'] . '</td>';
                    //     echo '<td>' . $asslist['sn'] . '</td>';
                    //     echo '<td>' . $asslist['dop'] . '</td>';
                    //     echo '<td>' . $asslist['cap'] . '</td>';
                    //     echo '<td>' . $asslist['status'] . '</td>';
                    //     echo '</tr>';
                    // }

                    ?>
                </tbody>

            </table>
        </div> -->

        <!-- <div id="wooddiv">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">S/N</th> 
                        <th scope="col">Asset Type</th>
                        <th scope="col">Asset Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">Serial No</th>
                        <th scope="col">Date of Purchase</th>
                        <th scope="col">Cost at Purchase</th> 
                        <th scope="col">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    // $alist = $asscl->getWoodwindMusicAss('WOODWIND');
                    // $sn = 0;
                    // foreach ($alist as $asslist) {
                    //     $sn = $sn + 1;
                    //     echo '<tr>';
                    //     echo '<td>' . $sn . '</td>'; 
                    //     echo '<td>' . $asslist['item_type'] . '</td>';
                    //     echo '<td>' . $asslist['assetName'] . '</td>';
                    //     echo '<td>' . $asslist['model'] . '</td>';
                    //     echo '<td>' . $asslist['sn'] . '</td>';
                    //     echo '<td>' . $asslist['dop'] . '</td>';
                    //     echo '<td>' . $asslist['cap'] . '</td>';
                    //     echo '<td>' . $asslist['status'] . '</td>';
                    //     echo '</tr>';
                    // }

                    ?>
                </tbody>

            </table>
        </div> -->
    </div>
    <script type="text/javascript">
        hideopts();

        // function hideopts() {
        //     // $("#test").hide();
        $("#tricaldiv").hide();
        //     $("#tronivdiv").hide();
        //     $("#wooddiv").hide();
        //     $("#ictdiv").hide();
        // }

        // function showopts(opt) {
        //      hideopts();
        //     if (opt == 'cal') {
        //         $("#tricaldiv").show();
        //     }
        //     } else if (opt == 'nic') {
        //         $("#tronivdiv").show();
        //     } else if (opt == 'brass') {
        //         $("#ictdiv").show();
        //     } else if (opt == 'woodwind') {
        //         $("#wooddiv").show();
        //     }
        // }
    </script>
</body>

</html>