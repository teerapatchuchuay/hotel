<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Search</title>
</head>
<body>
    <form action="search.php" method="GET">
        <label for="check_in">Check-in Date:</label>
        <input type="date" id="check_in" class='form-control' name="check_in">

        <label for="check_out">Check-out Date:</label>
        <input type="date" id="check_out" class='form-control' name="check_out">

        <div class="mt-2">
        <button type="submit" class='btn btn-success'>Search</button>
        </div>
    </form>

    <?php
    if (isset($_GET['check_in']) && isset($_GET['check_out'])) {

        $check_in = $_GET['check_in'];
        $check_out = $_GET['check_out'];

        if ($check_in && $check_out) {
            // ค้นหาใน database
            echo "<p>Searching for hotels from $check_in to $check_out</p>";
        } else {
            echo "<p>Please provide valid check-in and check-out dates.</p>";
        }
    }
    ?>
</body>
</html>
