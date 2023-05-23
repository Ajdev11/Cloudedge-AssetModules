<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Assets Records</title>

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
            width: 98%;
            display: block;
            margin: auto;
            overflow-x: auto;
        }
      #cont{
        display: block;
        margin: auto;
      }
        /* desktop screen */
    @media only screen  and (min-width: 600px) {
       table{
        display:flex;
        justify-content:center;
       }
    }
    </style>
</head>

<body>
  <div id="cont" class="container-fluid">
    <nav class="navbar" style="background-color:rgba(100, 200, 60, 1.0);";>
      <div class="row">
        <div class="col-3">
            <img id="logo"  src="img/clogo.png" width="35%">
        </div>
        <div class="col-9">
          <h3 class="text-center">Asset Management System</h3>
        </div>
      </div>
    </nav>

    <h3 class="cent">MY DISTRICT FURNITURE ASSET LIST</h3>
    <p class="text-muted text-center">To update or Delete an Asset from the list, click under the "Action" column of the row.</p>
    <center>
        <a href="asspage.php" class="btn btn-dark mb-3">Asset Page</a>
        <!-- <a onclick="showopts('cal')" class="btn btn-dark mb-3">Chairs Asset List</a>
        <a onclick="showopts('nic')" class="btn btn-dark mb-3">Tables Asset List</a>
        <a onclick="showopts('ict')" class="btn btn-dark mb-3">Pulpit Asset List</a> -->
        <a href="furniture.php" class="btn btn-dark mb-3">Add New Asset</a>
    </center>
           <div id="ictdiv">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">sn</th>
                    <th scope="col">Asset Category</th>
                    <th scope="col">Asset Type</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date of Purchase</th>
                    <th scope="col">Cost at Purchase</th> 
                    <th scope="col">Location</th>
                    <th scope="col">status</th>
                </tr>
            </thead>

            <!-- <tbody>
                <?php
                    $alist = $asscl->getFurAss('FUR');
                    $sn = 0;
                    foreach($alist as $asslist){
                        $sn = $sn + 1;
                        echo '<tr>';
                          echo '<td>' . $sn. '</td>';
                          echo '<td>' . $asslist['assetCategory'] .'</td>';
                          echo '<td>'. $asslist['assetType'] . '</td>';
                        //   echo '<td>' . $asslist['assetName'] . '</td>';
                          echo '<td>' . $asslist['qty'] . '</td>';
                        //   echo '<td>' . $asslist['sn'] . '</td>';
                          echo '<td>' . $asslist['dop'] . '</td>';
                          echo '<td>' . $asslist['cap'] . '</td>';
                          echo '<td>' . $asslist['status'] . '</td>';
                        echo '</tr>';
                       }

                    ?> 
            </tbody> -->
         
        </table>
        </div>
    </div>
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