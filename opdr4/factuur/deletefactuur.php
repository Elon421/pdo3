<?php
include "../db.php";
include 'factuur.php';

try {
   $db = new Factuur($myDb);
    $db->deleteFactuur($_GET['Factuur_id']);
    header("Location:viewfactuur.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>