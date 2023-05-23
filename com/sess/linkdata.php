<?php


//require_once "connect.php";
require_once "connect.php";
require_once "../LOGD/logdata.php";

$blk = new  Connection;
if (isset($_POST['oru'])) {
    echo "Here we are";
    $cpw = "blk";
    $isID = $_POST['oru'];
    $block = $blk->getAuth($isID, $cpw);
}
