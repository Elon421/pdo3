<?php
    include "reservering.php";

    $reservering = new Reservering($myDb);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try{
            $reservering->insertReservering($_POST["Reservering_begin_tijd"], $_POST["Reservering_eind_tijd"]);
            ECHO "Success";
        } catch (Exception $e){
            echo "Error" . $e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add reservering</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="Reservering_begin_tijd" placeholder="begintijd">
    <input type="text" name="Reservering_eind_tijd" placeholder="eindtijd">
    <input type="text" name="Klant_id" placeholder="Naam">
    <input type="submit"> 
    </form>
</body>
</html>