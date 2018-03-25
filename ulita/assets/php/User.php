<?php

class User {

    private $fname;
    private $sname;
    private $email;
    private $password;
    private $iopl;

    public function __construct($fname, $sname, $email, $password) {
        $this->fname = $fname;
        $this->sname = $sname;
        $this->email = $email;
        $this->password = $password;
        $this->iopl = 2;
    }

    public function getFname () {
        return $this->fname;
    }

    public function getSname()
    {
        return $this->sname;
    }

    public function getMail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getIopl()
    {
        return $this->iopl;
    }

}
