<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>

<body>
	<?php

  require '../com/sess/mods/connect.php';
  require "../com/logd/logdata.php";

  $logoff = new ldata;
  $codedusa = $_SESSION["oru"];// $appm->codeme($auser);
  //Normal logoff
	$cpw = "No";
	$nauth = $logoff->getAuth($codedusa, $cpw);
	$status = $logoff->updAuth($nauth, $codedusa);
     
 //Reset loging variables
  $_SESSION["oru"] = "";
  $_SESSION["auser"] = "";

  $_SESSION["acountry"] = "";
  $_SESSION["astate"] = "";
  $_SESSION["aregion"] = "";
   $_SESSION["aogroup"] = "";
   $_SESSION["agroup"] = "";
   $_SESSION["adistrict"] = "";
  $_SESSION["ascope"] = "";
?>
<script type="text/javascript">
  sessionStorage.auser = "";
  sessionStorage.country = "" ;
  sessionStorage.state = "" ;
  sessionStorage.region = "";
  sessionStorage.ogroup = "" ;
  sessionStorage.group = "";
  sessionStorage.district = "";
  sessionStorage.fulname = "";
  sessionStorage.ulev = "";
  alert("You session is timed out.");
  location.href='../com/bin/acc/login.php';
</script>
<!--<h1 style="text-align:center;">Session Timeout and you are logged out</h1>-->
</body>
</html>