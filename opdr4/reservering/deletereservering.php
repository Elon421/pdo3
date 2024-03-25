<?php

include 'reservering.php';

try {
   $db = new Reservering();
    $db->deleteFactuur($_GET['reservering_id']);
    header("Location:viewreservering.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>