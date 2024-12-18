<?php
// Kết nối đến database
$conn = new mysqli("localhost", "root", "", "product09");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy các comment từ database
$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

// Hiển thị nút xóa cho người quản trị
if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    echo '<a href="admin_delete_comment.php?id=' . $comment['id'] . '">Delete</a>';
}

// Hiển thị các comment
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row["name"] . ":</strong> " . $row["comment"] . "</p>";
    }
} else {
    echo "No comments yet.";
}

// Đóng kết nối
$conn->close();
?>
