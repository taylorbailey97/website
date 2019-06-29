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
        $results = pg_query($dbConn, "SELECT * FROM schedules WHERE taken=false ORDER BY schID;");
    ?>
    <table>
        <tr>
            <th>Schedule Date: </th>
            <th>Select?</th>
        </tr>
        <tr>
            <script>
                function selectSch(id) {
                    console.log(id);
                }
            </script>
            <?php 
                if (pg_num_rows($results) == 0) {
                    echo "<h4>Sorry there are no appointments at this time</h4>";
                }
                while ($row = pg_fetch_array($results)) {
                    echo "<tr><td>$row[1]</td>";
                    echo "
                        <td>
                        <form action='scheduleI.php' method='post' class='selectForm'>
                            <input type='number' id='id' name='id' value='$row[0]'>
                            <input type='submit' class='selectBtn' value='Select'>
                        </form>
                        </td>
                        </tr>
                    ";
                }
            ?>
        </tr>
    </table>
    <?php include './footer.php'; ?>
</body>
</html>