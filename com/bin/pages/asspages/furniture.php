
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCMA - FURNITURE</title>
    <?php           
      require "../../../bin/hed/sandls.php";
    ?>
    <style>
    form {
      margin-top: 5vh;
      padding-bottom: 1px;
    }
    .cont{
      display:block;
      width: 98%;
      margin:auto;
      background-color: #ddd;
    }
    .back{
      color: #fff;
      text-decoration: none;
    }
    #btn{
      width: 20%;
      margin-left: 5px;
      background: #000;
    }
    /* desktop screen */
    @media only screen  and (min-width: 600px) {
    .cont{
      width: 50%;
    }
    #btn{
      width: 10%;
    }
    }
  </style>
  </head>
  
  <body> 
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
    <img id="logo"  src="img/clogo.png" width="5%">&nbsp;&nbsp;&nbsp;&nbsp;Furniture Assets Management
    </nav>
      <!-- back button -->
      <a class="back" href="asspage.php"><button id="btn" class = "btn btn-dark ">HOME</button></a>
      
    </button> &nbsp; <a href="assetfur.php"> <button class="btn btn-success" value="View ICT Assets">View Assets</button></a>
    <center>
        <a href="assetsreport.php" class="btn btn-dark mb-3">Asset Report</a> &nbsp;&nbsp;
        <a href="editict.php" class="btn btn-dark mb-3">Edit/Delete Asset</a> &nbsp;&nbsp;
    </center> 
    <div class="container-fluid cont">
      <center>
      <h2>DEEPER LIFE BIBLE CHURCH</h2>
     <font color="brown"> <h6 id="hed"> </h6> </font>
      <h4>ASSET ENTRY FORM</h4>
      </center>

      <form action="assetfur.php" method="POST">
      <?php 
          require_once "../../../../com/sess/mods/connect.php";
          require_once "assdata.php";
          $alist = new asdata;
          $cats = $alist->getCat('chairs', 'tables', 'pulpit');
        ?>
         <div class="row">
         <div class="col-5">
            <label for="" class="">Asset Category</label>
          </div>          
          <div class="col-5 my-2">
          <select class="form-select"  name="item_category" id="categoryName" aria-label="Default select example" onchange="showme(this.value)">
            <option selected>Select Item Category</option>
             <?php
                foreach($cats as $cat){
                  echo '<option value = '. $cat['categoryName'] . '>' . strtoupper($cat['categoryName']) . '</option>';
                }
             ?>
          </select>
            <script type="text/javascript">
            function showme(val){
              $.post("assbrg.php", { 
                    Categ: val
                }, function(data, status) { 
                    document.getElementById("subcateg").innerHTML= data;
                })
            }
          </script>
          </div>
         </div>
       <div class="row">
       <div class="col-5">
            <label for="" class="">Asset Type</label>
          </div>
          <div class="col-5 my-2">
            <!-- pass showmeType function to onchange event -->
          <select class="form-select" name="subcateg" id="subcateg" onchange="showmeType(this.value)"> </select>
          </div>
       </div>
        <div class="row">
          <div class="col-5">
            <label for="" class="qty">Asset Name</label>
          </div>
          <div class="col-5">
          <select class="form-select" name="assetName" id="assetName">
            <option selected>Select Asset Name</option>
          </select>
          <!-- write a script for the function showmeType -->
          <script type="text/javascript">
            function showmeType(val){
              $.post("assbrg.php", { 
                    Categ: val
                }, function(data, status) { 
                    document.getElementById("assetName").innerHTML= data;
                })
            }
          </script>
          </div>
          </div> 

       <div class="row">
          <div class="col-5">
            <label for="" class="qty">Quantity</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" name="qty" placeholder="Enter Quantity" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-5">
            <label for="" class="">Date of Purchase</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" name="dop" type="date" />
          </div>
          </div>
          <div class="row">
          <div class="col-5">
            <label for="" class="">Cost at Purchase</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" name="cop" placeholder="Enter Cost at Purchase" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-5">
            <label for="" class="">Asset Location</label>
          </div>
          <div class="col-5 my-2">
          <select class="form-select" name="loc" aria-label="Default select example">
            <option selected>Select Asset Location</option>
            <option value="Children Church">Children Church</option>
            <option value="Adult Church">Adult Church</option>
            <option value="Campus Church">Campus Church</option>
            <option value="Campus Church">Pastor's Office</option>
            <option value="Campus Church">Admin Office</option>
            <option value="Campus Church">Accounts Office</option>
            <option value="Campus Church">General Office</option>
            <option value="Campus Church">Kitchen</option>
            <option value="Campus Church">Security Gate</option>
            <option value="Campus Church">Bookshop</option>
            <option value="Campus Church">IBTC</option>
            <option value="Campus Church">Hostel</option>
            <option value="Campus Church">Restaurant/Canteen</option>
            <option value="Campus Church">Camp Ground</option>
            <option value="Campus Church">Others</option>
          </select>
          </div>
          </div>
          <div class="row">
          <div class="col-5">
            <label for="" class="">Asset Status</label>
          </div>
          <div class="col-5 my-2">
          <select class="form-select" name="sta" aria-label="Default select example">
            <option selected>Select Asset Status</option>
            <option value="In Use">In Use</option>
            <option value="Bad">Bad</option>
            <option value="On Repair">On Repair</option>
            <option value="Abandoned">Abandoned</option>
          </select>
          </div>
          </div>
          <!-- buttons -->
          <div class = "row my-5">
        <div class =' col-3'>
        <button  class = "btn btn-danger" name="clear">Reset</button>
        </div>
        <div class ='col-6'>
        
        </div>
        <div class ='col-3'>
        <button class = "btn btn-success" name="submit1">Submit</button>
        </div>
      </div>
      </form>
    </div>
      <!-- Jquery -->
        <script>
            function getSubCategory(){
              let category = $('#category').val();
              $.ajax({
                  url: "get-subcat.php",
                  type: "POST",
                  data: { category: category },
                  success: function(result) {
                    console.log("helo world")
                      $('#subcategory').html(result);
                  }
              });
}
</script>
<script>
       var state = sessionStorage ['astate'];
       var region = sessionStorage['aregion'];
       var ogroup = sessionStorage ['aogroup'];
       var ugroup = sessionStorage ['group'];
       var district = sessionStorage ['district'];
       var loc = sessionStorage ['loc'];
      var msg = state + " | " + region + " | "+ ogroup + " | " + ugroup +" | " + district + " DISTRICT";
      document.getElementById('hed').innerHTML = msg; 
</script>
   



</body>
</html>
