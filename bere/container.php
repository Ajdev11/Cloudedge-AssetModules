
<?php
  //session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Welcome</title>
 <?php
    require "../com/bin/hed/sandls.php";
 ?>
	<script type="text/javascript">
		sessionStorage.validlog = 'Y';
		sessionStorage.clickcount = 0;
		location.href ="../com/bin/acc/login.php";
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style type="text/css">
			#cimg{
				float:left;
				width: 10%;
				margin-right: 12%;
				margin-bottom: 0;
			}

			.mh2 {
				text-align: center;
				font-size: 15px;
				float: left;
			}

			#cpic{
				width: 70%;
				height: 200px;
				margin-top: 20px;
			}

			button {
				margin-top: 13px;
				margin-left: 10%;
				height: 40px;
				width: 25%;
				float: right;
				margin-right: 7%;
				background-color: darkgreen;
				color: yellow;
				cursor: pointer;
			}

/*Tablet style*/
		@media only screen and (min-width: 600px) {

			.mh2 {
				text-align: center;
				font-size: 25px;
				float: left;
			}

			#cpic{
				width: 65%;
				height: 300px;
				margin-top: 20px;
			}

			button {
				margin-top: 30px;
				margin-left: 10%;
				width: 17%;
			}
		}

		/*Laptop style*/
		@media only screen and (min-width: 768px) {

			.mh2 {
				text-align: center;
				font-size: 25px;
				float: left;
			}

			#cpic{
				width: 60%;
				height: 300px;
				margin-top: 20px;
			}

			button {
				margin-top: 30px;
				margin-left: 10%;
				width: 20%;
			}
		}
	</style>
</head>
<body>
	<img id="cimg" src="../com/img/clogo.png">
	
	<h2 class="mh2">DLBC CHURCH MANAGEMENT SUITE </h2>

	<img id="cpic" src="../com/img/dlbc2.png">

	<form action="../com/bin/acc/login.php">

		<button name="submit" class="btn btn-primary" onclick="proceed()">Login  <i class="fa fa-sign-in" aria-hidden="true"></i></button>
	</form>
	<?php
		include "../com/bin/hed/copyright.php";
	?>
</body>
</html>