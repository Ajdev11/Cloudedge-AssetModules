<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCMA - BUILDING</title>
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
    }
    .cont{
      display:block;
      width: 98%;
      margin:auto;
      background-color: #ddd;
    }
    .back{
      text-decoration: none;
      color: #fff;
    }
    .btn{
      width: 20%;
      margin-left: 5px;
      background: #000;
    }
    /* desktop screen */
    @media only screen  and (min-width: 600px) {
      .cont{
      width: 50%;
    }
    .btn{
      width: 10%;
    }
    }
  </style>
  <body> 
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573;">
    <img id="logo"  src="img/clogo.png" width="5%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Building Asset Management
    </nav>
     <!-- back button -->
     <button class = "btn btn-info my-2">
      <a class="back" href="asspage.php">BACK</a>
    </button>
    <center>
        <a href="building.php" class="btn btn-dark mb-3">Add New</a> &nbsp;&nbsp;
        <a href="buildingReport.php" class="btn btn-dark mb-3">Asset Report</a> &nbsp;&nbsp;
        <a href="editbuilding.php" class="btn btn-dark mb-3">Update Asset</a> &nbsp;&nbsp;
        <!-- <a href="editict.php" class="btn btn-dark mb-3">Delete ICT Asset</a>-->
    </center> 
    <div class="container-fluid cont">
      <form action="">
        <div class="mb-3">
          <label for="cty" class="cty">Country</label>
          <label for="state" class="state">State</label>
          <label for="reg" class="reg">Region</label>
          <label for="old-grp" class="old_grp">Old Group</label>
          <label for="grp" class="grp">Group</label>
        </div>
        <div class="row">  
          <div class="col-3">
            <label for="" class="">Building plan</label>
          </div>
          <div class="col-9 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-10">
            <label for="" class="">fenced?</label>
          </div>
          <div class="col-2 my-2">
            <input
              class="form-check-input"
              type="radio"
              name="fence"
              id="fence"
            />
            <label class="form-check-label" for="no"> NO </label>
            <input
              class="form-check-input"
              type="radio"
              name="fence"
              id="fence"
            />
            <label class="form-check-label" for="yes"> YES </label>
          </div>
          </div>
         <div class="row">
         <div class="col-10">
            <label for="" class="">No of Floors</label>
          </div>
          <div class="col-2 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
         </div>
        <div class="row">
        <div class="col-10">
            <label for="" class="">Connected to national grid</label>
          </div>
          <div class="col-2 my-2">
            <input
              class="form-check-input"
              type="radio"
              name="fence"
              id="fence"
            />
            <label class="form-check-label" for="no"> NO </label>
            <input
              class="form-check-input"
              type="radio"
              name="fence"
              id="fence"
            />
            <label class="form-check-label" for="yes"> YES </label>
          </div>
          </div>
       <div class="row">
       <div class="col-8">
            <label for="" class="">Estimated Cost</label>
          </div>
          <div class="col-4 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
       </div>
       <div class="row">
          <div class="col-3">
            <label for="" class="">Address</label>
          </div>
          <div class="col-9 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
         <div class="row">
         <div class="col-5 my-2">
            <label for="" class="">Year of Completed</label>
          </div>
          <div class="col-5">
            <select
              class="form-select"
              aria-label="Default select example"
            >
              <option selected>Select Date</option>
              <option value="1">2023</option>
              <option value="2">2022</option>
              <option value="3">2021</option>
              <option value="4">2020</option>
              <option value="5">2019</option>
              <option value="6">2018</option>
              <option value="7">2017</option> 
              <option value="8">2016</option>
              <option value="9">2015</option>
              <option value="10">2014</option>
              <option value="11">2013</option>
              <option value="12">2012</option>
              <option value="13">2011</option>
              <option value="14">2010</option>
              <option value="15">2009</option>
            </select>
          </div>
         </div>
        <div class="row">
        <div class="col-5 my-2">
            <label for="" class="">Current status</label>
          </div>
          <div class="col-5">
            <select
              class="form-select "
              aria-label="Default select example"
            >
              <option selected>select status</option>
              <option value="1">Abandoned</option>
              <option value="2">completed</option>
              <option value="3">Non-completed</option>
              <option value="3">Dilapidated</option>
            </select>
          </div>
        </div>
    <div class="row">
         <div class="col-5">
            <label for="" class=""
              >Asset holder</label
            >
          </div>
          <div class="col-5">
            <select
              class="form-select "
              aria-label="Default select example"
            >
              <option selected>select status</option>
              <option value="1">State</option>
              <option value="2">Group</option>
              <option value="3">District</option>
            </select>
          </div>
        </div>
        <div class="row">
         <div class="col-5">
            <label for="" class=""
              >Usage</label
            >
          </div>
          <div class="col-5">
            <select
              class="form-select "
              aria-label="Default select example"
            >
              <option selected>select status</option>
              <option value="1">Adult Church</option>
              <option value="2">General Auditorium</option>
              <option value="3">Canteen</option>
              <option value="3">Office space</option>
              <option value="3">Youth Church</option>
              <option value="3">Children Church</option>
            </select>
          </div>
        </div>
        <div class="row">
         <div class="col-5">
            <label for="" class=""
              >Building materials</label
            >
          </div>
          <div class="col-5">
            <select
              class="form-select "
              aria-label="Default select example"
            >
              <option selected>select status</option>
              <option value="1">Block</option>
              <option value="2">Wood</option>
              <option value="3">Iron Sheet</option>
              <option value="3">Tarpaulin</option>
            </select>
          </div>
        </div>
          <!-- buttons -->
          <div class = "row my-5">
        <div class =' col-3'>
        <button class = "btn btn-danger">reset</button>
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
