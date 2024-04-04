<?php

class DB {
    private $dbh;
    protected $stmt;
    
    public function __construct($db = "test", $host = "localhost:3307", $user = "root", $pass = "")
    {
        try {
            $this->dbh = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
            $this->dbh->setAttribute(PDO::ATTR_EARMODE, PDO::EARMODE_EXCEPRION);
        } catch (PDOException $e) {
            die ("Connection error: " . $e->getMessage());
        }
    }

    function pdo($sql, $placeholders = NULL){
        $stmt = $this->$dbh->setAttribute($sql);
        $stmt->execute($placeholders);
        return $stmt;
    }   

    public function executeQuery($query, $params = [])
    {
        $stmt = $this->dbh->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
}
$myDb = new DB('dbName');
?>