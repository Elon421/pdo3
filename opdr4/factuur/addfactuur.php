<?php
include "../db.php";
    include "factuur.php";


    $factuur = new Factuur($myDb);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try{
            $factuur->insertFactuur($_POST["F_Datum"], $_POST["6%Btw"], $_POST["19%Btw"], $_POST["Totaal_excl_BTW"], $_POST["Totaal_incl_BTW"], $_POST["Prijs_totaal"], $_POST["aantal_producten"], $_POST["Tafel_id"], $_POST["Product_id"]);
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
    <title>Add factuur</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="F_Datum" placeholder="Datum">
    <input type="text" name="6%Btw" placeholder="6% BTW">
    <input type="text" name="19%Btw" placeholder="19% BTW">
    <input type="text" name="Totaal_excl_BTW" placeholder="Totaal (excl BTW)">
    <input type="text" name="Totaal_incl_BTW" placeholder="Totaal (incl BTW)">
    <input type="text" name="Prijs_totaal" placeholder="Totaal Prijs">
    <input type="text" name="aantal_producten" placeholder="Aantal Producten">
    <input type="submit"> 
    </form>
</body>
</html>