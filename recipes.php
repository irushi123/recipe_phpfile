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
    
    <title>Recipes</title>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-visible');
                }
            });
        },
        { threshold: 0.2 }
    );

    const animatedSections = document.querySelectorAll('.animate');
    animatedSections.forEach((section) => observer.observe(section));
});

    
        var recipeButton = document.getElementById(recipeId + '-button');

            recipeButton.textContent = 'View Recipe';

            
</script>
        <h1>All Recipes</h1>
        
        <nav >
            <div class="nav2" style="margin-top: 50px; ;" >
            <ul style="display: flex;">
                <div class="header-line">
                <li class="recipe-item"><a href="#salads" style="color: rgb(236, 226, 226);">Salads</a></li>
                <li class="recipe-item"><a href="#breakfast" style="color:rgb(236, 226, 226);"> Breakfast</a></li>
                <li class="recipe-item"><a href="#lunch" style="color:rgb(236, 226, 226);">Lunch </a></li>
                <li class="recipe-item" ><a href="#dinner" style="color: rgb(236, 226, 226);">Dinner</a></li>
                <li class="recipe-item"><a href="#snacks"style="color:white">Snacks</a></li>
            </div>
            </ul>
        </div>
        </nav>

    
    <main>
        
        <!-- Salads Section -->
        <section id="salads" class="animate fade-in">
            <h2>Salad Recipes</h2>
            <div class="recipe-grid">
                <div class="recipe-card" id="salad1">
        
                    <img src="images/casear salads.jpg" alt="Salad 1 "style="width:300px; height:250px;" >
                    <h3>Caesar Salad</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Crisp lettuce with Caesar dressing and croutons.</p>
                    <a href="caser salads.html" style="font-size: 15px;" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>

                </div>

                <div class="recipe-card" id="salad2">
                    <img src="images/greek salads.jpg" alt="Salad 1" style="width:300px; height:250px;">

                    <h3>Greek Salad</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Tomatoes, cucumbers, olives, and feta cheese.</p>
                    
                    </ul>
                    <a href="greek.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
                <div class="recipe-card" id="salad3">
                    <img src="images/fruit salads.jpg" alt="Salad 3"style="width:300px; height:250px;">

                    <h3>Fruit Salad</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Mixed fruits with a refreshing lime dressing.</p>
                    </ul>
                    <a href="fruit salads.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
            </div>
            </div>
        </section>

        <!-- Breakfast Section -->
        <section id="breakfast" class="animate slide-in-right">
            <h2>Breakfast Recipes</h2>
            <div class="recipe-grid">
                <div class="recipe-card" id="breakfast1">
                    <img src="images/pancakes.jpg" alt="Breakfast 1"style="width:300px; height:200px;">
                    <h3>pancakes</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">pancakes with eggs</p>
                    </ul>
                    <a href="pancakes.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
                <div class="recipe-card" id="breakfast2">
                    <img src="images/Omelette.jpg" alt="Breakfast 2"style="width:300px; height:200px;">
                    <h3>Omelette</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Eggs with cheese and veggies.</p>
                    
                    </ul>
                    <a href="omlette.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
                <div class="recipe-card" id="breakfast3">
                    <img src="images/smoothie.jpg" alt="Breakfast 3"style="width:300px; height:200px;">
                    <h3>Smoothie</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Banana and berry smoothie for a healthy start.</p>
                    
                    </ul>
                    <a href="smoothie.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
            </div>
        </section>

        <!-- Lunch Section -->
        <section id="lunch" class="animate fade-in">
            <h2>Lunch Recipes</h2>
            <div class="recipe-grid">
                <div class="recipe-card" id="lunch1">
                    <img src="images/Grilled-Cheese.jpg" alt="Lunch 1"style="width:300px; height:200px;">
                    <h3>Grilled Cheese</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Classic grilled cheese with gooey melted cheese.</p>
                    
                    </ul>
                    <a href="grilled chicken.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
                <div class="recipe-card" id="lunch2">
                    <img src="images/Chicken Wrap.jpeg" alt="Lunch 2"style="width:300px; height:200px;">
                    <h3>Chicken Wrap</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Grilled chicken wrapped with veggies and sauce.</p>
                    
                    </ul>
                    <a href="chicken wrap.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
                <div class="recipe-card" id="lunch3">
                    <img src="images/chicken vegetable soup.jpg" alt="Lunch 3"style="width:300px; height:200px;">
                    <h3>Vegetable Soup</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;"></p> A warm bowl of hearty vegetable soup. </p>
                    
                    </ul>
                    <a href="vegitable soup.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
            </div>
        </section>

        <!-- Dinner Section -->
        <section id="dinner" class="animate slide-in-left">
            <h2>Dinner Recipes</h2>
            <div class="recipe-grid">
                <div class="recipe-card" id="dinner1">
                    <img src="images/spaghetti-bolognese-recipe.jpg" alt="Dinner 1"style="width:300px; height:200px;">
                    <h3>Spaghetti Bolognese</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Classic Italian pasta with a rich meat sauce.</p>
                    
                    </ul>
                    <a href="spaghetti bolognes.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
                <div class="recipe-card" id="dinner2">
                    <img src="images/chicken-stir-fry-recipe.jpg" alt="Dinner 2"style="width:300px; height:200px;">
                    <h3>Chicken Stir Fry</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Stir-fried chicken with vegetables and soy sauce.</p>
                    
                    </ul>
                    <a href="chicken stri fry.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
                <div class="recipe-card" id="dinner3">
                    <img src="images/Salmon-Recipe.jpg" alt="Dinner 3"style="width:300px; height:200px;">
                    <h3>Salmon</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Grilled salmon with a lemon butter sauce.</p>
                   
                    </ul>
                    <a href="salmon.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
            </div>
        </section>

        <!-- Snacks Section -->
        <section id="snacks" class="animate zoom-in">
            <h2>Snack Recipes</h2>
            <div class="recipe-grid">
                <div class="recipe-card" id="snack1">
                    <img src="images/fruit and sala.jpeg" alt="Snack 1"style="width:300px; height:200px;">
                    <h3>Chips and Salsa</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;"></p>Crunchy chips with a tangy salsa dip.</p>
                    
                    </ul>
                    <a href="chps and sala.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
                <div class="recipe-card" id="snack2">
                    <img src="images/guacamole.jpg" alt="Snack 2"style="width:300px; height:200px;">
                    <h3>Guacamole</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Avocados mashed with lime and seasonings.</p>
                    
                    </ul>
                    <a href="Gucamoles.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>
                </div>
                <div class="recipe-card" id="snack3">
                    <img src="images/popcorn. jpg.jpeg" alt="Snack 3"style="width:300px; height:200px;">
                    <h3>Popcorn</h3>
                    <p style="color:black; font-size: 15px; font-family: Serif;">Classic salted popcorn.</p>
                    
                    </ul>
                    <a href="popcorn.html" ><button class="btn btn-success btn-lg view-recipe-btn" data-bs-toggle="modal" data-bs-target="#recipeModal">View Recipe</button></a>

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
          <p style="color: aliceblue;">Email: <a href="mailto:savoryspot@gmail.com">savoryspot@gmail.com</a></p>
          <p style="color: aliceblue;">  <a href="tel:+1234567890">+123 456 7890</a></p>
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

