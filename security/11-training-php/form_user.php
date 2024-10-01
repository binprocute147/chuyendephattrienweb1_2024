<?php
// Lấy key từ file key.txt
$secret_key = trim(file_get_contents('key.txt'));

session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Thông tin người dùng
$_id = NULL; // ID người dùng
$name_error = ""; // Biến để lưu thông báo lỗi tên
$password_error = ""; // Biến để lưu thông báo lỗi mật khẩu

if (!empty($_GET['id'])) {
    // Giải mã ID từ URL
    $_id = base64_decode($_GET['id']);
    $user = $userModel->findUserById($_id); // Cập nhật thông tin người dùng
}

if (!empty($_POST['submit'])) {
    // Xử lý kiểm tra hợp lệ
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $is_valid = true;

    // Kiểm tra tên
    if (empty($name) || !preg_match('/^[a-zA-Z0-9]{5,15}$/', $name)) {
        $name_error = "Tên phải từ 5 đến 15 ký tự, chỉ chứa chữ cái và số.";
        $is_valid = false;
    }

    // Kiểm tra mật khẩu
    if (empty($password) || !preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{5,}$/', $password)) {
        $password_error = "Mật khẩu phải từ 5 ký tự trở lên, chứa chữ thường, chữ hoa, số và ký tự đặc biệt.";
        $is_valid = false;
    }

    if ($is_valid) {
        $_POST['password'] = password_hash($password, PASSWORD_DEFAULT); // Mã hóa mật khẩu
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php'); // Chuyển hướng về danh sách người dùng
        exit; // Dừng script
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php' ?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User Form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name']; ?>'>
                    <?php if (!empty($name_error)) { ?>
                        <small class="text-danger"><?php echo $name_error; ?></small>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php if (!empty($password_error)) { ?>
                        <small class="text-danger"><?php echo $password_error; ?></small>
                    <?php } ?>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
