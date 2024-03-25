<?php
    include "klant.php";

    $klant = new Klant($myDb);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        if(isset($_POST["klantnaam"]) && isset($_POST["adres"]) && isset($_POST["telefoonnummer"]) && isset($_POST["email"])) {
            try {
                $klantnaam = $_POST["klantnaam"];
                $adres = $_POST["adres"];
                $telefoonnummer = $_POST["telefoonnummer"];
                $email = $_POST["email"];

                
                $klant->insertKlant($klantnaam, $adres, $telefoonnummer, $email);
                echo "Success";
            } catch (Exception $e) {
                echo "Error" . $e->getMessage();
            }
        } else {
            echo "Niet alle vereiste velden zijn ingevuld.";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Klant</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="klantnaam" placeholder="Naam">
    <input type="text" name="adres" placeholder="Adres">
    <input type="text" name="telefoonnummer" placeholder="Telefoonnummer">
    <input type="email" name="email" placeholder="E-mail">
    <input type="submit"> 
    </form>
</body>
</html>