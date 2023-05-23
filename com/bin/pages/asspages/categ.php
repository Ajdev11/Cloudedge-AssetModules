<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DLCMA</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
      crossorigin="anonymous"
    />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-2">
        <div class="card mt-5">
          <div class="card-header">
            <h4>Category dropdowns</h4>
          </div>
          <div class="card-body">
            <form action="">
              <div class="form-group">
                <label for="CATEGORY-DROPDOWN">Category</label>
                <select class="form-control" name="" id="category-dropdown">
                  <option value="">select category</option>
                  <!-- PHP -->
                   <?php
                  $result = mysqli_query($conn, "SELECT * FROM `assetref` where parent_id = 0");
                  while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row["categories"]; ?></option>
                    <?php
                  }
                ?>
                </select>
              </div>
              <div class="form-group">
                <label for="SUBCATEGORY">Sub Category</label>
                <select  class="form-control" id="sub-category-dropdown">
                  <option value="">Select sub category</option>
                </select>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#category-dropdown').on('change', function(){
        let category_id = this.value;
        $.ajax({
          url: "get-subcat.php",
          type: "POST",
          data : {
            category_id: category_id
          },
          cache: false,
          success: function(result){
            $("#sub-category-dropdown").html(result);
          }
        });
      });
    })
  </script>
</body>
</html>