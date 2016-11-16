<?php

$servername = "localhost";
$username = "root";
$password = "199212";
$dbname = "comment_box";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully". "<br>";


$sql = "SELECT comment_id, comment_time, user_id,comment_content FROM comment  WHERE comment_id = 1";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Comment id: " . $row["comment_id"]. "  -Comment content: " . $row["comment_content"]. " " . $row["comment_time"]. "<br><br>";
    }
} else {
    echo "0 results";
}



?>