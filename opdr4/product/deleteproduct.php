<?php
include "../db.php";
include 'product.php';

try {
   $db = new Product($myDb);
    $db->deleteproduct($_GET['product_id']);
    header("Location:viewproduct.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>