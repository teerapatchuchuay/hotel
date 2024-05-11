<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Search</title>
</head>
<body>
    <form action="" method="post">

    <div class="form-floating mb-3">
      <input type="date" class="form-control" name='check_in' id="floatingInput" placeholder="วันเข้า">
      <label for="floatingInput">วันเข้า</label>
    </div>
 
    <div class="form-floating mb-3">
      <input type="date" class="form-control" name='check_out' id="floatingInput" placeholder="วันออก">
      <label for="floatingInput">วันออก</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" name='city' id="floatingInput" placeholder="จังหวัด">
      <label for="floatingInput">จังหวัด</label>
    </div>

    <div class="col-2">
        <input type="submit" value="ค้นหา" class='btn btn-success'>
    </div>
    </form>
    <?php
    include('./config.php');
    if(isset($_POST['check_in']) && isset($_POST['check_out'])) {
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];

        if ($check_in && $check_out  ) {
            $conn = $db->query("SELECT * FROM hotel JOIN room ON hotel.id_hotel = room.id_hotel WHERE room_in = '' AND room_out = ''");
            if ($conn->num_rows > 0) {
                while($row_check = $conn->fetch_assoc()) {
    ?>
        <div class="md-2">
            <div class="card">
                <div class="card-body">
                    <img src="./../img/<?php echo $row_check['img_hotel']; ?>" alt="">
                </div>
            </div>
        </div>
    <?php
            }
            } else {
                echo "<p>ไม่มีห้องว่าง</p>";
            }
    }
        } 
    ?>
    <?php
    if(isset($_POST['']))
    ?>
</body>
</html>
