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
    
    <title>Recipe Website - Fruit Salad</title>
</head>
<body>
   <!-- Header -->
   <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="navbar-brand">
            <img src="images/logo.png" alt="logo">
        </div>
        <span class="taste">Savory Spot</span>
        <div class="savory-spot">Savory Spot</div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="margin-left: 600px;">
                <li class="nav-item"><a class="nav-link active" href="Home.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="recipes.html">All Recipes</a></li>
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
            <a style="margin-top:-32px;" href="login.html"><button class="btn btn-danger btn-md" id="loginBtn">Sign In</button></a>
        </div>
    </nav>
   </header>

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
   <style>
    
        body{
            background: url("images/recipe set background.jpg");
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
   
       h1 {
           text-align: center;
           color: #4a83bd;
           font-size: 20px;
       }
       h2 {
           color: #34495e;
           border-bottom: 2px solid #2c3e50;
           padding-bottom: 5px;
       }
       ul, ol {
           margin-left: 20px;
       }
       ul li, ol li {
           font-size: 16px;
           margin-bottom: 10px;
       }
       .ingredients ul, .instructions ol {
           margin-left: 30px;
       }
       .image {
           text-align: center;
           margin: 20px 0;
       }
       .image img {
           padding-bottom: 50px;
           max-width: 100%;
           height: auto;
           border-radius: 8px;
           box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
       }
   </style>

   <div class="container">
       <!-- Image Section -->
       <div class="image">
        <img src="images/fruit salads.jpg" alt="Salad 3"style="width:500px; height:450px;">
       </div>
       <h1 style="color:rgb(46, 116, 182); font-family:Fantasy; font-size: 50px;">Fruit Salad Recipe</h1>
       
       <!-- Ingredients Section -->
       <div class="ingredients">
           <h2 style="color: brown; font-style: italic;">Ingredients:</h2>
           <ul style="color:black; font-size: 15px;">
               <li>2 cups mixed berries (strawberries, blueberries, raspberries)</li>
               <li>1 cup diced pineapple</li>
               <li>1 cup diced mango</li>
               <li>2 bananas, sliced</li>
               <li>1/4 cup orange juice</li>
               <li>1 tablespoon honey (optional)</li>
               <li>Fresh mint leaves for garnish</li>
           </ul>
       </div>

       <!-- Instructions Section -->
       <div class="instructions">
           <h2 style="color: brown; font-style: italic;">Instructions:</h2>
           <ol>
               <li>Wash all the fruits thoroughly and pat them dry.</li>
               <li>Cut the fruits into bite-sized pieces and combine them in a large mixing bowl.</li>
               <li>Drizzle the orange juice and honey (if using) over the fruit mixture.</li>
               <li>Gently toss everything to evenly coat the fruits.</li>
               <li>Chill the fruit salad in the refrigerator for at least 15 minutes before serving.</li>
               <li>Garnish with fresh mint leaves before serving.</li>
           </ol>
       </div>
   </div>

   <!-- Footer Section -->
   <footer>
       <div class="container">
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
           <div class="footer-bottom">
               <p>&copy; 2025 Your Website. All Rights Reserved.</p>
           </div>
       </div>
   </footer>
</body>
</html>
