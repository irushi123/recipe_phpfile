<?php
include('dblogin.php'); // Database connection

$register_error = "";
$register_success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = sanitize_input($_POST['firstname']);
    $lastname = sanitize_input($_POST['lastname']);
    $email = sanitize_input($_POST['email']);
    $username = sanitize_input($_POST['username_email']); // Using the same name as in login form
    $password = sanitize_input($_POST['password']);

    // Check if email or username already exists
    $check_sql = "SELECT username, email FROM users WHERE username='$username' OR email='$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        $check_row = $check_result->fetch_assoc();
        if ($check_row['username'] == $username) {
            $register_error = "Username already exists.";
        } else if ($check_row['email'] == $email) {
            $register_error = "Email already exists.";
        }
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $insert_sql = "INSERT INTO users (firstname, lastname, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$hashed_password')";

        if ($conn->query($insert_sql) === TRUE) {
            $register_success = "Registration successful! <a href='login.php'>Login</a>";
        } else {
            $register_error = "Error registering: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <title>Ludiflex | Register</title> <style>
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>

<div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <img src="images/logo.png" alt="logo" style="width: 50px; height: 50px;">
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="Home.html" class="link active">Home</a></li>
                <li><a href="recipes.html" class="link">All Recipe</a></li>
                <li><a href="blog.html" class="link">Blog</a></li>
                <li><a href="about.html" class="link">About Us</a></li>
                <li><a href="contact.html" class="link">Contact Us</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="window.location.href='login.php'">Sign In</button>
            <button class="btn white-btn" id="registerBtn" >Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
    <div class="form-box">
        <div class="register-container" id="register" style="left: 5px; right: -520px; opacity: 1;"> <div class="top">
                <span>Have an account? <a href="login.php" >Login</a></span> <header>Sign Up</header>
            </div>
            <form method="POST" action="">
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" name="firstname" class="input-field" placeholder="Firstname" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" name="lastname" class="input-field" placeholder="Lastname" required>
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <input type="text" name="username_email" class="input-field" placeholder="Username" required> <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" class="input-field" placeholder="Email" required>
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" class="input-field" placeholder="Password" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" name="register_submit" class="submit" value="Register">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="register-check">
                        <label for="register-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Terms & conditions</a></label>
                    </div>
                </div>
            </form>
            <?php if (isset($register_error)) : ?>
                <p class="error"><?php echo $register_error; ?></p>
            <?php endif; ?>
            <?php if (isset($register_success)) : ?>
                <p class="success"><?php echo $register_success; ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<script>

    function myMenuFunction() {
        var i = document.getElementById("navMenu");
        if (i.className === "nav-menu") {
            i.className += " responsive";
        } else {
            i.className = "nav-menu";
        }
    }
</script>
</body>
</html>