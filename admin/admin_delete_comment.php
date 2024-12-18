<!-- admin_delete_comment.php -->
<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location:admin_login.php"); // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
    exit();
}

// Kết nối đến database
include 'db.php';

// Lấy ID comment từ tham số URL
$comment_id = $_GET['id'];

// Xóa comment từ database
$sql = "DELETE FROM comments WHERE id = $comment_id";
if (mysqli_query($conn, $sql)) {
    header("Location: admin.php"); // Chuyển hướng về trang quản trị
    exit();
} else {
    echo "Error deleting comment: " . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>