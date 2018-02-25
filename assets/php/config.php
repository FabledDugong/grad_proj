<?php
mb_internal_encoding("UTF-8");
session_start();

define("HOST", "");
define("USER", "");
define("PASS", "");
define("DB", "");

define("DSN", "mysql:host=localhost;db=zoo;charset=utf;");

function pdo_con() {
    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $pdo = new PDO(DSN,USER,PASS);
        return $pdo;
    } catch(PDOException $e) {
        die($e->getMessage());
    }

}
class DB extends PDO {
    public function __construct() {
        try {
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            parent::__construct(DSN,USER,PASS,$options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function run($sql, $args = NULL) { //provádí veškeré operace s DB (třetí způsob)
        if($args == NULL) {
            return $this->query($sql);
            $stmt = $this->prepare($sql);
            $stmt->execute($args);
            return $stmt;
        }
    }
}
class animalManager extends DB {
    public function __construct() {
        parent::__construct();
    }
    public function showAnimals() {
        return $this->run("SELECT * FROM zvire;")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insertAnimal() {
        $sql = "INSERT INTO zvire VALUES (NULL, :nam, :latNam, :descr, :offsprings, :kindID, :countryOfOriginID";
        $this->run($sql, $args);
        return $his->lastInsertId();
    }
    public function deleteAnimal() {
        $sql = "DELETE FROM zvire WHERE id = :id";
        $this->run($sql,[":id" => $id]);
    }
    public function editAnimal() {

    }
}

$db = new DB();
aManager = new animalManager();
var_dump($aManager->showAnimals());