<?php
    include "reservering.php";
    include "../header.php";

    
        try {
           $db = new Reservering();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $db->updateReservering($_POST["reservering_begin_tijd"], $_POST["reservering_eind_tijd"], $_POST["klant_id"],
                    $_GET['reservering_id']);
                header("Location:viewreservering.php");
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
    <title>Edit Reservering</title>
</head>
<body>
<form method="POST">
        <input type="text" name="reservering_begin_tijd" placeholder="reservering_begin_tijd"> 
        <input type="text" name="reservering_eind_tijd" placeholder="reservering_eind_tijd"> 
        <input type="text" name="Klant_id" placeholder="klant_id"> 
        <input type="submit">
</form>
</body>
</html>