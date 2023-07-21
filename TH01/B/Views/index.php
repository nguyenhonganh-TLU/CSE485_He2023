<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sách</title>
    <!-- Link thư viện Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link file CSS tùy chỉnh -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4">Danh sách sách</h1>
        <div class="d-flex justify-content-end mb-3">
            <!-- <button class="btn btn-primary mr-2" onclick="addBook()">Thêm sách</button> -->
            <a class="btn btn-primary mr-2" onclick="addBook()">Thêm sách</a>
            <button class="btn btn-primary mr-2" onclick="sortBooksByAuthor()">Sắp xếp theo tác giả</button>
            <button class="btn btn-primary mr-2" onclick="sortBooksByTitle()">Sắp xếp theo tên sách</button>
            <button class="btn btn-primary" onclick="sortBooksByPublicationYear()">Sắp xếp theo năm xuất bản</button>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên sách</th>
                    <th>Tác giả</th>
                    <th>Nhà xuất bản</th>
                    <th>Năm xuất bản</th>
                    <th>Số hiệu ISBN</th>
                    <th>Danh mục các chương</th>
                </tr>
            </thead>
            <tbody id="book-list">
                <?php
                    // Hiển thị dữ liệu sách từ CSDL ở đây
                    require_once 'books.php';

                    if (isset($_GET['sort']) && $_GET['sort'] === 'author') {
                        $books = sortBooksByAuthor();
                    } else {
                        $books = getBooks();
                    }
                    
                    $books = getBooks();
                    foreach ($books as $book) {
                        echo "<tr>";
                        echo "<td>{$book['title']}</td>";
                        echo "<td>{$book['author']}</td>";
                        echo "<td>{$book['publisher']}</td>";
                        echo "<td>{$book['publicationYear']}</td>";
                        echo "<td>{$book['ISBN']}</td>";
                        echo "<td>{$book['chapters']}</td>";
                        echo "</tr>";
                    }
                ?>

            </tbody>
        </table>
    </div>

    <!-- Link thư viện Bootstrap JavaScript và jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- File JavaScript tùy chỉnh -->
    <script src="scripts.js"></script>
</body>
</html>
