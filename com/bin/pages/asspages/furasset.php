<?php
// include function file
require_once 'function.php';

//Deletion
if (isset($_GET['del'])) {
    // Geeting deletion row id
    $rid = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->deleteFurniture($rid);
    if ($sql) {
        // Message for successfull insertion
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href='furasset.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Assets Records</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1d2533baae.js" crossorigin="anonymous"></script>
    <?php
    require "../../../bin/hed/sandls.php";
    require  "header.php";
    ?>
</head>

<body>
    <div class="container-fluid">

        <center>
            <div class="listBtn">
                <a href=" " class="btn btn-dark mb-3 bg-dark text-white">FURNITURE ASSET</a>
                <a class="back" href="asspage.php">
                    <button id="btn" class="btn btn-dark mb-3 bg-primary">Asset Page</button></a>
                <a href="furniture.php" class="btn btn-dark mb-3 bg-success text-white">Add New</a>
            </div>
        </center>
        <div id="furdiv">
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">SN</th>
                            <!-- <th scope="col">Asset Category</th>
                            <th scope="col">SubCategory</th> -->
                            <th scope="col">Asset Name</th>
                            <th scope="col">Quantity</th>
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
                        $alist = $asscl->getFurAssets('pastor_office', 'kitchen', 'auditorium');
                        $sn = 0;
                        if (!is_null($alist)) {
                            foreach ($alist as $asslist) {
                                $sn = $sn + 1;
                                echo '<tr>';
                                echo '<td>' . $sn . '</td>';
                                // echo '<td>' . $asslist['item_category'] . '</td>';
                                // echo '<td>' . $asslist['item_type'] . '</td>';
                                echo '<td>' . $asslist['assetName'] . '</td>';
                                echo '<td>' . $asslist['sn'] . '</td>';
                                echo '<td>' . $asslist['dop'] . '</td>';
                                echo '<td>' . number_format($asslist['cap']) . '</td>';
                                echo '<td>' . $asslist['location'] . '</td>';
                                echo '<td>' . $asslist['status'] . '</td>'; ?>
                                <td><a href="updatefurniture.php?id=<?php echo htmlentities($asslist['id']); ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                                <td><a href="furasset.php?del=<?php echo htmlentities($asslist['id']); ?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
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
        <script type="text/javascript">
            //  hideopts();
            // function hideopts(){
            //   // $("#test").hide();
            //     $("#chairs").hide();
            //     //  $("#tables").hide();
            //     //  $("#pulpit").hide();  
            // }
            // function showopts(opts) {
            //     if (opts == 'chair') {

            //         // $("#chairs").show();
            //         alert();
            //     } else if (opt == 'tables') {
            //         //  $("#tables").show();
            //     } else if (opt == 'pulpit') {
            //         // $("#pulpit").show();
            //     }
            // }
        </script>
</body>

</html>