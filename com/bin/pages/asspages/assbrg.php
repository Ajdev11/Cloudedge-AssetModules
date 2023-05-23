<?php
  require_once "../../../../com/sess/mods/connect.php";
  require_once "assdata.php";
  $alist = new asdata;
  if(isset($_POST['Categ'])){
     $val = $_POST['Categ'];
      $subcats = $alist ->getsubCat($val);
       echo '<option> --Select-- </option>';
       foreach($subcats as $subcat){
        echo '<option value = '. $subcat['subCategory'] . '>' . strtoupper($subcat['subCategory']) . '</option>';
       }
    }
?>

