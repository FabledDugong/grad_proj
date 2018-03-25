<?php

require_once "Config.php";

class Control {

    private $config;
    private $connection;

    public function __construct () {
        $this->config = new Config();
        $this->connection = $this->config->getPdo();
    }

    public function testData($data) {
        $this->$data = $data;
        $data = trim($data);
        $data = preg_replace("/\s+/", "", $data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        return $data;
    }

    public function testPass($pass) {
        $this->$pass = $pass;
        $pass = trim($pass);
        $pass = preg_replace("/\s+/", "", $pass);
        $pass = htmlspecialchars($pass);
        $pass = htmlentities($pass);
        return $pass;
    }

    public function login($email, $password) {
        $password = hash("whirlpool", $password);
        $query = "SELECT * FROM ulita.user WHERE email = :email;";
        $stmt = $this->connection->prepare($query);
        $stmt->execute([":email" => $email]);
        $result = $stmt->fetch();
        $fname = $result->fname;
        $iopl = $result->IOPL;

        $isPresent = ($result == null)?"":$result->password;

        if($password == $isPresent) {
            $_SESSION["login-s"] = true;
            $_SESSION["loggedIn"] = true;
            $_SESSION["fname"] = $fname;
            $_SESSION["iopl"] = $iopl;
            header("Location: index.php?loggedIn");
            exit();
        } else {
            $_SESSION["login-f"] = true;
            header("Location: index.php?login-f");
            exit();
        }
    }

    public function logout() {
        $_SESSION["logout-s"] = true;
        $_SESSION["loggedIn"] = false;
        header("Location: index.php?logout-s");
        exit();
    }

    public function createUser($fname, $sname, $email, $password) {
        $password = hash("whirlpool", $password);
        $query = "INSERT INTO ulita.user (fname, sname, email, password) VALUES (:fname, :sname, :email, :password);";
        $stmt = $this->connection->prepare($query);
        $stmt->execute([":fname" => $fname, ":sname" => $sname, ":email" => $email, ":password" => $password]);
        $newUser = new User($fname,$sname,$email,$password);
        if(!$stmt) {
            $_SESSION["register-f"] = true;
            header("Location: index.php?register-f");
            exit();
        } else {
            $_SESSION["register-s"] = true;
            $_SESSION["registered"] = true;
            header("Location: index.php?registered");
            return $newUser;
        }
    }

    public function postPreview() {
        $query = "SELECT title, category, DATE_FORMAT(dat, '%d.%m.%Y') as dat FROM ulita.post LIMIT 7;";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
}
$control = new Control();