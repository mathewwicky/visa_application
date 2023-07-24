<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visa Web App</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Basic styling, you can add more styles as needed */
body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

header {
  background-color: #333;
  color: #fff;
  padding: 10px 0;
}

header .logo {
  font-size: 24px;
  font-weight: bold;
  color: #fff;
  text-decoration: none;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
  margin-left: 20px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
}

.hero {
  background-color: #f9f9f9;
  padding: 60px 0;
  text-align: center;
}

.about-us {
  padding: 40px 0;
  background-color: #f0f0f0;
}

.sign-in, .register {
  padding: 40px 0;
}

footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px 0;
}

  </style>
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="container">
      <a href="#" class="logo">Your Logo</a>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#about-us">About Us</a></li>
          <li><a href="#sign-in">Sign In</a></li>
          <li><a href="#register">Register</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Welcome to Visa Web App</h1>
      <p>Apply for your visa easily and efficiently with us!</p>
    </div>
  </section>

  <!-- About Us Section -->
  <section id="about-us" class="about-us">
    <div class="container">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu ligula in turpis hendrerit gravida. Curabitur ac risus in sapien bibendum scelerisque.</p>
    </div>
  </section>

  <!-- Sign In Section -->
  <section id="sign-in" class="sign-in">
    <div class="container">
      <h2>Sign In</h2>
      <!-- Sign in form goes here -->
    </div>
  </section>

  <!-- Register Section -->
  <section id="register" class="register">
    <div class="container">
      <h2>Register</h2>
      <!-- Registration form goes here -->
    </div>
  </section>

  <!-- Footer Section -->
  <footer>
    <div class="container">
      <p>&copy; 2023 Visa Web App. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
