<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sách</title>
    <!-- Thêm CSS cho giao diện tại đây -->
</head>
<body>
    <h1>Danh sách sách</h1>
    <table>
        <tr>
            <th>Tên sách</th>
            <th>Tác giả</th>
            <th>Nhà xuất bản</th>
            <th>Năm xuất bản</th>
            <th>Số hiệu ISBN</th>
            <th>Danh mục các chương</th>
        </tr>
        <?php
            // Khởi tạo và thêm sách vào danh sách
            $bookList = new BookList();
            $bookList->addBook(new Book("Sách 1", "Tác giả A", "Nhà xuất bản X", "2023", "ISBN-1", array("Chương 1", "Chương 2")));
            $bookList->addBook(new Book("Sách 2", "Tác giả B", "Nhà xuất bản Y", "2022", "ISBN-2", array("Chương 1", "Chương 2", "Chương 3")));

            // Hiển thị danh sách sách
            foreach ($bookList->getBooks() as $book) {
                echo "<tr>";
                echo "<td>{$book->getTitle()}</td>";
                echo "<td>{$book->getAuthor()}</td>";
                echo "<td>{$book->getPublisher()}</td>";
                echo "<td>{$book->getPublicationYear()}</td>";
                echo "<td>{$book->getISBN()}</td>";
                echo "<td>" . implode(", ", $book->getChapters()) . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <script>
        // JavaScript để thêm chức năng sắp xếp danh sách theo yêu cầu
    </script>
</body>
</html>
