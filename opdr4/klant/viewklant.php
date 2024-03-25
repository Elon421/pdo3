<?php
    include "klant.php";
    include "../header.php";

    $dbklant = new Klant($myDb);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Klanten</title>
</head>
<body>
    <table class="table dark">
        <tr>
            <th>klant_id</th>
            <th>lantnaam</th>
            <th>adres</th>
            <th>Email</th>
            <th>telefoonnummer</th>
            <th colspan="2">Action</th>
        </tr>

        <tr> <?php
            $klanten = $dbklant->selectklant(); 
            if ($klanten) { 
                foreach ($klanten as $klant) {?>
            <td><?php echo $klant['klant_id']?></td>
            <td><?php echo $klant['klantnaam']?></td>
            <td><?php echo $klant['adres']?></td>
            <td><?php echo $klant['telefoonnummer']?></td>
            <td><?php echo $klant['email']?></td>
            <td><a href="editklant.php">Edit</a></td>
            <td><a href="deleteklant.php">delete</a></td>
           <td></td>
        </tr> <?php } }?>
    </table>
</body>
</html>