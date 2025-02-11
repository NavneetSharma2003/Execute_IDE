<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLab - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #000;
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .container {
            display: flex;
            width: 100%;
            max-width: 900px;
            background-color: #000;
            border-radius: 10px;
            overflow: hidden;
            padding: 20px;
        }

        .left-section {
            flex: 1;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
        }

        .logo-section {
            margin-bottom: 20px;
        }

        .logo-text {
            font-size: 2.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .code-symbol {
            color: #4361ee;
        }

        .tagline {
            font-size: 0.9rem;
            color: #666;
            margin-top: 5px;
        }

        .illustration {
            width: 100%;
            max-width: 400px;
            margin: 20px auto;
        }

        .right-section {
            flex: 1;
            padding: 40px;
            color: white;
        }

        .login-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: rgba(75, 75, 75, 0.3);
            padding: 30px;
            border-radius: 10px;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #ccc;
        }

        .input-container {
            position: relative;
        }

        input {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: white;
            border-radius: 5px;
            color: #333;
            font-size: 1rem;
            padding-left: 35px;
        }

        input::placeholder {
            color: #888;
        }

        .password-container {
            position: relative;
        }

        .submit-btn {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #7c3aed;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .signup-link {
            margin-top: 20px;
            text-align: center;
            color: #ccc;
            font-size: 0.9rem;
        }

        .signup-link a {
            color: #ff6b6b;
            text-decoration: none;
        }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
    $email = "";
    $userpwd = "";
    $error_message = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["txtemail"];
        $userpwd = $_POST["txtuserpwd"];
        
        $cnn = new mysqli("localhost", "root", "", "execute");
        if ($cnn->connect_error) {
            die("Connection failed: " . $cnn->connect_error);
        }
        
        $email = $cnn->real_escape_string($email);
        $userpwd = $cnn->real_escape_string($userpwd);
        
        $qry = "SELECT * FROM users WHERE email='$email' AND userpwd='$userpwd'";
        $result = $cnn->query($qry);
        
        if ($result->num_rows > 0) {
            session_start();
            $_SESSION["txtemail"] = $email;
            header("Location: interface.php");
            exit();
        } else {
            $error_message = "Invalid email or password";
        }
        
        $cnn->close();
    }
    ?>
    
    <div class="container">
        <div class="left-section">
            <div class="logo-section">
                <div class="logo-text">
                    Execute <span class="code-symbol">&lt;/&gt;</span>
                </div>
                <div class="tagline">Unlock Your Potential, One Line Of Code at a Time</div>
            </div>
            <img src="your-illustration-path.png" alt="Coding Illustration" class="illustration">
        </div>
        <div class="right-section">
            <h2>LOGIN</h2>
            <form class="login-form" method="POST" action="">
                <?php if ($error_message): ?>
                    <div class="error-message"> <?php echo $error_message; ?> </div>
                <?php endif; ?>
                <div class="form-group">
                    <label>E-mail</label>
                    <div class="input-container">
                        <span class="input-icon">👤</span>
                        <input type="text" name="txtemail" placeholder="Your E-Mail" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <div class="password-container">
                        <span class="input-icon">🔒</span>
                        <input type="password" name="txtuserpwd" placeholder="Your Password" required>
                        <button type="submit" name="btnsubmit" class="submit-btn">→</button>
                    </div>
                </div>
                <div class="signup-link">
                    Or create a new account - <a href="signup.php">Signup</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
