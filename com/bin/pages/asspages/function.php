<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'assetsdb');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}
//Data Insertion Function
	public function insert($fname,$lname,$emailid,$contactno,$address)
	{
	$ret=mysqli_query($this->dbh,"insert into tblusers(FirstName,LastName,EmailId,ContactNumber,Address) values('$fname','$lname','$emailid','$contactno','$address')");
	return $ret;
	}
//Data read Function
public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from assetlb where item_category='LAND'");
	return $result;
	}
//Data one record read Function
public function fetchonerecord($id)
	{
	$oneresult=mysqli_query($this->dbh,"select * from assetg where id=$id");
	return $oneresult;
	}

//Data one record read Function
public function fetchoneLandrecord($id)
{
$oneresult=mysqli_query($this->dbh,"select * from assetlb where id=$id");
return $oneresult;
}
public function fetchoneMusicrecord($id)
{
$oneresult=mysqli_query($this->dbh,"select * from assetg where id=$id");
return $oneresult;
}
public function fetchoneFurniturerecord($id)
{
$oneresult=mysqli_query($this->dbh,"select * from assetg where id=$id");
return $oneresult;
} 
//Data updation Function   
public function updateFurniture($assetName, $categ, $subCateg, $qty,$dop,$cap,$loc, $status, $id)
	{
	$updaterecord=mysqli_query($this->dbh,"update  assetg set assetName='$assetName',item_category='$categ',item_type='$subCateg',sn='$qty',dop='$dop',cap='$cap',location='$loc',status='$status' where id='$id' ");
	return $updaterecord;
	}
	public function updateVehicle($assetName, $categ, $subCateg, $qty,$dop,$cap,$loc, $status, $id)
	{
	$updaterecord=mysqli_query($this->dbh,"update  assetg set assetName='$assetName',item_category='$categ',item_type='$subCateg',sn='$qty',dop='$dop',cap='$cap',location='$loc',status='$status' where id='$id' ");
	return $updaterecord;
	}
public function updateLand($assetName,$address,$plots,$costP,$status,$id)
	{
	$updaterecord=mysqli_query($this->dbh,"update  assetlb set assetName='$assetName',address='$address',no_of_plots='$plots',cost_price='$costP',current_status='$status' where id='$id' ");
	return $updaterecord;
	}

//Data one record read Function - Building
public function fetchoneBuildingrecord($id)
{
$oneresult=mysqli_query($this->dbh,"select * from assetlb where id=$id");
return $oneresult;
}
//Data updation Function
public function updateBuilding_old($assetName,$address,$costP,$status,$id)
	{
	$updaterecord=mysqli_query($this->dbh,"update  assetlb set assetName='$assetName',address='$address',cost_price='$costP',current_status='$status' where id='$id' ");
	return $updaterecord;
	}
	public function updateBuilding($assetName, $address, $costPrice, $fenced, $currStatus, $origOwnerName, $origOwnerAddress, $origOwnerPhone, $buildingPlan, $no_floors, $natGrid, $yearCompleted, $buildingState, $assetHolder, $usage, $buildingMaterial,$id)
	{
	$updaterecord=mysqli_query($this->dbh,"update  assetlb set assetName='$assetName',address='$address',cost_price='$costPrice',fenced='$fenced',current_status='$currStatus',orig_owner_name='$origOwnerName',orig_owner_address='$origOwnerAddress',orig_owner_phone='$origOwnerPhone',building_plan='$buildingPlan',no_of_floors='$no_floors',national_grid='$natGrid', year_completed='$yearCompleted', building_state='$buildingState',asset_holder= '$assetHolder', usage='$usage', building_material='$buildingMaterial' where id='$id' ");
	return $updaterecord;
	}

	//Data updation Function
public function updateMusic($oem,$model,$sn,$dop,$cap,$locat,$status,$categ,$subCateg,$assetName,$id)
{
$updaterecord=mysqli_query($this->dbh,"update  assetg set oem='$oem',model='$model',sn='$sn',dop='$dop',cap='$cap',location='$locat',status='$status',item_category='$categ',item_type='$subCateg',assetName='$assetName' where id='$id' ");
return $updaterecord;
}
//Data Deletion function Function  
public function delete($rid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from assetlb where id=$rid");
	return $deleterecord;
	}

	//Data Deletion function Function  
public function deleteMusic($rid)
{
$deleterecord=mysqli_query($this->dbh,"delete from assetg where id=$rid");
return $deleterecord;
}

	//Data Deletion function Function  
	public function deleteFurniture($rid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from assetg where id=$rid");
	return $deleterecord;
	}

	public function deleteVehicle($rid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from assetg where id=$rid");
	return $deleterecord;
	}

}
?>