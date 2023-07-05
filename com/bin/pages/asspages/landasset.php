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
                <a href=" " class="btn btn-dark mb-3 bg-dark text-white">LAND ASSET</a>
                <a class="back" href="asspage.php">
                    <button id="btn" class="btn btn-dark mb-3 bg-primary">Asset Page</button></a>
                <a href="land.php" class="btn btn-dark mb-3 bg-success text-white">Add New</a>
            </div>
        </center>


        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="table-dark">
                    <th>SN</th>
                    <!-- <th>Asset Name</th> -->
                    <th>Location</th>
                    <th>LandArea(sqm)</th>
                    <th>No of Plots</th>
                    <th>Cost</th>
                    <th>Year Purchased</th>
                    <th>Fenced</th>
                    <th>Under litigation?</th>
                    <th>FullyPaid?</th>
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
                            <td><?php echo htmlentities($row['larea']); ?></td>
                            <td><?php echo htmlentities($row['no_of_plots']); ?></td>
                            <td><?php echo htmlentities(number_format($row['cost_price'])); ?></td>
                            <td><?php echo htmlentities($row['year_of_purchase']); ?></td>
                            <td><?php echo htmlentities($row['fenced']); ?></td>
                            <td><?php echo htmlentities($row['litig']); ?></td>
                            <td><?php echo htmlentities($row['fullypaid']); ?></td>
                            <td><?php echo htmlentities($row['current_status']); ?></td>
                            <td><a href="updateland.php?id=<?php echo htmlentities($row['id']); ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <!-- <td><a href="delete.php?del=<?php echo htmlentities($row['id']); ?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td> -->
                            <td>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo htmlentities($row['id']); ?>">
                                    <input type="hidden" name="address" value="<?php echo htmlentities($row['address']); ?>">
                                    <input type="hidden" name="larea" value="<?php echo htmlentities($row['larea']); ?>">
                                    <input type="hidden" name="no_of_plots" value="<?php echo htmlentities($row['no_of_plots']); ?>">
                                    <input type="hidden" name="cost_price" value="<?php echo htmlentities($row['cost_price']); ?>">
                                    <input type="hidden" name="year_of_purchase" value="<?php echo htmlentities($row['year_of_purchase']); ?>">
                                    <input type="hidden" name="fenced" value="<?php echo htmlentities($row['fenced']); ?>">
                                    <input type="hidden" name="litig" value="<?php echo htmlentities($row['litig']); ?>">
                                    <input type="hidden" name="fullypaid" value="<?php echo htmlentities($row['fullypaid']); ?>">
                                    <input type="hidden" name="current_status" value="<?php echo htmlentities($row['current_status']); ?>">
                                    <button type="submit" class="btn btn-danger" onClick="return confirm('Do you really want to delete?');"><span class="glyphicon glyphicon-trash"></span></button>
                                </form>
                            </td>
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