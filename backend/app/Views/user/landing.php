<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miltank Tea Shop</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #fcebb7;
      color: #2f2f2f;
      line-height: 1.6;
    }

    header {
      background: #f6b6c4;
      color: #ffffff;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    header h1 {
      font-size: 1.6rem;
      color: #2f2f2f;
    }

    nav a {
      text-decoration: none;
      background: #4a90e2;
      color: #ffffff;
      padding: 0.5rem 1rem;
      border-radius: 6px;
      margin: 0 0.3rem;
      font-weight: 500;
      transition: all 0.2s ease-in-out;
    }

    nav a:hover {
      background: #2f2f2f;
    }

    .hero {
      background: #ffffff;
      text-align: center;
      padding: 3rem 2rem;
    }

    .hero h2 {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #2f2f2f;
    }

    .hero p {
      font-size: 1.1rem;
      max-width: 600px;
      margin: 0 auto;
      color: #555;
    }

    section {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 1rem 2rem;
    }

    section h2 {
      text-align: center;
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      color: #2f2f2f;
    }

    .best-sellers {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .card {
      background: #ffffff;
      border-radius: 10px;
      border: 1px solid #ddd;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      transition: transform 0.2s ease-in-out;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-content {
      padding: 1rem;
      text-align: center;
    }

    .testimonials {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1rem;
    }

    .about-us {
    margin-top: 2rem;
  }

.about-container {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  gap: 2rem;
  background: #f6b6c4;
  padding: 2rem;
  border-radius: 12px;
  color: #2f2f2f;
}

  .about-text {
    flex: 1;
    min-width: 250px;
    font-size: 1.4rem;
    color: #444;
  }

  .about-image img {
    max-width: 250px;
    border-radius: 10px;
  }

    footer {
      background: #2f2f2f;
      color: #ffffff;
      text-align: center;
      padding: 1.2rem;
      margin-top: 3rem;
    }

    footer a {
      color: #f6b6c4;
      margin: 0 10px;
      text-decoration: none;
    }
  </style>
</head>
<body>

 <header>
    <h1>🐄 Miltank Tea Shop</h1>
    <nav>
    <a href="/login">Login</a>
    <a href="/moodboard">Mood Board</a>
    <a href="/roadmap">Road Map</a>
    </nav>
  </header>

<section class="hero">
  <h2>🧋 Refreshing Happiness in Every Sip 🧋</h2>
  <p>
    At Miltank Tea Shop, we serve happiness in a cup. From creamy classics to fruity flavors, our drinks are crafted to brighten your day! Visit us and discover your new favorite tea or introduce you to your new favorite Pokémon!!
  </p>
</section>

<section>
  <h2>Our Best Sellers</h2>
  <div class="best-sellers">
    <div class="card">
      <img src="https://assets.epicurious.com/photos/629f98926e3960ec24778116/1:1/w_2560%2Cc_limit/BubbleTea_RECIPE_052522_34811.jpg" alt="Classic Pearl Milk Tea">
      <div class="card-content">
        <h3>Classic Pearl Milk Tea</h3>
        <p>Rich black tea, creamy milk, and chewy pearls.</p>
      </div>
    </div>
    <div class="card">
      <img src="https://www.inkatrinaskitchen.com/wp-content/uploads/2020/05/Strawberry-Bubble-Tea-24-wm-600-500x500.jpg" alt="Strawberry Milk Tea">
      <div class="card-content">
        <h3>Strawberry Milk Tea</h3>
        <p>Refreshing pink tea with real strawberry flavor.</p>
      </div>
    </div>
    <div class="card">
      <img src="https://feelgoodfoodie.net/wp-content/uploads/2023/08/Matcha-Latte-TIMG.jpg" alt="Matcha Latte">
      <div class="card-content">
        <h3>Matcha Latte</h3>
        <p>Earthy matcha balanced with creamy sweetness.</p>
      </div>
    </div>
  </div>
</section>

<section class="about-us">
  <h2>About Us</h2>
  <div class="about-container">
    <div class="about-text">
      <p>
        Miltank Tea Shop was founded with a love for milk tea and Pokémon!
        Our mission is to bring refreshing drinks and a cozy vibe to every guest.
        Whether you're a classic pearl lover or an adventurous flavor seeker,
        there’s something here for everyone.
      </p>
    </div>
    <div class="about-image">
      <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/241.png" alt="Miltank Pokémon mascot">
    </div>
  </div>
</section>
<section>
  <h2>What Our Customers Say</h2>
  <div class="testimonials">
    <div class="card">
      <div class="card-content">
        <p>"Best milk tea in town! The pearls are so chewy and fresh. ⭐⭐⭐⭐⭐"</p>
        <strong>- Alex</strong>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <p>"I love the Pokémon theme! So cute and unique. ⭐⭐⭐⭐⭐"</p>
        <strong>- Jamie</strong>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <p>"Their Matcha Latte is my absolute favorite. ⭐⭐⭐⭐⭐"</p>
        <strong>- Taylor</strong>
      </div>
    </div>
  </div>
</section>

<section>
  <h2>Contact Us</h2>
  <p style="text-align:center;">📍 123 Milk Street, Pokétown</p>
  <p style="text-align:center;">📞 (123) 456-7890</p>
  <p style="text-align:center;">✉️ contact@miltankteashop.com</p>
</section>

<footer>
  <p>© <?php echo date("Y"); ?> Miltank Tea Shop. All rights reserved.</p>
  <p>
    <a href="https://fb.com/EumieDraws">Facebook</a> | 
    <a href="https://instagram.com/Eumie_Draws">Instagram</a> | 
    <a href="https://twitter.com/Eumie_Draws">Twitter</a>
  </p>
</footer>

</body>
</html>
