<?php
include "conn.php";
$category_id = $_POST["category_id"];
$result = mysqli_query($conn, "SELECT * FROM `assetref` where parent_id = $category_id");
?>
<option value = "">Select sub category</option>
<?php
while($row = mysqli_fetch_array($result)){
  ?>
  <option value="<?php echo $row['id']; ?>"><?php echo $row["categories"]; ?></option>
  <?php
}
?>