<?php

class Book implements IBook {
    private $title;
    private $author;
    private $publisher;
    private $publicationYear;
    private $ISBN;
    private $chapters;

    public function __construct($title, $author, $publisher, $publicationYear, $ISBN, $chapters) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->publicationYear = $publicationYear;
        $this->ISBN = $ISBN;
        $this->chapters = $chapters;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setPublisher($publisher): void
    {
        $this->publisher = $publisher;
    }

    public function getPublicationYear()
    {
        return $this->publicationYear;
    }

    public function setPublicationYear($publicationYear): void
    {
        $this-> publicationYear = $publicationYear;
    }

    public function getISBN()
    {
        return $this-> ISBN;
    }

    public function setISBN($ISBN): void
    {
        $this-> ISBN = $ISBN;
    }

    public function getChapters()
    {
        return $this -> chapters;
    }

    public function setChapters($chapters): void
    {
        $this-> chapters = $chapters;
    }

}
