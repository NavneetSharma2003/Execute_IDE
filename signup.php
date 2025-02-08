<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLab - Sign Up</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
        body { background-color: #000; display: flex; min-height: 100vh; align-items: center; justify-content: center; }
        .container { display: flex; width: 100%; max-width: 900px; background-color: #000; border-radius: 10px; overflow: hidden; padding: 20px; }
        .left-section { flex: 1; padding: 40px; background-color: white; border-radius: 10px; }
        .logo-section { margin-bottom: 20px; }
        .logo-text { font-size: 2.5rem; font-weight: bold; display: flex; align-items: center; gap: 10px; }
        .code-symbol { color: #4361ee; }
        .tagline { font-size: 0.9rem; color: #666; margin-top: 5px; }
        .illustration { width: 100%; max-width: 400px; margin: 20px auto; }
        .right-section { flex: 1; padding: 40px; color: white; }
        .signup-form { max-width: 400px; margin: 0 auto; }
        h2 { font-size: 2.5rem; margin-bottom: 30px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; color: #ccc; }
        .input-container { position: relative; }
        input { width: 100%; padding: 12px; border: none; background-color: #333; border-radius: 5px; color: white; font-size: 1rem; }
        input::placeholder { color: #888; }
        .password-container { position: relative; }
        .submit-btn { background-color: #7c3aed; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; width: 100%; margin-top: 10px; font-size: 1rem; }
        .login-link { margin-top: 20px; text-align: center; color: #ccc; }
        .login-link a { color: #7c3aed; text-decoration: none; }
    </style>
</head>
<body>

<?php
if (isset($_POST["btnsubmit"])) {
    // Database Connection
    $cnn = mysqli_connect("localhost", "root", "", "execute");

    if (!$cnn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve and Escape Form Data
    $username = mysqli_real_escape_string($cnn, $_POST["txtusername"]);
    $email = mysqli_real_escape_string($cnn, $_POST["txtemail"]);
    $userpwd = password_hash($_POST["txtuserpwd"], PASSWORD_DEFAULT); // Hash password

    // SQL Query
    $qry = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$userpwd')";

    if ($cnn->query($qry) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "<p style='color:red;'>Error: " . $qry . "<br>" . $cnn->error . "</p>";
    }

    // Close Connection
    $cnn->close();
}
?>

<div class="container">
    <div class="left-section">
        <div class="logo-section">
            <div class="logo-text">
                CodeLab <span class="code-symbol">&lt;/&gt;</span>
            </div>
            <div class="tagline">Unlock Your Potential, One Line Of Code at a Time</div>
        </div>
        <img src="your-illustration-path.png" alt="Coding Illustration" class="illustration">
    </div>

    <div class="right-section">
        <form class="signup-form" method="POST" action="">
            <h2>SIGNUP</h2>
            <div class="form-group">
                <label>User Name</label>
                <div class="input-container">
                    <input type="text" name="txtusername" placeholder="Your Username" required>
                </div>
            </div>
            <div class="form-group">
                <label>Email Id</label>
                <div class="input-container">
                    <input type="email" name="txtemail" placeholder="Your Email ID" required>
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="password-container">
                    <input type="password" name="txtuserpwd" placeholder="New Password" required>
                </div>
            </div>
            <button type="submit" name="btnsubmit" class="submit-btn">Signup</button>
            <div class="login-link">
                Or already have an account - <a href="login.php">Login</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
