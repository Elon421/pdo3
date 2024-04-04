<?php
include "../db.php";
include 'klant.php';

try {
   $db = new Klant($myDb);
    $db->Deleteklant($_GET['klant_id']);
    header("Location:viewklant.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>