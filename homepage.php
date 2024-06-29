<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center;display: fixed; padding:15%; background: linear-gradient(to right, rgb(251, 113, 133), rgb(217, 70, 239), rgb(99, 102, 241));">
        <p style="font-size:50px; font-weight:bold; background: #fff;
    width: 500px;
    padding: 1rem;
    margin: 50px auto;
    border-radius: 10px;
    box-shadow: 0 20px 35px rgba(0, 0, 1, 0.9);">
            Hello <?php
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
                if ($query) {
                    while ($row = mysqli_fetch_array($query)) {
                        echo $row['firstName'] . ' ' . $row['lastName'];
                    }
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "Guest";
            }
            ?>
        </p>
        <a href="logout.php"style="margin: 50%,80%;">
        <div class="light-button">
  <button class="bt">
    <div class="light-holder">
      <div class="dot"></div>
      <div class="light"></div>
    </div>
    <div class="button-holder">
    <svg fill="#000000" width="100px" height="800px" viewBox="0 0 36 36" version="1.1"  preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <title>logout-solid</title>
    <path d="M23,4H7A2,2,0,0,0,5,6V30a2,2,0,0,0,2,2H23a2,2,0,0,0,2-2V24H15.63a1,1,0,0,1-1-1,1,1,0,0,1,1-1H25V6A2,2,0,0,0,23,4Z" class="clr-i-solid clr-i-solid-path-1"></path><path d="M28.16,17.28a1,1,0,0,0-1.41,1.41L30.13,22H25v2h5.13l-3.38,3.46a1,1,0,1,0,1.41,1.41L34,23.07Z" class="clr-i-solid clr-i-solid-path-2"></path>
    <rect x="0" y="0" width="36" height="36" fill-opacity="0"/>
</svg>
      <p>Logout</p>
    </div>
  </button>
</div>

        </a>
    </div>
</body>
</html>
