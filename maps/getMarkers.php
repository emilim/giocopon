<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "giocopon";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}


$sql = "SELECT longitudine, latitudine FROM tesoro";
$result = $conn->query($sql);

class Coordinates
{
    public $latitudine;
    public $longitudine;
}
$coordinates = new Coordinates();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $coordinates->latitudine[] = $row["latitudine"];
        $coordinates->longitudine[] = $row["longitudine"];
    }
} else {
    echo "0 results";
}
echo json_encode($coordinates);
$conn->close();
