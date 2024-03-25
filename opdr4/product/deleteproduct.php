<?php

include 'product.php';

try {
   $db = new Product();
    $db->deleteFactuur($_GET['product_id']);
    header("Location:viewproduct.php");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>