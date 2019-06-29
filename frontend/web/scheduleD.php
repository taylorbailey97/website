<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'header.php'; 
        include './DB/connection.php';
        $name = $_POST['Name'];
        $number = $_POST['Number'];
        $email = $_POST['email'];
        $id = $_POST['time'];
        $comment = $_POST['message'];
        $query = "INSERT INTO appointments (fName, pNumber, email, schID, sComment)
                  VALUES ('$name', '$number', '$email', $id, '$comment');";
        $query2 = "UPDATE schedules
        SET taken = true
        WHERE schID=" . $_POST['time'] . ";";
        $results = pg_query($dbConn, "SELECT sTime FROM schedules WHERE schID=". $_POST['time'] . ";");
        while ($row = pg_fetch_array($results)) {
            $time = $row[0];
        }

        if (pg_query($dbConn, $query)) {
            pg_query($dbConn, $query2);
        }


        echo "<h3>Thank you for scheduling your appointment!</h3>";
        echo "<h4>Your appointment details: </h4>";
        echo "
            <p><b>Name: </b>" . $_POST['Name'] . "</p>
            <p><b>Email: </b>" . $_POST['email'] . "</p>
            <p><b>Phone: </b>" . $_POST['Number'] . "</p>
            <p><b>Date: </b>" . $time . "</p>
        ";
    ?>
    
        
    <?php include 'footer.php'; ?>
</body>
</html>