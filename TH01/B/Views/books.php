<?php
// books.php

// Hàm trả về danh sách sách từ mảng (giả sử đây là CSDL lưu trữ sách)
function getBooks() {
    return array(
        array(
            'title' => 'Sách 1',
            'author' => 'Tác giả U',
            'publisher' => 'Nhà xuất bản X',
            'publicationYear' => '2020',
            'ISBN' => 'ISBN-1',
            'chapters' => 'Chương 1, Chương 2'
        ),
        array(
            'title' => 'Sách 2',
            'author' => 'Tác giả B',
            'publisher' => 'Nhà xuất bản Y',
            'publicationYear' => '2022',
            'ISBN' => 'ISBN-2',
            'chapters' => 'Chương 3, Chương 2, Chương 1'
        ),
        array(
            'title' => 'Sách 3',
            'author' => 'Tác giả A',
            'publisher' => 'Nhà xuất bản X',
            'publicationYear' => '2023',
            'ISBN' => 'ISBN-3',
            'chapters' => 'Chương 5, Chương 6, Chương 7'
        ),
        array(
            'title' => 'Sách 4',
            'author' => 'Tác giả D',
            'publisher' => 'Nhà xuất bản T',
            'publicationYear' => '2021',
            'ISBN' => 'ISBN-4',
            'chapters' => 'Chương 8, Chương 6, Chương 1'
        )
    );
}

function addBook($title, $author, $publisher, $publicationYear, $ISBN, $chapters) {
    global $books;
    $newBook = array(
        'title' => $title,
        'author' => $author,
        'publisher' => $publisher,
        'publicationYear' => $publicationYear,
        'ISBN' => $ISBN,
        'chapters' => $chapters
    );
    $books[] = $newBook;
}

function sortBooksByAuthor() {
    global $books;
    usort($books, function ($a, $b) {
        return strcmp($a['author'], $b['author']);
    });
    return $books;
}
