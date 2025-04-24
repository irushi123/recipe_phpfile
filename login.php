<?php
session_start(); // Start the session
include('dblogin.php'); // Database connection (Ensure this file is correct)

$login_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_email = sanitize_input($_POST['username_email']);
    $password = sanitize_input($_POST['password']);

    // Use prepared statements (BEST PRACTICE)
    $sql = "SELECT id, username, password FROM users WHERE username=? OR email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username_email, $username_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Login successful
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $login_error = "Incorrect password.";
        }
    } else {
        $login_error = "User not found.";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">  <title>Ludiflex | Login</title>
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
            <button class="btn white-btn" id="loginBtn" onclick="loginForm()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="registerForm()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="toggleMenu()"></i>
        </div>
    </nav>

    <div class="form-box">
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="registerForm()">Sign Up</a></span>
                <header>Login</header>
            </div>
            <form method="POST" action="">
                <div class="input-box">
                    <input type="text" name="username_email" class="input-field" placeholder="Username or Email" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" class="input-field" placeholder="Password" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" name="login_submit" class="submit" value="Sign In">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="login-check">
                        <label for="login-check"> Remember Me</label>
                    </div>
                    <div class="two">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>
            </form>
            <?php if (isset($login_error)) : ?>
                <p class="error"><?php echo $login_error; ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    function toggleMenu() {
        var menu = document.getElementById("navMenu");
        menu.classList.toggle("responsive");
    }

    function loginForm() {
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");

        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function registerForm() {
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");

        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }
</script>

</body>
</html>