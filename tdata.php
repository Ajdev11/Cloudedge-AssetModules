<?php
 private $hostname   = "localhost";
    private $username   = "root";
    private $password   = "";
    private $db     = "dlbc";
$conn = new mysqli($this->hostname, $this->username, $this->password, $this->db);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else{
        return $conn;
      }
	class moses  {
		public function test($ad,$da ){
			$y = $ad * $da;
			return $y;
			// return "Wale is in Port Harcourt";
		}
	}
?>