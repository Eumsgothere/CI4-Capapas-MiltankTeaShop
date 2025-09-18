<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miltank Tea Shop </title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom right, #f8d7f9, #cdeaff);
      color: #333;
    }

    header {
      background: #a6d8ff;
      color: #fff;
      text-align: center;
      padding: 2rem 1rem;
      border-bottom: 5px solid #ffb6d9;
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    header p {
      margin: 0.5rem 0 0;
      font-size: 1.2rem;
    }

    section {
      max-width: 900px;
      margin: 2rem auto;
      padding: 2rem;
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    section h2 {
      text-align: center;
      color: #ff70a6;
      margin-bottom: 1.5rem;
    }

    .best-sellers {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1.5rem;
    }

    .card {
      background: #ffe6f7;
      border-radius: 12px;
      padding: 1rem;
      text-align: center;
      border: 2px solid #a6d8ff;
      transition: transform 0.2s ease-in-out;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 100px;
      margin-bottom: 1rem;
    }

    footer {
      text-align: center;
      padding: 1.5rem;
      background: #a6d8ff;
      color: #fff;
      margin-top: 2rem;
      border-top: 5px solid #ffb6d9;
    }
  </style>
</head>
<body>

<header>
  <h1>🧋 Welcome to Miltank Tea Shop 🧋</h1>
  <p>Sweet, Refreshing, and Made with Love</p>
</header>

<section>
  <h2>About Us</h2>
  <p style="text-align: center;">
    At Miltank Tea Shop, we serve happiness in a cup.
    From creamy classics to fruity flavors, our drinks are crafted to brighten your day!
  </p>
</section>

<section>
  <h2>Best Sellers</h2>
  <div class="best-sellers">
    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" alt="Classic Pearl Milk Tea">
      <h3>Classic Pearl Milk Tea</h3>
      <p>Rich black tea, creamy milk, and chewy pearls.</p>
    </div>
    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/415/415734.png" alt="Strawberry Milk Tea">
      <h3>Strawberry Milk Tea</h3>
      <p>Refreshing pink tea with real strawberry flavor.</p>
    </div>
    <div class="card">
      <img src="https://cdn-icons-png.flaticon.com/512/415/415735.png" alt="Matcha Latte">
      <h3>Matcha Latte</h3>
      <p>Earthy matcha balanced with creamy sweetness.</p>
    </div>
  </div>
</section>
<footer>
  <p>© <?php echo date("Y"); ?> Miltank Tea Shop. All rights reserved.</p>
</footer>

</body>
</html>