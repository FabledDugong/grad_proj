<?php


class Post {

    private $author;
    private $title;
    private $category;
    private $date;
    private $content;

    public function __construct($author, $title, $category, $date, $content) {
        $this->author = $author;
        $this->title = $title;
        $this->category = $category;
        $this->date = $date;
        $this->content = $content;
    }

    //Getters
    public function getTitle() {
        return $this->title;
    }
    
    public function getCategory() {
        return $this->category;
    }

    public function getDate() {
        return $this->date;
    }

    public function getContent() {
        return $this->content;
    }

    //Setters

    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

}