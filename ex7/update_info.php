<?php
include 'dbshell.php';
if (isset($_POST['submit'])) {
    // Lấy dữ liệu từ form
    $id = $_POST['id'];
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $city = $_POST['city'];
    $groupId = $_POST['groupId'];
    
    // Cập nhật dữ liệu vào cơ sở dữ liệu
    $sql = "UPDATE studentsinfo SET first_name=?, last_name=?, city=?, groupId=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $firstName, $lastName, $city, $groupId, $id);
    
    if ($stmt->execute()) {
        echo "Thông tin đã được cập nhật thành công.";
    } else {
        echo "Có lỗi xảy ra trong quá trình cập nhật: " . $conn->error;
    }
    $stmt->close();
}
$conn->close();
?>
