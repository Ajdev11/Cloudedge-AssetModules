<?php
include "conn.php";
$id=$_GET['id'];
$sql = "DELETE FROM `tblict` WHERE id=$id";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location: assetsict.php?msg=Record deleted Successfully");
}
else{
    echo "Failed: ". mysqli_error($conn);
}
?>