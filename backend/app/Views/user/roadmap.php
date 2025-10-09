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

  <?= view('components/header'); ?>
  <?= view('components/status-button'); ?>

  <div class="page-title">
    <h2>Road Map</h2>
  </div>

  <main>
    <div class="timeline" role="list">

      <div class="left item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('done', 'Done');
        echo view('components/card', [
          'title' => 'Setup Environment',
          'desc' => 'Prepare project files, configure the environment, and initialize version control.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="right item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('done', 'Done');
        echo view('components/card', [
          'title' => 'Landing Page',
          'desc' => 'Design and build the main landing page for the project.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="left item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('done', 'Done');
        echo view('components/card', [
          'title' => 'Login & Sign Up',
          'desc' => 'Create authentication pages for users (login and signup).',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="right item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('done', 'Done');
        echo view('components/card', [
          'title' => 'Mood Board',
          'desc' => 'Showcase project colors, typography, buttons, cards, and logos.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="left item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('done', 'Done');
        echo view('components/card', [
          'title' => 'Roadmap Page',
          'desc' => 'Outline the development flow with milestones and timeline.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="right item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('inprogress', 'In Progress');
        echo view('components/card', [
          'title' => 'Componentization',
          'desc' => 'Break the project into reusable header, footer, buttons, and cards.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="left item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('inprogress', 'In Progress');
        echo view('components/card', [
          'title' => 'Menu Page',
          'desc' => 'Add a Menu page displaying trading card products with descriptions, images, and pricing.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="right item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('inprogress', 'In Progress');
        echo view('components/card', [
          'title' => 'Order Page',
          'desc' => 'Create an Order page where users can view their cart, checkout, and track order status.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="left item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('backlog', 'Backlog');
        echo view('components/card', [
          'title' => 'User CRUD (Sign Up / Sign In / Profile)',
          'desc' => 'Create, read, update, and delete user accounts with authentication and profile management.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="right item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('backlog', 'Backlog');
        echo view('components/card', [
          'title' => 'Product CRUD (Milk Tea Menu)',
          'desc' => 'Enable admins to add, edit, and remove milk tea flavors, toppings, and prices from the menu.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="left item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('backlog', 'Backlog');
        echo view('components/card', [
          'title' => 'Order CRUD (Customer Orders)',
          'desc' => 'Allow customers to place orders and view status while admins manage updates and fulfillment.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>

      <div class="right item" role="listitem">
        <div class="dot">2025</div>
        <?php
        $statusButton = renderStatusButton('backlog', 'Backlog');
        echo view('components/card', [
          'title' => 'Finalize & Merge',
          'desc' => 'Test thoroughly, finalize development, and merge into the main branch.',
          'statusButton' => $statusButton
        ]);
        ?>
      </div>


    </div>
  </main>



  <?= view('components/footer'); ?>

</body>

</html>