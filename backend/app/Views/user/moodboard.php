<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miltank Tea Shop - Mood Board</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lilita+One&display=swap" rel="stylesheet">
  <style>
    /* Reset + Base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: #fcebb7;
      color: #2f2f2f;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

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
      width: 120px;
      height: 120px;
      border-radius: 12px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-size: 0.8rem;
      font-weight: 600;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      border: 3px solid #ddd;
    }

    .pink {
      background: #f6b6c4;
    }

    .cream {
      background: #fcebb7;
    }

    .blue {
      background: #4a90e2;
      color: #fff;
    }

    .dark {
      background: #2f2f2f;
      color: #fff;
    }

    .white {
      background: #fff;
    }

    /* Typography */
    .typography {
      display: flex;
      justify-content: center;
      gap: 3rem;
      flex-wrap: wrap;
      text-align: center;
    }

    .heading-font {
      font-family: 'Lilita One', cursive;
      font-size: 2rem;
      color: #4a90e2;
    }

    .body-font {
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
      color: #555;
    }

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

    .btn-primary {
      background: #f6b6c4;
      color: #2f2f2f;
    }

    .btn-primary:hover {
      background: #4a90e2;
      color: #fff;
    }

    .btn-secondary {
      background: #4a90e2;
      color: #fff;
    }

    .btn-secondary:hover {
      background: #2f2f2f;
    }

    .btn-bordered {
      background: transparent;
      border: 2px solid #f6b6c4;
      color: #2f2f2f;
    }

    .btn-bordered:hover {
      background: #f6b6c4;
    }

    .btn-disabled {
      background: #ddd;
      color: #999;
      cursor: not-allowed;
    }

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
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 18px rgba(0, 0, 0, 0.15);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 1rem;
      text-align: center;
    }

    .card-content h3 {
      margin-bottom: 0.5rem;
      font-family: 'Lilita One', cursive;
    }

    /* Logos */
    .logos {
      display: flex;
      justify-content: center;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .logo {
      width: 120px;
      height: 120px;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #f6b6c4;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      overflow: hidden;
    }

    .circle {
      border-radius: 50%;
    }

    .logo img {
      width: 80%;
      height: auto;
    }

    .page-title {
      text-align: center;
      padding: 1rem 0;
    }

    .page-title h2 {
      font-family: 'Lilita One', cursive;
      font-size: 3.5rem;
      color: #2f2f2f;
      margin: 0;
    }
  </style>
</head>

<body>
  <?= view('components/header'); ?>

  <div class="page-title">
    <h2>Mood Board</h2>
  </div>

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
    <div class="buttons" style="display:flex; justify-content:center; gap:1rem; flex-wrap:wrap;">
      <?= view('components/buttons', [
        'btnText' => 'Primary Button',
        'btnLink' => '#',
        'btnType' => 'primary'
      ]) ?>
      <?= view('components/buttons', [
        'btnText' => 'Secondary Button',
        'btnLink' => '#',
        'btnType' => 'secondary'
      ]) ?>
      <?= view('components/buttons', [
        'btnText' => 'Bordered Button',
        'btnLink' => '#',
        'btnType' => 'bordered'
      ]) ?>
      <?= view('components/buttons', [
        'btnText' => 'Disabled Button',
        'btnLink' => '#',
        'btnType' => 'primary',
        'btnDisabled' => true
      ]) ?>
    </div>
  </section>


  <section>
    <h2>Card Sample</h2>
    <div class="card-grid">
      <?= view('components/card', [
        'imgSrc' => 'https://assets.epicurious.com/photos/629f98926e3960ec24778116/1:1/w_2560%2Cc_limit/BubbleTea_RECIPE_052522_34811.jpg',
        'title' => 'Classic Pearl Milk Tea',
        'desc' => 'Rich black tea, creamy milk, and chewy pearls.'
      ]) ?>
    </div>

  </section>

  <section>
    <h2>Logos</h2>
    <div class="logos">
      <div class="logo circle">
        <img src="/1758800584.685317-nobg.png" alt="Miltank Logo">
      </div>
      <div class="logo square">
        <img src="/1758800584.685317-2.jpg" alt="Miltank Logo">
      </div>
    </div>
  </section>

  <?= view('components/footer'); ?>

</body>

</html>