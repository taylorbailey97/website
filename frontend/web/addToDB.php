<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation - Nails by Bailey</title>
</head>
<body>
    <?php 
        include 'header.php'; 
        include './DB/connection.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $query = "INSERT INTO messages (fName, email, message)
        VALUES ('$name', '$email', '$message');";

        if (pg_query($dbConn, $query))
            echo "<h3>Thank you for messaging us! We'll be in contact with you!</h3>";
        else    
            echo "Oops it looks like something went wrong on our end, try again soon!";
    ?>
    
        
    <?php include 'footer.php'; ?>
</body>
</html>