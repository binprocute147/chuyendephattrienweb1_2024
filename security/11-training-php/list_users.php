<?php
session_start();

// Lấy key từ file key.txt
$secret_key = trim(file_get_contents('key.txt'));

require_once 'models/UserModel.php';
$userModel = new UserModel();

$users = $userModel->getUsers(); // Lấy danh sách người dùng

// Tạo CSRF token
$_SESSION['csrf_token'] = bin2hex(random_bytes(32)); 
?>

<!DOCTYPE html>
<html>

<head>
    <title>List Users</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">
        <h2>User List</h2>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></div>
        <?php endif; ?>
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td>
                            <a href="form_user.php?id=<?php echo base64_encode($user['id']); ?>">
                                <i class="fa fa-pencil-square-o" aria-hidden="true" title="Update"></i>
                            </a>
                            <a href="view_user.php?id=<?php echo base64_encode($user['id']); ?>">
                                <i class="fa fa-eye" aria-hidden="true" title="View"></i>
                            </a>
                            <a href="delete_user.php?id=<?php echo base64_encode($user['id']); ?>&token=<?php echo $_SESSION['csrf_token']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này không?');">
                                <i class="fa fa-trash" aria-hidden="true" title="Delete"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
