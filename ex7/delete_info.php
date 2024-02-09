<?php
include 'dbshell.php';
if (isset($_GET['id'])) {
    // Lấy id từ URL
    $id = $_GET['id'];
    
    // Xóa bản ghi từ cơ sở dữ liệu
    $sql = "DELETE FROM studentsinfo WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "Bản ghi đã được xóa thành công.";
    } else {
        echo "Có lỗi xảy ra trong quá trình xóa: " . $conn->error;
    }
    $stmt->close();
}
$conn->close();
?>
