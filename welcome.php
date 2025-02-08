<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff6b6b, #4ecdc4);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .welcome-container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            color: #ff6b6b;
            margin-bottom: 20px;
        }
        p {
            color: #2c3e50;
            line-height: 1.6;
        }
    </style>
</head>
<body>
<?php
	session_start();
	$uname = isset($_SESSION["txtuname"]) ? $_SESSION["txtuname"] : "Guest";
?>


    <div class="welcome-container">
        <h1>Welcome!    <?php echo $uname; ?></h1>
        <p>You have successfully logged in to the system. Enjoy your experience!</p>
    </div>
</body>
</html>