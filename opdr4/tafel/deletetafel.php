<?php

include 'tafel.php';

try {
   $db = new Tafel();
    $db->deleteFactuur($_GET['tafel_id']);
    header("Location:viewtafel.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>