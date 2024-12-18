<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kết nối đến database
    $conn = new mysqli("localhost", "root", "", "product09");

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Lấy dữ liệu từ form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    // Chèn dữ liệu vào bảng comments
    $sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";
    if ($conn->query($sql) === TRUE) {
        // Chuyển hướng về trang contact sau khi thêm comment thành công
        header("Location: contact.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Đóng kết nối
    $conn->close();
}
?>
