<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "sams";

// Create connection
$conn = new mysqli($username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO students (`name`, `uid`, `branch`, `year`, `cgpa1`, `cgpa2`, `cgpa3`, `cgpa4`, `about`, `tech-name1`, `tech-score1`, `tech-name2`, `tech-score2`, `tech-name3`, `tech-score3`, `co-name1`, `co-score1`, `co-name2`, `co-score2`, `co-name3`, `extra-name`, `extra-rating`)";
/*$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";*/

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>