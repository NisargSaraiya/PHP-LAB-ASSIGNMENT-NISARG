<?php
$servername = "localhost:3307";
$username = "root";
$password = '';
$database_name = "college";

$conn = mysqli_connect($servername, $username, $password, $database_name);
if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}

$query = "SELECT Student_Name,ROLL_NUMBER FROM Student_Info";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Roll Number: " . $row["ROLL_NUMBER"] . " - Name: " . $row["Student_Name"] . "<br>";
    }
} 
else {
    echo "0 results";
}
mysqli_close($conn);
?>