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

// furniture classes



    // =======
}

?>