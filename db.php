<?php
$servername = "localhost"; // Địa chỉ server MySQL, thường là localhost
$username = "root"; // Tên người dùng mặc định của MySQL trong XAMPP
$password = ""; // Mật khẩu mặc định của MySQL trong XAMPP là trống
$dbname = "product09"; // Tên của database

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Đặt bộ ký tự kết nối là UTF-8 để hỗ trợ các ký tự đặc biệt
$conn->set_charset("utf8");
?>
