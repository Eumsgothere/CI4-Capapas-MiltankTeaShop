<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Miltank Tea Shop</title>
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
      color: #ffffff;
      text-align: center;
      padding: 1rem;
    }

    nav {
      margin-top: 0.5rem;
    }

    nav a {
      margin: 0 0.5rem;
      padding: 0.4rem 1rem;
      background: #4a90e2;
      color: #ffffff;
      text-decoration: none;
      font-weight: bold;
      border-radius: 4px;
      transition: 0.2s;
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
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
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
  </style>
</head>
<body>

  <header>
    <h1>🐄 Miltank Tea Shop</h1>
    <nav>
    <a href="/">Home</a>
    <a href="/moodboard">Mood Board</a>
    <a href="/roadmap">Road Map</a>

    </nav>
  </header>

  <div class="container">
    <div class="card">
      <h2>Login</h2>
      <form action="login_process.php" method="post">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
      </form>
      <div class="extra">
        <p>Don’t have an account? <a href="/signup">Sign Up</a></p>
      </div>
    </div>
  </div>

  <footer>
    <p>© 2025 Miltank Tea Shop</p>
  </footer>

</body>
</html>