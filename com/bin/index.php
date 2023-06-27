<?php
// include function file
include_once("function.php");
//Object
$updatedata = new DB_con();
if (isset($_POST['update'])) {
	// Get the userid
	$id = intval($_GET['id']);
	$assetCategory = $_POST['assetCategory'];
	$subCategory = $_POST['item_type'];
	$assetName = $_POST['assetName'];
	$oem = $_POST['oem'];
	$model = $_POST['model'];
	$sn = $_POST['sn'];
	$dop = $_POST['dop'];
	$cap = $_POST['cap'];
	$assetLocation = $_POST['assetLocation'];
	$assetStatus = $_POST['assetStatus'];
	$sql = $updatedata->updateMusic($id, $assetCategory, $subCategory, $assetName, $oem, $model, $sn, $dop, $cap, $assetLocation, $assetStatus);
	// Mesage after updation
	echo "<script>alert('Record Updated successfully');</script>";
	// Code for redirection
	echo "<script>window.location.href='landasset.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>UPDATE MUSIC ASSET </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
</head>
<style>
	form {
		margin-top: 5vh;
	}

	.cont {
		display: block;
		width: 98%;
		margin: auto;
		background-color: #ddd;
	}

	.back {
		text-decoration: none;
		color: #fff;
	}

	#btn {
		width: 20%;
		margin-left: 5px;
		background: #000;
	}

	#btnRCS {
		display: flex;
		justify-content: space-between;
		margin-top: 20px;
	}

	/* desktop screen */
	@media only screen and (min-width: 600px) {
		.cont {
			width: 50%;
		}

		#btn {
			width: 10%;
		}
	}
</style>

<body>
	<div class="container-fluid cont">
		<?php
		// Get the userid
		$id = intval($_GET['id']);
		$onerecord = new DB_con();
		$sql = $onerecord->fetchoneMusicrecord($id);
		$cnt = 1;
		while ($row = mysqli_fetch_array($sql)) {
		?>
			<h2 class="text-center">Edit Music Record</h2>
			<hr>
			<form action="updatemusic.php" method="post">
				<?php
				require_once "../../../../com/sess/mods/connect.php";
				require_once "assdata.php";
				$alist = new asdata;
				// $alist2 = new asdata2;

				$cat = $alist->getMusicAss('musical', 'music-string', 'music-brass');
				$aloc = $alist->getAssetLoc('');
				?>

				<div class="row">
					<div class="col-7">
						<label for="" class="">Item Category</label>
					</div>
					<div class="col-5 my-2">
						<input style="background:orange" type="text" name="assetCategory" value="<?php echo htmlentities($row['item_category']); ?>" class="form-control" required>
						<select class="form-select" name="assetCategory" id="categoryName" onchange="showme(this.value)">
							<option selected>change category</option>
							<?php
							foreach ($cat as $cat) {
								echo '<option value = ' . $cat['categoryName'] . '>' . strtoupper($cat['categoryName']) . '</option>';
							}
							?>
						</select>
						<script type="text/javascript">
							function showme(val) {
								$.post("assbrg.php", {
									Categ: val
								}, function(data, status) {
									document.getElementById("subcateg").innerHTML = data;
								})

							}
						</script>
					</div>
				</div>
				<div class="row">
					<div class="col-7">
						<label for="" class="">Sub Category</label>
					</div>
					<div class="col-5 my-2">
						<input style="background:orange" type="text" name="item_type" value="<?php echo htmlentities($row['item_type']); ?>" class="form-control" required>
						<select class="form-select" name="item_type" id="subcateg" onchange="showmeType(this.value)">
							<option selected>change sub category</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-7">
						<label for="" class="">Asset Name</label>
					</div>
					<div class="col-5 my-2">
						<input style="background:orange" type="text" name="assetName" value="<?php echo htmlentities($row['assetName']); ?>" class="form-control" required>
						<select class="form-select" name="assetName" id="assetName">
							<option selected>change asset name</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-7">
						<label for="add" class="add">Manufacturer</label>
					</div>
					<div class="col-5 my-2">
						<input style="background:orange" type="text" name="oem" value="<?php echo htmlentities($row['oem']); ?>" class="form-control" required>
						<input class="form-control form-control-md" name="oem" type="text" placeholder="change manufacturer" />
					</div>
				</div>
				<div class="row">
					<div class="col-7">
						<label for="" class="">Model</label>
					</div>
					<div class="col-5 my-2">
						<input style="background:orange" type="text" name="model" value="<?php echo htmlentities($row['model']); ?>" class="form-control" required>
						<input class="form-control form-control-md" placeholder="change model" name="model" type="text" />
					</div>
				</div>
				<div class="row">
					<div class="col-7">
						<label for="" class="">Serial Number</label>
					</div>
					<div class="col-5 my-2">
						<input style="background:orange" type="text" name="sn" value="<?php echo htmlentities($row['sn']); ?>" class="form-control" required>
						<input class="form-control form-control-md" placeholder="change seral number" name="sn" type="text" />
					</div>
				</div>
				<div class="row">
					<div class="col-7">
						<label for="" class="">Date of Purchase</label>
					</div>
					<div class="col-5 my-2">
						<input style="background:orange" type="text" name="dop" value="<?php echo htmlentities($row['dop']); ?>" class="form-control" required>
						<input class="form-control form-control-md" name="dop" type="date" />
					</div>
				</div>
				<div class="row">
					<div class="col-7">
						<label for="" class="">Cost at Purchase</label>
					</div>
					<div class="col-5 my-2">
						<input style="background:orange" type="text" name="cap" value="<?php echo htmlentities($row['cap']); ?>" class="form-control" required>
						<input class="form-control form-control-md" placeholder="change cost at purchase" name="cap" type="text" />
					</div>
				</div>
				<div class="row">
					<div class="col-7">
						<label for="" class="">Asset Location</label>
					</div>
					<div class="col-5 my-2">
						<input style="background:orange" type="text" name="assetLocation" value="<?php echo htmlentities($row['location']); ?>" class="form-control" required>
						<select class="form-select" name="assetLocation">
							<option selected>Change asset location</option>
							<?php
							foreach ($aloc as $loc) {
								echo '<option value = ' . $loc['assloc'] . '>' . strtoupper($loc['assloc']) . '</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-7">
						<label for="" class="">Asset Status</label>
					</div>
					<div class="col-5 my-2">
						<input style="background:orange" type="text" name="assetStatus" value="<?php echo htmlentities($row['status']); ?>" class="form-control" required>
						<select class="form-select" name="assetStatus">
							<option selected>Change Asset Status</option>
							<option value="In Use">In Use</option>
							<option value="Bad">Bad</option>
							<option value="On Repair">On Repair</option>
							<option value="Abandoned">Abandoned</option>
						</select>
					</div>
				</div>
				<!-- buttons -->

				<div id="btnRCS">
					<a href="musicassets.php" class="btn btn-danger">Close</a>
					<button class="btn btn-success" name="update">Submit</button>
				</div>
			</form>




		<?php } ?>
		<!-- <div id="btnRCS">
  <a href="musicassets.php" class="btn btn-danger">Close</a>
  <button class="btn btn-success" name="update">Update</button>
</div> -->
		<!-- <div class="row" style="margin-top:1%">
  <div class="col-md-8">
    <input type="submit" name="update" value="Update">
  </div>
</div> -->
		</form>
	</div>
</body>
</htm