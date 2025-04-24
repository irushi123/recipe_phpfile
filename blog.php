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
    
    <title>Recipe Website</title>
</head>
<body>
  <style>
    body{
        background: url("images/blog brackground.jpg");
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
</style>
    <!-- Header -->
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
                  <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                </ul>
                <a style="margin-top:-32px;" href="login.html"> <button class="btn btn-danger btn-md" id="loginBtn">Sign In</button></a>
               
            </div>
        </nav>
    </header>
    <main>
        <section class="blog-header">
            <h1>Our Food Blog</h1>
            <p>Discover the stories, tips, and inspiration behind our recipes!</p>
        </section>

        <section class="blog-posts">
            <!-- Blog Post 1 -->
            <div class="blog-post">
                <img src="images/morning Breakfast.jpg" alt="Blog Post 1">
                <div class="post-content">
                    <h2> Easy Breakfast Recipes for Busy Mornings</h2>
                    <p>Struggling to prepare a quick and healthy breakfast? These 5 easy recipes will make your mornings stress-free and delicious.</p>
                    <a href="post1.html" class="read-more">Read More →</a>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="blog-post">
                <img src="images/sweet.jpg" alt="Blog Post 2">
                <div class="post-content">
                    <h2>Sweet Treats</h2>
                    <p>Unlock the secrets to baking like a pro! These tips and tricks will take your baked goods to the next level.</p>
                    <a href="post2.html" class="read-more">Read More →</a>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="blog-post">
                <img src="images/Healthy-Eating,jpg.png" alt="Blog Post 3">
                <div class="post-content">
                    <h2>Healthy Eating</h2>
                    <p>Embark on a culinary journey around the globe with our beginner-friendly guide to international cuisines.</p>
                    <a href="post3.html" class="read-more">Read More →</a>
                </div>
            </div>
        </section>
    </main>



     <!-- Footer Section -->
     <footer>
      <div class="container">
        <!-- Footer Navigation -->
        <div class="row">
          <!-- Menu Section -->
          <div class="col">
            <h3>Menu</h3>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">All Recipes</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
  
          <!-- Recipes Section -->
          <div class="col">
            <h3>Recipes</h3>
            <ul>
              <li><a href="#">Salads</a></li>
              <li><a href="#">Breakfast</a></li>
              <li><a href="#">Lunch</a></li>
              <li><a href="#">Dinner</a></li>
              <li><a href="#">Snacks</a></li>
            </ul>
          </div>
  
          <!-- Contact Section -->
          <div class="col">
            <h3>Contact Us</h3>
            <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
            <p>Phone: <a href="tel:+1234567890">+123 456 7890</a></p>
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
          <p>&copy; 2025 Your Website. All Rights Reserved.</p>
        </div>
      </div>
    </footer>
  </body>
  </html>
  
