<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ipt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $gpa = $_POST["gpa"];
    $age = $_POST["age"];

    // Prepare and bind statement
    $stmt = $conn->prepare("INSERT INTO students (name, gpa, age) VALUES (?, ?, ?)");
    $stmt->bind_param("sdi", $name, $gpa, $age);

    if ($stmt->execute()) {
        $message = "New record created successfully";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Student Form</h2>
        <form action="task2.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="gpa">GPA:</label><br>
            <input type="text" id="gpa" name="gpa"><br>
            <label for="age">Age:</label><br>
            <input type="text" id="age" name="age"><br>
            <input type="submit" value="Submit">
        </form>

        <?php if(isset($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>

        <?php include 'display.php'; ?>
    </div>
</body>
</html>
