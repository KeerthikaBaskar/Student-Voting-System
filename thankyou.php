<?php
session_start(); // Start the session to access user information

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: voterLogin.php"); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link href="https://fonts.googleapis.com/css?family=Secular+One|Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #A7C6ED, #E3F2FD);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        h1 {
            font-family: 'Secular One', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .message-container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 20px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background: linear-gradient(45deg, #ff6b6b, #f94d6a);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.2rem;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        a.button:hover {
            background: linear-gradient(45deg, #ff9234, #ffcd3c);
        }
    </style>
</head>
<body>

    <div class="message-container">
        <h1>Thank You for Voting!</h1>
        <p>Your vote has been successfully recorded.</p>
        <a href="home.php" class="button">Return to Home</a>
    </div>

</body>
</html>
