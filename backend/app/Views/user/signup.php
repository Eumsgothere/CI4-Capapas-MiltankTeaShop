<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up - Miltank Tea Shop</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lilita+One&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #fcebb7;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background: #f6b6c4;
      color: #2f2f2f;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      font-size: 1.6rem;
      font-family: 'Lilita One', cursive;
      margin: 0;
    }

    .logo-inline {
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
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


    .container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .card {
      background: #ffffff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    h1 {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.6rem;
      font-family: 'Lilita One', cursive;
      font-size: 2rem;
      color: #2f2f2f;
      font-family: 'Lilita One', cursive;
    }


    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #2f2f2f;
    }

    label {
      display: block;
      margin: 0.5rem 0 0.2rem;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 0.7rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 1rem;
    }

    button {
      width: 100%;
      padding: 0.8rem;
      background: #f6b6c4;
      color: #ffffff;
      border: none;
      border-radius: 6px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: 0.2s;
    }

    button:hover {
      background: #2f2f2f;
    }

    .extra {
      text-align: center;
      margin-top: 1rem;
    }

    .extra a {
      color: #4a90e2;
      text-decoration: none;
      font-weight: bold;
    }

    footer {
      background: #2f2f2f;
      color: #ffffff;
      text-align: center;
      padding: 1rem;
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
      <img src="/1758800584.685317-nobg.png"
        alt="Miltank Logo" class="logo-inline">
      Miltank Tea Shop
    </h1>
    <nav>
      <a href="/">Home</a>
      <a href="/moodboard">Mood Board</a>
      <a href="/roadmap">Road Map</a>
      <a href="/login">Login</a>

    </nav>
  </header>

  <div class="container">
    <div class="card">
      <h2>Sign Up</h2>
      <form action="/" method="post">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm">Confirm Password</label>
        <input type="password" id="confirm" name="confirm" required>

        <button type="submit">Sign Up</button>
      </form>
      <div class="extra">
        <p>Already have an account? <a href="/login">Login</a></p>
      </div>
    </div>
  </div>

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