<?php

class asdata extends Connections
{
	public function getIctAss($itype){

        $query = "SELECT * FROM tblict WHERE item_type = '$itype'";                   
		$result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
	}  

    public function getAssetLoc($itype)   //getAssetLoc
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

    public function getFurAss($itype)   
    {
        $query = "SELECT * FROM `assetref` WHERE categoryName = '$itype'";
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
    
    public function createAsset($assetCategory, $subCategory, $assetName, $quantity, $dop, $cap, $location, $status){
        $sql = "INSERT INTO `assetg`(`item_category`, `item_type`, `assetName`, `sn`, `dop`, `cap`, `location`, `status`) VALUES ('$assetCategory','$subCategory','$assetName','$quantity','$dop','$cap','$location','$status')";
        if($result = $this->connect()->query($sql) == TRUE){
           return "Success";
       }
       
   }

    public function getBuildingAss($itype){

        $query = "SELECT * FROM assetlb WHERE item_category = '$itype'";                   
		$result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
	}

    public function get1BuildingAss($itype){

        $query = "SELECT * FROM assetlb WHERE id = '$itype'";                   
		$result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
	}

    //Data Deletion function Function
// public function delete($rid)
// {
// // $deleterecord=mysqli_query($this->dbh,"delete from assetlb where id=$rid");

// $query = "delete from assetlb where id=$rid";
// $result = $this->connect()->query($query);
// return $deleterecord;
// }

    public function getMusicAss($itype){

        $query = "SELECT * FROM assetg WHERE item_category = '$itype'";                   
		$result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
	}  

    public function getLandAss($itype){

        $query = "SELECT * FROM assetlb WHERE item_category = '$itype'";                   
		$result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
	}

    public function get1MusicAsset($itype){

        $query = "SELECT * FROM assetg WHERE id = '$itype'";                   
		$result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
	}

    public function getStringMusicAss($itype){

        $query = "SELECT * FROM assetg WHERE item_type = '$itype'";                   
		$result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
	}

    public function getBrassMusicAss($itype){

        $query = "SELECT * FROM assetg WHERE item_type = '$itype'";                   
		$result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
	}

    public function getWoodwindMusicAss($itype){

        $query = "SELECT * FROM assetg WHERE item_type = '$itype'";                   
		$result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
	}

    public function getCat($opt1, $opt2, $opt3){
        $query = "SELECT DISTINCT categoryName FROM assetref WHERE categoryName = '$opt1' OR  categoryName = '$opt2' OR categoryName = '$opt3' ";                   
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
    }

    public function get1Cat($opt1){
        $query = "SELECT DISTINCT categoryName FROM assetref WHERE categoryName = '$opt1' ";                   
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
    }

    public function getsubCat($val){
        $query = "SELECT DISTINCT subCategory FROM assetref WHERE categoryName = '$val' ";                   
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
    }

    public function getsubCat1($val){
        $query = "SELECT DISTINCT subCategory FROM assetref WHERE categoryName = '$val' ";                   
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
    }

    public function getsubCat1b($val){
        $query = "SELECT DISTINCT subCategory FROM assetref WHERE categoryName = '$val' ";                   
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
    }

    public function getassType($val)
    {
        $query = "SELECT DISTINCT assetName FROM assetref WHERE subCategory = '$val' ";
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        }
    }
    
    public function getsubCat2($val){
        $query = "SELECT assetType FROM assetref WHERE subCategory = '$val' ";                   
        $result = $this->connect()->query($query);
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $data[] =$rows;
            }
            return $data;
        }
    }

    public function createMusicAsset($assetCategory, $subCategory, $assetName, $manufacturer,$model,$sn, $dop, $cap, $assetLocation, $assetStatus){
        $sql = "INSERT INTO `assetg`(`item_category`, `item_type`, `assetName`, `oem`, `model`, `sn`, `dop`, `cap`, `location`, `status`) VALUES ('$assetCategory', '$subCategory', '$assetName', '$manufacturer','$model','$sn', '$dop', '$cap', '$assetLocation', '$assetStatus')";
       if($result = $this->connect()->query($sql) == TRUE){
           return "Success";
       }
       
   }

    public function saveBuilding($assetCategory, $assetName, $address,$no_of_plots,$larea, $costPrice, $fenced, $currStatus, $origOwnerName, $origOwnerAddress, $origOwnerPhone, $buildingPlan, $no_floors, $natGrid, $estCost, $yearCompleted, $buildingState, $assetHolder, $usage, $buildingMaterial)
    {
        $sql = "INSERT INTO `assetlb`(`item_category`, `assetName`, `address`, `no_of_plots`, `larea`, `cost_price`, `fenced`, `current_status`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`, `building_plan`, `no_of_floors`, `national_grid`, `estimated_cost`, `year_completed`, `building_state`, `asset_holder`, `usage`, `building_material`) VALUES ('BUILDING', 'BUILDING', '$address','$no_of_plots','$larea', '$costPrice', '$fenced', '$currStatus', '$origOwnerName', '$origOwnerAddress', '$origOwnerPhone', '$buildingPlan', '$no_floors', '$natGrid', '$estCost', '$yearCompleted', '$buildingState', '$assetHolder', '$usage','$buildingMaterial')";
       if($result = $this->connect()->query($sql) == TRUE){
           return "Success";
    } 
}

public function saveLand($assetCategory, $assetName, $address,$no_of_plots,$larea, $costPrice, $yearPurchased, $fenced, $currStatus, $origOwnerName, $origOwnerAddress, $origOwnerPhone,$transName,$transPhone, $surveyPlan, $deed,$receipt,$cofo, $natGrid, $assetHolder, $usage)
    {
        $sql = "INSERT INTO `assetlb`(`item_category`, `assetName`, `address`, `no_of_plots`, `larea`, `cost_price`, `year_of_purchase`, `fenced`, `current_status`, `orig_owner_name`, `orig_owner_address`, `orig_owner_phone`, `trans_by`, `trans_phone`, `attach_surveyplan`, `attach_deed`, `attach_receipt`, `attach_cofo`, `national_grid`,  `asset_holder`, `usage`) VALUES ('LAND', 'LAND', '$address','$no_of_plots','$larea', '$costPrice', '$yearPurchased', '$fenced', '$currStatus', '$origOwnerName', '$origOwnerAddress', '$origOwnerPhone','$transName','$transPhone', '$surveyPlan', '$deed','$receipt','$cofo', '$natGrid', '$assetHolder', '$usage')";
       if($result = $this->connect()->query($sql) == TRUE){
           return "Success";
    } 
}

}

?>