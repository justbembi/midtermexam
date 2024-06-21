<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, gpa, age FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>Name</th>
    <th>GPA</th>
    <th>Age</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["gpa"]."</td><td>".$row["age"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p>No results found.</p>";
}

$conn->close();
?>
