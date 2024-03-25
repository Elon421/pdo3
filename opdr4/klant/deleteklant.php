<?php

include 'klant.php';

try {
   $db = new Klant();
    $db->deleteFactuur($_GET['klant_id']);
    header("Location:viewklant.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>