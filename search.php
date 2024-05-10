<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Search</title>
</head>
<body>
    <form action="" method="post">
        <label for="check_in">Check-in Date:</label>
        <input type="date" id="check_in" class='form-control' name="check_in">

        <label for="check_out">Check-out Date:</label>
        <input type="date" id="check_out" class='form-control' name="check_out">

        <div class="mt-2">
            <input type="submit" value="ค้นหา"  class='btn btn-success'>
        </div>
    </form>

    <?php
    include('./config.php');
    if (isset($_POST['check_in']) && isset($_POST['check_out'])){
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        if ($check_in && $check_out) {
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
                echo "<p>No hotels found for the specified dates.</p>";
            }
        } else {
            echo "<p>Please provide valid check-in and check-out dates.</p>";
        }
    }
    ?>
</body>
</html>
