<?php
session_start();

require_once 'models/UserModel.php';
$userModel = new UserModel();

// Kiểm tra nếu có token CSRF
if (!empty($_GET['token']) && hash_equals($_SESSION['csrf_token'], $_GET['token'])) {
    // Giải mã ID từ URL
    $id = base64_decode($_GET['id']);
    
    // Kiểm tra nếu ID hợp lệ
    if ($id && filter_var($id, FILTER_VALIDATE_INT)) {
        // Xóa người dùng
        if ($userModel->deleteUserById($id)) {
            $_SESSION['message'] = 'Người dùng đã được xóa thành công!';
        } else {
            $_SESSION['error'] = 'Có lỗi xảy ra, không thể xóa người dùng!';
        }
    } else {
        // Xử lý lỗi: ID không hợp lệ
        $_SESSION['error'] = 'ID người dùng không hợp lệ.';
    }
} else {
    // Xử lý lỗi CSRF
    $_SESSION['error'] = 'User không tồn tại.';
}

header('location: list_users.php'); // Chuyển hướng về danh sách người dùng
exit; // Dừng script
?>
