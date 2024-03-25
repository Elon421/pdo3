<?php
include "../db.php";

class Reservering {
    private $dbh;

    public function __construct(DB $dbh)
    {
        $this->dbh = $dbh;
    }
    public function insertReservering ($Reservering_begin_tijd, $Reservering_eind_tijd, $Klant_id){
        return $this->dbh->execute("INSERT INTO reservering (Reservering_begin_tijd, Reservering_eind_tijd) 
        VALUES (?, ?, ?)", [$Reservering_begin_tijd, $Reservering_eind_tijd, $Klant_id]);
    }

    public function selectReservering() : array {
        $stmt = $this->dbh->execute("SELECT * FROM reservering");
        $result = $stmt->fetchAll();
        return $result; 
}

public function updateReservering($Reservering_begin_tijd, $Reservering_eind_tijd) {
    $stmt = $this->dbh->execute("UPDATE reservering SET reservering_eind_tijd = ?, reservering_eind_tijd = ?,
    WHERE reservering_id = ?");
    $stmt->execute([$Reservering_begin_tijd, $Reservering_eind_tijd]);
} 

public function deleteReservering(int $reservering_id) {
    $stmt = $this->dbh->execute("DELETE from reservering WHERE reservering_id = ?");
    $stmt->execute([$reservering_id]);
}

}
?>