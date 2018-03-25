<?php

session_start();

class Config {

    private $pdo;

    const
    DB_DSN = "mysql:host=localhost;dbname=ulita;charset=utf8;",
    DB_USER = "root",
    DB_PASS = "De39dbfa;";

    public function __construct() {
        $this->pdo = null;
        try {
            $this->pdo = new PDO(self::DB_DSN,self::DB_USER,self::DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function getPdo() {
        return $this->pdo;
    }
}
