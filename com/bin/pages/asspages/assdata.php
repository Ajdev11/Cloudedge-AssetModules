<?php

class asdata extends Connections
{

    // functions for category, subcategory and assetname
    public function getCat($opt1, $opt2, $opt3)
    {
        $query = "SELECT DISTINCT categoryName FROM assetref WHERE categoryName = '$opt1' OR  categoryName = '$opt2' OR categoryName = '$opt3' ";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }
// the get1cat function is used in the vehicles.php file
    public function get1Cat($val)
    {
        $query = "SELECT DISTINCT categoryName FROM assetref WHERE categoryName = '$val' ";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    public function getsubCat($val)
    {
        $query = "SELECT DISTINCT subCategory FROM assetref WHERE categoryName = '$val'";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }
    public function getassType($val)
    {
        $query = "SELECT DISTINCT assetName FROM assetref WHERE subCategory = '$val'";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    //function for furnitureassets, musicassets, land asset, buildingasset, vehicleassets

    public function getFurAssets($opt1, $opt2, $opt3)
    {
        $query = "SELECT * FROM assetg WHERE item_category = '$opt1' OR item_category = '$opt2' OR item_category = '$opt3' ";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }
    public function getMusicAss($opt1, $opt2, $opt3)
    {

        $query = "SELECT * FROM assetg WHERE item_category = '$opt1' OR item_category = '$opt2' OR item_category = '$opt3' ";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }



    public function getLandAss($itype)
    {

        $query = "SELECT * FROM assetlb WHERE item_category = '$itype'";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    public function getBuildingAss($itype)
    {

        $query = "SELECT * FROM assetlb WHERE item_category = '$itype'";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }
    public function getVehicleAssets($itype)
    {
        $query = "SELECT * FROM `assetg` WHERE item_category = '$itype'";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }


    // function create and insert assets
    public function createAsset($assetCategory, $subCategory, $assetName, $sn, $dop, $cap, $location, $status)
    {
        $sql = "INSERT INTO `assetg`(`item_category`, `item_type`, `assetName`, `sn`, `dop`, `cap`, `location`, `status`) VALUES ('$assetCategory', '$subCategory','$assetName', '$sn', '$dop', '$cap', '$location', '$status')";
        if ($result = $this->connect()->query($sql) == TRUE) {
            return "Success";
        }
    }

    public function createMusicAsset($assetCategory, $subCategory, $assetName, $oem, $model, $sn, $dop, $cap, $assetLocation, $assetStatus)
    {
        $sql = "INSERT INTO `assetg`(`item_category`, `item_type`, `assetName`, `oem`, `model`, `sn`, `dop`, `cap`, `location`, `status`) VALUES ('$assetCategory', '$subCategory', '$assetName', '$oem','$model','$sn', '$dop', '$cap', '$assetLocation', '$assetStatus')";
        if ($result = $this->connect()->query($sql) == TRUE) {
            return "Success";
        }
    }



    public function saveBuilding(
        $assetCategory, $assetName, $plan, $address, $fenced, $currStatus, $origOwnerName, $origOwnerAddress, $origOwnerPhone, $no_floors, $natGrid, $estCost, $yearCompleted, $assetHolder, $usage, $buildingMaterial)
    {
        $sql = "INSERT INTO `assetlb`(`item_category`, `assetName`, `plan`, `address`, `fenced`, `current_status`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`, `no_of_floors`, `national_grid`, `estimated_cost`, `year_completed`, `asset_holder`, `usage`, `building_material`) VALUES ('BUILDING', 'BUILDING','$plan', '$address', '$fenced', '$currStatus', '$origOwnerName', '$origOwnerAddress', '$origOwnerPhone', '$no_floors', '$natGrid', '$estCost', '$yearCompleted', '$assetHolder', '$usage','$buildingMaterial')";
        if ($result = $this->connect()->query($sql) == TRUE) {
            return "Success";
        }
    }

    public function saveLand(
        $assetCategory,
        $assetName,
        $location,
        $address,
        $no_of_plots,
        $larea,
        $costPrice,
        $yearPurchased,
        $fenced,
        $currStatus,
        $fullypaid,
        $litig,
        $natGrid,
        $assetHolder,
        $usage,
        $origOwnerName,
        $origOwnerAddress,
        $origOwnerPhone,
        $surveyPlan,
        $deed,
        $cofo,
        $receipt,
        $transName,
        $transPhone
    ) {
        $sql = "INSERT INTO `assetlb`(`item_category`, `assetName`, `location`, `address`, `no_of_plots`, `larea`, `cost_price`, `year_of_purchase`, `fenced`, `current_status`, `fullypaid`, `litig`, `national_grid`, `asset_holder`, `usage`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`, `attach_surveyplan`, `attach_deed`, `attach_cofo`, `attach_receipt`,`trans_by`, `trans_phone`) VALUES ('LAND', 'LAND', '$location', '$address', '$no_of_plots', '$larea', '$costPrice', '$yearPurchased', '$fenced', '$currStatus', '$fullypaid', '$litig', '$natGrid', '$assetHolder', '$usage', '$origOwnerName', '$origOwnerAddress', '$origOwnerPhone', '$surveyPlan', '$deed', '$cofo', '$receipt','$transName','$transPhone')";
        if ($result = $this->connect()->query($sql) == TRUE) {
            return "Success";
        }
    }
    public function createVehicleAsset($assetCategory, $subCategory, $assetName, $manufacturer, $model, $sn, $dop, $cap, $assetLocation, $assetStatus, $details)
    {
        $sql = "INSERT INTO `assetg`(`item_category`, `item_type`, `assetName`, `oem`, `model`, `sn`, `dop`, `cap`, `location`, `status`,`details`) VALUES ('$assetCategory', '$subCategory', '$assetName', '$manufacturer','$model','$sn', '$dop', '$cap', '$assetLocation', '$assetStatus','$details')";
        if ($result = $this->connect()->query($sql) == TRUE) {
            return "Success";
        }
    }
    // Function get asset locations dropdown
    public function getAssetLoc($itype)
    {
        $query = "SELECT * FROM `assloc` ";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }

}