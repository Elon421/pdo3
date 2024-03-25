<?php
    include "tafel.php";
    include "../header.php";

    
        try {
           $db = new Tafel();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $db->updateTafel($_POST["max_aantal_personen"],
                    $_GET['tafel_id']);
                header("Location:viewtafel.php");
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
    <title>Edit Tafel</title>
</head>
<body>
<form method="POST">
        <input type="text" name="Max_aantal_personen" placeholder="Max aantal personen"> 
        <input type="submit">
</form>
</body>
</html>