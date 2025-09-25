<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miltank Roadmap</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lilita+One&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #fcebb7;
      color: #2f2f2f;
      margin: 0;
      padding: 0;
    }

    header {
      background: #f6b6c4;
      color: ;
      padding: 1rem;
      text-align: center;
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

    nav a {
      display: inline-block;
      margin: 0.2rem;
      padding: 0.5rem 1rem;
      background: #4a90e2;
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      border-radius: 6px;
      transition: 0.2s;
    }

    nav a:hover { background: #2f2f2f; }

    .container {
      max-width: 900px;
      margin: 2rem auto;
      padding: 0 1rem;
    }

    h2 {
      margin: 2rem 0 1rem;
      font-size: 1.4rem;
      font-weight: 600;
      border-bottom: 2px solid #ddd;
      padding-bottom: 0.3rem;
    }

    .card {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      padding: 1rem 1.5rem;
      margin-bottom: 1rem;
      position: relative;
    }

    .card h3 {
      margin: 0 0 0.3rem;
      font-weight: 600;
    }

    .card p {
      margin: 0.3rem 0;
      font-size: 0.95rem;
      color: #555;
    }

    .status {
      position: absolute;
      top: 1rem;
      right: 1rem;
      padding: 0.3rem 0.7rem;
      border-radius: 12px;
      font-size: 0.8rem;
      font-weight: bold;
      color: #fff;
    }

    .inprogress { background: #4caf50; }
    .planned { background: #2196f3; }
    .backlog { background: #9e9e9e; }
    .done { background: #673ab7; }

    .date {
      display: inline-block;
      margin-top: 0.5rem;
      padding: 0.3rem 0.7rem;
      font-size: 0.8rem;
      font-weight: 600;
      background: #f6b6c4;
      color: #2f2f2f;
      border-radius: 20px;
    }

    footer {
      background: #2f2f2f;
      color: #fff;
      text-align: center;
      padding: 1rem;
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
 <h1>
    <img src="https://media.discordapp.net/attachments/810746996457603123/1420623080392364082/MILTANKTEAcir.png?ex=68d611d8&is=68d4c058&hm=c74f56984c57a47a6216299ff4b2b21957292755bbff10ad81858db761efa98f&=&format=webp&quality=lossless" 
         alt="Miltank Logo" class="logo-inline">
    Miltank Tea Shop
  </h1>
  <nav>
    <a href="/">Home</a>
    <a href="/login">Login</a>
    <a href="/moodboard">Mood Board</a>
  </nav>
</header>

<div class="container">
  <h2>Completed</h2>
  <div class="card">
    <h3>Setup Environment</h3>
    <p>Prepare project files, configure environment, and initialize version control.</p>
    <span class="date">Sept 15, 2025</span>
    <span class="status done">Done</span>
  </div>

  <div class="card">
    <h3>Landing Page</h3>
    <p>Design and build the main landing page for the project.</p>
    <span class="date">Sept 15, 2025</span>
    <span class="status done">Done</span>
  </div>

  <div class="card">
    <h3>Login & Sign Up</h3>
    <p>Create authentication pages for users.</p>
    <span class="date">Sept 24, 2025</span>
    <span class="status done">Done</span>
  </div>

  <div class="card">
    <h3>Mood Board</h3>
    <p>Showcase project colors, typography, buttons, cards, and logos.</p>
    <span class="date">Sept 24, 2025</span>
    <span class="status done">Done</span>
  </div>

  <div class="card">
    <h3>Roadmap Page</h3>
    <p>Outline the development flow with milestones.</p>
    <span class="date">Sept 24, 2025</span>
    <span class="status done">Done</span>
  </div>

  <h2>Backlog</h2>
  <div class="card">
    <h3>Componentization</h3>
    <p>Break the project into reusable header, footer, buttons, and cards.</p>
    <span class="date">Not Done</span>
    <span class="status backlog">Backlog</span>
  </div>

  <div class="card">
    <h3>CRUD Functionalities</h3>
    <p>Implement at least 3 features with create, read, update, delete.</p>
    <span class="date">Not Done</span>
    <span class="status backlog">Backlog</span>
  </div>

  <div class="card">
    <h3>Finalize & Merge</h3>
    <p>Test thoroughly, finalize development, and merge into main branch.</p>
    <span class="date">Not Done</span>
    <span class="status backlog">Backlog</span>
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
