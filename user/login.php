<?php 
include('./../config.php');

if(isset($_POST['login'])){
    $username = $_POST['username_user'];
    $password = $_POST['password_user'];

    $stmt = $db->prepare("SELECT * FROM user WHERE username_user = ? AND  password_user = ? ");
    $stmt->bind_param("ss" , $username,$password);

    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if($result->num_rows > 1){
        $_SESSION['id_user'] = $row['id_user'];
        header("location:./index.php");
        alertloginsuccess();
    }else{
        header('location:./login.php');
        echo "<script>alert('รหัสผ่านหรือชื่อผู้ใช้ไม่ถูกต้อง')</script>"
    }
}
$db->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>