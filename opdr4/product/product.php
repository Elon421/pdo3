<?php
include "../db.php";

class Product {
    private $dbh;

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }
    public function insertproduct ($omschrijving, $prijs_per_stuk){
        return $this->dbh->execute("INSERT INTO product (omschrijving, prijs_per_stuk) 
        VALUES (?, ?)", [$omschrijving, $prijs_per_stuk	]);
    }

    public function selectProduct() : array {
        $stmt = $this->dbh->execute("SELECT * FROM product");
        $result = $stmt->fetchAll();
        return $result; 
}

public function updateProduct($omschrijving, $prijs_per_stuk, $prijs_totaal) {
    $stmt = $this->dbh->execute("UPDATE product SET omschrijving= ?, prijs_per_stuk = ?, prijs_totaal = ?,
    WHERE product_id = ?");
    $stmt->execute([$omschrijving, $prijs_per_stuk, $prijs_totaal]);
}

}
?>