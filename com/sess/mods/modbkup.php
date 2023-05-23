
<?php
 
 class Listings extends Connections
 {
     public function getListOne() //List Countries
     {
 
         $query = 'SELECT DISTINCT country FROM cmap';
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
 
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
 
             return $data;
         }
     }
 
 
   public function getStates($country_name) //List states
     {
         $_SESSION["ccountry"] = $country_name;
         $query = "SELECT DISTINCT state FROM cmap WHERE country = '$country_name'";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
 
         //check if data was returned
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
                 sort($data);
             }
 
             return $data;
         }
     }
        
     public function getRegions($state, $country) //List region
     {
       $query = "SELECT DISTINCT region FROM cmap WHERE country = '$country' AND state = '$state'";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
 
         //check if data was returned
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
                 sort($data);
             }
 
             return $data;
         }
     }
 
     public function getOGroups($region, $state, $country) //list old groups
     {
 
         $query = "SELECT DISTINCT ogroup FROM cmap WHERE country = '$country' AND state = '$state' AND  region = '$region' ORDER BY ogroup";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         //var_dump($query);
         //check if data was returned
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
                 //sort($data);
             }
             //var_dump($data);
             return $data;
         }
     }
 
     public function getUGroups($ogroup, $region, $state, $country) //list  groups
     {
         $query = "SELECT DISTINCT ugroup FROM cmap WHERE country = '$country' AND state = '$state' AND  region = '$region' AND ogroup = '$ogroup'";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
 
         //check if data was returned
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
                 sort($data);
             }
 
             return $data;
         }
     }
 
 public function getDistricts($ugroup, $ogroup, $region, $state, $country) //list  groups
     {
         $country = trim($country); $state = trim($state);
         $region = trim($region); $ogroup = trim($ogroup); 
         $ugroup = trim($ugroup);
         $query = "SELECT DISTINCT district FROM cmap WHERE country = '$country' AND state = '$state' AND  region = '$region' AND ogroup = '$ogroup' AND ugroup = '$ugroup' ORDER BY district";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
 
         //check if data was returned
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
             
             return $data;
         }
     }
 
     public function getLocs($district, $ugroup, $ogroup, $region, $state, $country){ 
 
         $query = "SELECT DISTINCT loc FROM cmap WHERE country = '$country' AND state = '$state' AND  region = '$region' AND ogroup = '$ogroup' AND ugroup = '$ugroup'  AND district = '$district' AND loc != '' ORDER BY loc";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
             return $data;
         }
     }//
 
     public function getGrpAppUsers($ugroup, $ogroup, $region, $state, $country){
 
         $query = "SELECT DISTINCT usaname FROM users WHERE ucountry = '$country' AND ustate = '$state' AND  uregion = '$region' AND uogroup = '$ogroup' AND ugroup = '$ugroup' ORDER BY usaname";
         
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
             return $data;
         }
     }//
 
     public function confirmtLocations($district, $ugroup, $ogroup, $region, $state, $country) //list  groups
     {
         $query = "SELECT loc FROM cmap WHERE country = '$country' AND state = '$state'AND  region = '$region' AND ogroup = '$ogroup' AND ugroup = '$ugroup' AND district = '$district' AND loc != ''";
        // echo $query;
         //$query = "SELECT * FROM cmap WHERE country = '$country' AND state = '$state'AND  region = 'GOKANA'";
         //print_r($query);
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
 
         if ($num_rows > 0) {
             $rows = $result->fetch_assoc();
             $data = $rows['loc'];
         }else{
             $data = "";
         }
         return $data;
     }
 
     public function getLocations($district, $ugroup, $ogroup, $region, $state, $country) 
     {
         $query = "SELECT DISTINCT loc FROM cmap WHERE country = '$country' AND state = '$state'AND  region = '$region' AND ogroup = '$ogroup' AND ugroup = '$ugroup' AND district = '$district'";
         
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
 
         if ($num_rows > 0) {
             $rows = $result->fetch_assoc();
             $data = $rows['loc'];
         }else{
             $data = "";
         }
 
         return $data;
 
     }
 
     public function getLogin($lognam) //list  groups
         {
         $query = "SELECT DISTINCT usaname FROM users WHERE usaname = '$lognam'";
 
         //echo $query;
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         //check if data was returned
         if ($num_rows > 0) {
             $rows = $result->fetch_assoc();
             $data = $rows['usaname'];
             return $data;
         }else {
             return "";
         }
     }
 
     // public function usernam($lognam, $ugroup, $udistrict){
     //     $query = "SELECT DISTINCT usaname FROM users WHERE usaname = '$lognam' AND ugroup  = '$ugroup' AND udistrict = '$udistrict'";
         
     //     //echo $query;
     //     $result = $this->connect()->query($query);
     //     $num_rows = $result->num_rows;
     //     //check if data was returned
     //     if ($num_rows > 0) {
     //         $rows = $result->fetch_assoc();
     //         $data = $rows['usaname'];
     //         return $data;
     //     }else {
     //         return "";
     //     }
     // }
 
     public function getrauth($user, $cnt) //list  groups
         {
             //
         $uname = $user;
         $oru = "";
        $mix = substr($uname, 1,2);
        $mix2 = substr($uname, 3,2);
        $uname = $mix2.$mix.$uname;
        $uname = strrev($uname); 
        $i = strlen($uname);
     // echo($uname);
        for ($x = 0; $x < $i; $x++) {
          $digi = substr($uname, $x,1);
           $sql = "SELECT DISTINCT oruk FROM oruko where digi = BINARY '$digi'";
           $result = $this->connect()->query($sql);
           if ($result->num_rows > 0) {
             // output data of each row
              while($row = $result->fetch_assoc()) {
                $coruk = $row["oruk"];
                $oru = $oru.$coruk;
                //echo $oru."<br>";
               }
           }    
         } 
     
         $query = "SELECT id,  uauth FROM pade WHERE uname = '$oru'";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         //check if data was returned
         if ($num_rows > 0) {
             $rows = $result->fetch_assoc();
             if($cnt == 1){
                $data = $rows['uauth'];
               $jdata = json_encode($data);
                return $jdata;
             }else{
                 $data = $rows['id'];
               return $data;
             }
         }
 
     }
 
     public function updAuh($auth, $uid){
         //echo $uid;
         $query = "UPDATE pade SET uauth = '$auth' WHERE id = '$uid'";
         if ($this->connect()->query($query)== TRUE){
             return "Changes saved successfully.";
         } else {
             return "Changes was not saved"; 
         }
       }
 
     public function getUsersDetails($user) //list  groups
         {
         $query = "SELECT * FROM users WHERE usaname = '$user'";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         
         if ($num_rows > 0) {
             $rows = $result->fetch_assoc(); 
             $data =$rows;
         }
            $jdata = json_encode($data);
             return $jdata;
 
     }
 
     public function getUsers($region){
         $query = "SELECT * FROM users WHERE uregion = '$region' ORDER BY ufname";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
                 //asort($data);
             }
             return $data;
         }
     }
 
     public function getRoleUsers($country, $state, $region, $ogroup, $ugroup){
         
         $query = "SELECT usaname FROM users WHERE ucountry = '$country' AND ustate = '$state' AND uregion = '$region' AND uogroup = '$ogroup' AND ugroup = '$ugroup' ORDER BY udistrict, ufname";
         
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
                 asort($data);
             }
 
             return $data;
         }
     }
 
     public function tempusers($ugroup){
         $query = "SELECT * FROM userlst WHERE ugroup = '$ugroup' ORDER BY district, loc ";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         $i = 1;
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] =array_pad($rows,$i,"sn");
 
             }
 
             return $data;
         }
     }
 
     public function getUsaname($region){
         $query = "SELECT usaname FROM users WHERE uregion = '$region' ORDER BY usaname";
         $result = $this->connect()->query($query);
         //$result = $conn->query($query);
         $num_rows = $result->num_rows;
         $i = 1;
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = array_pad($rows,$i,"sn");
                 //$data[] = $i.$rows;
                 //sort($data);
             }
 
             return $data;
         }
     }
 
     public function getlic(){
         $country = $_SESSION["acountry"]; 
         $state = $_SESSION["astate"];
         $region = $_SESSION["aregion"];
 
         $sql = "SELECT * FROM aplic where country = '$country' AND state = '$state' AND region = '$region'";
         $result = $this->connect()->query($sql);
         $num_rows = $result->num_rows;
         
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 //$data[] =$rows;
                 $alic = $rows["lic"];
                 $ulic = $rows["ulic"];
                 $rlic = $rows["rlic"];
 
             }
            $a = array($alic, $ulic, $rlic);
             return $a;
 
         }
     }
 
 
     public function globalic($country, $state,$region){
         
         $sql = "SELECT * FROM aplic where country = '$country' AND state = '$state' AND region = '$region'";
         $result = $this->connect()->query($sql);
         $num_rows = $result->num_rows;
         
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 //$data[] =$rows;
                 $alic = $rows["lic"];
                 $ulic = $rows["ulic"];
                 $rlic = $rows["rlic"];
 
             }
            $a = array($alic, $ulic, $rlic);
             return $a;
 
         }
     }
 
     public function getmemdetails($isID){
         $sql = "SELECT * FROM chreg  WHERE uid = '$isID'";
         $result = $this->connect()->query($sql);
         $num_rows = $result->num_rows;
         
         if ($num_rows > 0) {
             $rows = $result->fetch_assoc(); 
             $data =$rows;
         }
            $jdata = json_encode($data);
             return $jdata;
     }
 
     public function getProgs($country, $state, $region ){
         //$data[] = ""; //Return array
         //Load any global prog
         $sql = "SELECT prog, status, sdate, id FROM progs WHERE  status = 'open' AND scope  = 'Global'";
         $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $data[] = $row;
             }
 
          }
 
         //Load any national prog
          $sql = "SELECT prog, status, sdate, id FROM progs WHERE status = 'open' AND scope  = 'National' AND country = '$country'";
         $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $data[] = $row;
             }
             
          }
 
         //Load any state prog
          $sql = "SELECT prog, status, sdate, id FROM progs WHERE status = 'open' AND scope  = 'State' AND country = '$country'  AND state = '$state'";
         $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $data[] = $row;
             }
             
          }
 
         //Load any region prog
        $sql = "SELECT prog, status, sdate, id FROM progs WHERE  status = 'open' AND scope  = 'Region' AND country = '$country'  AND state = '$state' AND region = '$region'";
         $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $data[] = $row;
             }
             
          }
          return $data;
 
       }
         // $sql = "SELECT * FROM progs WHERE status = 'open' AND country = '$country' AND state = '$state' AND region = '$region' ";
         // //$idArr = [];
         // $result = $this->connect()->query($sql);
         //  $num_rows = $result->num_rows;
         //  if ($result->num_rows > 0) {
         //     $i = 0;
         //     while($row = $result->fetch_assoc()) {
         //         $id = $row['id'];
         //         $idArr[$i] = $id;
         //         $data[] = $row;
         //         $i++;
         //     }
         //     //Check based on scope
         //     $sql = "SELECT * FROM progs WHERE status = 'open' AND scope = ('National' OR scope = 'State'  OR scope = 'Region') ";
         //     $result = $this->connect()->query($sql);
         //     $num_rows = $result->num_rows;
         //     if ($result->num_rows > 0) {
         //       while($row = $result->fetch_assoc()) {
         //         //Confirm prog is not already added
         //         $idCount = count($idArr);
         //         $scopeId = "";
         //         $found = 'No';
         //         for($x = 0; $x < $idCount; $x++){
         //             $f = $idArr[$x];
         //             $scopeId = $row['id'];
         //             if($f == $scopeId){
         //                 $found = 'Yes';
         //             }
         //         }
         //          if($found == "No"){
         //             $data[] = $row;
         //          }
                 
         //       }
         //     }
         //     return $data;
         //  }
         //  //No data found based on map, check based on scope
         //  $sql = "SELECT * FROM progs WHERE status = 'open' AND (scope = 'National' OR scope = 'State'  OR scope = 'Region') ";
         //     $result = $this->connect()->query($sql);
         //     $num_rows = $result->num_rows;
         //     if ($result->num_rows > 0) {
         //        while($row = $result->fetch_assoc()) {
         //          $data[] = $row;
         //        }
         //        return $data;
         //     }else{
         //         return "";
         //     }
 
 
 
         // $sql = "SELECT * FROM progs WHERE status = 'open' AND (scope = 'Global' OR '$country' OR '$state' OR  '$region')";
         //  $result = $this->connect()->query($sql);
         //  $num_rows = $result->num_rows;
          
         //  if ($result->num_rows > 0) {
         //      while($row = $result->fetch_assoc()) {
         //         $stats = $row['status'];
         //        $data[] = $row;
         //        //$data = 'I got here';
         //       }
         //       return $data;
         //   }           
      //}
 
      public function closeProg(){
        $query = "SELECT edate, id FROM progs WHERE  status = 'open'";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         $today = date("Y-m-d");
         if ($num_rows > 0) {
           while($row = $result->fetch_assoc()) {
              $data = $row['edate'];
              $id = $row['id'];
              $edate=date_create($data);
              $tdate=date_create($today);
              $diff=date_diff($edate, $tdate);
              $mdif =  $diff->format("%R%a");
              if($mdif > 1){//close open programs
                $sql = "UPDATE progs SET status = 'Closed' WHERE id = '$id'";
                 $this->connect()->query($sql);
                }
              }
            }
          }         
       //}
 
      public function getProg(){// Prog details
         $sql = "SELECT * FROM progs ";
          $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          $i = 1;
          if ($num_rows > 0) {
              //echo "This is fantastic";
              
              for ( $x = 1; $x <= $num_rows; $x++){
                  $rows = $result->fetch_assoc();
                  $data[] = $rows;
  
              } 
            return $data;
          }      
      }
 
      public function setprog($prog){// for selection
         $sql = "SELECT * FROM progs WHERE  id = '$prog'";
          $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($num_rows > 0) {
             $row = $result->fetch_assoc(); 
             $_SESSION['progid'] = $row['id'];
             $_SESSION['progtheme'] = $row['theme'];
             $_SESSION['progname'] = $row['prog'];
             $_SESSION['progsdate'] = $row['sdate'];
             $_SESSION['progedate'] = $row['edate'];
 
             return $row;
         }      
      }
 
      public function getworks(){
         $sql = "SELECT work FROM works ";
          $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          $i = 1;
          if ($num_rows > 0) {
              //echo "This is fantastic";
              
              for ( $x = 1; $x <= $num_rows; $x++){
                  $rows = $result->fetch_assoc();
                  $data[] = $rows;
                  sort($data);
              } 
            return $data;
          }      
      }
 
      public function getprogworks(){
         $sql = "SELECT work FROM progwork ";
          $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          $i = 1;
          if ($num_rows > 0) {
              for ( $x = 1; $x <= $num_rows; $x++){
                  $rows = $result->fetch_assoc();
                  $data[] = $rows;
                  sort($data);
              } 
            return $data;
          }      
      }
 
      public function checknone($region){
         $sql = "SELECT DISTINCT ogroup FROM cmap WHERE region = '$region'";
         $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($num_rows > 0) {
             $rows = $result->fetch_assoc(); 
             $data =$rows;
         }
            $jdata = json_encode($data);
             return $jdata;      
      }
 
     public function getdenoms(){
         $sql = "SELECT denom FROM denom ";
          $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          $i = 1;
          if ($num_rows > 0) {
              for ( $x = 1; $x <= $num_rows; $x++){
                  $rows = $result->fetch_assoc();
                  $data[] = $rows;
                  sort($data);
              } 
            return $data;
          }      
      }
 
      public function progdetails($id){
         $sql = "SELECT * FROM progs  WHERE id = '$id'";
          $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($num_rows > 0) {
             $rows = $result->fetch_assoc(); 
             $data =$rows;
         }
            $jdata = json_encode($data);
             return $jdata;    
      }
 
      public function editpardetails($isID){
         $sql = "SELECT * FROM pareg  WHERE regid = '$isID'";
         $result = $this->connect()->query($sql);
         $num_rows = $result->num_rows;
         
         if ($num_rows > 0) {
             $rows = $result->fetch_assoc(); 
             $data =$rows;
         }
            $jdata = json_encode($data);
             return $jdata;
     }
 
     public function editcovdetails($isID){
         $sql = "SELECT * FROM progcov  WHERE covid = '$isID'";
         $result = $this->connect()->query($sql);
         $num_rows = $result->num_rows;
         
         if ($num_rows > 0) {
             $rows = $result->fetch_assoc(); 
             $data =$rows;
         }
            $jdata = json_encode($data);
             return $jdata;
     }
 
     public function prvdlentry($dis, $fname, $lname, $mob){
         //$sql = "SELECT fname FROM pareg  WHERE district = '$dis' AND fname = '$fname' AND lname = '$lname' AND mobile = '$mob'";
         $sql = "SELECT * FROM pareg ";
         echo $sql;
 
         $result = $this->connect()->query($sql);
         $num_rows = $result->num_rows;
         
         if ($num_rows > 0) {
             $rows = $result->fetch_assoc(); 
             $data =$rows['lname'];
         }
            
             return $data;
     }
     //
    public function updroleauth($user, $value, $rauth, $role){
         
        $uname = $user;
         $oru = "";
        $mix = substr($uname, 1,2);
        $mix2 = substr($uname, 3,2);
        $uname = $mix2.$mix.$uname;
        $uname = strrev($uname); 
        $i = strlen($uname);
     
        for ($x = 0; $x < $i; $x++) {
          $digi = substr($uname, $x,1);
           $sql = "SELECT DISTINCT oruk FROM oruko where digi = BINARY '$digi'";
           $result = $this->connect()->query($sql);
           if ($result->num_rows > 0) {
             // output data of each row
              while($row = $result->fetch_assoc()) {
                $coruk = $row["oruk"];
                $oru = $oru.$coruk;
                //echo $oru."<br>";
               }
           }    
         } 
     
         $query = "SELECT uauth FROM pade WHERE uname = '$oru'";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         //check if data was returned
         if ($num_rows > 0) {
             $rows = $result->fetch_assoc();
            
             $auth = $rows['uauth'];
             $ath0 = substr($auth, 0,1); //Reg
             $ath1 = substr($auth, 1,1); //Mc
             $ath2 = substr($auth, 2,1); //att
             $ath3 = substr($auth, 3,1); //ass
             $ath4 = substr($auth, 4,1); //status
             $ath5 = substr($auth, 5,1); //Level
             $ath6 = substr($auth, 6,1); //AD
             $ath7 = substr($auth, 7,1); //OV
             $ath8 = substr($auth, 8,1); //login ID
             $ath9 = substr($auth, 9,1); //SP  
             if($role == 1){
                 $ath0 = $value;
             }
             if($role == 2){
                 $ath1 = $value;
             }
             if($role == 5){
                 $ath5 = $value;
             }
             
             $uauth = $ath0 . $ath1 . $ath2 . $ath3 . $ath4 . $ath5 . $ath6 . $ath7 . $ath8 . $ath9 ;
             
             //save new auth
             $sql = "UPDATE pade SET  uauth = '$uauth' WHERE uname = '$oru'";
             if  ($this->connect()->query($sql) === TRUE) {
             return "Role successfully changed";
             } else{
                 return "Unable to role";
             }  
         }
     }
     //
 
     public function getscateg(){
         $query = "SELECT DISTINCT vstatus FROM vips";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
 
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
 
             return $data;
         }
     }
 
     public function getcategPos($scateg){
         $query = "SELECT DISTINCT statusopt FROM vips WHERE vstatus = '$scateg'";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
 
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
 
             return $data;
         }
     }
 
     public function getLastBalance(){
         $query = 'SELECT * FROM account ORDER BY id DESC LIMIT 1';
         $result = $this->connect()->query($query);
           $num_rows = $result->num_rows;
          if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $balance = $rows['balance'];
             }
                 return $balance;
             }else {
             return 0;
         }
     }
 
     public function saveAcctEntry($country, $state, $region, $ogroup, $ugroup, $district, $transid, $dat, $activity, $depceiver, $purpose, $source, $mop, $credit, $debit, $balance,  $rem, $auser,  $opt){
         $query = "INSERT INTO account (country, state, region, ogroup, ugroup, district, transid, _date, activity, depceiver, purpose, _source, mop, credit, debit, balance, rem, auser) VALUES ('$country', '$state', '$region', '$ogroup', '$ugroup', '$district', '$transid', '$dat', '$activity', '$depceiver', '$purpose', '$source', '$mop', '$credit', '$debit', '$balance',  '$rem', '$auser' )";
         //
         if  ($this->connect()->query($query) === TRUE) {
             //
           if($opt == 'inc'){
             echo 'New Income data saved successfully';
             //echo 'success';
           }else{
             echo 'Expense data saved successfully';
           }
         } else {
           if($opt == 'inc'){
             echo 'Error saving new income data';
             //echo 'success';
           }else{
             echo 'Error saving expense data';
           }
         }
     }
 
     public function getacc($country, $state, $region, $ogroup, $ugroup, $district){
         $query = "SELECT * FROM account WHERE country = '$country' AND state = '$state' AND region = '$region' AND ogroup = '$ogroup' AND ugroup = '$ugroup' AND district = '$district' ORDER BY id DESC";
         //die($query);
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
             return $data;
         }
     }
 
     public function getacched($opt){
         if($opt == 'inc'){
             $query = "SELECT DISTINCT hed FROM acchede ORDER BY hed ";
         }else{
             $query = "SELECT DISTINCT hed FROM acchead ORDER BY hed ";
         }
         
         $result = $this->connect()->query($query);
           $num_rows = $result->num_rows;
          if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
                 return $data;
           }  
     }
 
     public function hedcateg($hed, $opt){
         if($opt == 'inc'){
             $query = "SELECT DISTINCT detail FROM acchede WHERE hed = '$hed' ORDER BY detail ";
         }else{
             $query = "SELECT DISTINCT detail FROM acchead WHERE hed = '$hed' ORDER BY detail ";
         }
       
         $result = $this->connect()->query($query);
           $num_rows = $result->num_rows;
           if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
 
             return $data;
         }
     }
 
     public function getaccper($country, $state, $region, $ogroup, $ugroup, $district){
         $query = "SELECT utitle, fname, lname FROM chreg WHERE country = '$country' AND ustate = '$state' AND region = '$region' AND ogroup = '$ogroup' AND ugroup = '$ugroup' AND district = '$district' ORDER BY utitle ";
         //echo($query);
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
 
             return $data;
 
         }
     }
 
 public function getgrpdispastor($country, $state, $region, $ogroup, $ugroup){
         $query = "SELECT id, utitle, usaname, ufname, ulname, udistrict, mobile FROM users WHERE ucountry = '$country' AND ustate = '$state' AND uregion = '$region' AND uogroup = '$ogroup' AND ugroup = '$ugroup' AND uscope = ( 'DISTRICT PASTOR' OR 'GROUP PASTOR' OR 'OLD DISTRICT REP') ORDER BY ufname ";
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
             return $data;
         }
     }
 
     function getpdis($country, $state, $region, $ogroup, $ugroup){
         $query = "SELECT  district FROM cmap WHERE country = '$country' AND state = '$state' AND region = '$region' AND ogroup = '$ogroup' AND ugroup = '$ugroup' ORDER BY district ";
        // die($query);
         $result = $this->connect()->query($query);
         $num_rows = $result->num_rows;
         if ($num_rows > 0) {
             while ($rows = $result->fetch_assoc()) {
                 $data[] = $rows;
             }
             return $data;
         }
     }
 
     public function setDis($newDis, $id){
         $query = "UPDATE users SET udistrict = '$newDis' WHERE id = '$id'";
         if ($this->connect()->query($query)== TRUE){
             return "Changes saved successfully.";
         } else {
             return "Changes was not saved"; 
         }
       }
 
       public function loadProgs($country, $state, $region, $yer){
        // $data[] = ""; //Return array
         //Load any global prog
         $sql = "SELECT prog, status, sdate, id FROM progs WHERE yer = '$yer' AND scope  = 'Global'";
         $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $data[] = $row;
             }
 
          }
 
         //Load any national prog
          $sql = "SELECT prog, status, sdate, id FROM progs WHERE yer = '$yer' AND scope  = 'National' AND country = '$country'";
         $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $data[] = $row;
             }
             
          }
 
         //Load any state prog
          $sql = "SELECT prog, status, sdate, id FROM progs WHERE yer = '$yer' AND scope  = 'State' AND country = '$country'  AND state = '$state'";
         $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $data[] = $row;
             }
             
          }
 
         //Load any region prog
           $sql = "SELECT prog, status, sdate, id FROM progs WHERE yer = '$yer' AND scope  = 'Region' AND country = '$country'  AND state = '$state' AND region = '$region'";
         $result = $this->connect()->query($sql);
          $num_rows = $result->num_rows;
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                 $data[] = $row;
             }
             
          }
          return $data;
 
       }
 
      //  public function loadProgs($country, $state, $region, $yer){
      //    $sql = "SELECT prog, status, sdate, id FROM progs WHERE yer = '$yer' AND country = '$country' AND state = '$state' AND region = '$region' ";
      //    //$idArr = [];
      //    $result = $this->connect()->query($sql);
      //     $num_rows = $result->num_rows;
      //     if ($result->num_rows > 0) {
      //        $i = 0;
      //        while($row = $result->fetch_assoc()) {
      //            $id = $row['id'];
      //            $idArr[$i] = $id;
      //            $data[] = $row;
      //            $i++;
      //        }
      //        //Check based on scope
      //        $sql = "SELECT prog, status, sdate, id FROM progs WHERE yer = '$yer' AND scope = ('National' OR scope = 'State'  OR scope = 'Region') ";
      //        $result = $this->connect()->query($sql);
      //        $num_rows = $result->num_rows;
      //        if ($result->num_rows > 0) {
      //          while($row = $result->fetch_assoc()) {
      //            //Confirm prog is not already added
      //            $idCount = count($idArr);
      //            $scopeId = "";
      //            $found = 'No';
      //            for($x = 0; $x < $idCount; $x++){
      //                $f = $idArr[$x];
      //                $scopeId = $row['id'];
      //                if($f == $scopeId){
      //                    $found = 'Yes';
      //                }
      //            }
      //             if($found == "No"){
      //                $data[] = $row;
      //             }
                 
      //          }
      //        }
      //        return $data;
      //     }
      //     //No data found based on map, check based on scope
      //     $sql = "SELECT prog, status, sdate, id FROM progs WHERE yer = '$yer' AND (scope = 'National' OR scope = 'State'  OR scope = 'Region') ";
      //        $result = $this->connect()->query($sql);
      //        $num_rows = $result->num_rows;
      //        if ($result->num_rows > 0) {
      //           while($row = $result->fetch_assoc()) {
      //             $data[] = $row;
      //           }
      //           return $data;
      //        }else{
      //            return "";
      //        }
      // }
   
   public function dayfel($country,$state,$region,$ogroup,$ugroup,$district,$loc,$newval, $ftype, $ulev){
         //die($ulev);
 
       if ($ulev == "G"){
         $query = "SELECT wfs.state, wfs.ftype, wfs.mth, wfs.yer,". $selection . " FROM wfs WHERE mth ='$mth' AND yer = '$yer' GROUP BY wfs.state, wfs.ftype ORDER BY wfs.state";
     
       }else if($ulev == "S"){
 
         $query= "SELECT region,ftype, Sum(wfs.mam) AS Amam, Sum(wfs.maf) AS Amaf, Sum(wfs.mat) AS Amat, Sum(wfs.mym) AS Amym, Sum(wfs.myf) AS Amyf, Sum(wfs.myt) AS Amyt, Sum(wfs.mayt) AS Amayt, Sum(wfs.mcm) AS Amcm, Sum(wfs.mcf) AS Amcf, Sum(wfs.mct) AS Amct, Sum(wfs.mgt) AS Amgt, Sum(wfs.vam) As svam, Sum(wfs.vaf) As svaf , Sum(wfs.vat) As svat, Sum(wfs.vym) As svym, Sum(wfs.vyf) As svyf, Sum(wfs.vyt) AS svyt, Sum(wfs.vcm) As svcm, Sum(wfs.vcf) As svcf, Sum(wfs.vct) AS svct, Sum(wfs.vgt) AS svgt FROM wfs WHERE state = '$state' AND dat = '$newval' AND ftype = '$ftype' GROUP BY region, ftype ";
 
       }else if($ulev == "R"){
         $query= "SELECT ogroup, ftype, Sum(wfs.mam) AS Amam, Sum(wfs.maf) AS Amaf, Sum(wfs.mat) AS Amat, Sum(wfs.mym) AS Amym, Sum(wfs.myf) AS Amyf, Sum(wfs.myt) AS Amyt, Sum(wfs.mayt) AS Amayt, Sum(wfs.mcm) AS Amcm, Sum(wfs.mcf) AS Amcf, Sum(wfs.mct) AS Amct, Sum(wfs.mgt) AS Amgt, Sum(wfs.vam) As svam, Sum(wfs.vaf) As svaf , Sum(wfs.vat) As svat, Sum(wfs.vym) As svym, Sum(wfs.vyf) As svyf, Sum(wfs.vyt) AS svyt, Sum(wfs.vcm) As svcm, Sum(wfs.vcf) As svcf, Sum(wfs.vct) AS svct, Sum(wfs.vgt) AS svgt FROM wfs WHERE state = '$state' AND region = '$region' AND dat = '$newval' AND ftype = '$ftype'  GROUP BY ogroup, ftype ";
 
       }else if($ulev == "LRD"){
         $query= "SELECT district, ugroup, ftype, Sum(wfs.mafm) AS Amam, Sum(wfs.maf) AS Amaf, Sum(wfs.mat) AS Amat, Sum(wfs.mym) AS Amym, Sum(wfs.myf) AS Amyf, Sum(wfs.myt) AS Amyt, Sum(wfs.mayt) AS Amayt, Sum(wfs.mcm) AS Amcm, Sum(wfs.mcf) AS Amcf, Sum(wfs.mct) AS Amct, Sum(wfs.mgt) AS Amgt, Sum(wfs.vam) As svam, Sum(wfs.vaf) As svaf , Sum(wfs.vat) As svat, Sum(wfs.vym) As svym, Sum(wfs.vyf) As svyf, Sum(wfs.vyt) AS svyt, Sum(wfs.vcm) As svcm, Sum(wfs.vcf) As svcf, Sum(wfs.vct) AS svct, Sum(wfs.vgt) AS svgt FROM wfs WHERE state = '$state' AND region = '$region' AND dat = '$newval' AND ftype = '$ftype'  GROUP BY district, ftype ORDER BY ugroup, district ";
 
       }else if($ulev == "O"){
         $query= "SELECT ugroup, ftype, Sum(wfs.mam) AS Amam, Sum(wfs.maf) AS Amaf, Sum(wfs.mat) AS Amat, Sum(wfs.mym) AS Amym, Sum(wfs.myf) AS Amyf, Sum(wfs.myt) AS Amyt, Sum(wfs.mayt) AS Amayt, Sum(wfs.mcm) AS Amcm, Sum(wfs.mcf) AS Amcf, Sum(wfs.mct) AS Amct, Sum(wfs.mgt) AS Amgt, Sum(wfs.vam) As svam, Sum(wfs.vaf) As svaf , Sum(wfs.vat) As svat, Sum(wfs.vym) As svym, Sum(wfs.vyf) As svyf, Sum(wfs.vyt) AS svyt, Sum(wfs.vcm) As svcm, Sum(wfs.vcf) As svcf, Sum(wfs.vct) AS svct, Sum(wfs.vgt) AS svgt FROM wfs WHERE state = '$state' AND region = '$region' AND ogroup = '$ogroup' AND dat = '$newval' AND ftype = '$ftype'  GROUP BY ugroup, ftype ";
       }else if($ulev == "OD"){
         $query= "SELECT district, ugroup, ftype, Sum(wfs.mam) AS Amam, Sum(wfs.maf) AS Amaf, Sum(wfs.mat) AS Amat, Sum(wfs.mym) AS Amym, Sum(wfs.myf) AS Amyf, Sum(wfs.myt) AS Amyt, Sum(wfs.mayt) AS Amayt, Sum(wfs.mcm) AS Amcm, Sum(wfs.mcf) AS Amcf, Sum(wfs.mct) AS Amct, Sum(wfs.mgt) AS Amgt, Sum(wfs.vam) As svam, Sum(wfs.vaf) As svaf , Sum(wfs.vat) As svat, Sum(wfs.vym) As svym, Sum(wfs.vyf) As svyf, Sum(wfs.vyt) AS svyt, Sum(wfs.vcm) As svcm, Sum(wfs.vcf) As svcf, Sum(wfs.vct) AS svct, Sum(wfs.vgt) AS svgt FROM wfs WHERE state = '$state' AND region = '$region' AND ogroup = '$ogroup' AND dat = '$newval' AND ftype = '$ftype'  GROUP BY district, ftype ORDER BY ugroup, district ";
       }else if($ulev == "g"){
         $query= "SELECT district, ftype, Sum(wfs.mam) AS Amam, Sum(wfs.maf) AS Amaf, Sum(wfs.mat) AS Amat, Sum(wfs.mym) AS Amym, Sum(wfs.myf) AS Amyf, Sum(wfs.myt) AS Amyt, Sum(wfs.mayt) AS Amayt, Sum(wfs.mcm) AS Amcm, Sum(wfs.mcf) AS Amcf, Sum(wfs.mct) AS Amct, Sum(wfs.mgt) AS Amgt, Sum(wfs.vam) As svam, Sum(wfs.vaf) As svaf , Sum(wfs.vat) As svat, Sum(wfs.vym) As svym, Sum(wfs.vyf) As svyf, Sum(wfs.vyt) AS svyt, Sum(wfs.vcm) As svcm, Sum(wfs.vcf) As svcf, Sum(wfs.vct) AS svct, Sum(wfs.vgt) AS svgt FROM wfs WHERE state = '$state' AND region = '$region' AND ogroup = '$ogroup' AND ugroup = '$ugroup' AND dat = '$newval' AND ftype = '$ftype'  GROUP BY district, ftype ";
       }else if($ulev == "D"){
         $query= "SELECT district, ftype, Sum(wfs.mam) AS Amam, Sum(wfs.maf) AS Amaf, Sum(wfs.mat) AS Amat, Sum(wfs.mym) AS Amym, Sum(wfs.myf) AS Amyf, Sum(wfs.myt) AS Amyt, Sum(wfs.mayt) AS Amayt, Sum(wfs.mcm) AS Amcm, Sum(wfs.mcf) AS Amcf, Sum(wfs.mct) AS Amct, Sum(wfs.mgt) AS Amgt, Sum(wfs.vam) As svam, Sum(wfs.vaf) As svaf , Sum(wfs.vat) As svat, Sum(wfs.vym) As svym, Sum(wfs.vyf) As svyf, Sum(wfs.vyt) AS svyt, Sum(wfs.vcm) As svcm, Sum(wfs.vcf) As svcf, Sum(wfs.vct) AS svct, Sum(wfs.vgt) AS svgt FROM wfs WHERE state = '$state' AND region = '$region' AND ogroup = '$ogroup' AND ugroup = '$ugroup' AND district = '$district' AND dat = '$newval' AND ftype = '$ftype'  GROUP BY district, ftype ";
       }
 
      $result = $this->connect()->query($query);
          $num_rows = $result->num_rows;
          if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
             $data[] = $row;
             }
             return json_encode($data);
           }else{
             return 'None';
           } 
     }
 
     public function saveprog($entrydate, $country, $state, $region, $ogroup, $progtype, $progname, $progtheme, $progscope, $sdate, $edate, $yer, $auser){
 
         $query = "INSERT INTO progs ( country, state, region, ogroup, progtype, prog, theme, scope, sdate, edate, yer, status, entby) VALUES ( '$country', '$state', '$region', '$ogroup','$progtype', '$progname', '$progtheme', '$progscope', '$sdate', '$edate', '$yer', 'Open', '$auser')";
         //
         if  ($this->connect()->query($query) === TRUE) {
             return "Program sucessfully setup";
         }else{
             return "Error setting up program try again";
         }
     }
 
 //------------------------------------------------------
 }
 