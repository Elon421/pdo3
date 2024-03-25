<?php
    include "product.php";
    include "../header.php";

    
        try {
           $dbh = new Product();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $dbh->updateproduct($_POST["omschrijving"], $_POST["prijs_per_stuk"], $_POST["prijs_totaal"],
                    $_GET['product_id']);
                header("Location:viewproduct.php");
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
          }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit Product</title>
</head>
<body>
<form method="POST">
        <input type="text" name="omschrijving" placeholder="omschrijving"> 
        <input type="text" name="prijs_per_stuk" placeholder="prijs per stuk"> 
        <input type="text" name="prijs_totaal" placeholder="prijs totaal"> 
        <input type="submit">
</form>
</body>
</html>