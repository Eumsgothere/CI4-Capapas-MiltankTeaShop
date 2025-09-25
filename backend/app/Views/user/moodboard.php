<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miltank Moodboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #eeeeee;
      color: #2f2f2f;
      margin: 0;
      padding: 0;
    }

    h2 {
      font-family: 'Roboto', sans-serif;
      text-align: center;
      margin-bottom: 1rem;
      color: #2f2f2f;
    }

    header {
      background: #f6b6c4;
      color: #ffffff;
      padding: 1rem;
      text-align: center;
    }

    header h1 { margin: 0.5rem 0; font-size: 2rem; }
    header p { margin: 0.5rem 0 1rem; }

    nav a {
      display: inline-block;
      margin: 0.3rem;
      padding: 0.5rem 1rem;
      background: #4a90e2;
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      border-radius: 6px;
      transition: 0.2s;
    }

    nav a:hover { background: #2f2f2f; }

    .section {
      max-width: 900px;
      margin: 2rem auto;
      padding: 1rem;
    }

    /* Color Palette */
    .palette {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 1rem;
      margin-top: 1rem;
    }

    .color-box {
      padding: 2rem;
      border-radius: 8px;
      text-align: center;
      font-weight: bold;
      border: 1px solid #ccc;
    }

    .pink { background: #f6b6c4; color: #2f2f2f; }
    .cream { background: #fcebb7; color: #2f2f2f; }
    .dark { background: #2f2f2f; color: #fff; }
    .blue { background: #4a90e2; color: #fff; }
    .white { background: #fff; color: #2f2f2f; }

    /* Typography */
    .typography {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-top: 2rem;
      text-align: center;
    }

    .font-sample {
      padding: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    /* Buttons */
    .buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
      margin-top: 2rem;
    }

    .btn {
      padding: 0.7rem 1.4rem;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      border: none;
      transition: 0.2s;
    }

    .btn-primary { background: #f6b6c4; color: #fff; }
    .btn-secondary { background: transparent; color: #4a90e2; border: 2px solid #4a90e2; }
    .btn-disabled { background: #ccc; color: #666; cursor: not-allowed; }

    .btn:hover:not(.btn-disabled) { opacity: 0.85; }

    /* Cards */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1rem;
      margin-top: 2rem;
    }

    .card {
      padding: 1rem;
      border-radius: 10px;
      text-align: center;
      transition: transform 0.2s;
    }

    .card-primary { background: #f6b6c4; color: #2f2f2f; }
    .card-secondary { background: #4a90e2; color: #fff; }
    .card-neutral { background: #fff; color: #2f2f2f; border: 1px solid #ddd; }

    .card:hover { transform: translateY(-5px); }

    /* Logos */
    .logos {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-top: 2rem;
    }

    .logo-circle, .logo-square {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 80px;
      height: 80px;
      font-size: 2rem;
      color: #fff;
      background: #4a90e2;
    }

    .logo-circle { border-radius: 50%; }
    .logo-square { border-radius: 12px; }

    footer {
      background: #2f2f2f;
      color: #fff;
      text-align: center;
      padding: 1rem;
      margin-top: 3rem;
    }
  </style>
</head>
<body>

  <header>
    <h1>🐄 Miltank Moodboard</h1>
    <p>Official Brand Guide for Colors, Buttons, Typography & UI Elements</p>
    <nav>
         <a href="/">Home</a>
         <a href="/login">Log in</a>
         <a href="/roadmap">Road Map</a>
    </nav>
  </header>

  <div class="section">
    <h2>🎨 Color Palette</h2>
    <div class="palette">
      <div class="color-box pink">Pink<br>#f6b6c4</div>
      <div class="color-box cream">Cream<br>#fcebb7</div>
      <div class="color-box dark">Dark<br>#2f2f2f</div>
      <div class="color-box blue">Blue<br>#4a90e2</div>
      <div class="color-box white">White<br>#ffffff</div>
    </div>
  </div>

<div class="section">
  <h2>📦 Card Samples</h2>
  <div class="cards">
    <div class="card card-primary">
      <h3>Card Title</h3>
      <p>Sample text inside a colorful primary card.</p>
    </div>
    <div class="card card-secondary">
      <h3>Highlight Card</h3>
      <p>Secondary card with deeper shadow and bold background.</p>
    </div>
    <div class="card card-neutral">
      <h3>Minimal Card</h3>
      <p>Neutral card with white background and subtle border.</p>
    </div>
  </div>
</div>
  <div class="section">
    <h2>🔤 Typography</h2>
    <div class="typography">
      <div class="font-sample" style="font-family:'Poppins', sans-serif;">Poppins Sample Text: The quick brown fox jumps over the lazy dog.</div>
      <div class="font-sample" style="font-family:'Roboto', sans-serif;">Roboto Sample Text: The quick brown fox jumps over the lazy dog.</div>
    </div>
  </div>

  <div class="section">
    <h2>🔘 Buttons</h2>
    <div class="buttons">
      <button class="btn btn-primary">Primary</button>
      <button class="btn btn-secondary">Secondary</button>
      <button class="btn btn-disabled" disabled>Disabled</button>
    </div>
  </div>



  <div class="section">
    <h2>🔲 Logos</h2>
    <div class="logos">
      <div class="logo-circle">🐄</div>
      <div class="logo-square">🐄</div>
    </div>
  </div>

  <footer>
    <p>© 2025 Miltank Tea Shop — Moodboard</p>
  </footer>

</body>
</html>
