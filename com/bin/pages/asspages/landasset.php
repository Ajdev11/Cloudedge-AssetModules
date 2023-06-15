<?php
// include function file
require_once 'function.php';

//Deletion
if (isset($_GET['del'])) {
    // Geeting deletion row id
    $rid = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->delete($rid);
    if ($sql) {
        // Message for successfull insertion
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href='landasset.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LAND ASSET </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <?php
    require  "header.php";
    ?>
</head>

<body>
    <div class="container-fluid">
        <center>
            <div class="listBtn">
                <a class="back" href="asspage.php">
                    <button id="btn" class="btn btn-dark mb-3 bg-primary">Home</button></a>
                <!-- <a onclick="showopts('cal')" class="btn btn-dark mb-3 bg-success">Land Asset List</a> -->
                <a href="land.php" class="btn btn-dark mb-3 bg-success text-white">Add New</a>
            </div>
        </center>


        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>#</th>
                    <!-- <th>Asset Name</th> -->
                    <th>location Address</th>
                    <th>No of Plots</th>
                    <th>Cost Price</th>
                    <th>Year Purchased</th>
                    <th>Fenced</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                    require "../../../../com/sess/mods/connect.php";
                    $fetchdata = new DB_con();
                    $sql = $fetchdata->fetchdata();
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo htmlentities($cnt); ?></td>
                        <!-- <td><?php echo htmlentities($row['assetName']); ?></td -->
                        <td><?php echo htmlentities($row['address']); ?></td>
                        <td><?php echo htmlentities($row['no_of_plots']); ?></td>
                        <td><?php echo htmlentities($row['cost_price']); ?></td>
                        <td><?php echo htmlentities($row['year_of_purchase']); ?></td>
                        <td><?php echo htmlentities($row['fenced']); ?></td>
                        <td><?php echo htmlentities($row['current_status']); ?></td>
                        <td><a href="updateland.php?id=<?php echo htmlentities($row['id']); ?>"><button
                                    class="btn btn-primary btn-xs"><span
                                        class="glyphicon glyphicon-pencil"></span></button></a></td>
                        <td><a href="landasset.php?del=<?php echo htmlentities($row['id']); ?>"><button
                                    class="btn btn-danger btn-xs"
                                    onClick="return confirm('Do you really want to delete');"><span
                                        class="glyphicon glyphicon-trash"></span></button></a></td>
                    </tr>
                    <?php
                        // for serial number increment
                        $cnt++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

</body>

</html>