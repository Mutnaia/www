<?php

class Book {
    private $title;
    private $pages;
    private $releaseYear;

    public function __construct($title = '', $pages = 0, $releaseYear = 0) {
        $this-> title = $title;
        $this-> pages = $pages;
        $this-> releaseYear= $releaseYear;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getPages() {
        return $this->pages;
    }

    public function getReleaseYear() {
        return $this->releaseYear;
    }
}

?>