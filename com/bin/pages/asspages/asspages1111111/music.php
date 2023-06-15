<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCMA - MUSIC Assets</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />
  </head>
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
    /* desktop screen */
    @media only screen  and (min-width: 600px) {
      .cont{
      width: 50%;
    }
    }
  </style>
  <body> 
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
    <img id="logo"  src="img/clogo.png" width="5%">&nbsp;&nbsp;&nbsp;&nbsp;Music Asset Management
  </nav>
     <!-- back button -->
     <button class = "btn btn-info my-2">
      <a class="back" href="asspage.php">BACK</a>
    </button>
    <center>
        <a href="music.php" class="btn btn-dark mb-3">Add New Music Asset</a> &nbsp;&nbsp;
        <a href="assetType.php" class="btn btn-dark mb-3">Asset Report</a> &nbsp;&nbsp;
        <a href="editmusic.php" class="btn btn-dark mb-3">Edit/Delete Music Asset</a> &nbsp;&nbsp;
        <!-- <a href="editict.php" class="btn btn-dark mb-3">Delete ICT Asset</a>-->
    </center> 
    <div class="container-fluid cont">
      <center>
      <h2>Deeper Life Bible Church</h2>
      <h3>Port Harcourt Region</h3>
      <h4>Rumuigbo District</h4>
      <h4>Asset Entry Form</h4>
      </center>
      <form action="">
        <!-- <div class="mb-3">
          <label for="cty" class="cty">Country</label>&nbsp;&nbsp;
          <label for="state" class="state">State</label>&nbsp;&nbsp;
          <label for="reg" class="reg">Region</label>&nbsp;&nbsp;
          <label for="old-grp" class="old_grp">Old Group</label>&nbsp;&nbsp;
          <label for="grp" class="grp">Group</label>&nbsp;&nbsp;
          <label for="grp" class="grp">District</label>&nbsp;&nbsp;
          <label for="grp" class="grp">Location</label>
        </div> -->
        <!-- <div class="row">  
          <div class="col-5">
            <label for="" class="">Address</label>
          </div>
          <div class="col-5 my-2">
            <textarea class="form-control form-control-md"></textarea>
          </div>
          </div> -->
         <div class="row">
         <div class="col-5">
            <label for="" class="">Item Category</label>
          </div>          
          <div class="col-5 my-2">
          <select class="form-select" aria-label="Default select example">
            <option selected>Select Item Category</option>
            <option value="ICT">ICT</option>
            <option value="Electronics">Electronics</option>
            <option value="Electricals">Electricals</option>
          </select>
          </div>
         </div>
       <div class="row">
       <div class="col-5">
            <label for="" class="">Item Type</label>
          </div>
          <div class="col-5 my-2">
          <select class="form-select" aria-label="Default select example">
            <option selected>Select Item Type</option>
            <option value="STRINGS">STRINGS</option>
            <option value="BRASS">BRASS</option>
            <option value="WOODWIND">WOODWIND</option>
            <option value="KEYBOARDS">KEYBOARDS</option>
            <option value="PERCUSSION">PERCUSSION</option>
          </select>
          </div>
       </div>
       <div class="row">
       <div class="col-5">
            <label for="" class="">Item Name</label>
          </div>
          <div class="col-5 my-2">
          <select class="form-select" aria-label="Default select example">
            <option selected>Select Item Name</option>
            <option value="ICT">VIOLIN</option>
            <option value="Electronics">VIOLA</option>
            <option value="Electricals">CELLO</option>
            <option value="Electronics">DOUBLE BASS</option>
            <option value="Electricals">HARP</option>
            <option value="Electronics">LEAD GUITAR</option>
            <option value="Electricals">BASS GUITAR</option>
            <option value="Electronics">ACOUSTIC GUITAR</option>
            <!-- <option value="Electricals">CELLO</option> -->
          </select>
          </div>
       </div>
       <div class="row">
          <div class="col-5">
            <label for="add" class="add">OEM</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" placeholder="Enter Original Equipment Manufacturer" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-5">
            <label for="" class="">Model</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" placeholder="Enter Model" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-5">
            <label for="" class="">Serial Number</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" placeholder="Enter Serial Number" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-5">
            <label for="" class="">Date of Purchase</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" type="date" />
          </div>
          </div>
          <div class="row">
          <div class="col-5">
            <label for="" class="">Cost at Purchase</label>
          </div>
          <div class="col-5 my-2">
            <input class="form-control form-control-md" placeholder="Enter Cost at Purchase" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-5">
            <label for="" class="">Asset Location</label>
          </div>
          <div class="col-5 my-2">
          <select class="form-select" aria-label="Default select example">
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
          <select class="form-select" aria-label="Default select example">
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
        <button class = "btn btn-danger">Reset</button>
        </div>
        <div class =' col-6'>
        
        </div>
        <div class =' col-3'>
        <button class = "btn btn-success">Submit</button>
        </div>
      </div>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
