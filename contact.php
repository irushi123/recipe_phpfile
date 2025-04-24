<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Contact Us</title>
    <style>
        /* Set background image for the entire body */
        body {
            background-image: url("images/contact2 background.jpg");
            /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;

        }

        /* Style for the contact form container */
        #contact-form {
            background-color: rgba(255, 255, 255, 0.8);
            /* Light overlay for readability */
            border-radius: 10px;
            margin-top: 40px;
            padding: 20px;
        }

        /* Footer Section */
        footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 20px;
        }

        footer a {
            color: #bbb;
            text-decoration: none;
        }

        footer a:hover {
            color: white;
        }

        .footer-bottom {
            text-align: center;
            border-top: 1px solid #444;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="navbar-brand">
                <img src="images/logo.png" alt="logo">
            </div>
            <span class="taste">savory spot</span>
            <div class="savory-spot">savory spot</div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: 600px;">
                    <li class="nav-item"><a class="nav-link active" href="Home.html ">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="recipes.html">All Recipes</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
                <a style="margin-top:-32px;" href="login.html"> <button class="btn btn-danger btn-md"
                        id="loginBtn">Sign In</button></a>
            </div>
        </nav>
    </header>

    <br>

    <section id="contact-form" class="container">
        <h2 class="text-center mb-4" style="font-size: 30px; font-weight: bold; margin-top: 40px;">Contact Us</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'dbcontact.php';  // Connect to the database

            //  Sanitize and validate input (basic escaping, prepared statements are better!)
            $name = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['name'])));
            $email = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['email'])));
            $message = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['message'])));

            //  1.  SQL Query to insert data (adjust table and column names as needed)
            $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

            //  2.  Execute the query
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Message stored successfully!');</script>";
            } else {
                echo "<script>alert('Error storing message: " . $conn->error . "');</script>";
            }

            //  ---  OPTIONAL:  Send email as well ---
            $to = "savoryspot05@gmail.com";  // Change to your email
            $subject = "New Contact Message from $name";
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: $email";

            mail($to, $subject, $body, $headers);

            $conn->close();    // Close the connection
        }
        ?>

        <form action="contact.php" method="post" class="p-4 bg-light rounded shadow-sm">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Write your message here"
                    required></textarea>
            </div>
            <button type="submit" class="btn btn-danger w-100">Send</button>
        </form>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Menu</h3>
                    <ul>
                        <li><a href="Home.html">Home</a></li>
                        <li><a href="recipes.css">All Recipes</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h3>Recipes</h3>
                    <ul>
                        <li><a href="recipes.html">Salads</a></li>
                        <li><a href="recipes.html">Breakfast</a></li>
                        <li><a href="recipes.css">Lunch</a></li>
                        <li><a href="recipes.html">Dinner</a></li>
                        <li><a href="recipes.html">Snacks</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h3>Contact Us</h3>
                    <p style="color: aliceblue;">Email: <a href="mailto:savoryspot05@gmail.com">savoryspot05@gmail.com</a>
                    </p>

                    <p style="color: aliceblue;">Phone: <a href="tel:+1234567890">+123 456 7890</a></p>

                </div>
            </div>

            <div class="footer-bottom">
                <p style="color: aliceblue;">&copy; 2025 savory spot. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>