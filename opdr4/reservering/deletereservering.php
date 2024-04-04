<?php
include "../db.php";
include 'reservering.php';

try {
   $db = new Reservering($myDb);
    $db->deleteReservering($_GET['reservering_id']);
    header("Location:viewreservering.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>