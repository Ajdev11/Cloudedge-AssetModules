<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCMA - LAND</title>
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
    @media only screen  and (min-width: 600px) {
      .cont{
      width: 60%;
    }
    }
  </style>
  <body> 
    <div class="container-fluid cont">
      <form action="">
        <div class="mb-3">
          <label for="cty" class="cty">Country</label>
          <label for="state" class="state">State</label>
          <label for="reg" class="reg">Region</label>
          <label for="old-grp" class="old_grp">Old Group</label>
          <label for="grp" class="grp">Group</label>
        </div>
        <div class="accordion my-2" id="">
          <div class="accordion-item">
          <h2 class="accordion-header" id="">
            <button class="accordion-button fs-4 fw-bold" type="button">
              Land information
            </button>
          </h2>
        </div>
        </div>
        <div class="row">  
          <div class="col-3">
            <label for="loc" class="loc">Location</label>
          </div>
          <div class="col-9 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-3">
            <label for="add" class="cty">Address</label>
          </div>
          <div class="col-9 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
          <div class="row">
          <div class="col-3">
            <label for="fence" class="cty">fenced?</label>
          </div>
          <div class="col-9 my-2">
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
         <div class="col-3">
            <label for="No_plt" class="No_plt">No of Plots</label>
          </div>
          <div class="col-9 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
         </div>
        <div class="row">
        <div class="col-6">
            <label for="larea" class="larea">LandArea(Sqm)</label>
          </div>
          <div class="col-6 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
        </div>
       <div class="row">
       <div class="col-6">
            <label for="cst_price" class="cty">Cost Price</label>
          </div>
          <div class="col-6 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
       </div>
         <div class="row">
         <div class="col-6 my-2">
            <label for="year_pur" class="year_pur">Year of Purchase</label>
          </div>
          <div class="col-6">
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
        <div class="col-6 my-2">
            <label for="c-sta" class="c-sta">Current status</label>
          </div>
          <div class="col-6">
            <select
              class="form-select "
              aria-label="Default select example"
            >
              <option selected>select status</option>
              <option value="1">Abandoned</option>
              <option value="2">completed</option>
              <option value="3">Non-completed</option>
            </select>
          </div>
        </div>
          
          <!-- seller info -->
  <div class="accordion my-2" id="">
  <div class="accordion-item">
    <h2 class="accordion-header" id="">
      <button class="accordion-button fs-4 fw-bold" type="button">
        Seller information
      </button>
    </h2>
    <div class="row">
    <div class="col-3">
            <label for="ori_owner" class="ori_owner pt-2"
              >Name</label
            >
          </div>
          <div class="col-9 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          <div class="row">
          <div class="col-3">
            <label for="ori_add" class="ori_add">Address</label>
          </div>
          <div class="col-9 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>
        <div class="row">
        <div class="col-6">
            <label for="add" class="cty">Phone Number</label>
          </div>
          <div class="col-6 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
        </div>
        
    </div>
  </div>
       <!-- Buyer info -->
    <div class="accordion my-2" id="">
     <div class="accordion-item">
    <h2 class="accordion-header" id="">
      <button class="accordion-button fs-4 fw-bold" type="button">
        Buyer information
      </button>
    </h2>
    <div class="row">
    <div class="col-3">
            <label for="ori_owner" class="ori_owner pt-2"
              >Name</label
            >
          </div>
          <div class="col-9 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          <div class="row">
          <div class="col-6">
            <label for="add" class="cty">Phone Number</label>
          </div>
          <div class="col-6 my-2">
            <input class="form-control form-control-md" type="text" />
          </div>
          </div>  
    </div>
  </div>
  <div class="accordion my-2" id="">
     <div class="accordion-item">
  <h2 class="accordion-header" id="">
      <button class="accordion-button fs-4 fw-bold" type="button">
        Attachments
      </button>
    </h2>
    </div>
  </div>
  <div class="row">
  <div class="col-3 my-2">
            <label for="spln" class="form-label">Survey plan</label>
          </div>
          <div class="col-9 my-2">
            <input class="form-control" type="file" id="spln" />
          </div>
  </div>
          <div class="row">
          <div class="col-3">
            <label for="deed" class="form-label">DEED</label>
          </div>
          <div class="col-9 my-2">
            <input class="form-control" type="file" id="deed" />
          </div>
          </div>
        <div class="row">
        <div class="col-3">
            <label for="rpt" class="form-label">Receipt</label>
          </div>
          <div class="col-9 my-2">
            <input class="form-control" type="file" id="rpt" />
          </div>
        </div>
       <div class="row">
       <div class="col-3">
            <label for="cof" class="form-label">CofO</label>
          </div>
          <div class="col-9 my-2">
            <input
              class="form-control form-control-md"
              id="cof"
              type="file"
            />
          </div>
       </div>
       
          <!-- buttons -->
          <div class = "row">
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
