<!DOCTYPE html>
<html>
<body>

<?php
$db_host = "localhost";
$db_user = "user_4";
$db_password = "123456789";
$db_name = "week_4";

$connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if ($connect->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}

$sql = ""Select `cafe` `message`='$data[4]', `date`='$data[3]' WHERE (`name` = '$data[1]' and `code` = '$data[5]')";
$results = $connect->query($sql);

if ($results->num_rows > 0) {
    // output data of each row
    while($row = $results->fetch_assoc()) {
        echo "<br> id: ". $row[$data[0]]. " - Name: ". $row[$data[1]]. " City:" . $row[$data[1]] . $row["city"] . $row["date"] . "<br>";
    }
} else {
    echo "0 results";
}

$connect->close();
?>

</body>
</html>