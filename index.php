<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    .carousel-item img {
      object-fit: cover;
      height: 100%;
    }
    body{
        background: url("images/recipe background.jpg");
        background-size: cover;
        background-repeat: no-repeat;
       background-attachment: fixed;
    }
    footer {
            background: transparent;
            padding: 20px 0;
            color: white;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
        }

        .social-icons a {
            color: white;
            text-decoration: none;
            margin-right: 10px;
            font-size: 20px;
        }

        .social-icons a:hover {
            color: lightblue;
        }
/* Search Bar Styles */
.search-bar {
            margin: 20px auto;
            text-align: center;
        }
        .search-bar input {
            width: 50%;
            padding: 10px 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            outline: none;
        }
        .search-bar button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: #e03b1b;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }
        .search-bar button:hover {
            background-color: #d11d1d;
        }
        /* Welcome Header Styles */
        .welcome-header {
            text-align: center;
            margin: 30px 0;
            font-size: 50px;
            color: #dddcdc;
            font-family: fantasy;
        }

  </style>
    
<body>
    
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="navbar-brand">
                <img src="images/logo.png" alt="logo">
            </div>
            
            <div class="savory-spot">savory spot</div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left: 600px;">
                    <li class="nav-item"><a class="nav-link active" href="Home.html ">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="recipes.html">All Recipes</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                </ul>
                <a style="margin-top:-32px;" href="login.html"> <button class="btn btn-danger btn-md" id="loginBtn">Sign In</button></a>
                
            </div>
        </nav>
    </header>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/background1 (4).jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/background1 (2).jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/background1 (3).jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Welcome Header -->
<div class="welcome-header">
  Welcome to Savory Spot
</div>
     <!-- Search Bar Section -->
    <div class="search-bar">
      <input type="text" placeholder="Search recipes..." />
      <button type="button">Search</button>
  </div>

   
    <!-- Footer Section -->
<footer>
    <div class="container">
      <!-- Footer Navigation -->
      <div class="row">
        <!-- Menu Section -->
        <div class="col">
          <h3>Menu</h3>
          <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="recipes.html">All Recipes</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
  
        <!-- Recipes Section -->
        <div class="col">
          <h3>Recipes</h3>
          <ul>
            <li><a href="recipes.html">Salads</a></li>
            <li><a href="recipes.html">Breakfast</a></li>
            <li><a href="recipes.html">Lunch</a></li>
            <li><a href="recipes.html">Dinner</a></li>
            <li><a href="recipes.html">Snacks</a></li>
          </ul>
        </div>
  
        <!-- Contact Section -->
        <div class="col">
          <h3>Contact Us</h3>
          <p style="color: aliceblue;">Email: <a href="mailto:savoryspot05@gmail.com">savoryspot05@gmail.com</a></p>

          <p style="color: aliceblue;">Phone: <a href="tel:+1234567890">+123 456 7890</a></p>
          <div class="social-icons">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
        </div>
      </div>
  
      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <p style="color: aliceblue;">&copy; 2025 savory spot. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  </body>
  </html>

    </body>
    </html>
    

    