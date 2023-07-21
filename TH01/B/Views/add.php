<div class="container">
    <h1 class="text-center mt-4">Danh sách sách</h1>
    <form action="add_book.php" method="post">
        <!-- Các trường nhập thông tin sách mới -->
        <div class="form-group">
            <label for="title">Tên sách:</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="author">Tác giả:</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="publisher">Nhà xuất bản:</label>
            <input type="text" id="publisher" name="publisher" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="publicationYear">Năm xuất bản:</label>
            <input type="number" id="publicationYear" name="publicationYear" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ISBN">Số hiệu ISBN:</label>
            <input type="text" id="ISBN" name="ISBN" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="chapters">Danh mục các chương (phân tách bằng dấu phẩy):</label>
            <input type="text" id="chapters" name="chapters" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm sách mới</button>
    </form>