<!DOCTYPE html>
<html>
<head>
    <title>Student Data Form</title>
</head>
<body>
    <h2>Enter Student Details</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get and sanitize input values
        $first_name = htmlspecialchars($_POST["first_name"]);
        $last_name = htmlspecialchars($_POST["last_name"]);
        $gender = htmlspecialchars($_POST["gender"]);
        $email = htmlspecialchars($_POST["email"]);
        $address = htmlspecialchars($_POST["address"]);
        
        echo "<h3>Student Details Submitted:</h3>";
        echo "<strong>First Name:</strong> " . $first_name . "<br>";
        echo "<strong>Last Name:</strong> " . $last_name . "<br>";
        echo "<strong>Gender:</strong> " . $gender . "<br>";
        echo "<strong>Email:</strong> " . $email . "<br>";
        echo "<strong>Address:</strong> " . nl2br($address) . "<br>";
        
        echo '<hr><a href="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">Submit another response</a>';
    } else {
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        First Name: <input type="text" name="first_name" required><br><br>
        Last Name: <input type="text" name="last_name" required><br><br>
        Gender:
        <input type="radio" name="gender" value="male" required> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="other"> Other
        <br><br>
        Email: <input type="email" name="email" required><br><br>
        Address: <textarea name="address" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    }
    ?>
</body>
</html>
