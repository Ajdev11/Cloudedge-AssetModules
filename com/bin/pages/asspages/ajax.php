<?php
include "conn.php";
$cat_ID = isset($_POST['cat_ID'])?$_POST['cat_ID'] : 0;
$type_ID = isset($_POST['type_ID'])?$_POST['type_ID'] : 0;
$command = isset($_POST['get'])?$_POST['get'] : "";

switch($command){
    case "categoryName":
        $statement = "SELECT DISTINCT cat_ID, categoryName FROM assetcategory";
        $dt = mysqli_query($conn,$statement);
        while($result=mysqli_fetch_array($dt)){
            echo $result1 = "<option value=".$result['cat_ID'].">".$result['categoryName']."</option>";
        }
        break;
    case "assetType":
        $result1 = "<option>Select Type of Asset<option>";
        $statement = "SELECT type_ID, assetType FROM assettype WHERE cat_ID=".$cat_ID;
        $dt = mysqli_query($conn,$statement);
        while($result=mysqli_fetch_array($dt)){
             $result1 .= "<option value=".$result['type_ID'].">".$result['assetType']."</option>";
        }
        echo $result1;
        break;
    case "assetName":
        $result1 = "<option>Select Asset<option>";
        $statement = "SELECT asset_ID, assetName FROM assetname WHERE type_ID=".$type_ID;
        $dt = mysqli_query($conn,$statement);
        while($result=mysqli_fetch_array($dt)){
             $result1 .= "<option value=".$result['asset_ID'].">".$result['assetName']."</option>";
        }
        echo $result1;
        break;
}
?>