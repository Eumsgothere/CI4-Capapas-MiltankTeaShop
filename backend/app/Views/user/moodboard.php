<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miltank Tea Shop - Mood Board</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lilita+One&display=swap" rel="stylesheet">
  <style>
    /* Reset + Base */
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Poppins', sans-serif;
      background: #fcebb7;
      color: #2f2f2f;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header, footer {
     background: #f6b6c4;
      color: #2f2f2f;
      text-align: center;
      padding: 1rem;
    }

    header {
      background: #f6b6c4;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    header h1 {
           display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.6rem;
  font-size: 2rem;
  color: #2f2f2f;
    font-family: 'Lilita One', cursive;
}

.logo-inline {
  height: 50px;
  width: 50px;
  border-radius: 50%;
  object-fit: cover;
}
    nav { margin-top: 0.5rem; }
    nav a {
      margin: 0 0.5rem;
      padding: 0.4rem 1rem;
      background: #4a90e2;
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      border-radius: 4px;
      transition: 0.2s;
    }
    nav a:hover { background: #2f2f2f; }

    section {
      max-width: 1100px;
      margin: 2rem auto;
      padding: 0 2rem;
    }
    section h2 {
      text-align: center;
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      color: #4a90e2;
      font-family: 'Lilita One', cursive;
    }

    /* Color Palette */
    .palette {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }
    .swatch {
      width: 120px; height: 120px;
      border-radius: 12px;
      display: flex; flex-direction: column; justify-content: center; align-items: center;
      font-size: 0.8rem; font-weight: 600;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      border: 3px solid #ddd;
    }
    .pink { background: #f6b6c4; }
    .cream { background: #fcebb7; }
    .blue { background: #4a90e2; color: #fff; }
    .dark { background: #2f2f2f; color: #fff; }
    .white { background: #fff; }

    /* Typography */
    .typography {
      display: flex;
      justify-content: center;
      gap: 3rem;
      flex-wrap: wrap;
      text-align: center;
    }
    .heading-font { font-family: 'Lilita One', cursive; font-size: 2rem; color: #4a90e2; }
    .body-font { font-family: 'Poppins', sans-serif; font-size: 1rem; color: #555; }

    /* Buttons */
    .buttons {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }
    .btn {
      padding: 0.7rem 1.5rem;
      border-radius: 8px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.3s;
      border: none;
    }
    .btn-primary { background: #f6b6c4; color: #2f2f2f; }
    .btn-primary:hover { background: #4a90e2; color: #fff; }
    .btn-secondary { background: #4a90e2; color: #fff; }
    .btn-secondary:hover { background: #2f2f2f; }
    .btn-bordered { background: transparent; border: 2px solid #f6b6c4; color: #2f2f2f; }
    .btn-bordered:hover { background: #f6b6c4; }
    .btn-disabled { background: #ddd; color: #999; cursor: not-allowed; }

    /* Cards */
    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }
    .card {
      background: #fff;
      border-radius: 14px;
      border: 2px solid #f6b6c4;
      overflow: hidden;
      box-shadow: 0 6px 12px rgba(0,0,0,0.08);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .card:hover { transform: translateY(-8px); box-shadow: 0 10px 18px rgba(0,0,0,0.15); }
    .card img { width: 100%; height: 200px; object-fit: cover; }
    .card-content { padding: 1rem; text-align: center; }
    .card-content h3 { margin-bottom: 0.5rem; font-family: 'Lilita One', cursive; }

    /* Logos */
    .logos {
      display: flex;
      justify-content: center;
      gap: 2rem;
      flex-wrap: wrap;
    }
    .logo {
      width: 120px; height: 120px;
      display: flex; justify-content: center; align-items: center;
      background: #f6b6c4;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      border-radius: 12px;
      overflow: hidden;
    }
    .circle { border-radius: 50%; }
    .logo img { width: 80%; height: auto; }

    footer {
      background: #2f2f2f;
      color: #fff;
      margin-top: auto;
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
    <h1>
    <img src="https://media.discordapp.net/attachments/810746996457603123/1420623080392364082/MILTANKTEAcir.png?ex=68d611d8&is=68d4c058&hm=c74f56984c57a47a6216299ff4b2b21957292755bbff10ad81858db761efa98f&=&format=webp&quality=lossless" 
         alt="Miltank Logo" class="logo-inline">
    Miltank Tea Shop
  </h1>
    <nav>
      <a href="/">Home</a>
      <a href="/moodboard">Mood Board</a>
      <a href="/roadmap">Road Map</a>
    </nav>
  </header>

  <section>
    <h2>Color Palette</h2>
    <div class="palette">
      <div class="swatch pink">#f6b6c4<br>Pink</div>
      <div class="swatch cream">#fcebb7<br>Cream</div>
      <div class="swatch blue">#4a90e2<br>Blue</div>
      <div class="swatch dark">#2f2f2f<br>Dark</div>
      <div class="swatch white">#ffffff<br>White</div>
    </div>
  </section>

  <section>
    <h2>Typography</h2>
    <div class="typography">
      <div>
        <h3>Heading Font</h3>
        <p class="heading-font">Aa Bb Cc - Lilita One</p>
      </div>
      <div>
        <h3>Body Font</h3>
        <p class="body-font">Aa Bb Cc - Poppins</p>
      </div>
    </div>
  </section>

  <section>
    <h2>Buttons</h2>
    <div class="buttons">
      <button class="btn btn-primary">Primary</button>
      <button class="btn btn-secondary">Secondary</button>
      <button class="btn btn-bordered">Bordered</button>
      <button class="btn btn-disabled">Disabled</button>
    </div>
  </section>

  <section>
    <h2>Card Sample</h2>
    <div class="card-grid">
      <div class="card">
        <img src="https://assets.epicurious.com/photos/629f98926e3960ec24778116/1:1/w_2560%2Cc_limit/BubbleTea_RECIPE_052522_34811.jpg" alt="Classic Pearl Milk Tea">
        <div class="card-content">
          <h3>Classic Pearl Milk Tea</h3>
          <p>Rich black tea, creamy milk, and chewy pearls.</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <h2>Logos</h2>
    <div class="logos">
      <div class="logo circle">
        <img src="https://media.discordapp.net/attachments/810746996457603123/1420623080392364082/MILTANKTEAcir.png?ex=68d611d8&is=68d4c058&hm=c74f56984c57a47a6216299ff4b2b21957292755bbff10ad81858db761efa98f&=&format=webp&quality=lossless" alt="Miltank Logo">
      </div>
      <div class="logo square">
        <img src="https://media.discordapp.net/attachments/810746996457603123/1420619634645667901/MILTANKTEA.png?ex=68d60ea2&is=68d4bd22&hm=e1857f50c7c021d67585a0b135e952a4c7314016058bdacda478ecf16209446e&=&format=webp&quality=lossless" alt="Miltank Logo">
      </div>
    </div>
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
