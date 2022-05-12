<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "giocopon";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}

$latitudine = $_POST['latitudine'];
$longitudine = $_POST['longitudine'];

$sql_query = "INSERT INTO tesoro (longitudine, latitudine) VALUES ('$longitudine','$latitudine')";

if (mysqli_query($conn, $sql_query)) {
    echo "New Details Entry inserted successfully !";
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}

mysqli_close($conn);
