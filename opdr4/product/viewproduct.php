<?php
    include "product.php";

    $dbproduct = new Product($myDb);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht Producten</title>
</head>
<body>
    <table class="table dark">
        <tr>
            <th>product_id</th>
            <th>omschrijving</th>
            <th>prijs_per_stuk</th>
            <th>prijs_totaal</th>
            <th colspan="2">Action</th>
        </tr>

        <tr> <?php
            $producten = $dbproduct->selectProduct(); 
            if ($producten) { 
                foreach ($producten as $product) {?>
            <td><?php echo $product['product_id']?></td>
            <td><?php echo $product['omschrijving']?></td>
            <td><?php echo $product['prijs_per_stuk']?></td>
            <td><?php echo $product['prijs_totaal']?></td>
            <td><a href="">Edit</a></td>
            <td><a href="">delete</a></td>
           <td></td>
        </tr> <?php } }?>
    </table>
</body>
</html>