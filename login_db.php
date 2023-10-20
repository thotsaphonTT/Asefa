<?php
session_start();
require("condb.php");

$username = $_POST['username'];
$password = $_POST['password'];

if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
    // ถ้าเป็นอีเมล
    $sql = "SELECT * FROM user WHERE email = '$username'";
} else {
    // ถ้าเป็นชื่อผู้ใช้
    $sql = "SELECT * FROM user WHERE username = '$username'";
}
$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if ($password == $row['password']) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];

        echo json_encode(array("status" => "success", "msg" => "ยินดีต้อนรับ"));
    } else {
        echo json_encode(array("status" => "error", "msg" => "Password ไม่ถูกต้องกรุณาลองอีกครั้ง!"));
    }
} else {
    echo json_encode(array("status" => "error", "msg" => "ไม่พบ Username หรือ Email นี้"));
}
?>
