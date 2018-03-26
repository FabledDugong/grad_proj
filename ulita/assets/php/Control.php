<?php

require_once "Config.php";
require_once "Post.php";

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

    public function postsPreview($start) {
        $count = $this->allPosts();
        if($start < 0) {
            $start = 0;
        }
        if($start > $count) {
            $start = $count;
        }
        $query = "SELECT post_id AS id, title, category, DATE_FORMAT(dat, '%d.%m.%Y') as dat, content FROM ulita.post ORDER BY id DESC LIMIT 7 OFFSET :start;";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':start', (int) $start, PDO::PARAM_INT);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    public function postView() {
        $query = "SELECT post_id, title, category, DATE_FORMAT(dat, '%d.%m.%Y') AS dat, content, user.fname AS author FROM ulita.post JOIN ulita.user ON user.user_id = post.user_id WHERE post_id = :id;";
        $stmt = $this->connection->prepare($query);
        $stmt->execute([":id" => $_GET["id"]]);
        $requestedPost = $stmt->fetch();
        return $requestedPost;
    }

    public function allPosts() {
        $query = "SELECT COUNT(*) AS count FROM ulita.post";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch();
        $result = $result->count;
        return $result;
    }

}
$control = new Control();