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
        echo "<script>window.location.href='buildingasset.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Building Assets Records</title>

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
                <a href="building.php" class="btn btn-dark mb-3 bg-success text-white">Add New</a>
            </div>
        </center>
        <div id="tricaldiv">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Building Address</th>
                            <th scope="col">Fenced?</th>
                            <th scope="col">No of Floors</th>
                            <th scope="col">Use</th>
                            <th scope="col">Material</th>
                            <th scope="col">Date Completed</th>
                            <th scope="col">Cost</th>
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
                        $alist = $asscl->getBuildingAss('building');
                        $sn = 0;
                        if (!is_null($alist)){
                        foreach ($alist as $asslist) {
                            $sn = $sn + 1;
                            echo '<tr>';
                            echo '<td>' . $sn . '</td>';
                            echo '<td>' . $asslist['address'] . '</td>';
                            echo '<td>' . $asslist['fenced'] . '</td>';
                            echo '<td>' . $asslist['no_of_floors'] . '</td>';
                            echo '<td>' . $asslist['usage'] . '</td>';
                            echo '<td>' . $asslist['building_material'] . '</td>';
                            echo '<td>' . $asslist['year_completed'] . '</td>';
                            echo '<td>' . number_format($asslist['estimated_cost']) . '</td>';
                            echo '<td>' . $asslist['building_state'] . '</td>'; ?>

                            <td><a href="updatebuilding.php?id=<?php echo htmlentities($asslist['id']); ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                            <td><a href="buildingasset.php?del=<?php echo htmlentities($asslist['id']); ?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
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
            // hideopts();
            // function hideopts(){
            // // $("#test").hide();
            // $("#tricaldiv").hide();
            // $("#tronivdiv").hide();
            // $("#ictdiv").hide();
            // }

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
        <script>
            //    var state = sessionStorage ['astate'];
            //    var region = sessionStorage['aregion'];
            //    var ogroup = sessionStorage ['aogroup'];
            //    var ugroup = sessionStorage ['group'];
            //    var district = sessionStorage ['district'];
            //    var loc = sessionStorage ['loc'];
            //   // alert(state + ogroup + ugroup + district+loc);
            //   var msg = state + " | " + region + " | "+ogroup + " | " + ugroup +" | " + district +" DISTRICT";

            //   document.getElementById('hed').innerHTML = msg; 
        </script>
</body>

</html>