<?php
include 'connect.php';

if (isset($_POST['recover'])) {
    $email = $_POST['email'];
    $query = "SELECT password FROM users WHERE email='$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $recoveredPassword = $row['password'];
    } else {
        $recoveredPassword = "No account found with this email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recovered Information</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <h1>Recovered Information</h1>
        <p>Email: <?php echo htmlspecialchars($email); ?></p>
        <p>Password: <?php echo htmlspecialchars($recoveredPassword); ?></p>
        <a href="index.php">Back to Sign In</a>
    </div>
</body>
</html>
