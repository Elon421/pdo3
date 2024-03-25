<?php
    include "reservering.php";

    $dbreservering = new Reservering($myDb);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Reserveringen</title>
</head>
<body>
    <table class="table dark">
        <tr>
            <th>Reservering_id</th>
            <th>Reservering_begin_tijd</th>
            <th>Reservering_eind_tijd</th>
            <th>Klant_id </th>
            <th colspan="2">Action</th>
        </tr>

        <tr> <?php
            $reserveringen = $dbreservering->selectReservering(); 
            if ($reserveringen) { 
                foreach ($reserveringen as $reservering) {?>
            <td><?php echo $reservering['Reservering_id']?></td>
            <td><?php echo $reservering['Reservering_begin_tijd']?></td>
            <td><?php echo $reservering['Reservering_eind_tijd']?></td>
            <td><a href="">Edit</a></td>
            <td><a href="">delete</a></td>
           <td></td>
        </tr> <?php } }?>
    </table>
</body>
</html>