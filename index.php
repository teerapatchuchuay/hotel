<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #f0f0f0;">
  <div class="container-fluid">
    <a class="navbar-brand"><img src="./img/hotel.png" style="max-height:50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="./index.php">หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">เข้าสู่ระบบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">สมัครสมาชิก</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link btn btn-outline-success" style='margin-left:100px;' href="#">ลงประกาศที่พัก</a>
        </li>
        <li class="nav-item">
            <a href="nav-link" style='margin-left:50px;'><img src="./img/cart.png" style='max-height:50px;' alt=""></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>
