<?php
include "../db.php";
include 'tafel.php';

try {
   $db = new Tafel($myDb);
    $db->deleteTafel($_GET['tafel_id']);
    header("Location:viewtafel.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>