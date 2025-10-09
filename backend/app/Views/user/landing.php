<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miltank Tea Shop</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lilita+One&display=swap" rel="stylesheet">

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

    .banner {
      width: 100%;
      text-align: center;
      background-color: #fcebb7;
    }

    .banner img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 0 auto;
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
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
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

    .testimonials-section {
      max-width: 1000px;
      margin: 4rem auto;
      padding: 0 1rem;
    }

    .testimonials-section h2 {
      text-align: center;
      color: #2f2f2f;
      margin-bottom: 2rem;
      font-size: 2rem;
    }

    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }
  </style>
</head>

<body>

  <div class="banner">
    <img src="/banners.png" alt="Miltank Tea Shop Banner">
  </div>

  <?= view('components/header'); ?>

  <section class="hero">
    <h2>🧋 Refreshing Happiness in Every Sip 🧋</h2>
    <p>
      At Miltank Tea Shop, we serve happiness in a cup. From creamy classics to fruity flavors, our drinks are crafted to brighten your day! Visit us and discover your new favorite tea or introduce you to your new favorite Pokémon!!
    </p>
  </section>

  <section>
    <h2>Our Best Sellers</h2>
    <div class="best-sellers">
      <?= view('components/card', [
        'imgSrc' => 'https://assets.epicurious.com/photos/629f98926e3960ec24778116/1:1/w_2560%2Cc_limit/BubbleTea_RECIPE_052522_34811.jpg',
        'title' => 'Classic Pearl Milk Tea',
        'desc' => 'Rich black tea, creamy milk, and chewy pearls.'
      ]) ?>

      <?= view('components/card', [
        'imgSrc' => 'https://www.inkatrinaskitchen.com/wp-content/uploads/2020/05/Strawberry-Bubble-Tea-24-wm-600-500x500.jpg',
        'title' => 'Strawberry Milk Tea',
        'desc' => 'Refreshing pink tea with real strawberry flavor.'
      ]) ?>

      <?= view('components/card', [
        'imgSrc' => 'https://feelgoodfoodie.net/wp-content/uploads/2023/08/Matcha-Latte-TIMG.jpg',
        'title' => 'Matcha Latte',
        'desc' => 'Earthy matcha balanced with creamy sweetness.'
      ]) ?>
    </div>
  </section>

  <div style="text-align:center; margin-top:1.5rem;">
    <?= view('components/button', [
      'btnText' => 'See Full Menu',
      'btnType' => 'primary',
      'btnLink' => '/menu'
    ]) ?>
  </div>

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
        <img src="/1758800584.685317-nobg.png" alt="Miltank Pokémon mascot">
      </div>
    </div>
  </section>
  <?= view('components/cta'); ?>
  <section class="testimonials-section">
    <h2>What Our Fans Say</h2>
    <div class="testimonials-grid">
      <?= view('components/cardtestimonial', ['testimonial' => 'Miltank Milk Tea is my favorite! So creamy and delicious!', 'author' => 'Ash K.']) ?>
      <?= view('components/cardtestimonial', ['testimonial' => 'The Berry teas are refreshing and fun, just like Pokémon!', 'author' => 'Misty W.']) ?>
      <?= view('components/cardtestimonial', ['testimonial' => 'Legendary Specials are legendary! Truly magical flavors.', 'author' => 'Brock P.']) ?>
    </div>
  </section>
  <section>
    <h2>Contact Us</h2>
    <p style="text-align:center;">📍 123 Milk Street, Pokétown</p>
    <p style="text-align:center;">📞 (123) 456-7890</p>
    <p style="text-align:center;">✉️ contact@miltankteashop.com</p>
  </section>

  <?= view('components/footer'); ?>
</body>

</html>