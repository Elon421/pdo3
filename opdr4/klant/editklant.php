<?php
    include "klant.php";
    include "../header.php";

    
        try {
           $dbh = new Klant();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $dbh->updateKlant($_POST["Klantnaam"], $_POST["Adres"], $_POST["Telefoonnummer"], $_POST["Email"],
                    $_GET['klant_id']);
                header("Location:viewklant.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Klant</title>
</head>
<body>
<form method="POST">
        <input type="text" name="Klantnaam" placeholder="Naam"> 
        <input type="text" name="Adres" placeholder="Adres"> 
        <input type="text" name="Telefoonnummer" placeholder="Telefoonnummer"> 
        <input type="text" name="Email" placeholder="E-mail"> 
        <input type="submit">
</form>
</body>
</html>