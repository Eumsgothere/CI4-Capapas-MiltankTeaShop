<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Miltank — Road Map</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Lilita+One&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0
    }

    body {
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, Arial;
      background: #fcebb7;
      color: #2f2f2f
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

    .logo {
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

    main {
      max-width: 1000px;
      margin: 28px auto;
      padding: 0 16px
    }

    .timeline {
      position: relative;
      padding: 8px 0 48px
    }

    .timeline::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 0;
      bottom: 0;
      width: 4px;
      background: #e6e2e2;
      transform: translateX(-50%);
      border-radius: 2px
    }

    .item {
      position: relative;
      margin: 28px 0
    }

    .dot {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      top: 10px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: #f6b6c4;
      border: 4px solid #fcebb7;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      color: #2f2f2f;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.06);
      z-index: 2
    }

    .card {
      width: 45%;
      background: #fff;
      padding: 16px;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06)
    }

    .left .card {
      margin-right: auto
    }

    .right .card {
      margin-left: auto
    }

    .title {
      font-weight: 700;
      color: #2f2f2f;
      margin-bottom: 6px
    }

    .desc {
      color: #444;
      font-size: 14px
    }

    .status {
      display: inline-block;
      margin-top: 10px;
      padding: 6px 10px;
      border-radius: 12px;
      color: #fff;
      font-weight: 700;
      font-size: 13px
    }

    .done {
      background: #673ab7
    }

    .backlog {
      background: #9e9e9e
    }

    footer {
      background: #2f2f2f;
      color: #fff;
      padding: 16px;
      text-align: center;
      margin-top: 32px
    }

    footer a {
      color: #f6b6c4;
      text-decoration: none;
      margin: 0 8px;
      font-weight: 600
    }

    @media (max-width:760px) {
      .timeline::before {
        left: 28px;
        transform: none
      }

      .dot {
        left: 28px;
        transform: none;
        top: 0
      }

      .card {
        width: 100%;
        margin-left: 44px;
        margin-right: 16px
      }

      .left .card,
      .right .card {
        margin: 0 0 0 44px
      }
    }
  </style>
</head>

<body>

  <header>
    <h1>
      <img src="/1758800584.685317-nobg.png" alt="logo" class="logo">
      Miltank Tea Shop
    </h1>
    <nav>
      <a href="/">Home</a>
      <a href="/moodboard">Mood Board</a>
      <a href="/login">Log in</a>
    </nav>
  </header>

  <div class="page-title">
    <h2>Road Map</h2>
  </div>

  <main>
    <div class="timeline" role="list">

      <div class="left item" role="listitem">
        <div class="dot">2025</div>
        <div class="card">
          <div class="title">Setup Environment</div>
          <div class="desc">Prepare project files, configure the environment, and initialize version control.</div>
          <div class="status done">Done</div>
        </div>
      </div>

      <div class="right item" role="listitem">
        <div class="dot">2025</div>
        <div class="card">
          <div class="title">Landing Page</div>
          <div class="desc">Design and build the main landing page for the project.</div>
          <div class="status done">Done</div>
        </div>
      </div>

      <div class="left item" role="listitem">
        <div class="dot">2025</div>
        <div class="card">
          <div class="title">Login &amp; Sign Up</div>
          <div class="desc">Create authentication pages for users (login and signup).</div>
          <div class="status done">Done</div>
        </div>
      </div>

      <div class="right item" role="listitem">
        <div class="dot">2025</div>
        <div class="card">
          <div class="title">Mood Board</div>
          <div class="desc">Showcase project colors, typography, buttons, cards, and logos.</div>
          <div class="status done">Done</div>
        </div>
      </div>

      <div class="left item" role="listitem">
        <div class="dot">2025</div>
        <div class="card">
          <div class="title">Roadmap Page</div>
          <div class="desc">Outline the development flow with milestones and timeline.</div>
          <div class="status done">Done</div>
        </div>
      </div>

      <div class="right item" role="listitem">
        <div class="dot">Future</div>
        <div class="card">
          <div class="title">Componentization</div>
          <div class="desc">Break the project into reusable header, footer, buttons, and cards.</div>
          <div class="status backlog">Backlog</div>
        </div>
      </div>

      <div class="left item" role="listitem">
        <div class="dot">Future</div>
        <div class="card">
          <div class="title">CRUD Functionalities</div>
          <div class="desc">Implement create, read, update, and delete features for core resources.</div>
          <div class="status backlog">Backlog</div>
        </div>
      </div>

      <div class="right item" role="listitem">
        <div class="dot">Future</div>
        <div class="card">
          <div class="title">Finalize &amp; Merge</div>
          <div class="desc">Test thoroughly, finalize development, and merge into the main branch.</div>
          <div class="status backlog">Backlog</div>
        </div>
      </div>

    </div>
  </main>

  <footer>
    <p>© <?php echo date("Y"); ?> Miltank Tea Shop. All rights reserved.</p>
    <p>
      <a href="https://fb.com/EumieDraws" target="_blank" rel="noopener noreferrer">Facebook</a> |
      <a href="https://instagram.com/Eumie_Draws" target="_blank" rel="noopener noreferrer">Instagram</a> |
      <a href="https://twitter.com/Eumie_Draws" target="_blank" rel="noopener noreferrer">Twitter</a>
    </p>
  </footer>

</body>

</html>