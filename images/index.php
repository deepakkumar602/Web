<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food.in</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="screen and (max-width:761px)" href="mobile.css">
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <img src="a.png" alt="food.in">
        </div>

        <ul>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">Services</a></li>
            <li class="item"><a href="#">About us</a></li>
            <li class="item"><a href="#">Contact</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to Food.in</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi architecto commodi molestiae. Magnam, molestiae earum!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius explicabo. </p>
        <button class="btn">Order Now</button>
    </section>

    <section class="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="./e.png" alt="food.in">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet aperiam quam dicta distinctio dolor hic quas nostrum delectu  .</p>
                
            </div>
            <div class="box">
                <img src="./b.jpg" alt="food.in">
                <h2 class="h-secondary center">Food catering</h2>
                <p class="center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet aperiam quam dicta distinctio dolor hic quas nostrum delectu</p>
                
            </div><div class="box">
                <img src="./f.jpg" alt="food.in">
                <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet aperiam quam dicta distinctio dolor hic quas nostrum delectu</p>
                
            </div>
        </div>    
    </section>

    <section id="clients-section">
      <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
          <div class="clients-item">
            <img src="./a.png" alt="clients">
          </div>
          <div class="clients-item">
            <img src="./a.png" alt="clients">
          </div>
          <div class="clients-item">
            <img src="./a.png" alt="clients">
          </div>
          <div class="clients-item">
            <img src="./a.png" alt="clients">
          </div>
          <div class="clients-item">
            <img src="./a.png" alt="clients">
          </div>
        </div>
    </section>



    <?php
     include("my.php");
    ?>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>

            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.food.in All rights reserved. 
        
        </div>
    </footer>
</body>
</html>