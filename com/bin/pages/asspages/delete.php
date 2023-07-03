<?php
// include function file
require_once 'function.php';

//Deletion
if (isset($_GET['del'])) {
    // Geeting deletion row id
    $rid = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->delete($rid);
    if ($sql == $_SERVER['REQUEST_METHOD']) {
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
    <title>Delete Data</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <?php
    require  "header.php";
    ?>
    <style>
        .cont {
            display: grid;
            justify-content: center;
            align-items: center;
        }

        label {
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="container-fluid cont">
        <h2>Please Confirm The Asset Deletion</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['id']) && isset($_POST['address']) && isset($_POST['no_of_plots']) && isset($_POST['cost_price']) && isset($_POST['year_of_purchase']) && isset($_POST['fenced']) && isset($_POST['litig']) && isset($_POST['fullypaid']) && isset($_POST['current_status'])) {
                $id = $_POST['id'];
                $address = $_POST['address'];
                $no_of_plots = $_POST['no_of_plots'];
                $cost_price = $_POST['cost_price'];
                $year_of_purchase = $_POST['year_of_purchase'];
                $fenced = $_POST['fenced'];
                $litig = $_POST['litig'];
                $fullypaid = $_POST['fullypaid'];
                $current_status = $_POST['current_status'];
        ?>
                <form action="" method="POST">
                    <?php
                    require "../../../../com/sess/mods/connect.php";
                    $fetchdata = new DB_con();
                    $sql = $fetchdata->fetchdata();
                    $cnt = 1;
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                        <input type="hidden" name="id" value="<?php echo htmlentities($id); ?>">
                        <label for="address">Location Address: </label>
                        <span><?php echo htmlentities($address); ?></span><br><br>
                        <label for="no_of_plots">No of Plots: </label>
                        <span><?php echo htmlentities($no_of_plots); ?></span><br><br>
                        <label for="cost_price">Cost Price: </label>
                        <span><?php echo htmlentities($cost_price); ?></span><br><br>
                        <label for="year_of_purchase">Year Purchased: </label>
                        <span><?php echo htmlentities($year_of_purchase); ?></span><br><br>
                        <label for="fenced">Fenced: </label>
                        <span><?php echo htmlentities($fenced); ?></span><br><br>
                        <label for="litig">Under litigation?: </label>
                        <span><?php echo htmlentities($litig); ?></span><br><br>
                        <label for="fullypaid">FullyPaid?: </label>
                        <span><?php echo htmlentities($fullypaid); ?></span><br><br>
                        <label for="current_status">Status: </label>
                        <span><?php echo htmlentities($current_status); ?></span><br><br>
                        <button type="submit" class="btn btn-danger" onClick="return confirm('Do you really want to delete?');">Confirm Delete</button>
                    <?php
                        // for serial number increment
                        $cnt++;
                    } ?>
                </form>
        <?php
            } else {
                echo "missing";
            }
        } else {
            echo "Invalid request method.";
        }
        ?>
    </div>

</body>

</html>