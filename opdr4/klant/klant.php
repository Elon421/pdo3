<?php
include "../db.php";

class Klant {
    private $dbh;

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }
    public function insertklant ($klantnaam, $adres, $telefoonnummer, $email){
        return $this->dbh->execute("INSERT INTO klant (klantnaam, adres, telefoonnummer, email)
        VALUES (?,?,?,?)", [$klantnaam, $adres, $telefoonnummer,  $email]);
    }

    public function selectklant() : array {
        $stmt = $this->dbh->execute("SELECT * FROM klant");
        $result = $stmt->fetchAll();
        return $result; 
}

public function updateklant($klantnaam, $adres, $telefoonnummer, $email) {
    $stmt = $this->dbh->execute("UPDATE klant SET klantnaam = ?, adres = ?, telefoonnummer = ?, email = ?,
    WHERE klant_id = ?");
    $stmt->execute([$klantnaam , $adres , $telefoonnummer, $email]);
} 

}
?>