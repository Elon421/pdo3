<?php
include "../db.php";

class Tafel {
    private $dbh;

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }
    public function inserttafel ($Max_aantal_personen){
        return $this->dbh->execute("INSERT INTO tafel (max_aantal_personen) 
        VALUES (?)", [$Max_aantal_personen]);
    }

    public function selectTafel() : array {
        $stmt = $this->pdo->query("SELECT * FROM tafel");
        $result = $stmt->fetchAll();
        return $result; 
}

public function updateTafel($Max_aantal_personen) {
    $stmt = $this->dbh->execute("UPDATE tafel SET max_aantal_personen = ?, 
    WHERE tafel_id = ?");
    $stmt->execute([$Max_aantal_personen]);
} 
}
?>