<!DOCTYPE html>
<html>
<head>
    <title>Student Data Received</title>
</head>
<body>
    <h2>Student Details</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = htmlspecialchars($_POST["first_name"]);
        $last_name = htmlspecialchars($_POST["last_name"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $email = htmlspecialchars($_POST["email"]);
        $address = htmlspecialchars($_POST["address"]);

        echo "<strong>First Name: </strong>" . $first_name . "<br>";
        echo "<strong>Last Name: </strong>" . $last_name . "<br>";
        echo "<strong>Gender: </strong>" . $gender . "<br>";
        echo "<strong>Email: </strong>" . $email . "<br>";
        echo "<strong>Address: </strong>" . $address . "<br>";
    } else {
        echo "No data received.";
    }
    ?>
</body>
</html>
