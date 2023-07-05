<?php
// include function file
require_once 'function.php';
//Deletion
if (isset($_GET['del'])) {
    // Geeting deletion row id
    $rid = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->deleteVehicle($rid);
    if ($sql) {
        // Message for successfull insertion
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href='assetvehicle.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Assets Records</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1d2533baae.js" crossorigin="anonymous"></script>
    <?php
    require "../../../bin/hed/sandls.php";
    require "header.php";
    ?>
</head>

<body>
    <div class="container-fluid">
        <center>
            <div class="listBtn">
                <a class="back" href="assetvehicle.php">
                    <button id="btn" class="btn btn-dark mb-3 bg-primary">VEHICLE ASSET</button></a>
                <a href="asspage.php" class="btn btn-dark mb-3 bg-dark">Asset Page</a>
                <!--  -->
                <a href="vehicles.php" class="btn btn-dark mb-3 bg-success text-white">Add New</a>
            </div>
        </center>
        <div id="furdiv">
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">SN</th>
                            <th scope="col">Asset Category</th>
                            <th scope="col">SubCategory</th>
                            <th scope="col">Asset Name</th>
                            <th scope="col">Vehicle Numbers</th>
                            <th scope="col">Date of Purchase</th>
                            <th scope="col">Cost</th>
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
                        $alist = $asscl->getVehicleAssets('Vehicle');
                        $sn = 0;
                        if (!is_null($alist)) {
                            foreach ($alist as $asslist) {
                                $sn = $sn + 1;
                                echo '<tr>';
                                echo '<td>' . $sn . '</td>';
                                echo '<td>' . $asslist['item_category'] . '</td>';
                                echo '<td>' . $asslist['item_type'] . '</td>';
                                echo '<td>' . $asslist['assetName'] . '</td>';
                                echo '<td>' . $asslist['sn'] . '</td>';
                                echo '<td>' . $asslist['dop'] . '</td>';
                                echo '<td>' . number_format($asslist['cap']) . '</td>';
                                echo '<td>' . $asslist['location'] . '</td>';
                                echo '<td>' . $asslist['status'] . '</td>'; ?>
                                <td><a href="updatevehicle.php?id=<?php echo htmlentities($asslist['id']); ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                                <td><a href="assetvehicle.php?del=<?php echo htmlentities($asslist['id']); ?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                        <?php
                                echo '</tr>';
                            }
                        }
                        ?>
                    </tbody>

                </table>
                </div>
            </div>
        </div>

</body>

</html>