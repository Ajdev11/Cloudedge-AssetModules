<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>MUSIC Assets Records</title>

    <?php           
       require "../../../bin/hed/sandls.php";
    ?>
    <style type="text/css">
        #logo{
            display: inline-block;
            margin: auto;
        }
        .cent{
            text-align: center;
        }

        table{
            width: 96%;
            display: block;
            margin: auto;
            overflow-x: auto;
        }

      #cont{
        display: block;
        margin: auto;
      }
    </style>
</head>
<body>
  <div id="cont" class="container-fluid">
    <!-- <nav class="navbar" style="background-color:#00ff5573";> -->
    <nav class="navbar" style="background-color:rgba(100, 200, 60, 1.0);";>
      <div class="row">
          <div class="col-3">
            <img id="logo"  src="img/clogo.png" width="35%">
        </div>
        <div class="col-9">
          <h3 class="cent">Asset Management System</h3>
        </div>
      </div>

    </nav>

    <h3 class="cent">MY DISTRICT ICT ASSET LIST</h3>
    <center>
        <a href="asspage.php" class="btn btn-dark mb-3">Home</a>
        <a href="asspage.php" class="btn btn-dark mb-3">Asset Page</a>
        <a onclick="showopts('cal')" class="btn btn-dark mb-3">Music Asset List</a>
        <!-- <a onclick="showopts('nic')" class="btn btn-dark mb-3">Electronic Asset List</a>
        <a onclick="showopts('ict')" class="btn btn-dark mb-3">ICT Asset List</a> -->
        <a href="ict.php" class="btn btn-dark mb-3">Add New Asset</a>
    </center>
    <p class="text-muted">To updte or Delete an Asset from the list, click under the "Action" column of the row.</p>
    <div id="tricaldiv">
        <h3 class="cent">MUSIC ASSETS</h3>
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
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require "../../../../com/sess/mods/connect.php";
                    require "assdata.php";
                    $asscl = new asdata;
                    $alist = $asscl->getMusicAss('MUSIC');
                    $sn = 0;
                    foreach($alist as $asslist){
                        $sn = $sn + 1;
                        echo '<tr>';
                          echo '<td>' . $sn. '</td>';
                          // echo '<td>' . $asslist['item_category'] .'</td>';
                          echo '<td>'. $asslist['item_type'] . '</td>';
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
                    foreach($alist as $asslist){
                        $sn = $sn + 1;
                        echo '<tr>';
                          echo '<td>' . $sn. '</td>';
                          // echo '<td>' . $asslist['item_category'] .'</td>';
                          echo '<td>'. $asslist['item_type'] . '</td>';
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
                    foreach($alist as $asslist){
                        $sn = $sn + 1;
                        echo '<tr>';
                          echo '<td>' . $sn. '</td>';
                          // echo '<td>' . $asslist['item_category'] .'</td>';
                          echo '<td>'. $asslist['item_type'] . '</td>';
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
    function hideopts(){
      // $("#test").hide();
        $("#tricaldiv").hide();
        $("#tronivdiv").hide();
        $("#ictdiv").hide();  
    }
    
    function showopts(opt){
        hideopts();
        if(opt == 'cal'){
            $("#tricaldiv").show();
        }else if(opt == 'nic'){
            $("#tronivdiv").show();
        }else if(opt == 'ict'){
            $("#ictdiv").show();
        }
    }
</script>
</body>
</html>