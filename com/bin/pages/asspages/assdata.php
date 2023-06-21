<?php

class asdata extends Connections
{
    // Function get assets
    public function getIctAss($itype)
    {

        $query = "SELECT * FROM tblict WHERE item_type = '$itype'";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    public function getFurAssets($itype)
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

  public function getassType($val)
    {
        $query = "SELECT * FROM assetref WHERE subCategory = '$val' ";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }
    

    public function getMusicAss($itype)
    {

        $query = "SELECT * FROM assetg WHERE item_category = '$itype'";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }



    public function get1Cat($itype)
    {
        $query = "SELECT DISTINCT categoryName FROM assetref WHERE categoryName = '$itype' ";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    public function get2Cat($itype)
    {
        $query = "SELECT * FROM assetref WHERE assetName = '$itype' ";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }

    // Function get asset location
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

    // function get subcategories

    public function getsubCat1($val)
    {
        $query = "SELECT DISTINCT subCategory FROM assetref WHERE categoryName = '$val' ";
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
        $query = "SELECT DISTINCT subCategory FROM assetref WHERE subCategory = '$val' ";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }
    public function getAssName($val)
    {
        $query = "SELECT DISTINCT assetName FROM assetref WHERE assetName = '$val' ";
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
    public function createAsset($assetCategory, $subCategory, $assetName, $quantity, $dop, $cap, $location, $status)
    {
        $sql = "INSERT INTO `assetg`(`item_category`, `item_type`, `assetName`, `sn`, `dop`, `cap`, `location`, `status`) VALUES ('$assetCategory','$subCategory','$assetName','$quantity','$dop','$cap','$location','$status')";
        if ($result = $this->connect()->query($sql) == TRUE) {
            return "Success";
        }
    }

    public function createMusicAsset($assetCategory, $subCategory, $assetName, $manufacturer, $model, $sn, $dop, $cap, $assetLocation, $assetStatus)
    {
        $sql = "INSERT INTO `assetg`(`item_category`, `item_type`, `assetName`, `oem`, `model`, `sn`, `dop`, `cap`, `location`, `status`) VALUES ('$assetCategory', '$subCategory', '$assetName', '$manufacturer','$model','$sn', '$dop', '$cap', '$assetLocation', '$assetStatus')";
        if ($result = $this->connect()->query($sql) == TRUE) {
            return "Success";
        }
    }

    public function saveBuilding($assetCategory, $assetName, $address, $no_of_plots, $larea, $costPrice, $fenced, $currStatus, $origOwnerName, $origOwnerAddress, $origOwnerPhone, $buildingPlan, $no_floors, $natGrid, $estCost, $yearCompleted, $buildingState, $assetHolder, $usage, $buildingMaterial)
    {
        $sql = "INSERT INTO `assetlb`(`item_category`, `assetName`, `address`, `no_of_plots`, `larea`, `cost_price`, `fenced`, `current_status`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`, `building_plan`, `no_of_floors`, `national_grid`, `estimated_cost`, `year_completed`, `building_state`, `asset_holder`, `usage`, `building_material`) VALUES ('BUILDING', 'BUILDING', '$address','$no_of_plots','$larea', '$costPrice', '$fenced', '$currStatus', '$origOwnerName', '$origOwnerAddress', '$origOwnerPhone', '$buildingPlan', '$no_floors', '$natGrid', '$estCost', '$yearCompleted', '$buildingState', '$assetHolder', '$usage','$buildingMaterial')";
        if ($result = $this->connect()->query($sql) == TRUE) {
            return "Success";
        }
    }

    public function saveLand(
        $assetCategory,
        $assetName,
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
        $location,
        $transName,
        $transPhone
    ) {
        $sql = "INSERT INTO `assetlb`(`item_category`, `assetName`, `location`, `address`, `no_of_plots`, `larea`, `cost_price`, `year_of_purchase`, `fenced`, `current_status`, `fullypaid`, `litig`, `national_grid`, `asset_holder`, `usage`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`, `attach_surveyplan`, `attach_deed`, `attach_cofo`, `attach_receipt`,`trans_by`, `trans_phone`) VALUES ('LAND', 'LAND', '$location', '$address', '$no_of_plots', '$larea', '$costPrice', '$yearPurchased', '$fenced', '$currStatus', '$fullypaid', '$litig', '$natGrid', '$assetHolder', '$usage', '$origOwnerName', '$origOwnerAddress', '$origOwnerPhone', '$surveyPlan', '$deed', '$cofo', '$receipt','$transName','$transPhone')";
        if ($result = $this->connect()->query($sql) == TRUE) {
            return "Success";
        }
    } 
}






//------------------------------------------------------------------
    // public function getStringMusicAss($itype)
    // {

    //     $query = "SELECT * FROM assetg WHERE item_type = '$itype'";
    //     $result = $this->connect()->query($query);
    //     $num_rows = $result->num_rows;
    //     if ($num_rows > 0) {
    //         while ($rows = $result->fetch_assoc()) {
    //             $data[] = $rows;
    //         }
    //         return $data;
    //     }
    // }

    // public function getBrassMusicAss($itype)
    // {

    //     $query = "SELECT * FROM assetg WHERE item_type = '$itype'";
    //     $result = $this->connect()->query($query);
    //     $num_rows = $result->num_rows;
    //     if ($num_rows > 0) {
    //         while ($rows = $result->fetch_assoc()) {
    //             $data[] = $rows;
    //         }
    //         return $data;
    //     }
    // }


    // public function getWoodwindMusicAss($itype)
    // {

    //     $query = "SELECT * FROM assetg WHERE item_type = '$itype'";
    //     $result = $this->connect()->query($query);
    //     $num_rows = $result->num_rows;
    //     if ($num_rows > 0) {
    //         while ($rows = $result->fetch_assoc()) {
    //             $data[] = $rows;
    //         }
    //         return $data;
    //     }
    // }
?>




