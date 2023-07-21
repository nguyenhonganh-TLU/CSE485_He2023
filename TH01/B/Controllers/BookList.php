<?php

class BookList {
    private $books = array();

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }

    public function sortByAuthor() {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());  //so sánh hai chuỗi phân biệt chữ hoa chữ thường
        });
    }

    public function sortByTitle() {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getTitle(), $b->getTitle());
        });
    }

    public function sortByPublicationYear() {
        usort($this->books, function ($a, $b) {
            return $a->getPublicationYear() - $b->getPublicationYear();
        });
    }
}
