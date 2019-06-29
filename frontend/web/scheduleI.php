<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schedule - Nails by Bailey</title>
</head>

<body>
    <?php
    include './header.php';
    include './DB/connection.php';
    $id = $_POST['id'];
    $results = pg_query($dbConn, "SELECT sTime FROM schedules WHERE schID=$id");
    while ($row = pg_fetch_array($results)) {
        $time = $row[0];
    }
    ?>
    <div class="form-style-8">
        <h2>Enter your info: </h2>
        <form action="scheduleD.php" method="post">
            <label for="time">Schedule Time: </label>
            <?php
                echo "<input type='text' name='time' placeholder='$time' value='$id' readonly>";
            ?>

            <input type="text" name="Name" placeholder="Full Name" pattern="[a-zA-Z]{3, 80}" required />
            
            <input type="text" name="Number" placeholder="Number"  required />

            <input type="email" name="email" placeholder="Email" required />

            <textarea name="message" placeholder="What do you want done?" onkeyup="adjust_textarea(this)" required></textarea>
            <input type="submit" value="Create Reservation" />
        </form>
    </div>

    <?php
    include './footer.php';
    ?>
    <script>
        function adjust_textarea(x) {
            x.style.height = "20px";
            x.style.height = (x.scrollHeight) + "px";
        }
    </script>
</body>

</html>